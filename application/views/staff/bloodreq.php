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

   <?php include APPPATH.'views/staff/includes/header.php';?>

    <div id="wrapper">

      <div id="content-wrapper">

        <div class="container">
        <!-- /.container-fluid -->

        <!-- Page Features -->  
        <h2 style="margin-top:0px">List of Blood Request</h2>
        <br>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('staff/Bloodreq/create/'),'Request', 'class="btn btn-danger"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('staff/bloodreq'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('staff/bloodreq'); ?>" class="btn btn-danger">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-danger" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
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
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $bloodreq->branch ?></td>
			<td><?php echo $bloodreq->date ?></td>
			<td><?php echo $bloodreq->time ?></td>
			<td><?php echo $bloodreq->bloodType ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('staff/Bloodreq/read/'.$bloodreq->id),'View'); 
				echo ' | '; 
				echo anchor(site_url('staff/Bloodreq/update/'.$bloodreq->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('staff/Bloodreq/delete/'.$bloodreq->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php 
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-danger">Total Record : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>

        <!-- Sticky Footer -->
     <?php include APPPATH.'views/staff/includes/footer.php';?>

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
