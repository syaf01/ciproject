<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Admin : Change password</title>

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
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <!-- Start Appointment -->
	  <div id="appointment" class="appointment-main"> 
		  <div class="container">
			  <div class="row">
				  <div class="col-lg-12">
					  <div class="title-box">
						  <h2>Change Password</h2>
					  </div>
				  </div>
        </div>
      
        <div class="row">
			    <div class="col-lg-12 col-md-12">
				    <div class="well-block">
              <!---- Success Message ---->
              <?php if ($this->session->flashdata('success')) { ?>
                <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
              <?php } ?>
            </div>

            <!---- Error Message ---->
            <?php if ($this->session->flashdata('error')) { ?>
              <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
            <?php } ?> 

            <?php echo form_open('admin/Change_password');?>

            <div class="row">
              <div class="col-md-12">
                <div class="form-group"> 
                  <?php echo form_password(['name'=>'currentpassword','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('currentpassword')]);?>
                  <?php echo form_label('Current Password', 'currentpassword'); ?>
                  <?php echo form_error('currentpassword',"<div style='color:red'>","</div>");?>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <?php echo form_password(['name'=>'password','id'=>'password','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('password')]);?>
                  <?php echo form_label('New Password', 'password'); ?>
                  <?php echo form_error('password',"<div style='color:red'>","</div>");?>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <?php echo form_password(['name'=>'confirmpassword','id'=>'confirmpassword','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('confirmpassword')]);?>
                  <?php echo form_label('Confirm Password', 'confirmpassword'); ?>
                  <?php echo form_error('confirmpassword',"<div style='color:red'>","</div>");?>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <?php echo form_submit(['name'=>'chnagepwd','value'=>'Change','class'=>'btn btn-danger btn-block']); ?>
                </div>
              </div>
            </div>

            <?php echo form_close();?>
          </div>
        </div>
      </div>
    </div>

    <!-- Sticky Footer -->
    <?php include APPPATH.'views/admin/includes/footer.php';?>

    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>
</html>
