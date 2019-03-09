<?php
	include ('control.php');
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

    <title>Form Component | Creative - Bootstrap 3 Responsive Admin Template</title>

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
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- date picker -->
    
    <!-- color picker -->
    
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

  </head>
  <body>

  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php
	  		include 'header.php';
	  ?>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <?php
		  		include 'sidebar.php';
		  ?>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Edit Daily Route Detail</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-file-text-o"></i>Edit Daily Route Detail</li>
					</ol>
				</div>
			</div>
              <div class="row">
                  
              </div>
              <!-- Basic Forms & Horizontal Forms-->
              
              <div class="row">
                  <div class="col-lg-10">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Daily Route Detail
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" method="post" id="frm">
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">From Place</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="From_place" value="<?php echo $fet->From_place;?>" data-bvalidator="required,alpha">
                                      </div>
                                  </div>
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">To Place</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="To_place" value="<?php echo $fet->To_place;?>" data-bvalidator="required,alpha">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Facility Type</label>
                                      <div class="col-sm-10">
                                          <select class="form-control m-bot15" name="Facility_type_name">
                                           <?php
								foreach($f as $r)
								{
									if($r->Facility_type_id==$fet->Facility_type_id)
									{
									?>
                                <option value="<?php echo $r->Facility_type_id;?>" selected><?php echo $r->Facility_type_name;?></option>
                                <?php
									}else
									{
										?>
                                        <option value="<?php echo $r->Facility_type_id;?>" ><?php echo $r->Facility_type_name;?></option>
                               <?php
								}
								}
								?>
                                          </select>
                                 
                                      </div>
                                  </div>
                                   <div class="form-group">
								   <label class="col-sm-2 control-label">Seat Type</label>
                                      <div class="col-sm-10">
                                       <select class="form-control m-bot15" name="Seat_type_name">
                                         <label class="col-sm-2 control-label">Seat Type</label>
                                      <div class="col-sm-10">
                                           <?php
								foreach($seat_type as $r)
								{
									if($r->Seat_type_id==$fet->Seat_type_id)
									{
									?>
                                <option value="<?php echo $r->Seat_type_id;?>" selected><?php echo $r->Seat_type_name;?></option>
                               <?php
								}
								else
								{
								?>
                                <option value="<?php echo $r->Seat_type_id;?>"><?php echo $r->Seat_type_name;?></option>
                                 <?php
								}
								}
								?>
                                          </select>
                                      </div>
                                  </div>
								   <div class="form-group">
								   <label class="col-sm-2 control-label">Vehicle Type</label>
                                      <div class="col-sm-10">
                                       <select class="form-control m-bot15" name="Vehicle_type_name">
                                         <label class="col-sm-2 control-label">Vehicle Type</label>
                                      <div class="col-sm-10">
                                           <?php
								foreach($vehicle_type as $r)
								{
									if($r->Vehicle_type_id==$fet->Vehicle_type_id)
									{
									?>
                                <option value="<?php echo $r->Vehicle_type_id;?>" selected><?php echo $r->Vehicle_type_name;?></option>
                               <?php
								}
								else
								{
								?>
                                <option value="<?php echo $r->Vehicle_type_id;?>"><?php echo $r->Vehicle_type_name;?></option>
                                 <?php
								}
								}
								?>
                                          </select>
                                      </div>
                                  </div>
                                  
                                    <div class="form-group">
                                      <label class="col-sm-2 control-label">Depart_time</label>
                                      <div class="col-sm-10">
                                          <input type="time" class="form-control" name="Depart_time" value="<?php echo $fet->De_time;?>" data-bvalidator="required">
                                      </div>
									  </div>
									   <div class="form-group">
                                      <label class="col-sm-2 control-label">Arrive_time</label>
                                      <div class="col-sm-10">
                                          <input type="time" class="form-control" name="Arrive_time" value="<?php echo $fet->Ar_time;?>"data-bvalidator="required">
                                      </div>
                                 </div>
								
                                      <div class="form-group">
                                      <label class="col-sm-2 control-label">Date</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="Date" value="<?php echo $fet->Date;?>" data-bvalidator="required">
                                      </div>
									  </div>
									   <div class="form-group">
                                      <label class="col-sm-2 control-label">Price</label>
                                      <div class="col-sm-10">
                                          <input type="number" class="form-control" name="Price" value="<?php echo $fet->Price;?>" data-bvalidator="required">
                                      </div>
									  </div>
									   <div class="form-group">
                                      <label class="col-sm-2 control-label">Via_route</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="Via_route" value="<?php echo $fet->Via_route;?>" data-bvalidator="required">
                                      </div>
									  </div>
                                  <div class="form-group" align="center">
                                   <input type="submit" class="btn btn-primary" name="edit_daily_route_detail" value="Update">
                                  </div>
                              </form>

                          </div>
                      </section>
                  </div>
                  
              </div>
             
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <div class="text-right">
        <div class="credits">
            <!-- 
                All the links in the footer should remain intact. 
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
            -->
        <!--    <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        </div>
    </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
  <!--  <script src="js/jquery.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <!-- jquery ui -->
    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>

    <!--custom checkbox & radio-->
    <script type="text/javascript" src="js/ga.js"></script>
    <!--custom switch-->
    <script src="js/bootstrap-switch.js"></script>
    <!--custom tagsinput-->
    <script src="js/jquery.tagsinput.js"></script>
    
    <!-- colorpicker -->
   
    <!-- bootstrap-wysiwyg -->
    <script src="js/jquery.hotkeys.js"></script>
    <script src="js/bootstrap-wysiwyg.js"></script>
    <script src="js/bootstrap-wysiwyg-custom.js"></script>
    <!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <!-- custom form component script for this page-->
    <script src="js/form-component.js"></script>
    <!-- custome script for all page -->
    <script src="js/scripts.js"></script>


  </body>
</html>
