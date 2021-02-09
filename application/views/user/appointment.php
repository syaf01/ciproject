<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User : Existing appointment</title>

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
        <?php include APPPATH.'views/user/includes/header.php';?>

        <div id="wrapper">
            <div id="content-wrapper">  
                <div class="container-fluid"> 

                    <!--Table-->
                    <div class="container">
                        <h2 style="margin-top:0px">Appointment</h2>
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-md-4">
                                <?php echo anchor(site_url('user/appointment/create'),'Create', 'class="btn btn-danger"'); ?>
                            </div>
                            <div class="col-md-4 text-center">
                                <div style="margin-top: 8px" id="message">
                                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                </div>
                            </div>
                            <div class="col-md-3 text-right">
                                <form action="<?php echo site_url('user/appointment'); ?>" class="form-inline" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                        <span class="input-group-btn">
                                            <?php 
                                                if ($q <> ''){
                                            ?>
                                            <a href="<?php echo site_url('user/appointment'); ?>" class="btn btn-default">Reset</a>
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
		                        <th>Name</th>
		                        <th>Email</th>  
		                        <th>Mobile Number</th>
		                        <th>Donation type</th>
		                        <th>Request Date</th>
                                <th>Comment</th>
                                <th>Status</th> 
                                <th>Action</th>
                            </tr>
                            <?php
                                foreach ($appointment_data as $appointment){
                            ?>
                            <tr>
			                    <td width="80px"><?php echo ++$start ?></td>
			                    <td><?php echo $appointment->firstName ?></td> 
			                    <td><?php echo $appointment->emailId ?></td>
			                    <td><?php echo $appointment->mobileNumber ?></td>
			                    <td><?php echo $appointment->donateName ?></td>
			                    <td><?php echo $appointment->request_date ?></td> 
                                <td><?php echo $appointment->comment ?></td>
                                <td><?php echo $appointment->status ?></td>
			                    <td style="text-align:center" width="200px">
				                    <?php 
				                        echo anchor(site_url('user/Appointment/update/'.$appointment->appId),'Update'); 
				                        echo ' | '; 
				                        echo anchor(site_url('user/Appointment/delete/'.$appointment->appId),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				                    ?>
			                    </td>
		                    </tr>
                            <?php
                                }
                            ?>
                        </table>
                        <div class="row">
                            <div class="col-md-6 text-right">
                                <?php echo $pagination ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Footer -->
        <?php include APPPATH.'views/user/includes/footer.php';?>
	
	    <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

	    <!-- ALL JS FILES -->
	    <script src="<?php echo base_url('assests/js/jquery.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/popper.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/bootstrap.min.js'); ?>"></script>
        <!-- ALL PLUGINS -->
	    <script src="<?php echo base_url('assests/js/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/jquery.pogo-slider.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/slider-index.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/smoothscroll.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/TweenMax.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/main.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/owl.carousel.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/form-validator.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/contact-form-script.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/isotope.min.js'); ?>"></script>
	    <script src="<?php echo base_url('assests/js/images-loded.min.js'); ?>"></script>
        <script src="<?php echo base_url('assests/js/customm.js'); ?>"></script>
    </body>
</html>