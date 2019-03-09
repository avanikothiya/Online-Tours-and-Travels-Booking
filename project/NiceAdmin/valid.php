<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>

<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="jquery.bvalidator.js" type="text/javascript"></script>

<script type="text/javascript"> 
    $(document).ready(function () {
	
        $('#frm').bValidator();
    });
</script> 
<link href="bvalidator.css" type="text/css" rel="stylesheet"/>

</head>

<body>
<br />
<br />
<form method="post" id="frm">
 <table border="1" align="center">
 <tr>
    <td>Name:</td>
	<td><input type="text" name="name"  data-bvalidator="required,alpha"></td>
 </tr>
 
 <tr>
    <td>Email:</td>
	<td><input type="text" name="email" data-bvalidator="required,email"></td>
 </tr>
 
 <tr>
    <td>Pass:</td>
	<td><input type="password" name="pass" data-bvalidator="required,minlength[5]"></td>
 </tr>
 

 <tr>
    <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
 </tr>
 </table>
</form>
</body>
</html>
