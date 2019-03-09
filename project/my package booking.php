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
  <div id="wrapper">
  <?php
  if(isset($data_package_booking))
  {
  ?>	
  <h1><font color="#0066CC">My Package Booking </font></h1>  
                          
                            <table class="table">
                              <tr>
                                
                                  <th>Package</th>
								  <th>No of Seat</th>
                                  <th>Total Price</th>
								  <th>Booking Date</th>
                                  <th>Booking Status</th>
								  <th>Cancellation</th>
								  
                              </tr>
							  <?php
							  }
							  ?>
                               <?php
							   if(isset($data_package_booking))
							   {
								foreach($data_package_booking as $r)
								{
									?>
							  
                              <tr>
                                  <td><?php echo $r->Package_name;?></td>
								  <td><?php echo $r->No_of_seat;?></td>
								  <td><?php echo $r->Total_amount;?></td>
								  <td><?php echo $r->Date;?></td>
								  <td><?php echo $r->status;?></td>
                                  <td><a href="my package booking.php?Package_booking_id=<?php echo $r->Package_booking_id;?>">Cancel</a></td>
                                 
       					       </tr>
                            <?php
								}
								}
								?>
                             
                          </table>
						 
                      
						 
               

<?php
  include ('footer.php');
?> </div>
</body>
</html>


