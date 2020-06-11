<!DOCTYPE html>
<html lang="en">

<head>
<!-- Custom styles for this template-->
<?php echo link_tag('assests/css/sb-admin.css'); ?>
<?php echo link_tag('assests/css/custom2.css'); ?>

</head>

<body>
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The sidebar --> 
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <button class="dropdown-btn"><i class="fa fa-fw fa-home"></i>Home
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="<?php echo site_url('user/BloodReq'); ?>">Blood Request</a>
    <a href="<?php echo site_url('user/Donate'); ?>">Donation History</a>
    <a href="<?php echo site_url('user/Campaign'); ?>">Blood Campaign</a>
  </div>
  <a href="<?php echo site_url('user/User_profile'); ?>"><i class="fa fa-fw fa-user"></i> My Account</a>
  <a href="<?php echo site_url('user/Change_password'); ?>"><i class="fa fa-fw fa-wrench"></i> Setting</a>
  <a href="<?php echo site_url('user/Login/logout'); ?>"><i class="fa fa-sign-out"></i> Log Out</a>
</div>

<!-- Use any element to open the sidenav -->
<button onclick="openNav()">|||</button>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->

<!-- Bootstrap core JavaScript-->
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url('assests/js/sb-admin.min.js '); ?>"></script>
    <script src="<?php echo base_url('assests/js/custom2.js '); ?>"></script>
    <script src="<?php echo base_url('assests/js/custom3.js '); ?>"></script>

</body>
</html>