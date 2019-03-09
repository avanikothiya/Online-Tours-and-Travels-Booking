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
  if(isset($data_rent))
  {
  ?>
  <h1><font color="#0066CC">My Bus on Rent Booking </font></h1>  
                          
                            <table class="table">
                              <tr>
                                
                                  <th>Vehicle</th>
								  <th>From Date</th>
                                  <th>To Date</th>
                                  <th>Booking Date</th>
								  <th>Deposite</th>
								  <th>Booking Status</th>
								  <th>Cancel</th>
								  
                              </tr>
							   <?php
							  }
							  ?>
                              <?php
								if(isset($data_rent))
								{
                               <?php
								foreach($data_rent as $r)
								{
									?>
							  
                              <tr>
                                  <td><?php echo $r->Vehicle_type_name;?></td>
								  
                                  <td><?php echo $r->Start_date;?></td>
                                  
                                  <td><?php echo $r->End_date;?></td>
								  
                                  <td><?php echo $r->Booking_date;?></td>
                                  
								  <td><?php echo $r->Deposit;?></td>
								  <td><?php echo $r->status;?></td>
								  <td><a href="my bus on rent booking.php?Vehicle_type_id=<?php echo $r->Vehicle_type_id;?>">Cancel</a></td>
                                 
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


