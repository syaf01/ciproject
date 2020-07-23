<!DOCTYPE html>
<html lang="en">

<head>
<title>My Profile</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>

  </head>

  <body id="page-top">

   <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">

          <!-- Page Content -->
          <h1>My Profile</h1>
          <hr>
<!---- Success Message ---->
<?php if ($this->session->flashdata('success')) { ?>
<p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
</div>
<?php } ?>

<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="color:red; font-size:18px;"><?php echo $this->session->flashdata('error');?></p>
<?php } ?> 



 <?php echo form_open('user/User_profile/updateprofile');?>

<p> <strong>Reg Date :</strong> <?php echo $profile->regDate; ?>


            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'firstName','id'=>'firstName','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('firstName',$profile->firstName)]);?>
<?php echo form_label('Enter your first name', 'firstName'); ?>
<?php echo form_error('firstName',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>


                  <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'lastName','id'=>'lastName','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('lastName',$profile->lastName)]);?>
<?php echo form_label('Enter your  last name', 'lastName'); ?>
<?php echo form_error('lastName',"<div style='color:red'>","</div>");?>

                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'age','id'=>'age','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('age',$profile->age)]);?>
<?php echo form_label('Enter age', 'age'); ?>
<?php echo form_error('age',"<div style='color:red'>","</div>");?>

          </div>
            </div>
              </div>
                </div>

                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'icNo','id'=>'icNo','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('icNo',$profile->icNo)]);?>
<?php echo form_label('Enter IC Number', 'icNo'); ?>
<?php echo form_error('icNo',"<div style='color:red'>","</div>");?>

          </div>
            </div>
              </div>
                </div>

                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'gender','id'=>'gender','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('gender',$profile->gender)]);?>
<?php echo form_label('Enter gender', 'gender'); ?>
<?php echo form_error('gender',"<div style='color:red'>","</div>");?>

          </div>
            </div>
              </div>
                </div>

                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'bloodType','id'=>'bloodType','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('bloodType',$profile->bloodType)]);?>
<?php echo form_label('Enter your type of blood', 'bloodType'); ?>
<?php echo form_error('bloodType',"<div style='color:red'>","</div>");?>

          </div>
            </div>
              </div>
                </div>

                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">

<?php echo form_input(['name'=>'address','id'=>'address','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('address',$profile->address)]);?>
<?php echo form_label('Enter your address', 'address'); ?>
<?php echo form_error('address',"<div style='color:red'>","</div>");?>

          </div>
            </div>
              </div>
                </div>

            <div class="form-group">
               <div class="form-row">
                    <div class="col-md-6">
              <div class="form-label-group">

<?php echo form_input(['name'=>'emailId','id'=>'emailId','class'=>'form-control','autofocus'=>'autofocus','readonly'=>'true','value'=>set_value('emailId',$profile->emailId)]);?>
<?php echo form_label('Enter valid email id', 'emailId'); ?>
<?php echo form_error('emailId',"<div style='color:red'>","</div>");?>

              </div>
            </div>
</div>
</div>
     <div class="form-group">
       <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">

<?php echo form_input(['name'=>'mobileNumber','id'=>'mobileNumber','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('mobileNumber',$profile->mobileNumber)]);?>
<?php echo form_label('Enter Mobile Number', 'mobileNumber'); ?>
<?php echo form_error('mobileNumber',"<div style='color:red'>","</div>");?>

              </div>
            </div>
  </div>
</div>

       <div class="form-row">
            <div class="col-md-6">  
            <?php echo form_submit(['name'=>'Update','value'=>'Update','class'=>'btn btn-danger btn-block']); ?>
</div>
</div>

 


 <?php echo form_close();?>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/user/includes/footer.php';?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
  <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>

  </body>

</html>
