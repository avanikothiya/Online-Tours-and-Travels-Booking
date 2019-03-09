<?php
 session_start();
  include ('model.php');
  $obj=new model;
    
    //------------------------------------------------REGISTRATION CONTROL------------------------------------------------
  	
	 if(isset($_POST['register']))
  {

	  $Cust_name=$_POST['Cust_name'];
	  $Email_id=$_POST['Email_id'];
	  $Cust_address=$_POST['Cust_address'];
	  $Contact_no=$_POST['Contact_no'];
	  $Organization_name=$_POST['Organization_name'];
	  $Gender=$_POST['Gender'];
	  $Date_of_birth=$_POST['Date_of_birth'];
	  $Password=$_POST['Password'];
	  $data=array('Cust_name'=>$Cust_name,
	  			  'Email_id'=>$Email_id,
				  'Cust_address'=>$Cust_address,
				  'Contact_no'=>$Contact_no,
				  'Organization_name'=>$Organization_name,
				  'Gender'=>$Gender,
				  'Date_of_birth'=>$Date_of_birth,
				  'Password'=>$Password,);
				 //print_r($data);exit;
	  $obj->ins_data($con,'customer',$data);
	  header("location:login.php");
  }
	
	  //------------------------------------------------LOGIN CONTROL------------------------------------------------
	  
	  
	if(isset($_POST['login']))
	{
		$Email_id=$_POST['Email_id'];
		$Password=$_POST['Password'];
		$where=array('Email_id'=>$Email_id,'Password'=>$Password);
		//print_r($where);exit;
		$u=$obj->select_where($con,'customer',$where);
		$fet=$u->num_rows;
		if($fet==1)
		{
			
			$r=$u->fetch_object();
			$Email_id=$r->Email_id;
			$name=$r->Cust_name;
			$Cust_id=$r->Cust_id;
			$_SESSION['Email_id']=$Email_id;
			 $_SESSION['name']=$name;
			$_SESSION['Cust_id']=$Cust_id;
			header('location:home.php');				
		}
		else
		{
		
			header('location:login.php');
		}
	}
	
	
	
	 //------------------------------------------------PACKAGE LIST CONTROL------------------------------------------------
	 
	 
 	$package_master=$obj->join_two($con,'package_tour','package_master','package_tour.Tour_id=package_master.Tour_id');

  

     //------------------------------------------------PACKAGE DETAIL CONTROL------------------------------------------------
   
    
	if(isset($_GET['Package_id']))
	{
	   $v=$_GET['Package_id'];
	   $se=$obj->select_where_join_detail($con,'package_detail','package_master','package_detail.Package_id=package_master.Package_id','seat_type','package_detail.Seat_type_id=seat_type.Seat_type_id','vehicle_type','package_detail.Vehicle_type_id=vehicle_type.Vehicle_type_id','facility_type','package_detail.Facility_type_id=facility_type.Facility_type_id',"package_master.Package_id='$v'");
		while($fet=$se->fetch_object())
		{
		$data_package[]=$fet;	
		}
	}
	
	
	
	if(isset($_GET['Package_id']))
  {
	   $Package_id=$_GET['Package_id'];
	   $where=array('Package_id'=>$Package_id);
	   $pg_ob=$obj->select_where_join($con,'package_detail','vehicle_type','package_detail.vehicle_type_id=vehicle_type.vehicle_type_id',$where);
	    $pg_fet=$pg_ob->fetch_object();
		//echo "<pre>";
		//$vt_fet->Vehicle_type_id;exit;
		//print_r($pg_fet);exit;
  
   
   if(isset($_POST['book_package']))
   {
	   
	   $Package_id=$pg_fet->Package_id;
	   $Price=$pg_fet->Price;
	   $Cust_id=$_SESSION['Cust_id'];
	   $No_of_seat=$_POST['No_of_seat'];
	   $Total_amount=$Price*$No_of_seat;
	   $Date=date('Y-m-d');
	    $data=array('Package_id'=>$Package_id,
	  			  'Cust_id'=>$Cust_id,
				  'No_of_seat'=>$No_of_seat,
				  'Date'=>$Date,
				  'Total_amount'=>$Total_amount);
				 //print_r($data);exit;
	  $obj->ins_data($con,'package_booking',$data);
	  header('location:my_booking.php');
   }
  }
	
	
     //------------------------------------------------BUS ON RENT LIST CONTROL------------------------------------------------
  $vehicle=$obj->join_three($con,'vehicle_type','facility_type','vehicle_type.Facility_type_id=facility_type.Facility_type_id','seat_type','vehicle_type.Seat_type_id=seat_type.Seat_type_id');
       
	if(isset($_GET['Vehicle_type_id']))
	{
	   $vid=$_GET['Vehicle_type_id'];
  $vehicle=$obj->select_where_join_two($con,'vehicle_type','facility_type','vehicle_type.Facility_type_id=facility_type.Facility_type_id','seat_type','vehicle_type.Seat_type_id=seat_type.Seat_type_id',"vehicle_type.Vehicle_type_id='$vid'");
  		while($fet=$vehicle->fetch_object())
		{
		$data_rent[]=$fet;	
		}
	}
  
  
  if(isset($_GET['Vehicle_type_id']))
  {
	   $vtid=$_GET['Vehicle_type_id'];
	   $where=array('Vehicle_type_id'=>$vtid);
	   $vt_ob=$obj->select_where_join($con,'vehicle_type','facility_type','vehicle_type.Facility_type_id=facility_type.Facility_type_id',$where);
	    $vt_fet=$vt_ob->fetch_object();
		//echo "<pre>";
		//$vt_fet->Vehicle_type_id;exit;
		//print_r($vt_fet);exit;
  
   
   if(isset($_POST['book_bus']))
   {
	   
	   $Vehicle_type_id=$vt_fet->Vehicle_type_id;
	   $Cust_id=$_SESSION['Cust_id'];
	   $Start_date=$_POST['Start_date'];
	   $End_date=$_POST['End_date'];
	   $Booking_date=date('Y-m-d');
	   	$Status="Pending";
	    $data=array('Vehicle_type_id'=>$Vehicle_type_id,
	  			  'Cust_id'=>$Cust_id,
				  'Start_date'=>$Start_date,
				  'Booking_date'=>$Booking_date,
				  'End_date'=>$End_date,
				  'Status'=>$Status);
				 //print_r($data);exit;
	  $obj->ins_data($con,'vehicle_booking',$data);
	  header('location:my_booking.php');
   }
  }
    

	
	
	
	
	
	//------------------------------------------------ DAILY ROUTE SEARCH CONTROL------------------------------------------------
	 
	 //search
	 $a=$obj->sel_data($con,'daily_route_detail');
	
	//search detail
	 if(isset($_POST['search_travel']))
	 {
		  $From_place=$_POST['From_place'];
	      $To_place=$_POST['To_place'];
		  $Date=$_POST['Date'];
	      $where=array('From_place'=>$From_place,
	  			  'To_place'=>$To_place,
				  'Date'=>$Date); 
		$travel_detail=$obj->select_where_join_three($con,'daily_route_detail','facility_type','daily_route_detail.Facility_type_id=facility_type.Facility_type_id','seat_type','daily_route_detail.Seat_type_id=seat_type.Seat_type_id','vehicle_type','daily_route_detail.Vehicle_type_id=vehicle_type.Vehicle_type_id',$where);
		//echo $travel_detail;exit;
		
		while($fet_trvael=$travel_detail->fetch_object())
		{
		   $rt[]=$fet_trvael;
		}
		
		//header('location:daily travel detail.php');
	 }
	 
	
	
	
	if(isset($_GET['Daily_route_id']))
	{
	   $v=$_GET['Daily_route_id'];
	   $se=$obj->select_where_join_detail_three($con,'daily_route_detail','facility_type','daily_route_detail.Facility_type_id=facility_type.Facility_type_id','seat_type','daily_route_detail.Seat_type_id=seat_type.Seat_type_id','vehicle_type','daily_route_detail.Vehicle_type_id=vehicle_type.Vehicle_type_id',"daily_route_detail.Daily_route_id='$v'");
		while($fet=$se->fetch_object())
		{
		   $data_daily_travel[]=$fet;	
		}
	}
	
	
	
	if(isset($_GET['Daily_route_id']))
  {
	   $Daily_route_id=$_GET['Daily_route_id'];
	   $where=array('Daily_route_id'=>$Daily_route_id);
	   $dr_ob=$obj->select_where($con,'daily_route_detail',$where);
	    $dr_fet=$dr_ob->fetch_object();
		//echo "<pre>";
		//$vt_fet->Vehicle_type_id;exit;
		//print_r($pg_fet);exit;
  
   
   if(isset($_POST['book_travel']))
   {
	   
	   $Daily_route_id=$dr_fet->Daily_route_id;
	   $Price=$dr_fet->Price;
	   $Cust_id=$_SESSION['Cust_id'];
	   $No_of_seat=$_POST['No_of_seat'];
	   $Total_amount=$Price*$No_of_seat;
	   $Date=date('Y-m-d');
	    $data=array('Daily_route_id'=>$Daily_route_id,
	  			  'Cust_id'=>$Cust_id,
				  'No_of_seat'=>$No_of_seat,
				  'Date'=>$Date,
				  'Total_amount'=>$Total_amount);
				 //print_r($data);exit;
	  $obj->ins_data($con,'daily_booking',$data);
	  header('location:my_booking.php');
   }
  }
	

	 
	
	 
	 	//------------------------------------------------MY DAILY TRAVEL BOOKING CONTROL------------------------------------------------
	 
	
	  if(isset($_SESSION['Cust_id']))
	 {
		 $where=array('Cust_id'=>$_SESSION['Cust_id']);
		 $my_daily=$obj->select_where_join($con,'daily_booking','daily_route_detail','daily_booking.Daily_route_id=daily_route_detail.	Daily_route_id',$where);
		 while($fet_daily=$my_daily->fetch_object())
		 {
			 $data_daily[]=$fet_daily; 
		 }
	 }
	
	 
	 //delete 
  if(isset($_GET['Daily_booking_id']))
	{
		$Daily_booking_id=$_GET['Daily_booking_id'];
		$data=array('Daily_booking_id'=>$Daily_booking_id);
	 //print_r($data);exit;
	  $obj->ins_data($con,'cancelation_booking',$data);
		$where=array('Daily_booking_id'=>$Daily_booking_id);
		$obj->del_data($con,'daily_booking',$where);
	}
	
	
	 //------------------------------------------------ MY BUS ON RENT BOOKING CONTROL------------------------------------------------
	 

	 if(isset($_SESSION['Cust_id']))
	 {
		 $where=array('Cust_id'=>$_SESSION['Cust_id']);
		 $my_rent=$obj->select_where_join($con,'vehicle_booking','vehicle_type','vehicle_booking.Vehicle_type_id=vehicle_type.Vehicle_type_id',$where);
		 while($fet_rent=$my_rent->fetch_object())
		 {
			 $data_rent[]=$fet_rent; 
		 }
	 }
	 
	 //delete 
  if(isset($_GET['Vehicle_booking_id']))
	{
		$Vehicle_booking_id=$_GET['Vehicle_booking_id'];
		$data=array('Vehicle_booking_id'=>$Vehicle_booking_id);
	 //print_r($data);exit;
	  $obj->ins_data($con,'cancelation_booking',$data);
		$where=array('Vehicle_booking_id'=>$Vehicle_booking_id);
		$obj->del_data($con,'vehicle_booking',$where);
	}
	
	
	 //------------------------------------------------ MY PACKAGE BOOKING CONTROL------------------------------------------------
	
	
	 if(isset($_SESSION['Cust_id']))
	 {
		 $where=array('Cust_id'=>$_SESSION['Cust_id']);
		 $my_package=$obj->select_where_join($con,'package_booking','package_master','package_booking.Package_id=package_master.Package_id',$where); 
		  while($fet_rent=$my_package->fetch_object())
		 {
			 $data_package_booking[]=$fet_rent; 
		 }
	 }
	 
	 //delete 
  if(isset($_GET['Package_booking_id']))
	{
		$Package_booking_id=$_GET['Package_booking_id'];
		$data=array('Package_booking_id'=>$Package_booking_id);
	 //print_r($data);exit;
	  $obj->ins_data($con,'cancelation_booking',$data);
		$where=array('Package_booking_id'=>$Package_booking_id);
		$obj->del_data($con,'package_booking',$where);
	}
	 
	 
	  //------------------------------------------------ FEEDBACK CONTROL------------------------------------------------
	  if(isset($_POST['feedback_send']))
	  {
	  		 
	   $Cust_id=$_SESSION['Cust_id'];
	   $message=$_POST['message'];
	  
	    $data=array(
	  			  'Cust_id'=>$Cust_id,
				  'Feedback_content'=>$message
				  );
				 //print_r($data);exit;
	  $obj->ins_data($con,'feedback',$data);
	  header('location:feedback.php');
	  }
	 
?>