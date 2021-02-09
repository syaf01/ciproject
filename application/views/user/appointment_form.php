<!DOCTYPE html>
<html lang="en">

<head>
    <title>User : Schedule an appointment</title>

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
    <?php echo link_tag('assests/css/custom14.css'); ?>
    <?php echo link_tag('assests/css/bootstrap-datepicker.min.css'); ?> 

    <!-- Custom styles for this template-->
    <?php echo link_tag('assests/css/sb-admin.css'); ?>
</head>
<body id="page-top">
    <?php include APPPATH.'views/user/includes/header.php';?>

    <!-- Start Appointment -->
	<div id="appointment" class="appointment-main"> 
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Appointment</h2>
						<p>Schedule an appointment now!</p>
					</div>
				</div>
			</div>
            <div class="row">
			    <div class="col-lg-12 col-md-12">
				    <div class="well-block">
                        <form action="<?php echo $action; ?>" method="post">
                        <?php echo form_open('user/Appointment/update');?>
                            <!-- Form start -->
                            <div class="row">
                                <div class="col-md-12"> 
	                                <div class="form-group">
                                        <label for="int">DonateId <?php echo form_error('donateId') ?></label>
                                        <input type="text" class="form-control" name="donateId" id="donateId" placeholder="DonateId" value="<?php echo $donateId; ?>" />
                                    </div>
                                </div>  

                                <div class="col-md-12"> 
	                                <div class="form-group">
                                        <label for="varchar">Blood Drive <?php echo form_error('bloodDrive') ?></label>
                                        <input type="text" class="form-control" name="bloodDrive" id="bloodDrive" placeholder="BloodDrive" value="<?php echo $bloodDrive; ?>" />
                                    </div>
                                </div> 

                                <div class="col-md-12">
	                                <div class="form-group" id="datetimepicker1" inline="true"> 
                                        <label for="date">Request Date <?php echo form_error('request_date') ?></label>
                                        <input placeholder="Select date" type="text" class="form-control datepicker" name="request_date" id="datetimepicker1" value="<?php echo $request_date; ?>" />
                                    </div>
                                </div>

                                <div class="col-md-12">
	                                <div class="form-group">
                                        <label for="comment">Comment <?php echo form_error('comment') ?></label>
                                        <textarea class="form-control" rows="3" name="comment" id="comment" placeholder="Comment"><?php echo $comment; ?></textarea>
                                    </div>
                                </div>

	                            <button type="submit" class="btn btn-danger"><?php echo $button ?></button> 
	                            <a href="<?php echo site_url('user/appointment') ?>" class="btn btn-default">Cancel</a> 
                            </div>
	                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker();
        });
    </script>

    <!-- Sticky Footer --> 
    <?php include APPPATH.'views/user/includes/footer.php';?>
	
	<a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	<!-- ALL JS FILES -->
	<script src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assests/js/popper.min.js'); ?>"></script>
	<script src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/bootstrap-datepicker.min.js'); ?>"></script>

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
    <script> src="<?php echo base_url('assests/js/custom13.js'); ?>"></script>
</body>
</html>