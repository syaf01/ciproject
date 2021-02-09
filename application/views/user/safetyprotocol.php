<!DOCTYPE html>
<html lang="en">

<head>
    <title>User : Covid-19 safety protocols</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assests/img/faviconcopy.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assests/img/apple-touch-icon.png');?>">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS-->
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
    <?php echo link_tag('assests/css/custom13.css'); ?>
    <?php echo link_tag('assests/css/custom18.css'); ?>  
    <?php echo link_tag('assests/css/custom21.css'); ?> 
    <!-- Custom styles for this template-->  
    <?php echo link_tag('assests/css/sb-admin.css'); ?>

</head>

  <body id="page-top">
   <?php include APPPATH.'views/user/includes/header.php';?>    
    <div id="wrapper">
        <div id="content-wrapper">

            <div class="tm-section-2"> 
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="tm-section-title">Share your health</h2> 
                            <h4><p class="tm-color-white tm-section-subtitle">As Coronavirus concerns continue, we need healthy blood donors more than ever</p></h4>
                            <br>
                        </div>                
                    </div>
                </div>        
            </div>
            <br>
            <br>

            <div class="tm-section tm-position-relative">   
                <div class="container tm-pt-5 tm-pb-4">
                    <!-- Left-aligned media object -->
                    <div class="media">
                        <div class="media-left">
                            <img src="<?php echo base_url('assests/img/donor.png');?>" class="media-object" style="width:150px">
                        </div>
                        <div class="media-body">
                            <div class="col text-center">
                                <h3 class="tm-color-primary tm-article-title-1"><b>Is it safe to give right now?</b></h3>
                                <p>Each  blood drive and hospital follows high standards of safety and infection control. We are taking precautions to 
                                    help ensure the safety of our employees, volunteers and donors.</p>
                            </div>
                        </div>
                    </div>
                    <hr> 
  
                    <!-- Right-aligned media object -->
                    <div class="media">
                        <div class="media-body">
                            <div class="col text-center">
                                <h3 class="tm-color-primary tm-article-title-1"><b>Safety at blood drives</b></h3>
                                <p>Our staff implemented added precautions to ensure blood drives and hospitals 
                                    are safe for donors and staff.</p>
                            </div>
                        </div>
                        <div class="media-right">
                            <img src="<?php echo base_url('assests/img/shield.png');?>" class="media-object" style="width:150px">
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <br>

            <div id="blog" class="blog-box">
                <div class="container">
                    <center><div class="row">
                        <div class="col-sm-4">
                            <img src="<?php echo base_url('assests/img/mask.png');?>" class="media-object" style="width:120px">
                            <br>
                            <br>
                            <h3><b>Requiring face coverings or masks</b></h3>
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url('assests/img/hospital-bed2.png');?>" class="media-object" style="width:120px">
                            <br>
                            <br>
                            <h3><b>Spacing beds 6 feet apart</b></h3>
                        </div>
                        <div class="col-sm-4">
                            <img src="<?php echo base_url('assests/img/sanitize.png');?>" class="media-object" style="width:120px">
                            <br>
                            <br>
                            <h3><b>Having hand sanitizer available</b></h3>
                        </div>
                    </div></center>
                    <br>
                    <br>
                    <center><div class="row">
                        <div class="col-sm-6">
                            <img src="<?php echo base_url('assests/img/therm.png');?>" class="media-object" style="width:120px">
                            <br>
                            <br>
                            <h3><b>Donor and staff temperature checks before entering</b></h3>
                        </div>
                        <div class="col-sm-6">
                            <img src="<?php echo base_url('assests/img/alcohol.png');?>" class="media-object" style="width:120px">
                            <br>
                            <br>
                            <h3><b>Wiping down donor touched areas</b></h3>
                        </div>
                    </div></center> 
                </div>
            </div>
            <br>
            <br>

            <div class="tm-section tm-position-relative">   
                <div class="container tm-pt-5 tm-pb-4">
                    <br>
                    <br>
                    <div class="col text-center">
                        <h2 class="tm-section-title-title"><b>If you are healthy and well, we are urging you to make a donation appointment.</b></h2>
                        <br>
                        <div class="buttons">
                            <a href="<?php echo site_url('user/Appointment/create'); ?>"><button class="raise">SCHEDULE NOW</button></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Sticky Footer -->
    <?php include APPPATH.'views/user/includes/footer.php';?>

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
