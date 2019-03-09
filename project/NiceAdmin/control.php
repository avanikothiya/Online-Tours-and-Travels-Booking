<?php
  
  include ('model.php');
  $obj=new model;
  
  
  
  
  //------------------------------------------------DESIGNATION CONTROL------------------------------------------------
  
  
  //insert designation
  if(isset($_POST['submit_designation']))
  {
	  $Des_name=$_POST['Des_name'];
	  $data=array('Des_name'=>$Des_name);
	 //print_r($data);exit;
	  $obj->ins_data($con,'designation',$data);
  }
  
  
  //select/view designation
  $d=$obj->sel_data($con,'designation');
  
  
  //delete designation
  if(isset($_GET['did']))
	{
		$did=$_GET['did'];
		$where=array('Des_id'=>$did);
		$obj->del_data($con,'designation',$where);
	}
	
	
 //edit
  
  if(isset($_REQUEST['Des_id']))
  {
	 $Des_id=$_GET['Des_id'];
	 $where=array('Des_id'=>$Des_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'designation',$where);
	 $fet=$u->fetch_object();
  }
 
 
  //update
 
  if(isset($_POST['edit_designation']))
  {
	 $Des_name=$_POST['Des_name'];
	 $data=array('Des_name'=>$Des_name);
	 $obj->update_data($con,'designation',$data,$where);
	 header('location:view_designation.php');
  }
 
 
	
	//------------------------------------------------STATE CONTROL------------------------------------------------
  
  //insert state
  if(isset($_POST['submit_state']))
  {
	  $State_name=$_POST['State_name'];
	  $data=array('State_name'=>$State_name);
	 // print_r($data);exit;
	  $obj->ins_data($con,'state',$data);
  }
  
  //select/view state
  $s=$obj->sel_data($con,'state');
  
  //delete state
  if(isset($_GET['sid']))
	{
		$did=$_GET['sid'];
		$where=array('State_id'=>$did);
		$obj->del_data($con,'state',$where);
	}
	
	//edit
  
  if(isset($_REQUEST['State_id']))
  {
	 $State_id=$_GET['State_id'];
	 $where=array('State_id'=>$State_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'state',$where);
	 $fet=$u->fetch_object();
  }
 
 
  //update
 
  if(isset($_POST['edit_state']))
  {
	 $State_name=$_POST['State_name'];
	 $data=array('State_name'=>$State_name);
	 $obj->update_data($con,'state',$data,$where);
	 header('location:view_state.php');
  }
 
	
	//------------------------------------------------CITY CONTROL------------------------------------------------
  
  //insert city
 if(isset($_POST['submit_city']))
  {
	  $City_name=$_POST['City_name'];
	  $State_name=$_POST['State_name'];
	  $data=array('City_name'=>$City_name,
	  			  'State_id'=>$State_name);
				 //print_r($data);exit;
	  $obj->ins_data($con,'city',$data);
  }
  
  //select/view city
 	$c=$obj->join_two($con,'state','city','state.State_id=city.State_id');
  
  //delete city
  if(isset($_GET['cid']))
	{
		$cid=$_GET['cid'];
		$where=array('City_id'=>$cid);
		$obj->del_data($con,'city',$where);
	}
	//edit
  
 if(isset($_REQUEST['City_id']))
 {
	 $City_id=$_GET['City_id'];
	 $where=array('City_id'=>$City_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'city',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_city']))
 {
	 $City_name=$_POST['City_name'];
	 $State_name=$_POST['State_name'];
	 $data=array('City_name'=>$City_name,'State_id'=>$State_name);
	 $obj->update_data($con,'city',$data,$where);
	 header('location:view_city.php');
 }
	
	//------------------------------------------------PLACE CONTROL------------------------------------------------
  
  //insert place
 if(isset($_POST['submit_place']))
  {
	  $Name=$_POST['Name'];
	  $City_name=$_POST['City_name'];
	  $data=array('Name'=>$Name,
	  			  'City_id'=>$City_name);
				 //print_r($data);exit;
	  $obj->ins_data($con,'place',$data);
  }
  
  //select/view place
 	$p=$obj->join_two($con,'city','place','city.City_id=place.City_id');
  
  //delete place
  if(isset($_GET['pid']))
	{
		$pid=$_GET['pid'];
		$where=array('Place_id'=>$pid);
		$obj->del_data($con,'place',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Place_id']))
 {
	 $Place_id=$_GET['Place_id'];
	 $where=array('Place_id'=>$Place_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'place',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_place']))
 {
	 $Name=$_POST['Name'];
	 $City_name=$_POST['City_name'];
	 $data=array('Name'=>$Name,'City_id'=>$City_name);
	 $obj->update_data($con,'place',$data,$where);
	 header('location:view_place.php');
 }
	
	//------------------------------------------------EMPLOYEE CONTROL------------------------------------------------
  
  //insert employee
 if(isset($_POST['submit_employee']))
  {
	  $Emp_name=$_POST['Emp_name'];
	  $Des_name=$_POST['Des_name'];
	  $Contact_no=$_POST['Contact_no'];
	  $Date_of_birth=$_POST['Date_of_birth'];
	  $Address=$_POST['Address'];
	  $Gender=$_POST['Gender'];
	  $date_of_join=$_POST['Date_of_join'];
	  $data=array('Emp_name'=>$Emp_name,
	  			  'Des_id'=>$Des_name,
				  'Contact_no'=>$Contact_no,
				  'Date_of_birth'=>$Date_of_birth,
				  'Address'=>$Address,
				  'Gender'=>$Gender,
				  'Date_of_join'=>$date_of_join);
				 //print_r($data);exit;
	  $obj->ins_data($con,'employee',$data);
  }
  
  //select/view employee
 	$e=$obj->join_two($con,'employee','designation','employee.Des_id=designation.Des_id');
  
  //delete employee
  if(isset($_GET['eid']))
	{
		$eid=$_GET['eid'];
		$where=array('Emp_id'=>$eid);
		$obj->del_data($con,'employee',$where);
	}
	
	 
 
//edit
  
 if(isset($_REQUEST['Emp_id']))
 {
	 $Emp_id=$_GET['Emp_id'];
	 $where=array('Emp_id'=>$Emp_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'employee',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_employee']))
 {
	$Emp_name=$_POST['Emp_name'];
	  $Des_name=$_POST['Des_name'];
	  $Contact_no=$_POST['Contact_no'];
	  $Date_of_birth=$_POST['Date_of_birth'];
	  $Address=$_POST['Address'];
	  $Gender=$_POST['Gender'];
	  $date_of_join=$_POST['Date_of_join'];
	  $data=array('Emp_name'=>$Emp_name,
	  			  'Des_id'=>$Des_name,
				  'Contact_no'=>$Contact_no,
				  'Date_of_birth'=>$Date_of_birth,
				  'Address'=>$Address,
				  'Gender'=>$Gender,
				  'Date_of_join'=>$date_of_join);
	 $obj->update_data($con,'employee',$data,$where);
	 header('location:view_employee.php');
 }
 
 //------------------------------------------------CUSTOMER CONTROL-----------------------------------------------
  
  //select/view customer
 	$cust=$obj->sel_data($con,'customer');
	
	//------------------------------------------------FACILITY TYPE CONTROL------------------------------------------------
  
  //insert facility type
  if(isset($_POST['submit_facility_type']))
  {
	  $Facility_type_name=$_POST['Facility_type_name'];
	  $data=array('Facility_type_name'=>$Facility_type_name);
	 // print_r($data);exit;
	  $obj->ins_data($con,'facility_type',$data);
  }
  
  //select/view state
  $f=$obj->sel_data($con,'facility_type');
  
  //delete state
  if(isset($_GET['fid']))
	{
		$fid=$_GET['fid'];
		$where=array('Facility_type_id'=>$fid);
		$obj->del_data($con,'facility_type',$where);
	}
	
	
	//edit
  
 if(isset($_REQUEST['Facility_type_id']))
 {
	 $Facility_type_id=$_GET['Facility_type_id'];
	 $where=array('Facility_type_id'=>$Facility_type_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'facility_type',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_facility_type']))
 {
	 $Facility_type_name=$_POST['Facility_type_name'];
	 $data=array('Facility_type_name'=>$Facility_type_name);
	 $obj->update_data($con,'facility_type',$data,$where);
	 header('location:view_facilitytype.php');
 }
	
	//------------------------------------------------SEAT TYPE CONTROL------------------------------------------------
  
  //insert seat type
  if(isset($_POST['submit_seat_type']))
  {
	  $Seat_type_name=$_POST['Seat_type_name'];
	  $data=array('Seat_type_name'=>$Seat_type_name);
	 // print_r($data);exit;
	  $obj->ins_data($con,'seat_type',$data);
  }
  
  //select/view state
  $seat_type=$obj->sel_data($con,'seat_type');
  
  //delete state
  if(isset($_GET['seat_type_id']))
	{
		$seat_type_id=$_GET['seat_type_id'];
		$where=array('Seat_type_id'=>$seat_type_id);
		$obj->del_data($con,'seat_type',$where);
	}
	  //edit
  
 if(isset($_REQUEST['Seat_type_id']))
 {
	 $Seat_type_id=$_GET['Seat_type_id'];
	 $where=array('Seat_type_id'=>$Seat_type_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'seat_type',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_seat_type']))
 {
	 $Seat_type_name=$_POST['Seat_type_name'];
	 $data=array('Seat_type_name'=>$Seat_type_name);
	 $obj->update_data($con,'seat_type',$data,$where);
	 header('location:view_seat_type.php');
 }
 
 
 //--------------------------------------------------VEHICLE ---------------------------------------------
 
 
 //insert\
 
  if(isset($_POST['submit_vehicle']))
  {
	  $Vehicle_type_name=$_POST['Vehicle_type_name'];
	    $Per_km_charge=$_POST['Per_km_charge'];
	  $Minimum_charge=$_POST['Minimum_charge'];
	  
	    $data=array('Vehicle_type_id'=>$Vehicle_type_name,
		 'Per_km_charge'=>$Per_km_charge,
				  'Minimum_charge'=>$Minimum_charge,
				 
				  );
				
				  // print_r($data);exit;
	  $obj->ins_data($con,'vehicle',$data);
  }
	  
	    //select/view  vehicle
 	$vehicle=$obj->join_two($con,'vehicle_type','vehicle','vehicle_type.vehicle_type_id=vehicle.vehicle_type_id');
	
	
	
	 if(isset($_REQUEST['Vehicle_id']))
 {
	 $Vehicle_id=$_GET['Vehicle_id'];
	 $where=array('Vehicle_id'=>$Vehicle_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'vehicle',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_vehicle']))
 {
    echo $Vehicle_type_name=$_POST['Vehicle_type_name'];
	
	     $Per_km_charge=$_POST['Per_km_charge'];
	  $Minimum_charge=$_POST['Minimum_charge'];
	  $data=array('Vehicle_type_id'=>$Vehicle_type_name,
	  			 
				 'Per_km_charge'=>$Per_km_charge,
	  			  'Minimum_charge'=>$Minimum_charge);
				// print_r($data);exit;
	 $obj->update_data($con,'vehicle',$data,$where);
	 header('location:view_vehicle.php');
 }
	  
	
	  
	  //------------------------------------------------VEHICLE TYPE CONTROL------------------------------------------------
  
  //insert vehicle type
 if(isset($_POST['submit_vehicle_type']))
  {
	  $Vehicle_type_name=$_POST['Vehicle_type_name'];
	  $Facility_type_name=$_POST['Facility_type_name'];
	  $Seat_type_name=$_POST['Seat_type_name'];
	  $Total_no_of_seat=$_POST['Total_no_of_seat'];
	  $Per_km_charge=$_POST['Per_km_charge'];
	  $Minimum_charge=$_POST['Minimum_charge'];
	  $Seat_mode=$_POST['Seat_mode'];
	  $Emp_name=$_POST['Emp_name'];
	
	  $data=array('Vehicle_type_name'=>$Vehicle_type_name,
	  			  'Facility_type_id'=>$Facility_type_name,
				  'Seat_type_id'=>$Seat_type_name,
				  'Total_no_of_seat'=>$Total_no_of_seat,
				  'Per_km_charge'=>$Per_km_charge,
				  'Minimum_charge'=>$Minimum_charge,
				    'Seat_mode'=>$Seat_mode,
				  'Emp_id'=>$Emp_name,
				  );
				//print_r($data);exit;
	  $obj->ins_data($con,'vehicle_type',$data);
  }
  
  //select/view vehicle type
$vehicle_type=$obj->join_four($con,'vehicle_type','facility_type','vehicle_type.Facility_type_id=facility_type.Facility_type_id','seat_type','vehicle_type.Seat_type_id=seat_type.Seat_type_id','employee','vehicle_type.Emp_id=employee.Emp_id');

  
  //delete  vehicle type
  if(isset($_GET['vehicle_type_id']))
	{
		$vehicle_type_id=$_GET['vehicle_type_id'];
		$where=array('Vehicle_type_id'=>$vehicle_type_id);
		$obj->del_data($con,'vehicle_type',$where);
	}
	
	 //edit
  
 if(isset($_REQUEST['Vehicle_type_id']))
 {
	 $Vehicle_type_id=$_GET['Vehicle_type_id'];
	 $where=array('Vehicle_type_id'=>$Vehicle_type_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'vehicle_type',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_vehicle_type']))
 {
    $Vehicle_type_name=$_POST['Vehicle_type_name'];
	  $Facility_type_name=$_POST['Facility_type_name'];
	  $Seat_type_name=$_POST['Seat_type_name'];
	  $Total_no_of_seat=$_POST['Total_no_of_seat'];
	  $Emp_name=$_POST['Emp_name'];
	   $Per_km_charge=$_POST['Per_km_charge'];
	  $Minimum_charge=$_POST['Minimum_charge'];
	  $data=array('Vehicle_type_name'=>$Vehicle_type_name,
	  			  'Facility_type_id'=>$Facility_type_name,
				  'Seat_type_id'=>$Seat_type_name,
				  'Total_no_of_seat'=>$Total_no_of_seat,
				  'Emp_id'=>$Emp_name,
				   'Per_km_charge'=>$Per_km_charge,
	  			  'Minimum_charge'=>$Minimum_charge);
				// print_r($data);exit;
	 $obj->update_data($con,'vehicle_type',$data,$where);
	 header('location:view_vehicle_type.php');
 }
	  
	
	
	//------------------------------------------------VEHICLE BOOKING CONTROL------------------------------------------------
	
	 //select/view vehicle booking
 	$vehicle_booking=$obj->join_three($con,'vehicle_booking','vehicle_type','vehicle_booking.Vehicle_type_id=vehicle_type.Vehicle_type_id','customer','vehicle_booking.Cust_id=customer.Cust_id');
  
  //status


		if(isset($_GET['vehicle_booking_id'])&&($_GET['sta']))
	{
		    $vehicle_booking_id=$_GET['vehicle_booking_id'];
			$sta=$_GET['sta'];
			$where=array('vehicle_booking_id'=>$vehicle_booking_id);
			//echo $sta;exit;
		if($sta=='pending')
		{
		$obj->up_status($con,'vehicle_booking',$where);
			//echo $upp;exit;
		}
		else if($sta=='approved')
		{
			$obj->up_status2($con,'vehicle_booking',$where);
		}
		else 
		{
		    	$obj->up_status3($con,'vehicle_booking',$where);
		}
		
	}
  
/*  //delete vehicle booking
  if(isset($_GET['vehicle_booking_id']))
	{
	
		$vehicle_booking_id=$_GET['vehicle_booking_id'];
		$where=array('Vehicle_booking_id'=>$vehicle_booking_id);
		$obj->del_data($con,'vehicle_booking',$where);
	}*/
	
	
	
	//------------------------------------------------HOTEL CONTROL------------------------------------------------
  
  //insert hotel
 if(isset($_POST['submit_hotel']))
  {
	  $Hotel_name=$_POST['Hotel_name'];
	  $Address=$_POST['Address'];
	  $Charge=$_POST['Charge'];
	  $City_name=$_POST['City_name'];  
	  $data=array('Hotel_name'=>$Hotel_name,
	  			  'Address'=>$Address,
				  'Charge'=>$Charge,
				  'City_id'=>$City_name);
				 //print_r($data);exit;
	  $obj->ins_data($con,'hotel',$data);
  }
  
  //select/view hotel
 	$hotel=$obj->join_two($con,'hotel','city','hotel.City_id=city.City_id');
  
  //delete city
  if(isset($_GET['hotel_id']))
	{
		$hotel_id=$_GET['hotel_id'];
		$where=array('Hotel_id'=>$hotel_id);
		$obj->del_data($con,'hotel',$where);
	}
	//edit
  
 if(isset($_REQUEST['Hotel_id']))
 {
	 $Hotel_id=$_GET['Hotel_id'];
	 $where=array('Hotel_id'=>$Hotel_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'hotel',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_hotel']))
 {
	 $Hotel_name=$_POST['Hotel_name'];
	  $Address=$_POST['Address'];
	  $Charge=$_POST['Charge'];
	  $City_name=$_POST['City_name'];  
	  $data=array('Hotel_name'=>$Hotel_name,
	  			  'Address'=>$Address,
				  'Charge'=>$Charge,
				  'City_id'=>$City_name);
	 $obj->update_data($con,'hotel',$data,$where);
	 header('location:view_hotel.php');
 }
	
	
	//------------------------------------------------DAILY ROUTE CONTROL------------------------------------------------
  
   //insert daily route
 if(isset($_POST['submit_daily_route_detail']))
  {
	  $From_place=$_POST['From_place'];
	  $To_place=$_POST['To_place'];
	  $Facility_type_name=$_POST['Facility_type_name'];
	  $Seat_type_name=$_POST['Seat_type_name'];
	  $Vehicle_type_name=$_POST['Vehicle_type_name'];
	  $Depart_time=$_POST['Depart_time'];
	  $Arrive_time=$_POST['Arrive_time'];
	   $Date=$_POST['Date'];
	  $Price=$_POST['Price'];
	  $Vai_route=$_POST['Via_route'];  
	  $data=array('From_place'=>$From_place,
	  			  'To_place'=>$To_place,
				  'Facility_type_id'=>$Facility_type_name,
				  'Seat_type_id'=>$Seat_type_name,
				  'Vehicle_type_id'=>$Vehicle_type_name,
				  'De_time'=>$Depart_time,
				  'Ar_time'=>$Arrive_time,
				   'Date'=>$Date,
				  'Price'=>$Price,
				  'Via_route'=>$Vai_route);
				 //print_r($data);exit;
	  $obj->ins_data($con,'daily_route_detail',$data);
  }
  
  //select/view daily route
 	$daily_route=$obj->join_four($con,'daily_route_detail','facility_type','daily_route_detail.Facility_type_id=facility_type.Facility_type_id','seat_type','daily_route_detail.Seat_type_id=seat_type.Seat_type_id','vehicle_type','daily_route_detail.Vehicle_type_id=vehicle_type.Vehicle_type_id');
  
  //delete daily route
  if(isset($_GET['daily_route_id']))
	{
		$daily_route_id=$_GET['daily_route_id'];
		$where=array('Daily_route_id'=>$daily_route_id);
		$obj->del_data($con,'daily_route_detail',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Daily_route_id']))
 {
	 $Daily_route_id=$_GET['Daily_route_id'];
	 $where=array('Daily_route_id'=>$Daily_route_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'daily_route_detail',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 


 if(isset($_POST['edit_daily_route_detail']))
 {
	  $From_place=$_POST['From_place'];
	  $To_place=$_POST['To_place'];
	  $Facility_type_name=$_POST['Facility_type_name'];
	  $Seat_type_name=$_POST['Seat_type_name'];
	  $Vehicle_type_name=$_POST['Vehicle_type_name'];
	  $Depart_time=$_POST['Depart_time'];
	  $Arrive_time=$_POST['Arrive_time'];
	   $Date=$_POST['Date'];
	  $Price=$_POST['Price'];
	  $Vai_route=$_POST['Via_route'];  
	  $data=array('From_place'=>$From_place,
	  			  'To_place'=>$To_place,
				  'Facility_type_id'=>$Facility_type_name,
				  'Seat_type_id'=>$Seat_type_name,
				  'Vehicle_type_id'=>$Vehicle_type_name,
				  'De_time'=>$Depart_time,
				  'Ar_time'=>$Arrive_time,
				   'Date'=>$Date,
				  'Price'=>$Price,
				  'Via_route'=>$Vai_route);
				 //print_r($data);exit;
	 $obj->update_data($con,'daily_route_detail',$data,$where);
	 header('location:view_daily_route_detail.php');
 }
	 //------------------------------------------------PACKAGE TOUR CONTROL------------------------------------------------
  
  //insert package tour
  if(isset($_POST['submit_package_tour']))
  {
	  $Tour_name=$_POST['Tour_name'];
	  $data=array('Tour_name'=>$Tour_name);
	 //print_r($data);exit;
	  $obj->ins_data($con,'package_tour',$data);
  }
  
  //select/view package tour
  $package_tour=$obj->sel_data($con,'package_tour');
  
  //delete package tour
  if(isset($_GET['package_tour_id']))
	{
		$package_tour_id=$_GET['package_tour_id'];
		$where=array('Tour_id'=>$package_tour_id);
		$obj->del_data($con,'package_tour',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Tour_id']))
 {
	 $Tour_id=$_GET['Tour_id'];
	 $where=array('Tour_id'=>$Tour_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'package_tour',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_package_tour']))
 {
	 $Tour_name=$_POST['Tour_name'];
	  $data=array('Tour_name'=>$Tour_name);
	 //print_r($data);exit;
	 $obj->update_data($con,'package_tour',$data,$where);
	 header('location:view_package_tour.php');
 }
	
	//------------------------------------------------PACKAGE MASTER CONTROL------------------------------------------------
  
  //insert package master
 if(isset($_POST['submit_package_master']))
  {
	  $Package_name=$_POST['Package_name'];
	  $Tour_name=$_POST['Tour_name'];
	  $tmp=$_FILES['file']['tmp_name'];
	  $master_img=$_FILES['file']['name'];
	  move_uploaded_file($tmp,'master_img/'.$master_img);
	  //$master_img="master_img/".$_FILES['file']['master_img'];
	  $data=array('Package_name'=>$Package_name,
	  			  'Tour_id'=>$Tour_name,
				  'master_img'=>$master_img);
				 //print_r($data);exit;
	  $obj->ins_data($con,'package_master',$data);
  }
  
  //select/view package master
 	$package_master=$obj->join_two($con,'package_tour','package_master','package_tour.Tour_id=package_master.Tour_id');
  
  //delete package master
  if(isset($_GET['package_id']))
	{
		$package_id=$_GET['package_id'];
		$where=array('Package_id'=>$package_id);
		$obj->del_data($con,'package_master',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Package_id']))
 {
	 $Package_id=$_GET['Package_id'];
	 $where=array('Package_id'=>$Package_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'package_master',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_package_master']))
 {
	 $Package_name=$_POST['Package_name'];
	  $Tour_name=$_POST['Tour_name'];
	  $data=array('Package_name'=>$Package_name,
	  			  'Tour_id'=>$Tour_name);
				 //print_r($data);exit;
	 $obj->update_data($con,'package_master',$data,$where);
	 header('location:view_package_master.php');
 }
	
	//------------------------------------------------PACKAGE DEATIL CONTROL------------------------------------------------
  
  //insert package detail
 if(isset($_POST['submit_package_detail']))
  {
	  $Package_name=$_POST['Package_name'];
	  $Vehicle_type_name=$_POST['Vehicle_type_name'];
	  $Facility_type_name=$_POST['Facility_type_name'];
	  $Seat_type_name=$_POST['Seat_type_name'];
	  $Start_date=$_POST['Start_date'];
	  $End_date=$_POST['End_date'];
	  $Places=$_POST['Places'];
	  $Price=$_POST['Price'];
	  $Hotel=$_POST['Hotel'];
	  $Meal=$_POST['Meal'];
	   $Overview=$_POST['Overview'];
	  $data=array('Package_id'=>$Package_name,
	  			  'Vehicle_type_id'=>$Vehicle_type_name,
				  'Facility_type_id'=>$Facility_type_name,
				  '	Seat_type_id'=>$Seat_type_name,
				  'Start_date'=>$Start_date,
				  'End_date'=>$End_date,
				  'Places'=>Places,
				  'Price'=>$Price,
				  'Hotel'=>$Hotel,
				  'Meal'=>$Meal,
				  'Overview'=>$Overview);
				// print_r($data);exit;
	  $obj->ins_data($con,'package_detail',$data);
  }
  
  //select/view package detail
 	$package_detail=$obj->join_five($con,'package_detail','package_master','package_detail.Package_id=package_master.Package_id','vehicle_type','package_detail.Vehicle_type_id=vehicle_type.Vehicle_type_id','facility_type','package_detail.Facility_type_id=facility_type.Facility_type_id','seat_type','package_detail.Seat_type_id=seat_type.Seat_type_id');
  
  //delete package detail
  if(isset($_GET['package_detail_id']))
	{
		$package_detail_id=$_GET['package_detail_id'];
		$where=array('Package_detail_id'=>$package_detail_id);
		$obj->del_data($con,'package_detail',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Package_detail_id']))
 {
	 $Package_detail_id=$_GET['Package_detail_id'];
	 $where=array('Package_detail_id'=>$Package_detail_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'package_detail',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_package_detail']))
 {
	$Package_name=$_POST['Package_name'];
	  $Vehicle_type_name=$_POST['Vehicle_type_name'];
	  $Start_date=$_POST['Start_date'];
	  $End_date=$_POST['End_date'];
	  $Places=$_POST['Places'];
	  $Hotel=$_POST['Hotel'];
	  $Meal=$_POST['Meal'];
	  	$Price=$_POST['Price'];
		$Overview=$_POST['Overview'];
	  $data=array('Package_id'=>$Package_name,
	  			  'Vehicle_type_id'=>$Vehicle_type_name,
				  'Start_date'=>$Start_date,
				  'End_date'=>$End_date,
				  'Places'=>$Places,
				  'Hotel'=>$Hotel,
				  'Meal'=>$Meal,
				  'Price'=>$Price,
				  'Overview'=>$Overview,
				  );
				 //print_r($data);exit;
	 $obj->update_data($con,'package_detail',$data,$where);
	 header('location:view_package_detail.php');
 }
 
 
 //------------------------------------------------PACKAGE HOTEL DETAIL CONTROL------------------------------------------------
  
  //insert package hotel detail
 if(isset($_POST['submit_package_hotel_detail']))
  {
	  $Package_name=$_POST['Package_name'];
	  $City_name=$_POST['City_name'];
	  $Hotel_name=$_POST['Hotel_name'];
	  $Date=$_POST['Date'];
	  $data=array('Package_id'=>$Package_name,
	  			  'City_id'=>$City_name,
				  'Hotel_id'=>$Hotel_name,
	  			  'Date'=>$Date);
				// print_r($data);exit;
	  $obj->ins_data($con,'package_hotel_detail',$data);
  }
  
  //select/view package hotel detail
 	$package_hotel=$obj->join_four($con,'package_hotel_detail','package_master','package_hotel_detail.Package_id=package_master.Package_id','city','package_hotel_detail.City_id=city.City_id','hotel','package_hotel_detail.Hotel_id=hotel.Hotel_id');
  
  //delete package hotel detail
  if(isset($_GET['package_hotel_id']))
	{
		$package_hotel_id=$_GET['package_hotel_id'];
		$where=array('Package_hotel_id'=>$package_hotel_id);
		$obj->del_data($con,'package_hotel_detail',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Package_hotel_id']))
 {
	 $Package_hotel_id=$_GET['Package_hotel_id'];
	 $where=array('Package_hotel_id'=>$Package_hotel_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'package_hotel_detail',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_package_hotel_detail']))
 {
	 $Package_name=$_POST['Package_name'];
	  $City_name=$_POST['City_name'];
	  $Hotel_name=$_POST['Hotel_name'];
	  $Date=$_POST['Date'];
	  $data=array('Package_id'=>$Package_name,
	  			  'City_id'=>$City_name,
				  'Hotel_id'=>$Hotel_name,
	  			  'Date'=>$Date);
				// print_r($data);exit;
	 $obj->update_data($con,'package_hotel_detail',$data,$where);
	 header('location:view_package_hotel_detail.php');
 }
	
	//------------------------------------------------PACKAGE ROUTE DETAIL CONTROL------------------------------------------------
  
  //insert package route detail
 if(isset($_POST['submit_package_route']))
  {
	  $Package_name=$_POST['Package_name'];
	  $Description=$_POST['Description'];
	
	  $data=array('Package_id'=>$Package_name,
	  			  'Description'=>$Description);
				 
				//print_r($data);exit;
	  $obj->ins_data($con,'package_route_detail',$data);
  }
  
  //select/view package route detail
 	$package_route=$obj->join_two($con,'package_master','package_route_detail','package_master.Package_id=package_route_detail.Package_id');
  
  //delete package route detail
  if(isset($_GET['package_route_id']))
	{
		$package_route_id=$_GET['package_route_id'];
		$where=array('Package_route_id'=>$package_route_id);
		$obj->del_data($con,'package_route_detail',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Package_route_id']))
 {
	 $Package_route_id=$_GET['Package_route_id'];
	 $where=array('Package_route_id'=>$Package_route_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'package_route_detail',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_package_route']))
 {
	$Package_name=$_POST['Package_name'];
	  $Description=$_POST['Description'];
	  $data=array('Package_id'=>$Package_name,
	  			  'Description'=>$Description);
	  //print_r($data);exit;
	 $obj->update_data($con,'package_route_detail',$data,$where);
	 header('location:view_package_route_detail.php');
 }

//------------------------------------------------PACKAGE PLACE CONTROL------------------------------------------------
  
  //insert hotel
 if(isset($_POST['submit_package_place']))
  {
	  $Package_name=$_POST['Package_name'];
	  $Places=$_POST['Places'];
	  $data=array('Package_id'=>$Package_name,
	  			  'Places'=>$Places);
				 //print_r($data);exit;
	  $obj->ins_data($con,'package_place',$data);
  }
  
  //select/view
 	$package_place=$obj->join_two($con,'package_place','package_master','package_place.Package_id=package_master.Package_id');
  
  //delete
  if(isset($_GET['Package_place_id']))
	{
		$Package_place_id=$_GET['Package_place_id'];
		$where=array('Package_place_id'=>$Package_place_id);
		$obj->del_data($con,'package_place',$where);
	}
	
	//edit
  
 if(isset($_REQUEST['Package_place_id']))
 {
	 $Package_place_id=$_GET['Package_place_id'];
	 $where=array('Package_place_id'=>$Package_place_id);
	//print_r($where);exit;
	 $u=$obj->select_where($con,'package_place',$where);
	 $fet=$u->fetch_object();
 }
 
 
 //update
 
 if(isset($_POST['edit_package_place']))
 {
	$Package_name=$_POST['Package_name'];
	  $Places=$_POST['Places'];
	  $data=array('Package_id'=>$Package_name,
	  			  'Places'=>$Places);
	  //print_r($data);exit;
	 $obj->update_data($con,'package_place',$data,$where);
	 header('location:view_package_place.php');
 }
 

	
	//------------------------------------------------DAILY BOOKING CONTROL------------------------------------------------
	
	 //select/view daily booking
 	$daily_booking_fet=$obj->join_three($con,'daily_booking','customer','daily_booking.Cust_id=customer.Cust_id','daily_route_detail','daily_booking.Daily_route_id=daily_route_detail.Daily_route_id');
  
  //delete daily booking
  if(isset($_GET['daily_booking_id']))
	{
		$daily_booking_id=$_GET['daily_booking_id'];
		$where=array('Daily_booking_id'=>$daily_booking_id);
		$obj->del_data($con,'daily_booking',$where);
	}
	
	
	
	//PACKAGE BOOKING CONTROL
	
	 //select/view package booking
 	$package_booking=$obj->join_three($con,'package_booking','customer','package_booking.Cust_id=customer.Cust_id','package_master','package_booking.Package_id=package_master.Package_id');
  
  //delete package booking
  if(isset($_GET['package_booking_id']))
	{
		$package_booking_id=$_GET['package_booking_id'];
		$where=array('Package_booking_id'=>$package_booking_id);
		$obj->del_data($con,'package_booking',$where);
	}
	
	//status daily_booking
	
	if(isset($_GET['Daily_route_id'])&&($_GET['sta']))
	{
		    $Daily_route_id=$_GET['Daily_route_id'];
			$sta=$_GET['sta'];
			$where=array('Daily_route_id'=>$Daily_route_id);
			//echo $sta;exit;
		if($sta=='pending')
		{
		$obj->up_status($con,'daily_booking',$where);
			//echo $upp;exit;
		}
		else if($sta=='approved')
		{
			$obj->up_status2($con,'daily_booking',$where);
		}
		else 
		{
		    	$obj->up_status3($con,'daily_booking',$where);
		}
		
	}
	
	//------------------------------------------------INQUIRY CONTROL------------------------------------------------
	
	 //select/view inquiry
 	$inquiry=$obj->sel_data($con,'inquiry');
  
  //delete inquiry
  if(isset($_GET['inquiry_id']))
	{
		$inquiry_id=$_GET['inquiry_id'];
		$where=array('Inq_id'=>$inquiry_id);
		$obj->del_data($con,'inquiry',$where);
	}
	
	
	//------------------------------------------------FEEDBACK CONTROL------------------------------------------------
	
	 //select/view feedback
 	$feedback=$obj->join_two($con,'feedback','customer','feedback.Cust_id=customer.Cust_id');
  
  //delete feedback
  if(isset($_GET['feedback_id']))
	{
		$feedback_id=$_GET['feedback_id'];
		$where=array('Feedback_id'=>$feedback_id);
		$obj->del_data($con,'feedback',$where);
	}
	
//------------------------------------------------LOGIN CONTROL------------------------------------------------
	
	
	
	if(isset($_POST['login']))
	{
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
		$where=array('Email'=>$Email,'Password'=>$Password);
		//print_r($where);exit;
		$u=$obj->select_where($con,'login',$where);
		$fet=$u->num_rows;
		if($fet ==1)
		{
			
			$r=$u->fetch_object();
			$Email=$r->Email;
			$_SESSION['Email']=$Email;
			header('location:index.php');				
		}
		else
		{
			header('location:login.php');
		}
	}
	
	
	//insert data into login table
	
	if(isset($_POST['submit_login']))
	{
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
		$data=array('Email'=>$Email,'Password'=>$Password);
		$obj->ins_data($con,'login',$data);				
	}
	
	
	//--------------------------//status package_booking----------------------------------------------
	
	if(isset($_GET['Package_booking_id'])&&($_GET['sta']))
	{
		    $Package_booking_id=$_GET['Package_booking_id'];
			$sta=$_GET['sta'];
			$where=array('Package_booking_id'=>$Package_booking_id);
			//echo $sta;exit;
		if($sta=='pending')
		{
		$obj->up_status($con,'package_booking',$where);
			//echo $upp;exit;
		}
		else if($sta=='approved')
		{
			$obj->up_status2($con,'package_booking',$where);
		}
		else 
		{
		    	$obj->up_status3($con,'package_booking',$where);
		}
		
	}
?>


