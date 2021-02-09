<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Admin : Blood drive</title>

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
        <?php include APPPATH.'views/admin/includes/header.php';?>

        <div id="wrapper">
            <div id="content-wrapper"> 
                <div class="container-fluid">  

                    <!--Table-->
                    <div class="container">
                        <h2 style="margin-top:0px">Blood Drive</h2>
                        <div class="row" style="margin-bottom: 10px">
                            <div class="col-md-4">
                                <?php echo anchor(site_url('admin/Blooddrive/create'),'Add', 'class="btn btn-danger"'); ?>
                            </div>
                        </div>
                        <table class="table table-bordered" style="margin-bottom: 10px">
                            <tr>
                                <th>No</th>
		                        <th>Blood Drive</th>
		                        <th>Address</th>
		                        <th>Action</th>
                            </tr>
                            <?php 
                                foreach ($blooddrive_data as $blooddrive){
                            ?>
                            <tr>
                                <td width="80px"><?php echo ++$start ?></td>
                                <td><?php echo $blooddrive->dname ?></td>
                                <td><?php echo $blooddrive->address ?>&nbsp
                                    <?php echo $blooddrive->postalCode ?>&nbsp
                                    <?php echo $blooddrive->city ?>
                                </td>
                                <td style="text-align:center" width="200px">
                                    <?php 
                                        echo anchor(site_url('admin/blooddrive/update/'.$blooddrive->dId),'Update'); 
                                        echo ' | '; 
                                        echo anchor(site_url('admin/blooddrive/delete/'.$blooddrive->dId),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                                    ?>
                                </td>
		                    </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </div>  
                </div>  
            </div>
        </div>
        
        <!-- Sticky Footer -->
        <?php include APPPATH.'views/admin/includes/footer.php';?>
	
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