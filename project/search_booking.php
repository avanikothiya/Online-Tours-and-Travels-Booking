
<?php

ob_start();
  include ('control1.php');
include ('user_header.php');
//include ('header1.php');	 
  
	session_start();
	
	     //$u_name = $_SESSION['user_id'];
?>


  <body>
  <h3 align="right">Welcome <?php /*?><?php echo $u_name; ?><?php */?></h3>
  <div id="wrapper" align="center">
  
  <form align="center" method="post">
	<table align="center" width="425" height="231">
    <tr><td><h3 align="center">Search for Buses</h4></td></tr>
	
	                             <tr>
								 <td>From</td>
								 <td>          <select class="form-control m-bot15" name="From_place">
                                           <?php
								foreach($c as $r)
								{
									?>
                                <option value="<?php echo $r->From_place;?>" Required><?php echo $r->From_place;?></option>
                               <?php
								}
								?>
                                          </select></td>
                                 </tr>
								 <tr>
								 <td>To</td>
								 <td>          <select class="form-control m-bot15" name="To_place">
                                           <?php
								foreach($c as $r)
								{
									?>
                                <option value="<?php echo $r->To_place;?>" Required><?php echo $r->To_place;?></option>
                               <?php
								}
								?>
                                          </select></td>
                                 </tr>
								 	
	<tr>
	<td>Date</td><td><input type="Date" class="form-control" placeholder="15/01/2017" autofocus name="date" border="2"  Required></td>
	</tr>
	
<?php


if(isset($_REQUEST['Next']))
{
$submit = $_REQUEST['Next'];
$From_place = $_REQUEST['From_place'];
$To_place = $_REQUEST['To_place'];
$date = $_REQUEST['date'];
$_SESSION['From_place'] = $From_place;
$_SESSION['To_place'] = $To_place;
$_SESSION['date'] = $date;
header("location:display_daily_booking.php");
//header("Refresh:100;url=display_daily_booking.php");

}

?>	
	<tr>
	<td align="center"><input type="submit" class="btn btn-primary btn-lg btn-block"  name="Next" value="Next">
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

<?php
include ('footer.php');
ob_flush();
?>

  </body>
</html>
