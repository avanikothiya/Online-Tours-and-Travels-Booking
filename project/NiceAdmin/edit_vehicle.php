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
					<h3 class="page-header"><i class="fa fa-file-text-o"></i> Edit Forms</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Edit Forms</li>
						<li><i class="fa fa-file-text-o"></i>Vehicle</li>
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
                              Vehicle
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal" method="post">
                                <div class="form-group">
                                      <label class="col-sm-2 control-label">Vehicle Type</label>
                                      <div class="col-sm-10">
                                                     <select class="form-control m-bot15" name="Vehicle_type_name" >
                                           <?php
								foreach($vehicle_type as $r)
								{
									if ($r->Vehicle_type_id==$fet->Vehicle_type_id)
									{
									
									?>
                                <option value="<?php echo $r->Vehicle_type_id;?>" selected="selected"><?php echo $r->Vehicle_type_name;?></option>
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
                                      <label class="col-sm-2 control-label">Per km Charge</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="Per_km_charge" value="<?php echo $fet->Per_km_charge;?>">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-sm-2 control-label">Minimum Charge</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="Minimum_charge" value="<?php echo $fet->Minimum_charge;?>">
                                      </div>
                                  </div>
                                 
                                  <div class="form-group" align="center">
                                   <input type="submit" class="btn btn-primary" name="edit_vehicle" value="Update">
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
            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
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
