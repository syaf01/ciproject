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

      <div id="content-wrapper">

        <div class="container">
        <!-- /.container-fluid --> 

        <h2 style="margin-top:0px">List of Blood Request</h2>
        <br>

        <!-- Page Features --> 
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
		<th>Branch</th>
		<th>Date</th>
		<th>Time</th>
		<th>BloodType</th>
		<th>Action</th>
            </tr><?php
            foreach ($bloodreq_data as $bloodreq)
            { 
                ?>
                <tr> 
			<td><?php echo $bloodreq->branch ?></td>
			<td><?php echo $bloodreq->date ?></td>
			<td><?php echo $bloodreq->time ?></td>
			<td><?php echo $bloodreq->bloodType ?></td>
      <td style="text-align:center" width="200px">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalContactForm">Detail</button>
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Hospital <?php echo $bloodreq->branch ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 
      <br> 
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        Branch : <?php echo $bloodreq->branch ?> <br>
	      Date : <?php echo $bloodreq->date ?> <br>
	      Time : <?php echo $bloodreq->time ?><br>
	      BloodType : <?php echo $bloodreq->bloodType ?> <br>
        </div>
     </div>
    </div>
  </div>
</div>
<a class="btn btn-success" href="<?php echo site_url('user/Location'); ?>">Location</a>
			</td>
		</tr>
                <?php 
            }
            ?>
        </table>

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
    <script src="https://maps.googleapis.com/maps/api/js?key=996f980bb42c566b29a11ed4eee13095&callback=init"></script>

  </body>

</html>
