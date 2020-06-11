<!DOCTYPE html>
<html lang="en">

<head>
<title>Blood Campaign</title>
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

      <!-- Sidebar -->
  <?php include APPPATH.'views/user/includes/sidebar.php';?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?php echo site_url('user/Dashboard'); ?>">User</a>
            </li>
            <li class="breadcrumb-item active">Blood Campaign</li>
          </ol>
          </div>
        <!-- /.container-fluid -->

  <div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Date</th>
            <th scope="col">Registration Time</th>
            <th scope="col">Location</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">01 / 06 / 2020</td>
            <td>10:00AM - 03:00PM</td>
            <td>TESCO Cheng</td>
            <td>
              <button type="button" class="btn btn-primary"><a href="<?php echo site_url('user/JoinCampaign'); ?>">JOIN</a></button>
              <button type="button" class="btn btn-success">LOCATE</button>
              <button type="button" class="btn btn-danger">DETAILS</button>
            </td>
          </tr>
          <tr>
            <td scope="row">02 / 06 / 2020</td>
            <td>10:00AM - 03:00PM</td>
            <td>Mahkota Medical Centre</td>
            <td>
              <button type="button" class="btn btn-primary"><a href="<?php echo site_url('user/JoinCampaign'); ?>">JOIN</a></button>
              <button type="button" class="btn btn-success">LOCATE</button>
              <button type="button" class="btn btn-danger">DETAILS</button>
            </td>
          </tr>
          <tr>
            <td scope="row">03 / 06 / 2020</td>
            <td>11:00AM - 04:00PM</td>
            <td>KIPMALL Bachang</td>
            <td>
              <button type="button" class="btn btn-primary"><a href="<?php echo site_url('user/JoinCampaign'); ?>">JOIN</a></button>
              <button type="button" class="btn btn-success">LOCATE</button>
              <button type="button" class="btn btn-danger">DETAILS</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

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
