<!doctype html>
<html lang="en">
<head>
<title>Location</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>
<?php echo link_tag('assests/css/custom9.css'); ?>
<?php echo link_tag('assests/css/custom11.css'); ?>
</head>
<div class="container text-center">
      <div class="header">
        <h1>Location</h1>
        <button id="geolocation-button" class="btn btn-success">My Location</button>
        <button id="watch-button" disable class="btn btn-info">Watch my position</button>
        <button id="clear-watch-button" disable class="btn btn-warning">Clear watch</button>
        <button id="show-nearby-button"  class="btn btn-danger">Hospital Melaka's Location</button>
      </div>
      <div id="map"></div>
    </div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>
    <script src="<?php echo base_url('assests/js/custom.js '); ?>"></script>
	<script src="<?php echo base_url('assests/js/custom8.js '); ?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBLdf_bgz9Z-dG-AKlhVasmkVqWtsKcjI&callback=init"></script>
  </body>
</html>