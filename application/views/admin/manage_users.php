<!DOCTYPE html>
<html lang="en">

  <head>
    <title>Admin : Manage Users</title> 

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assests/img/faviconcopy.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assests/img/apple-touch-icon.png');?>">
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

  </head>
  <body id="page-top"> 
    <?php include APPPATH.'views/admin/includes/header.php';?>

    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">

          <div class="container">
            <center><h1 style="margin-top:0px">List of user</h1></center>
              <div class="table-responsive">
                <!---- Success Message ---->
                <?php if ($this->session->flashdata('success')) { ?>
                <p style="color:green; font-size:18px;"><?php echo $this->session->flashdata('success'); ?></p>
                <?php } ?>
              </div>

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email id</th>
                    <th>Reg date</th> 
                    <th>Action</th>
                  </tr>
                </thead>
                <?php 
                  if(count($userdetails)) :
                  $cnt=1; 
                  foreach ($userdetails as $row) :
                ?>                    
                <tr>
                  <td><?php echo htmlentities($cnt);?></td>
                  <td><?php echo htmlentities($row->firstName)?></td>
                  <td><?php echo htmlentities($row->lastName)?></td>
                  <td><?php echo htmlentities($row->emailId)?></td>
                  <td><?php echo htmlentities($row->regDate)?></td>
                  <td>
                    <?php echo anchor("admin/Manage_Users/getuserdetail/{$row->id}",' ','class="fa fa-edit"')?>
                    <?php echo anchor("admin/Manage_Users/deleteuser/{$row->id}",' ','class="fa fa-trash"')?>
                  </td>
                </tr>
                <?php 
                  $cnt++;
                  endforeach;
                  else : 
                ?>
                <tr>
                  <td colspan="6">No Record found</td>
                </tr>
                <?php
                  endif;
                ?>                
              </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Sticky Footer -->
    <?php include APPPATH.'views/admin/includes/footer.php';?>

    <script src="<?php echo base_url('assests/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url('assests/vendor/chart.js/Chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/jquery.dataTables.js'); ?>"></script>
    <script src="<?php echo base_url('assests/vendor/datatables/dataTables.bootstrap4.js'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/datatables-demo.js'); ?>"></script>
    <script src="<?php echo base_url('assests/js/demo/chart-area-demo.js'); ?>"></script>

  </body>
</html>
