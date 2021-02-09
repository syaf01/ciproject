<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin : User detail</title>
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

    <link rel="stylesheet" href="<?php echo base_url('leaflet/leaflet.css');?>" />
    <script src="<?php echo base_url('leaflet/leaflet.js'); ?>"></script>
  </head>
  <body id="page-top">
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">
      <div id="content-wrapper"> 
        <div class="container-fluid">   
          <div class="container"> 
            <h1 style="margin-top:0px"><center><big><?php echo $ud->firstName; ?><?php echo $ud->lastName; ?>'s Profile</big></center></h1> 
            <br>
            <table class="table"> 
              <tr><td><strong>Reg Date</strong></td><td><?php echo $ud->regDate; ?></td></tr>
              <tr><td><strong>First Name</strong></td><td><?php echo $ud->firstName; ?></td></tr>
              <tr><td><strong>Last Name</strong></td><td><?php echo $ud->lastName; ?></td></tr>
              <tr><td><strong>Age</strong></td><td><?php echo $ud->age; ?></td></tr>
              <tr><td><strong>I/C Number</strong></td><td><?php echo $ud->icNo; ?></td></tr>
              <tr><td><strong>Gender</strong></td><td><?php echo $ud->gender; ?></td></tr>
              <tr><td><strong>Type of Blood</strong></td><td><?php echo $ud->bloodType; ?></td></tr>
              <tr>
                <td><strong>Address</strong></td>
                <td><?php echo $ud->address; ?>&nbsp<?php echo $ud->postalCode; ?>&nbsp<?php echo $ud->city; ?></td>
              </tr>
              <tr><td><strong>Mobile Number</strong></td><td><?php echo $ud->mobileNumber; ?></td></tr>
              <tr><td><strong>Email id</strong></td><td><?php echo $ud->emailId; ?></td></tr>
              <tr><td><strong>Last Updation Date</strong></td><td><?php echo $ud->lastUpdationDate; ?></td></tr>
              <tr><td><a href="<?php echo site_url('admin/Manage_users') ?>" class="btn btn-danger">Cancel</a></td></tr>
            </table>
          </div>
        </div>
      </div>
    </div> 

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
      
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
