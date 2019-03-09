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
   <h1><font color="#0066CC">Your Travel..!!</font></h1> 
  <?php
								foreach($data_daily_travel as $r)
								{
									?>

                         
                    
                    <form method="post">
                          <table class="table">
								
                               <tr>
                                     <td>Customer name:<?php echo  $_SESSION['name'];?> </td>
                                </tr>	
								
								<tr>
								  <td><?php echo $r->Vehicle_type_name;?>&nbsp;-&nbsp;<?php echo $r->Facility_type_name;?>&nbsp;-&nbsp;<?php echo $r->Seat_type_name;?></td>
								</tr>
								<tr>
								  <td>Travel From : <?php echo $r->From_place;?>&nbsp;To&nbsp;<?php echo $r->To_place;?></td>
								</tr>
								<tr>
								  <td>Price : <?php echo $r->Price;?> </td>
								</tr>
                                <tr>
								  <td>No of. Seat : &nbsp;&nbsp;&nbsp;&nbsp;<input type="number" min="1" style="width:50px;" name="No_of_seat"> </td>
								</tr>
								
                          </table>
						  
                          <center><input type="submit" name="book_travel" value="Book Now!!" style="height:50px; width:100px; background-color:#CCCCCC;"></center>
                          </form>
						  </center>
                      </section>
					 
                              
                            
		
								
                             <?php
								}
								?>
					   
 <?php
  include ('footer.php');
?>              

</div>
</body>
</html>

