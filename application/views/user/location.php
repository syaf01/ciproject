<!DOCTYPE html>
<html lang="en">

  <head>
    <title>User : Find the nearest hospital & blood drive</title> 

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
    <?php echo link_tag('assests/css/custom17.css'); ?>
    <!-- Custom styles for this template-->
    <?php echo link_tag('assests/css/sb-admin.css'); ?>
    
    <link rel="stylesheet" href="<?php echo base_url('leaflet/leaflet.css');?>" />
    <script src="<?php echo base_url('leaflet/leaflet.js'); ?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('leaflet-search/src/leaflet-search.css');?>" />
    <script src="<?php echo base_url('leaflet-search/src/leaflet-search.js'); ?>"></script>

    <link rel="stylesheet" href="<?php echo base_url('leaflet-locatecontrol/dist/L.Control.Locate.min.css');?>"/>
    <script src="<?php echo base_url('leaflet-locatecontrol/dist/L.Control.Locate.min.js'); ?>"></script>
   
  </head>
  <body id="page-top">
  

    <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">

      <div id="content-wrapper"> 

        <div class="container">
        <center><strong><h1 style="margin-top:0px">Find the nearest blood centre</h1></strong></center> 
        <br>
        <center><div id='map' style='width: 1000px; height: 600px;'></div></center>


        <script>  

          var map = L.map('map').setView([2.303079, 102.302672], 11);

          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
          }).addTo(map); 

          <?php foreach ($location_data as $location) { ?>
            L.marker([<?php echo $location->latitude ?>, <?php echo $location->longitude ?>])
            .bindPopup("<?php echo $location->address ?>
            <br><?php echo $location->postalCode ?> <?php echo $location->city ?>")
            .addTo(map);
          <?php } ?>

          L.control.locate({ position: 'topleft',
            strings: { title: "Show me where I am, yo!" }
          }).addTo(map);

        </script>

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
    <script src="<?php echo base_url('assests/js/custom.js '); ?>"></script>
    <script src="<?php echo base_url('assests/js/custom14.js '); ?>"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet"
          href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
          type="text/css"/>
    <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    
  
  </body>
</html>