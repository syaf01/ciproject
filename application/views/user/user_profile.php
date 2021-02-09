<!DOCTYPE html>
<html lang="en">

  <head>
    <title>User : My profile</title>

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
              <h1 style="margin-top:0px"><center><big><?php echo $profile->lastName; ?>'s Profile</big></center></h1>
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

              <!---- Error Message ---->
              <?php if ($this->session->flashdata('error')) { ?>
                <p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
              <?php } ?> 
            </div>

            <?php echo form_open('user/User_profile/updateprofile');?>

            <p><strong>Reg Date :</strong><?php echo $profile->regDate; ?> 

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">     
                    <?php echo form_input(['name'=>'firstName','id'=>'firstName','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('firstName',$profile->firstName)]);?>
                    <?php echo form_label('Enter your first name', 'firstName'); ?>
                    <?php echo form_error('firstName',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'lastName','id'=>'lastName','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('lastName',$profile->lastName)]);?>
                    <?php echo form_label('Enter your  last name', 'lastName'); ?>
                    <?php echo form_error('lastName',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'age','id'=>'age','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('age',$profile->age)]);?>
                    <?php echo form_label('Enter age', 'age'); ?>
                    <?php echo form_error('age',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'icNo','id'=>'icNo','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('icNo',$profile->icNo)]);?>
                    <?php echo form_label('Enter IC Number', 'icNo'); ?>
                    <?php echo form_error('icNo',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'gender','id'=>'gender','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('gender',$profile->gender)]);?>
                    <?php echo form_label('Enter gender', 'gender'); ?>
                    <?php echo form_error('gender',"<div style='color:red'>","</div>");?>

                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'bloodType','id'=>'bloodType','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('bloodType',$profile->bloodType)]);?>
                    <?php echo form_label('Enter your type of blood', 'bloodType'); ?>
                    <?php echo form_error('bloodType',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'address','id'=>'address','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('address',$profile->address)]);?>
                    <?php echo form_label('Enter your address', 'address'); ?>
                    <?php echo form_error('address',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'emailId','id'=>'emailId','class'=>'form-control','autofocus'=>'autofocus','readonly'=>'true','value'=>set_value('emailId',$profile->emailId)]);?>
                    <?php echo form_label('Enter valid email id', 'emailId'); ?>
                    <?php echo form_error('emailId',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_input(['name'=>'mobileNumber','id'=>'mobileNumber','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('mobileNumber',$profile->mobileNumber)]);?>
                    <?php echo form_label('Enter Mobile Number', 'mobileNumber'); ?>
                    <?php echo form_error('mobileNumber',"<div style='color:red'>","</div>");?>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group"> 
                    <?php echo form_submit(['name'=>'Update','value'=>'Update','class'=>'btn btn-danger btn-block']); ?>
                  </div>
                </div>
              </div>

            </div>
            <?php echo form_close();?>
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

  </body>

</html>
