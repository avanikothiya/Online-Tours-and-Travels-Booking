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
  <h1><font color="#0066CC">Search Your Rout </font></h1>  
                          <div style="margin-left:100px;margin-right:100px;">
                          <form method="post">
                            <table class="table">
                              <tr>
                                
                                  <th>From Place</th>
                                  <th>To Place</th>
                                  <th>Date</th>
								  <th>Search</th>
                              </tr>
                              
                              <tr>
                                  <td><select name="From_place">
							   <?php
								foreach($a as $r)
								{
									?><option><?php echo $r->From_place;?></option> <?php
								}
								?></select></td>
                                  <td><select name="To_place">
								  <?php
								foreach($a as $r)
								{
									?> <option><?php echo $r->To_place;?></option> <?php
								}
								?></select></td>
                                  <td><input type="date" name="Date"></td>
                                  <td><input type="submit" name="search_travel" value="Search"></td>
       					       </tr>
                            
                             
                          </table>
                          </form>
						</div>
                       <?php
					 if(isset($_POST['search_travel']))
					 {
					 if(isset($rt))
					 {
                   ?>
               
               
               <div style="margin-left:100px;margin-right:100px;">
                            <table class="table">
                              <tr>
                                  <th>Vehicle</th>
                                  <th>Facility Type</th>
                                  <th>Seat Type</th>
                                  <th>Depart Time</th>
								  <th>Arrive Time</th>
								  <th>Via </th>
								  <th>Price</th>
                                  <th>Select</th>
                              </tr>
                               <?php
							  }
							  else
							  {
							  ?>
							  <font color="#FF0000">We are Sorry..!!!<h3></h3></font>
							  <?php
							  }
							  }?>
                               <?php
							   if(isset($rt))
							   {
								foreach($rt as $r)
								{
									?>
                              <tr>
                              	  <td><?php echo $r->Vehicle_type_name;?>(<?php echo $r->Seat_mode;?>)</td>
                                  <td><?php echo $r->Facility_type_name;?></td>
                                  <td><?php echo $r->Seat_type_name;?></td>
                                  <td><?php echo $r->De_time;?></td>
                                  <td><?php echo $r->Ar_time;?></td>
                                  <td><?php echo $r->Via_route;?></td>
                                  <td><?php echo $r->Price;?></td>
                                  <td><a href="daily travel detail booking.php?Daily_route_id=<?php echo $r->Daily_route_id;?>">Select</a></td>
       					       </tr>
                            <?php
								}
								?>
														</div>
<?php
							   }
								?>
                             
                          </table>
                      </section>

<?php
  include ('footer.php');
?> </div>
</body>
</html>


