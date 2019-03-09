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
		$data[]=$fet;	
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
	  header('location:my package booking.php');
   }
  }
	
	
    
	
	 //------------------------------------------------ MY PACKAGE BOOKING CONTROL------------------------------------------------
	
	if(isset($_GET[$_SESSION['Cust_id']]))
	 {
		 $where=array('Cust_id'=>$_SESSION['Cust_id']);
		 $my_package=$obj->select_where_join($con,'vehicle_booking','vehicle_type','vehicle_booking.Vehicle_type_id=vehicle_type.Vehicle_type_id',$where); 
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
	
	
	
	 
?>