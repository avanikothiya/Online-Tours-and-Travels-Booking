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
<link rel="stylesheet" type="text/css" href="formcss.css" />

</head>

<body>
<div id="wrapper">

<form method="post">   
    <div class="contentform">
    	<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


    	<div class="leftcontact">
			      <font color="#0099FF"><h3>Give Your Feedback Here!!</h3></font><br>

              <div class="form-group">
			<p>Message <span>*</span></p>
			<span class="icon-case"><i class="fa fa-comments-o"><img src="img/mailid.png"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Verifiez votre saisie sur les champs : Le champ 'Message' doit etre renseigne."></textarea>
                <div class="validation"></div>
			</div>	

			<div class="form-group">
     			<input type="submit" value="Send" name="feedback_send">
				</div>
				
			
       </div> 

	
</form>
	<div class="rightcontact">	

<img src="images/1.jpg" height="300" width="400">
			</div>	
		
</div>
			
		

<?php
  include ('footer.php');
?>
</div>
</body>
</html>