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
								foreach($data as $r)
								{
									?>

                         
					<div style="margin-right:250px;margin-left:250px;">
                          <table class="table" border="1">
                          <tr>
                          		<td>Name : </td>
                          </tr>
								 <tr>
								  <td> <?php echo $r->Package_name;?></font></h1></td>
								 
								</tr>	
								<tr>
								  <td><b><font size="+1" color="#000066">From :<?php echo $r->Start_date;?>&nbsp;To :<?php echo $r->End_date;?></font></b></td>					  
								</tr>
								<tr>
								  <td><?php echo $r->Vehicle_type_name;?>&nbsp;-&nbsp;<?php echo $r->Facility_type_name;?>&nbsp;-&nbsp;<?php echo $r->Seat_type_name;?></td>
								</tr>
								<tr>
								  <td>Places : <?php echo $r->Places;?></td>
								</tr>
								<tr>
								  <td>Hotel : <?php echo $r->Hotel ;?> </td>
								</tr>
								<tr>
								  <td>Meal : <?php echo $r->Meal;?> </td>
								</tr>
								<tr>
								  <td>Total Price :  </td>
								</tr>
								<tr>
								  <td></td>
								</tr>
							  
                                  
                             
                             <?php
								}
								?>
                              
                          </table>
						 
                      </div>
					   
 <?php
  include ('footer.php');
?>              

</div>
</body>
</html>

