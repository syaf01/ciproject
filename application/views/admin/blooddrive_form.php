<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Blood Drive</title>

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
        <!-- Custom styles for this template-->
        <?php echo link_tag('assests/css/sb-admin.css'); ?>
    </head>
    <body id="page-top">
        <?php include APPPATH.'views/admin/includes/header.php';?>

        <div id="wrapper">
            <div id="content-wrapper"> 
                <div class="container-fluid"> 

                    <!--Table-->
                    <div class="container">
                        <center><h1 style="margin-top:0px"><?php echo $button ?> Blood Drive </h1></center>
                        <br>
                        <form action="<?php echo $action; ?>" method="post">
                            <div class="form-group">
                                <label for="varchar">Blood Drive's Name <?php echo form_error('dname') ?></label>
                                <input type="text" class="form-control" name="dname" id="dname" value="<?php echo $dname; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">Address <?php echo form_error('address') ?></label>
                                <input type="text" class="form-control" name="address" id="address" value="<?php echo $address; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">City <?php echo form_error('city') ?></label>
                                <input type="text" class="form-control" name="city" id="city" value="<?php echo $city; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="bigint">Postal Code <?php echo form_error('postalCode') ?></label>
                                <input type="text" class="form-control" name="postalCode" id="postalCode" value="<?php echo $postalCode; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="double">Longitude <?php echo form_error('longitude') ?></label>
                                <input type="text" class="form-control" name="longitude" id="longitude" value="<?php echo $longitude; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="double">Latitude <?php echo form_error('latitude') ?></label>
                                <input type="text" class="form-control" name="latitude" id="latitude" value="<?php echo $latitude; ?>" />
                            </div>
                            <input type="hidden" name="dId" value="<?php echo $dId; ?>" /> 
                            <button type="submit" class="btn btn-danger"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('admin/blooddrive') ?>" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Footer -->
        <?php include APPPATH.'views/admin/includes/footer.php';?>
        
        <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

        <!-- ALL JS FILES -->
        <script src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
        <!-- ALL PLUGINS -->
        <script src="<?php echo base_url('assests/js/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/jquery.pogo-slider.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/slider-index.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/smoothscroll.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/TweenMax.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/main.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/form-validator.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/contact-form-script.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/isotope.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/images-loded.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/customm.js'); ?>"></script>
    </body>
</html>