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
<style>
div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60); /* For IE8 and earlier */
  }
</style>
</head>
  <body>
  <div id="wrapper">
  <?php
  if(isset($package_master))
  {
  ?>
                          <h1><font color="#0066CC">Available Packages</font></h1>
						  <div style="margin-left:100px;"><br><br>
							    <?php
								foreach($package_master as $r)
								{
									?>
                             	
			<div class="big_photo" >
				<a href="package_display.php?Package_id=<?php echo $r->Package_id;?>"><img src="NiceAdmin/master_img/<?php echo $r->master_img;?>" alt="" width="180" height="126" /></a><br><b><?php echo $r->Package_name?></b><br><font size="-1"><?php echo $r->Tour_name?></font><br><br><br></div>
				
							 <?php
								}
								?>	
    	</div>
		<?php
		}
		else
		{
		?>
		<font color="#FF0000"><h3>We are Sorry..!!!<br>Now!! Packages are not Available</h3></font>
		<?php
		}
		?>
					
                        
<?php
  include ('footer.php');
?></div>
</body>
</html>
