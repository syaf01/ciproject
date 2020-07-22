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

      <div id="content-wrapper">

        <div class="container-fluid">

        
        <!-- /.container-fluid -->

  <div class="container"> 
  <h2 style="margin-top:0px">List of Blood Campaign</h2>
        <br>
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
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">JOIN</button>
              <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center"> 
        <h4 class="modal-title w-100 font-weight-bold">Join us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="fname">First name</label>
          <?php echo form_input(['name'=>'firstname','id'=>'firstname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('firstname',$profile->firstName)]);?>
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="lname">Last Name</label>
          <?php echo form_input(['name'=>'lastname','id'=>'lastname','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('lastname',$profile->lastName)]);?>
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="btype">Blood Type</label>
          <?php echo form_error('bloodType',"<div style='color:red'>","</div>");?>
          <select class="browser-default custom-select">
            <option selected>-</option>
            <option value="1">O</option>
            <option value="2">AB</option>
            <option value="3">B</option>
            <option value="3">A</option>
          </select>
        </div>

        <div class="md-form">
          <label data-error="wrong" data-success="right" for="pnum">Phone Number</label>
          <?php echo form_input(['name'=>'mobileNumber','id'=>'mobileNumber','class'=>'form-control','autofocus'=>'autofocus','value'=>set_value('mobileNumber',$profile->mobileNumber)]);?>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <?php echo form_submit(['name'=>'Submit','value'=>'Submit','class'=>'btn btn-primary btn-block']); ?>
      </div>
    </div>
  </div>
</div>
              <button type="button" class="btn btn-success">LOCATE</button>
            </td>
          </tr>
          <tr>
            <td scope="row">02 / 06 / 2020</td>
            <td>10:00AM - 03:00PM</td>
            <td>Mahkota Medical Centre</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">JOIN</button>
              <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Join us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="fname">First name</label>
          <input type="text" id="fname" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="lname">Last Name</label>
          <input type="text" id="lname" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="btype">Blood Type</label>
          <select class="browser-default custom-select">
            <option selected>-</option>
            <option value="1">O</option>
            <option value="2">AB</option>
            <option value="3">B</option>
            <option value="3">A</option>
          </select>
        </div>

        <div class="md-form">
          <label data-error="wrong" data-success="right" for="pnum">Phone Number</label>
          <input type="text" id="pnum" class="form-control validate" rows="4"></input>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </div>
</div>
              <button type="button" class="btn btn-success">LOCATE</button>
            </td>
          </tr>
          <tr>
            <td scope="row">03 / 06 / 2020</td>
            <td>11:00AM - 04:00PM</td>
            <td>KIPMALL Bachang</td>
            <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">JOIN</button>
              <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Join us</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="fname">First name</label>
          <input type="text" id="fname" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="lname">Last Name</label>
          <input type="text" id="lname" class="form-control validate">
        </div>

        <div class="md-form mb-5">
          <label data-error="wrong" data-success="right" for="btype">Blood Type</label>
          <select class="browser-default custom-select">
            <option selected>-</option>
            <option value="1">O</option>
            <option value="2">AB</option>
            <option value="3">B</option>
            <option value="3">A</option>
          </select>
        </div>

        <div class="md-form">
          <label data-error="wrong" data-success="right" for="pnum">Phone Number</label>
          <input type="text" id="pnum" class="form-control validate" rows="4"></input>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button type="button" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </div>
</div>
              <button type="button" class="btn btn-success">LOCATE</button>
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
