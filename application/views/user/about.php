<!DOCTYPE html>
<html lang="en">

<head>
<title>Donation History</title>
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

        <!--Table-->
    <div class="container">
    <br>
    <center><h1>WeAreDonor</h1></center>
    <center><h6>Donate & Save Lives</h6></center>
    <center><h6>Donation </h6></center>
    <h5>Overview</h5>
    <h6>Blood donation is a voluntary procedure that can help save the lives of others. 
    There are several types of blood donation, which help meet different medical needs.</h6><br>

    <h5>Whole Blood Donation</h5>
    <h6>This is the most common type of blood donation, during which you donate about a pint of whole blood. 
    The blood is then separated into its components which is red cells, plasma, platelets.</h6><br>

    <h5>Apheresis</h5>
    <h6>During apheresis, you are hooked up to a machine that can collect and separate blood components, including red cells, plasma, 
    platelets, and return unused components back to the donor.</h6><br>

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
<script src="<?php echo base_url('assests/js/custom.js '); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBLdf_bgz9Z-dG-AKlhVasmkVqWtsKcjI&callback=myMap"></script>

</body>

</html>
