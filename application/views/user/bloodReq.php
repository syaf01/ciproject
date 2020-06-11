<!DOCTYPE html>
<html lang="en">

<head>
<title>Blood Request</title>
<!-- Bootstrap core CSS-->
<?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
<!-- Custom fonts for this template-->
<?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
<!-- Page level plugin CSS-->
<?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>
<?php echo link_tag('assests/css/custom.css'); ?>
<?php echo link_tag('assests/css/custom3.css'); ?>

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
            <li class="breadcrumb-item active">Blood Request</li>
          </ol>
          </div>
        <!-- /.container-fluid -->

        <!-- Page Features -->
    <div class="row text-center">

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="<?php echo base_url('assests/img/HMT.jpg');?>" alt="">
    <div class="card-body">
      <h4 class="card-title">HOSPITAL MELAKA</h4>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
    <button data-toggle="collapse" data-target="#demo">Find Out</button>
      <div id="demo" class="collapse">
        Date : 19 May 2020 <br>
        Place : Blood Bank <br>
        Time : 8am - 10am <br>
        In need : Type O
      </div>
    <button data-toggle="collapse" data-target="#demo1">Locate Me</button>
      <div id="demo1" class="collapse">
        <div id="googleMap" style="width:100%;height:400px;"></div>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="<?php echo base_url('assests/img/HAG.jpg');?>" alt="">
    <div class="card-body">
      <h4 class="card-title">HOSPITAL ALOR GAJAH</h4>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
    <button data-toggle="collapse" data-target="#demo">Find Out</button>
      <div id="demo" class="collapse">
        Date : 20 May 2020 <br>
        Place : Lobby <br>
        Time : 8am - 10am <br>
        In need : Type O
      </div>
    <button data-toggle="collapse" data-target="#demo1">Locate Me</button>
      <div id="demo1" class="collapse">
        <div id="googleMap" style="width:100%;height:400px;"></div>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="<?php echo base_url('assests/img/HJ.jpg');?>" alt="">
    <div class="card-body">
      <h4 class="card-title">HOSPITAL JASIN</h4>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
    <button data-toggle="collapse" data-target="#demo">Find Out</button>
      <div id="demo" class="collapse">
        Date : 21 May 2020 <br>
        Place : Blood Bank <br>
        Time : 8am - 10am <br>
        In need : Type AB
      </div>
    <button data-toggle="collapse" data-target="#demo1">Locate Me</button>
      <div id="demo1" class="collapse">
        <div id="googleMap" style="width:100%;height:400px;"></div>
      </div>
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
