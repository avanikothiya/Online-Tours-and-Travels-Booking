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
<!--<link rel="stylesheet" type="text/css" href="style.css" />-->
<link rel="stylesheet" type="text/css" href="formcss.css" />
</head>


<body >
<div id="wrapper" style="background-image:url(img/hero-image.jpg); height:50%;">																																																																																																																							
       		<font><h1>WelCome..!! <?php echo  $_SESSION['name'];?> </h1></font>
			
	</div>
	<div id="wrapper"> 
		<?php
		  include ('footer.php');
		?>
		</div>
</body>
</html>
