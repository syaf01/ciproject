<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>User : View history of blood donation</title> 

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

</head>

    <body id="page-top">

    <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">
        <div id="content-wrapper"> 

        <div class="container-fluid"> 

        <!--Table-->
        <div class="container">
    <h2 style="margin-top:0px">History</h2>
        <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
                <?php echo anchor(site_url('user/history/create'),'Create', 'class="btn btn-danger"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('user/history'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('user/history'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-danger" type="submit">Search</button>
                        </span>
                    </div> 
                </form>
            </div> 
        </div>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
            <th>No</th>
		    <th>Date</th>
		    <th>Time</th>
		    <th>Hospital</th> 
		    <th>Blood Drive</th>
		    <th>Donation Type</th> 
		    <!--<th>Action</th>-->
            </tr><?php
            foreach ($history_data as $history)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $history->date ?></td>
			<td><?php echo $history->time ?></td>
			<td><?php echo $history->hname ?></td>
			<td><?php echo $history->dname ?></td>
			<td><?php echo $history->donateName ?></td>
			<!--<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('user/History/read/'.$history->tblusers_id),'View'); 
				?>
			</td>-->
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
