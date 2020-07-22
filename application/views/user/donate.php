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
    <h2 style="margin-top:0px">List of Donation History</h2>
        <br>
<table class="table table-striped table-hover">

<!--Table head-->
<thead>
  <tr>
    <th>#</th>
    <th>Date</th>
    <th>Series No</th>
    <th>Hospital</th>
    <th>Amount of Blood (ml)</th>
  </tr>
</thead>
<!--Table head-->

<!--Table body-->
<tbody>
  <tr class="table-info">
    <th scope="row">1</th>
    <td>24 / 04 / 2016</td>
    <td>620397914</td>
    <td>Melaka</td>
    <td>350</td>
  </tr>
  <tr>
    <th scope="row">2</th>
    <td>20 / 01 / 2017</td>
    <td>620418171</td>
    <td>Melaka</td>
    <td>350</td>
  </tr>
  <tr class="table-info">
    <th scope="row">3</th>
    <td>27 / 10 / 2017</td>
    <td>620442718</td>
    <td>Melaka</td>
    <td>350</td>
  </tr>
  <tr>
    <th scope="row">4</th>
    <td>19 / 04 / 2018</td>
    <td>620458135</td>
    <td>Melaka</td>
    <td>350</td>
  </tr>
  <tr class="table-info">
    <th scope="row">5</th>
    <td>09 / 04 / 2019</td>
    <td>620486841</td>
    <td>Johor</td>
    <td>350</td>
  </tr>
  <tr>
    <th scope="row">6</th>
    <td>05 / 03 / 2020</td>
    <td>620475329</td>
    <td>Selangor</td>
    <td>350</td>
  </tr>
</tbody>
<!--Table body-->


</table>
</div>
<!--Table-->



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
