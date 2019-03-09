<?php

	include ('user_header.php');
	include ('control.php');
	
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
  <div id="wrapper" >	
  <?php
  if(isset($vehicle))
  {
  ?>
  <h1><font color="#0066CC">Available Buses for Rent </font></h1>  
                          
                            <table class="table">
                              <tr>
                                
                                  <th>Vehicle Type</th>
								  <th>Total Seat</th>
                                  <th>Per KM Charge</th>
                                  <th>Minimum Charge</th>
								  <th>Select</th>
                              </tr>
                              
							   <?php
								foreach($vehicle as $r)
								{
									?>
                              <tr>
                                  <td><?php echo $r->Vehicle_type_name;?>&nbsp;-&nbsp;<?php echo $r->Facility_type_name;?>&nbsp;-&nbsp;<?php echo $r->Seat_type_name;?>&nbsp;(<?php echo $r->Seat_mode;?>)</td>
								  <td><?php echo $r->Total_no_of_seat;?></td>
                                  <td><?php echo $r->Per_km_charge;?></td>
                                  <td><?php echo $r->Minimum_charge;?></td>
                                  <td><a href="bus on rent detail.php?Vehicle_type_id=<?php echo $r->Vehicle_type_id;?>">Select</a></td>
       					       </tr>
                             <?php
								}
								?>
                             
                          </table>
						 
<?php
}
else
{
?>
<font color="#FF0000"><h3>We are Sorry..!!!<br>There is not Available Buses for Rent</h3></font>
<?php
}
?>               

<?php
  include ('footer.php');
?> </div>
</body>
</html>


