<?php
	  
	   include ('control.php');
	?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Travel Store</title>
<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="jquery.bvalidator.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function() 
		{
         	$ ('#frm').bValidator();  
        });
		</script>
        <link href="NiceAdmin/bvalidator.css" type="text/css" rel="stylesheet"/>
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
   
 <h1>Registration</h1>
  
  <form method="post" style="background:rgba(0,0,0,0.0)" id="frm">   
    <div class="contentform">
 	  <div class="leftcontact">
			      <div class="form-group">
			        <p>Name <span>*</span></p>
			        <span class="icon-case"><i class="fa fa-male"><img src="img/person.png"></i></span>
				        <input type="text" name="Cust_name" data-bvalidator="required,alpha" />     
       </div> 

            <div class="form-group">
			<p>Address <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comments-o"><img src="img/home.png"></i></span>
                <textarea name="Cust_address" rows="14" data-bvalidator="required"></textarea>
			</div>	
		<div class="form-group">
			<p>Date of Birth <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"><img src="img/dateicon.png"></i></span>
                <input type="date" name="Date_of_birth" data-bvalidator="required" />
		</div>
		<div class="form-group">
			<p>Gender <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-comments-o"><img src="img/gender-icon-grey.png"></i></span>
  <input type="radio"  name="Gender" value="Male"  style="height:20px;margin-left:-70px;"><font style="margin-left:-90px;height:50px;">Male</font><br><br>
   <input type="radio"  name="Gender" value="Female" style="height:20px;margin-left:-70px;"><font style="margin-left:-90px;">Female</font>

</div>
		 
	</div>

	<div class="rightcontact">	
			<div class="form-group">
			<p>Organization Name  <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-envelope-o"><img src="img/organization.png"></i></span>
                <input type="text" name="Organization_name" data-bvalidator="required" />
                <div class="validation"></div>
			</div>	
			<div class="form-group">
			<p>Email Id <span>*</span></p>
			<span class="icon-case"><i class="fa fa-building-o"><img src="img/mailid.png"></i></span>
				<input type="email" name="Email_id" data-bvalidator="required,email"/>
			</div>	

			<div class="form-group">
			<p>Contact Number <span>*</span></p>	
			<span class="icon-case"><i class="fa fa-phone"><img src="img/cnt.png"></i></span>
				<input type="text" name="Contact_no" data-bvalidator="required,number"/>
			</div>

			<div class="form-group">
			<p>Password <span>*</span></p>
			<span class="icon-case"><i class="fa fa-info"><img src="img/Keys_icon_web.png"></i></span>
                <input type="password" name="Password" data-bvalidator="required,min[5],max[8],number" />
			</div>
<input type="submit" name="register" value="submit">
	
			
		
			
</div>
	</div>
		</form>


</div>
</body>
</html>
