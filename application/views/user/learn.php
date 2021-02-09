<!DOCTYPE html>
<html lang="en">

<head>
    <title>User : Learn more about blood donation</title> 

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assests/img/faviconcopy.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assests/img/apple-touch-icon.png');?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
    <?php echo link_tag('assests/css/custom20.css'); ?>
    <!-- Custom styles for this template-->
    <?php echo link_tag('assests/css/sb-admin.css'); ?>

</head>
    <body id="page-top">

    <!-- Sticky Header -->
    <?php include APPPATH.'views/user/includes/header.php';?>

    <div id="wrapper">
        <div id="content-wrapper">
            <div class="container-fluid">

                <div class="container">
                    <br>
                    <h1 style="margin-top:0px"><center><big>Types of donation</big></center></h1>
                    <h3 style="margin-top:0px"><center>There are about five litres of blood in the human body and it is made up of several useful components.</center></h3>
                    <h3 style="margin-top:0px"><center>You may be able to donate blood, plasma or platelets. Each type of blood donation is used for different medical treatments, and your blood type determines the best donation for you to make.</center></h3>
                    <br>

                    <ul class="nav nav-tabs">
                        <li><a data-toggle="tab" href="#blood">Blood</a></li>
                        <li><a data-toggle="tab" href="#plasma">Plasma</a></li>   
                        <li><a data-toggle="tab" href="#platelets">Platelets</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="blood" class="tab-pane fade">
                            <br>
                            <h2>Blood</h2>
                            <table class="table table-bordered">
                                <tr>
                                    <td><h4><b>What is it?</b></h4>
                                        <p>Blood collected straight from a donor, without anything taken out. After it's donated, we usually separate blood into red blood cells, plasma and platelets in our labs.</p>
                                        <img src="<?php echo base_url('assests/img/17.jpg');?>" class="media-object" style="width:300px; length:200px">
                                        <br>
                                        <h4><b>Who can donate?</b></h4>
                                        <p>You need to be 18-75 years old, weight 50kg or more and be fit and healthy.</p>
                                    </td>

                                    <td><h4><b>Used for :</b></h4>
                                        <p>Cancer, blood diseases, anaemia, heart disease, stomach disease, kidney disease, childbirth, operations, blood loss, trauma, burns.</p>
                                        <br>
                                        <h4><b>Last for :</b></h4>
                                        <p>Red cells can be stored for 42 days.</p>
                                    </td>
                                    <td><h4><b>How long does it take?</b></h4>
                                        <p>15 minutes to donate, 45 minutes for the appointment.</p>
                                        <br>
                                        <h4><b>How often can I donate?</b></h4>
                                        <p>Every 12 weeks.</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="plasma" class="tab-pane fade">
                            <br>
                            <h2>Plasma</h2>
                            <table class="table table-bordered">
                                <tr>
                                    <td><h4><b>What is it?</b></h4>
                                        <p>Your blood is 55% plasma. It's the straw-coloured liquid that carries your red and 
                                            white blood cells and platelets. </p>
                                        <img src="<?php echo base_url('assests/img/15.jpg');?>" class="media-object" style="width:300px; length:200px">
                                        <br>
                                        <h4><b>Who can donate?</b></h4>
                                        <p>You can donate if you’re 18-75 years old, weigh at least 50kg and are fit and healthy.</p>
                                    </td>

                                    <td><h4><b>Used for :</b></h4>
                                        <p>Your plasma can be used in 18 different life-giving ways – from treating serious burns and cancer, to 
                                            protecting people with brain and nerve diseases. It’s always being developed to help in new ways.</p>
                                        <br>
                                        <h4><b>Last for :</b></h4>
                                        <p>Plasma can last up to 1 year when frozen.</p>
                                    </td>
                                    <td><h4><b>How does it work?</b></h4>
                                        <p>The process is apheresis, which means we take some of your blood, 
                                            keep the plasma and then return the rest back to you.</p>
                                        <br>
                                        <h4><b>How long does it take?</b></h4>
                                        <p>45 minutes to donate, but we recommend 1.5 hours for the whole appointment.</p>
                                        <br>
                                        <h4><b>How often can I donate?</b></h4>
                                        <p>You can donate plasma every 28 days, up to 13 times per year.</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="platelets" class="tab-pane fade">
                            <br>
                            <h2>Platelets</h2>
                            <table class="table table-bordered">  
                                <tr>
                                    <td><h4><b>What is it?</b></h4>
                                        <p>The tiny 'plates' in blood that wedge together to help clotting and reduce bleeding. Platelets are always in demand: 
                                            they're vital for people with low platelet counts, like many cancer patients.</p>
                                        <img src="<?php echo base_url('assests/img/19.jpg');?>" class="media-object" style="width:300px; length:200px">
                                        <br>
                                        <h4><b>Who can donate?</b></h4>
                                        <p>Men who are aged between 18-75, weigh 50kg or more and have previously given 
                                            a successful plasma donation in the past 12 months.</p>
                                    </td>

                                    <td><h4><b>Used for :</b></h4>
                                        <p>Cancer, leukaemia (particularly during chemotherapy and bone marrow transplants), surgery, trauma, liver disease.</p>
                                        <br>
                                        <h4><b>Last for :</b></h4>
                                        <p>Just five days.</p>
                                    </td>
                                    <td><h4><b>How does it work?</b></h4>
                                        <p>We collect some of your blood, keep the platelets and return the rest to you by apheresis.</p>
                                        <br>
                                        <h4><b>How long does it take?</b></h4>
                                        <p>45 minutes to donate, 1.5 hours for the appointment.</p>
                                        <br>
                                        <h4><b>How often can I donate?</b></h4>
                                        <p>Every 2-4 weeks.</p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                
                <div id="blog" class="blog-box">
                    <div class="container">
                        <br>
                        <h1 style="margin-top:0px"><center><big>Benefit of donating blood</big></center></h1>
                        <h3 style="margin-top:0px"><center>Blood donors are encouraged to be a volunteer without expect any return or reward from the good deeds they have given.
                            However, the Ministry of Health has implemented an initiative by providing some benefits to the volunteer blood donor.</center></h3>
                        <h3 style="margin-top:0px"><center>All the benefits will receive by the donor based on the specific criteria that was set by Ministry of Health</center></h3>
                        <br>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th><h4><b>Donation frequency</b></h4></th>
                                    <th><h4><b>Treatment benefit</b></h4></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1 time</td>
                                    <td>Free  outpatient  treatment  and  medical  treatment 
                                        (excluding x-ray and operation payment) and second class ward for 4 months</td>
                                </tr>
                                <tr>
                                    <td>2 times (within 12 months)</td>
                                    <td>Free Hepatitis B injection </td>
                                </tr>
                                <tr>
                                    <td>2 to 5 times </td>
                                    <td>Free outpatient treatment and medical treatment and second class ward for 4 months</td>
                                </tr>
                                <tr>
                                    <td>6 to 10 times</td>
                                    <td>Free outpatient treatment for 1 year and medical treatment 
                                        and second class ward for 6 months</td>
                                </tr>
                                <tr>
                                    <td>11 to 15 times</td>
                                    <td>Free outpatient treatment for 2 year and medical treatment and 
                                    second class ward for 1 year</td>
                                </tr>
                                <tr>
                                    <td>16 to 20 times </td>
                                    <td>Free outpatient treatment and medical treatment and second class ward for 2 years </td>
                                </tr>
                                <tr>
                                    <td>21 to 30 times</td>
                                    <td>Free outpatient treatment and medical treatment and second class ward for 3 years</td>
                                </tr>
                                <tr>
                                    <td>31 to 40 time</td>
                                    <td>Free outpatient treatment and medical treatment and first class ward for 4 years</td>
                                </tr>
                                <tr>
                                    <td>41 to 50 times</td>
                                    <td>Free outpatient treatment and medical treatment and first class ward for 6 years</td>
                                </tr>
                                <tr>
                                    <td>More than 50 times (for Whole Blood donors) and more than 150 time (for apheresis donors)</td>
                                    <td>Free outpatient treatment and medical treatment and first class  ward  for 10  years and  
                                        eligible  to receive second class ward for entire life after  ending the 10 years 
                                        of first class ward term</td>
                                </tr>
                            </tbody> 
                        </table>
                    </div>
                </div>
                <br>
                <br>

                <section class="testimonial text-center">
                    <div class="container">
                        <h1 style="margin-top:0px"><center><big>How donation works</big></center></h1>
                        <br>
                        <br>
                        <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
    
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="testimonial4_slide">
                                        <img src="<?php echo base_url('assests/img/dollar.png');?>" class="img-circle img-responsive" />
                                        <br>
                                        <h4>It does not cost anything</h4> 
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="<?php echo base_url('assests/img/clock.png');?>" class="img-circle img-responsive" />
                                        <br>
                                        <h4>It only takes about an hour</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="<?php echo base_url('assests/img/hospital-bed.png');?>" class="img-circle img-responsive" />
                                        <br>
                                        <h4>You get to relax while doing it</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide">
                                        <img src="<?php echo base_url('assests/img/snack.png');?>" class="img-circle img-responsive" />
                                        <br>
                                        <h4>You get to a free snack and a drink at the end of the donation process</h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="testimonial4_slide"> 
                                        <img src="<?php echo base_url('assests/img/like.png');?>" class="img-circle img-responsive" />
                                        <br>
                                        <h4>You will feel great because you are saving lives!</h4>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                                <span class="carousel-control-prev-icon" style="color: #000000;"></span>
                            </a>
                            <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                                <span class="carousel-control-next-icon" style="color: #000000;"></span>
                            </a>
                        </div>
                        <br>
                        <h2>Thinking of giving blood?</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Check your eligibility</th>
                                    <th>Make an appointment</th>
                                    <th>Donate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Most people can donate blood, but some can't for health or lifestyle reasons.</td>
                                    <td>Many of our blood donor centres are open after office hours and on weekends.</td>
                                    <td>Our friendly specialist donor centre team will be with you throughout the process.</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </section>

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
    <script src="<?php echo base_url('assests/js/custom14.js '); ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>
