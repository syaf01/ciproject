<!doctype html>
<html lang="en">
<head>
<title>Location</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>
<?php echo link_tag('assests/css/custom9.css'); ?>
</head>
  <body>
  <body id="page-top">

<?php include APPPATH.'views/user/includes/header.php';?>

 <div id="wrapper">

   <div id="content-wrapper">

     <div class="container">
     <!-- /.container-fluid -->

     <center><h2 style="margin-top:0px">Locate Us</h2></center>
        <br>

     <!-- Page Features --> 
 <div class="row text-center">
 <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> <h5>HOSPITAL MELAKA</h5>
            <br>
            <div class="card h-100">
 <img class="card-img-top" src="<?php echo base_url('assests/img/HMT.jpg');?>" alt="">
 <div class="card-body">
   <p class="card-text"></p>
 </div>
 <a class="btn btn-danger" href="<?php echo site_url('user/Location_map'); ?>">Location</a>
            </th>

            <th> <h5>HOSPITAL ALOR GAJAH</h5>
            <br>
            <div class="card h-100">
 <img class="card-img-top" src="<?php echo base_url('assests/img/HAG.jpg');?>" alt="">
 <div class="card-body">
   <p class="card-text"></p>
 </div>
 <a class="btn btn-danger" href="<?php echo site_url('user/Location_map2'); ?>">Location</a>
            </th>

            <th> <h5>HOSPITAL JASIN</h5>
            <br>
            <div class="card h-100">
            
 <img class="card-img-top" src="<?php echo base_url('assests/img/HJ.jpg');?>" alt="">
 <div class="card-body">
   <p class="card-text"></p>
 </div>
 <a class="btn btn-danger" href="<?php echo site_url('user/Location_map3'); ?>">Location</a>
            </th>
          </tr>
        </thead>
      </table>
  </div>
</div>

<br>
<br>

<center><h2 style="margin-top:0px">Contact Us</h2></center>
        <br>

     <!-- Page Features --> 
 <div class="row text-center">
 <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th> <h5>HOSPITAL MELAKA</h5>
            <br>
            <div class="card h-100">
 
 <div class="card-body">
   <p class="card-text"></p>
   Address : <br> Jalan Mufti Haji Khalil, 75400 Melaka <br><br>
   Contact Number : <br> 06-2892045 <br><br>
   Hours : <br> Open 24 hours <br><br>
   Email : <br> hmelaka@moh.gov.my
 </div>
 <a class="btn btn-danger" href="http://hmelaka.moh.gov.my/v2/">Website</a>
            </th>

            <th> <h5>HOSPITAL ALOR GAJAH</h5>
            <br>
            <div class="card h-100">
 <div class="card-body">
   <p class="card-text"></p>
   Address : <br> Jalan Paya Datuk, 78000 Alor Gajah, Melaka <br><br>
   Contact Number : <br> 06-5562333/5355/5350 <br><br>
   Hours : <br> 8:00a.m - 9:30a.m <br><br>
   Email : <br> hosag@moh.gov.my
 </div>
 <a class="btn btn-danger" href="https://hag.moh.gov.my/2/">Website</a>
            </th>

            <th> <h5>HOSPITAL JASIN</h5>
            <br>
            <div class="card h-100">
 <div class="card-body">
   <p class="card-text"></p>
   Address : <br> Hospital Utama, 77000 Jasin, Melaka <br><br>
   Contact Number : <br>  06-5294262 <br><br>
   Hours : <br> Open 24 hours <br><br>
   Email : <br> --
 </div>
 <a class="btn btn-danger" href="#">Website</a>
            </th>
          </tr>
        </thead>
      </table>
  </div>
</div>
</div>
</div>
</div>



<!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>
    <script src="<?php echo base_url('assests/js/custom.js '); ?>"></script>
    <script src="<?php echo base_url('assests/js/custom6.js '); ?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBLdf_bgz9Z-dG-AKlhVasmkVqWtsKcjI&callback=init"></script>
  </body>
</html>