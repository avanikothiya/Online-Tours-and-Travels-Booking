<?php
	  /* include ('user_header.php');*/
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

<body background="img/login background.jpg" style="background-size: cover;

background-position: top center ;
background-attachment: fixed;">
<div id="wrapper">

 <h1>Log-In</h1>

<form method="post" style="background:rgba(0,0,0,0.0)">   
    <div class="contentform">
			  <div class="form-group">
			<p>Email Id <span>*</span></p>
			<span class="icon-case"><i class="fa fa-building-o"><img src="img/mailid.png"></i></span>
				        <input type="text" name="Email_id"  />
                <div class="validation"></div>
                </div> 

            <div class="form-group">
			<p>Password <span>*</span></p>
			<span class="icon-case"><i class="fa fa-info"><img src="img/Keys_icon_web.png"></i></span>
                <input type="password" name="Password"/>
			</div>  
			<div class="form-group">
			<input type="submit" name="login" value="Login">
			</div>
			<center>New Customer <a href="registration.php"><u>Sign Up</u></a> Here!!</center>
       </div></form> 


	<!--<div class="rightcontact">	
<br><br><br><br>

			</div>	-->
		

					


</div>
</body>
</html>