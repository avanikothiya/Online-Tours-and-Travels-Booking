<?php
ob_start();
 //include ('header.php');
  //include ('control1.php');
  include ('dbconnection.php');
  session_start();
  error_reporting(0);
  
		$cust_id = $_SESSION['cust_id'];
	$cname = $_SESSION['cname'];
	$from_place = $_SESSION['From_place']; 
	$to_place = $_SESSION['To_place'];
	$facility_name = $_SESSION['facility_name'];
	$seat_type = $_SESSION['seat_type'];
	$depart_time = $_SESSION['depart_time'];
	$arrive_time = $_SESSION['arrive_time'];
	$available_seat = $_SESSION['available_seat'];
	$price = $_SESSION['price'];
	$via_route = $_SESSION['via_route'];
	$number = $_SESSION['number'];
	$total_price = round($price * $number);
		
	if(isset($_REQUEST['home'])){
	
        //header("Refresh:1;url=index.php");
		//echo "test heere
		header("location:home.php");
	
	  
	}	  
	  
	/*if(isset($_REQUEST['confirm'])){
		
		mysql_query("INSERT INTO daily_booking(Daily_booking,Cust_id,Date,Daily_route_id,No_of_seat,Total_amount,payment) VALUES(Null,'123456','date(Y-m-d h:i:s)','$number','$total_price','COD')");	
		
		//echo "test here";
		header("location:index.php");
	
	}*/
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Travel Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-5">
<link rel="stylesheet" type="text/css" href="style1.css" />

    <script src="jquery-2.1.3.min.js" type="text/javascript"></script>
    <script src="jquery.bvalidator.js" type="text/javascript"></script>
    <script type="text/javascript">
		$(document).ready(function() 
		{
         	$ ('#frm').bValidator();  
        });
		
	function cal()
  {
      window.print();
	  window.location.href='index.php';
	
  }
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

  <body>
  
  <div id="wrapper" align="center">
  
  <form align="center" method="post">
                          <table class="table" align="center">
                              
                              <tbody>								
								<tr>
                                 <!-- <td><input name="sample-checkbox-02" id="checkbox-03" value="1" type="checkbox" /></td>-->
                                  <td>User_name</td><td><?php echo $cname;?></td>
								  </tr>
								  <tr>
								  <td>user_id</td><td><?php echo $cust_id;?></td>
								  </tr>
								  <tr>
								  <td>From place</td>
								  <td><?php echo $from_place;?></td>
								  </tr>
								  <tr> 
								  <td>To place</td>
								  <td><?php echo $to_place;?></td>
								  </tr>
								  <tr>
								  <td>Facility type</td>
								  <td><?php echo $facility_name;?></td>
								  </tr>
								  <tr>
								  <td>Seat type</td>
								  <td><?php echo $seat_type;?></td>
								  </tr>
								  <tr>
								  <td>Depart time</td>
								  <td><?php echo $depart_time;?></td>
								  </tr>
								  <tr>
								  <td>Arrive Time</td>
								  <td><?php echo $arrive_time;?></td>
								  </tr>
								  <tr>
								  <td>Via route</td>
								  <td><?php echo $via_route;?></td>
								  </tr>
								  <tr>
								  <td>No of Person</td>
								  <td><?php echo $number;?></td>
								  </tr>
								  <tr>
								  <td>Total Amount</td>
								  <td><?php echo "Rs. ".$total_price;?></td>
								  </tr>
								  <tr>
								  <td><input type="submit" class="btn btn-primary btn-lg btn-block"  name="print" value="Print Invoice" onclick="cal()"></td>
								  </tr>
								  
								  <tr>
								  <td><input type="submit" class="btn btn-primary btn-lg btn-block"  name="home" value="GO To Home"></td>
								  </tr>
								  
                              </tbody>
                          </table>
                      </section>
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

<?php
//include ('footer.php');
//ob_flush();
?>