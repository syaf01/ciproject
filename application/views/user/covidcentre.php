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
        <?php echo link_tag('assests/css/custom18.css'); ?>  
        <?php echo link_tag('assests/css/custom21.css'); ?> 
        <?php echo link_tag('assests/css/custom14.css'); ?>
        <?php echo link_tag('assests/css/custom19.css'); ?>
        <!-- Custom styles for this template-->  
        <?php echo link_tag('assests/css/sb-admin.css'); ?>
    </head>

    <body id="page-top">
        <?php include APPPATH.'views/user/includes/header.php';?>     
        <div id="wrapper">
            <div id="content-wrapper">

                <div class="tm-section-2"> 
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <h2 class="tm-section-title">Covid-19 Testing Centre</h2> 
                                <h4><p class="tm-color-white tm-section-subtitle">Stay at home if you feel unwell. If you have a fever, 
                                    cough and difficulty breathing, seek medical attention and call in advance</p></h4>
                                <br>
                            </div>                 
                        </div>
                    </div>        
                </div>
                <br>
                <br>

                <div class="tm-section tm-position-relative">   
                    <div class="container tm-pt-5 tm-pb-4">
                        <div class="col text-center">
                            <h2 class="tm-section-title-title">List of Covid-19 testing centre</h2>
                            <br>
                            <table class="table table-bordered" style="margin-bottom: 10px">
                                <tr>
                                    <th>No</th>
		                            <th>Name</th>
		                            <th>Action</th>
                                </tr>
                                <?php
                                    foreach ($covidcentre_data as $covidcentre)
                                    {
                                ?>
                                <tr>
			                        <td width="80px"><?php echo ++$start ?></td>
			                        <td><?php echo $covidcentre->name ?></td>
			                        <td style="text-align:center" width="200px">
				                        <?php 
				                            echo anchor(site_url('user/covidcentre/read/'.$covidcentre->centreId),'Detail'); 
				                        ?>
			                        </td>
		                        </tr>
                                <?php
                                    }
                                ?>
                            </table>
                            <div class="row">
                                <div class="col-md-6 "> 
                                    <a href="#" class="btn btn-danger">Total Record : <?php echo $total_rows ?></a>
	                            </div>
                                <div class="col-md-6 text-right">
                                    <?php echo $pagination ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    </body>
</html>