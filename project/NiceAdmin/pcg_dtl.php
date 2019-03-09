<?php
  include ('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="jquery.bvalidator.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function() 
		{
         	$ ('#frm').bValidator();  
        });
		</script>
        <link href="bvalidator.css" type="text/css" rel="stylesheet"/>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body>  <form align="center" method="post">
	
	<table align="center" width="425" height="231">
	<tr>
	<td width="54">Name</td><td width="142"><input type="text" class="form-control" placeholder="Name" autofocus name="Name" border="2"  ></td>
	</tr>
	
	<tr>
	<td>Description</td><td><input type="textarea" class="form-control" placeholder="description" autofocus name="description" border="2"  ></td>
	</tr>
	
	<!--<tr >
	<td>Address</td>
	<td><input type="textarea" class="form-control" placeholder="Address" name="Address cols="105" rows="4"></td>
	</tr>-->
	 
      <tr>
	  	<td>Start Date</td><td><input id="cp1" type="date" size="16" class="form-control" name="Start_date" data-bvalidator="required">
		</td> 
	</tr>
     <tr>
	  	<td>End
         Date</td><td><input id="cp1" type="date" size="16" class="form-control" name="Start_date" data-bvalidator="required">
		</td> 
	</tr>
	<tr>
	  <td>Rate_per_person</td><td><input type="number" class="form-control" placeholder="Rate_per_person<" name="Rate_per_person<" border="2" >
		</td> 
	</tr>
    <tr>
	  <td>Child_rate</td><td><input type="number" class="form-control" placeholder="Child_rate<" name="Child_rate<" border="2" >
		</td> 
	</tr>
    <tr>
	  <td>Couple_rate</td><td><input type="number" class="form-control" placeholder="Couple_rate<" name="Couple_rate<" border="2" >
		</td> 
	</tr>
	
	
<!--	<tr>
    	<td colspan="2">Massage<input type="radio" class="form-control" placeholder="Massage" name="Massage" border="2" >
		Query<input type="radio" class="form-control" placeholder="Query" name="Query" border="2" >
		Suggestion<input type="radio" class="form-control" placeholder="Suggestion" name="Suggestion" border="2" ></td>
	</tr>
	-->
	<tr>
	<td>Your comment</td>
	<td><textarea class="form-control" id="textarea" placeholder="" border="2" rows="3" cols="22" >	 </textarea>. </td>
	</tr>
	
	
	<tr>
	<td align="center"><input type="submit" class="btn btn-primary btn-lg btn-block"  name="Submit" value="Submit">
	<td align="center"> <input type="submit" class="btn btn-info btn-lg btn-block" name="Submit" value="Cancle">
</td>
</tr>
</table>
</form>
    <div class="text-right"><div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <!--<a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
            </div>
        </div>
    </div>


  </body>
</html>