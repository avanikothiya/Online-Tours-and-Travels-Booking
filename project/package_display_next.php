<?php

	include ('control.php');
	include ('user_header.php');
	
	

	
	
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
  <?php
								foreach($data_package as $r)
								{
									?>

                          <h1><font color="#0066CC"><?php echo $r->Package_name;?></font></h1>
					<div style="margin-right:100px;">
                    
                    <form method="post">
                          <table class="table">
								 <tr>
								  <td rowspan="9" align="center"> <div class="big_photo" style="margin-left:50px;margin-top:25px; margin-right:50px;">
									<img src="NiceAdmin/master_img/<?php echo $r->master_img;?>" alt="" width="300" height="250" /><br />
								 	</div></td>
								 
								</tr>
                               <tr>
                                     <td><b>Customer name:<?php echo  $_SESSION['name'];?> </b></td>
                                </tr>	
								<tr>
								  <td><b><font size="+1" color="#000066">From :<?php echo date_format(date_create("$r->Start_date"),"d-M-Y");?>&nbsp;To :<?php echo date_format(date_create("$r->End_date"),"d-M-Y");?></font></b></td>					  
								</tr>
								<tr>
								  <td><b><?php echo $r->Vehicle_type_name;?>&nbsp;-&nbsp;<?php echo $r->Facility_type_name;?>&nbsp;-&nbsp;<?php echo $r->Seat_type_name;?></b></td>
								</tr>
								<tr>
								  <td><b>Places : </b><?php echo $r->Places;?></td>
								</tr>
								<tr>
								  <td><b>Hotel : </b><?php echo $r->Hotel ;?> </td>
								</tr>
								<tr>
								  <td><b>Meal : </b><?php echo $r->Meal;?> </td>
								</tr>
								<tr>
								  <td><b>Price : </b><?php echo $r->Price;?> </td>
								</tr>
                               
                                <tr>
								  <td><b>No of. Person :</b> &nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="1" style="width:50px;" name="No_of_seat"> </td>
								</tr>
								
                          </table>
                          <center>
						  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						  <input type="submit" name="book_package" value="Book Now!!" style="height:50px; width:100px; background-color:#CCCCCC;"></center>
                          </form>
						  </center>
                      </section>
					 
                              
                            
		
								
                             <?php
								}
								?> </div>
					   
 <?php
  include ('footer.php');
?>              

</div>
</body>
</html>

