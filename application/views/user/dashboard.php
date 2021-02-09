<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>User : Dashboard</title>   
    <meta name="keywords" content="">
    <meta name="description" content=""> 
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?php echo base_url('assests/img/faviconcopy.ico');?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url('assests/img/apple-touch-icon.png');?>">

    <!-- Bootstrap CSS -->
    <?php echo link_tag('assests/css/bootstrap.min.css'); ?>
    <!-- Pogo Slider CSS -->
    <?php echo link_tag('assests/css/pogo-slider.min.css'); ?>
	  <!-- Site CSS -->
    <?php echo link_tag('assests/css/style.css'); ?>
    <!-- Responsive CSS -->
    <?php echo link_tag('assests/css/responsive.css'); ?>  
    <!-- Custom CSS -->
	<?php echo link_tag('assests/css/customm.css'); ?>
	<?php echo link_tag('assests/css/custom13.css'); ?>
	<?php echo link_tag('assests/css/custom14.css'); ?>
	<?php echo link_tag('assests/css/custom19.css'); ?>

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98"> 
	
	<!-- Sticky Header -->
    <?php include APPPATH.'views/user/includes/header.php';?> 

	<!--<h3><center>Welcome <?php echo $profile->firstName;?></center></h3>-->
	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">  
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">  
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(http://[::1]/ciproject/assests/img/3.png);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Be a hero and let's donate blood</h1>
								<h3><p>We donate what in-need. Let's schedule an appointment now!</p></h3>
								<a href="<?php echo site_url('user/Appointment/create'); ?>" class="btn">Donate</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(http://[::1]/ciproject/assests/img/6.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>See if you are able to give blood</h1>
								<h3><p>Let's find out if you are able to donate or not by answer some question and get InstantPass</p></h3>
								<a href="<?php echo site_url('user/Eligible'); ?>" class="btn">Eligibility</a>
							</div>
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(http://[::1]/ciproject/assests/img/7.jpg);">
						<div class="lbox-caption pogoSlider-slide-element">
							<div class="lbox-details">
								<h1>Coronavirus (Covid-19) Information</h1>
								<h3><p>Learn more about Covid-19</p></h3>
								<a href="#" class="btn">Learn More</a>
							</div>
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->

    <!-- Start Hospital -->
	<div id="hospital" class="gallery-box"> 
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12"> 
					<div class="title-box">
						<h2>Find a hospital</h2>
						<h3><p>View our selected hospital below to donate your blood</p></h3>
					</div>
				</div>  
			</div>
			
			<div class="card-deck"> 
				<div class="col-md-3 col-sm-6"> 
					<div class="card-body text-center">  
						<?php
            				foreach ($hospital_data as $hospital){
                		?> 
                        <div class="button4" > 
                            <button class="btnOne btn default"> 
								
								
								<h2><b><?php echo $hospital->hname ?></b></h2>
								<h2><b><?php echo $hospital->city ?></b></h2>
								<br>
								<br>
								<br>
								<?php echo anchor(site_url('user/Hospital/read/'.$hospital->hId),'READ MORE'); ?>
							</button>
						</div>
						<?php
            				}
            			?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Learn -->
	
	<!-- Start About us -->
	<div id="about" class="about-box">
		<div class="about-a1">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="title-box">
							<h2>About Us</h2>
							<h3><p>Check out more about We Are Donor's feature and advantages of using it.</p></h3>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="row align-items-center about-main-info">
							<div class="col-lg-6 col-md-6 col-sm-12">
								<h2> Welcome to We Are Donor </h2>
								<h4><p>This platform called We Are Donor are gathering all the volunteer donors in donating blood despite different type of blood type.</p></h4>
								<h4><p>On top of that, this platform also gives a lot of advantages and simplicity to the users who also donors</p></h4>
								<a href="<?php echo site_url('user/About'); ?>" class="new-btn-d br-2">Read More</a>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<div class="about-m">
									<ul id="banner">
										<li>
											<img src="<?php echo base_url('assests/img/4.jpg');?>" alt="">
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About us -->
	
	<!-- Start Blog -->
	<div id="blog" class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Learn</h2>
						<h3><p>It only takes an hour to give blood, but it could change someone's life</p></h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-12"> 
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="<?php echo base_url('assests/img/18.jpg');?>" alt="" />
						</div>
						
						<h2>TYPES OF DONATION</h2>
						<p>There are about five litres of bloos in the human body and it is made up of several useful components</p>
						<br>
						<a class="new-btn-d br-2" href="<?php echo site_url('user/Learn'); ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner"> 
						<div class="blog-img">
							<img class="img-fluid" src="<?php echo base_url('assests/img/14.jpg');?>" alt="" />
						</div>
						<h2>ADVANTAGES OF DONATING</h2>
						<p>Learn more about advantages of donating blood such as free for certain treatment in any government hospitals</p>
						<a class="new-btn-d br-2" href="<?php echo site_url('user/Learn'); ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="blog-inner">
						<div class="blog-img">
							<img class="img-fluid" src="<?php echo base_url('assests/img/16.jpg');?>" alt="" />
						</div>
						<h2>HOW DONATION WORKS</h2> 
						<p>For new donor to know how donation works. Is it troublesome or easy?</p>
						<br>
						<a class="new-btn-d br-2" href="<?php echo site_url('user/Learn'); ?>">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Blog -->
	
	<!-- Start Locate -->
	<div id="locate" class="team-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Locate</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-1.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-2.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">kristina</h3>
                            <span class="post">Web Designer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/img-3.jpg" alt="">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Steve Thomas</h3>
                            <span class="post">web developer</span>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
		</div>
	</div>
	
	<!-- End Locate -->
	
	<!-- Start Contact -->
	<div id="notify" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Notify</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>	
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!-- Start Subscribe -->
	<div class="subscribe-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="subscribe-inner text-center clearfix">
						<h2>Subscribe</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						<form action="#" method="post">
							<div class="form-group">
								<input class="form-control-1" id="email-1" name="email" placeholder="Email Address" required="" type="text">
							</div>
							<div class="form-group">
								<button type="submit" class="new-btn-d br-2">
									Subscribe
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Subscribe -->

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