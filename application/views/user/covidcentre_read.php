<!DOCTYPE html>
<html lang="en">
 
    <head>
        <title>User : Covid-19 testing centre</title> 

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

        <?php include APPPATH.'views/user/includes/header.php';?>

        <div id="wrapper">
            <div id="content-wrapper"> 
                <div class="container-fluid"> 
                    <div class="container">
                        <h1 style="margin-top:0px"><center><big>Where to do Covid-19's test</big></center></h1>
                        <br>
                        <table class="table">
	                        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
	                        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
	                        <tr><td>City</td><td><?php echo $city; ?></td></tr>
	                        <tr><td>PostalCode</td><td><?php echo $postalCode; ?></td></tr>
	                        <tr><td>ContactNum</td><td><?php echo $contactNum; ?></td></tr>
	                        <tr><td>Sector</td><td><?php echo $sector; ?></td></tr>
	                        <tr><td>Services</td><td><?php echo $services; ?></td></tr>
	                        <tr><td>Hours</td><td><?php echo $hours; ?></td></tr>
                            <tr><td>Location map</td><td><div id='map3' style='width: 800px; height: 500px;'></div></td></tr>
	                        <tr><td></td><td><a href="<?php echo site_url('user/covidcentre') ?>" class="btn btn-danger">Cancel</a></td></tr>
	                    </table>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var map3 = L.map('map3').setView([2.303079, 102.302672], 11); 

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map3);

            L.marker([<?php echo $latitude; ?>, <?php echo $longitude; ?>])
            .bindPopup("<b><h3><?php echo $name; ?></h3></b><?php echo $address; ?>
            <br><?php echo $postalCode; ?> <?php echo $city; ?>")
            .addTo(map3);

        </script>


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
        <script src="<?php echo base_url('assests/js/custom15.js '); ?>"></script>

        <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.min.js"></script>
        <link rel="stylesheet"
            href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css"
            type="text/css"/>
        <!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
        <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

    </body>
</html>