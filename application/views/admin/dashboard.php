<!DOCTYPE html>
<html lang="en"><!-- Basic -->
    <head>
	    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">    
   
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
        <!-- Site Metas -->
        <title>Admin : Dashboard</title>   
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Site Icons -->
        <link rel="shortcut icon" href="<?php echo base_url('assests/img/faviconcopy.ico');?>" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo base_url('assests/img/apple-touch-icon.png');?>">

        <!-- Bootstrap CSS -->
        <?php echo link_tag('assests/css/bootstrap.min.css'); ?>
        <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
        <!-- Custom fonts for this template-->
        <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
        <!-- Page level plugin CSS-->
        <?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
        <!-- Pogo Slider CSS -->
        <?php echo link_tag('assests/css/pogo-slider.min.css'); ?>
	    <!-- Site CSS -->
        <?php echo link_tag('assests/css/style.css'); ?>
        <!-- Responsive CSS -->
        <?php echo link_tag('assests/css/responsive.css'); ?>   
        <!-- Custom CSS -->
	    <?php echo link_tag('assests/css/customm.css'); ?>
        <?php echo link_tag('assests/css/custom22.css'); ?> 
        <!-- Custom styles for this template-->  
        <?php echo link_tag('assests/css/sb-admin.css'); ?>

    </head>

    <body>
        <?php include APPPATH.'views/admin/includes/header.php';?> 
        <div id="hospital" class="gallery-box"> 
		    <div class="container-fluid">
			    <div class="row">
				    <div class="col-lg-12"> 
					    <div class="title-box">
						    <h2>Total of User</h2>
					    </div>
				    </div>  
			    </div>
			
				<div class="col-md-3 col-sm-6"> 
					<div class="card-body text-center">  
                        <div class="button5" > 
                            <button class="btnOne btn default"> 	
                                <h2><b><?php echo htmlentities($tsevencount);?> Users</b></h2>
                                <div class="card-footer">
                                    <span>Registred in Last 10 Days</span>
                                </div>
							</button>
						</div>
                        <div class="button5" > 
                            <button class="btnOne btn default"> 	
                                <h2><b><?php echo htmlentities($tsevencount);?> Users</b></h2>
                                <div class="card-footer">
                                    <span>Registred in Last 10 Days</span>
                                </div>
							</button>
						</div>
                        <div class="button5" > 
                            <button class="btnOne btn default"> 	
                                <h2><b><?php echo htmlentities($tthirycount);?> Users</b></h2>
                                <div class="card-footer">
                                    <span>Registered in last 30 days</span>
                                </div>
							</button>
						</div>
					</div>
				</div>
		    </div>
        </div>
        <!-- Sticky Footer -->
        <?php include APPPATH.'views/admin/includes/footer.php';?>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <!-- Core plugin JavaScript-->
        <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
        <!-- Custom scripts for all pages-->
        <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>
        <script src="<?php echo base_url('assests/js/custom.js '); ?>"></script>
        <script src="<?php echo base_url('assests/js/custom15.js '); ?>"></script>

    </body>
</html>
