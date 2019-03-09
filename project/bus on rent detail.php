<?php

		include ('control.php');
	include ('user_header.php');
	//session_start();
	
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Travel Store</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-clean.css">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
  <body>
  <div id="wrapper">

                          <h1><font color="#0066CC">Bus Detail</font></h1>
					<div style="margin-right:100px;">
                    <form method="post">
                          <table class="table">
	
                               <?php
								foreach($data_rent as $r)
								{
									?>
								
								
								 <tr>
								  <td rowspan="11" align="center"><img src="img/minibus.jpg"></td>
								 
								</tr>	
                                <tr>
                                     <td>Customer name:<?php echo  $_SESSION['name'];?> </td>
                                </tr>
                                 <tr>
								  <td><b><font size="+1" color="#000066"><?php echo $r->Vehicle_type_name;?>&nbsp;(<?php echo $r->Seat_mode;?>)</font></b></td>					  
								</tr>
								  <tr>
								  <td>Facility Type : <?php echo $r->Facility_type_name ;?></td>
								  </tr>
								  <tr>
								  <td>Seat Type : <?php echo $r->Seat_type_name ;?> </td>
								  </tr>
								  <tr>
								  <td>Total No Of Seat : <?php echo $r->Total_no_of_seat ;?> </td>
								  </tr>
								  <tr>
								  <td>Per KM Charge : <?php echo $r->Per_km_charge;?> </td>
								  </tr>
								  <tr>
								  <td>Minimum Charge : <?php echo $r->Minimum_charge;?> </td>
								  </tr>
                                   <tr>
								  <td>From Date : <input type="date" name="Start_date"> </td>
								  </tr>
                                   <tr>
								  <td>To Date : <input type="date" name="End_date"> </td>
								  </tr>
								  <tr>
								  <td><input type="submit" name="book_bus" value="Book Now!!" style="height:50px; width:100px; background-color:#CCCCCC;"></td>
													  
                                  
                             </tr>
                             <?php
								}
								?>
                             
                        
                          </table>
                          </form>						  </center>
                      </section></div>
					   
 <?php
  include ('footer.php');
?>              

</div>
</body>
</html>

