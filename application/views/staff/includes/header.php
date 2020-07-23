<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Bootstrap core CSS-->
        <?php echo link_tag('assests/vendor/bootstrap/css/bootstrap.min.css'); ?>
        <!-- Custom fonts for this template-->
        <?php echo link_tag('assests/vendor/fontawesome-free/css/all.min.css'); ?>
        <!-- Page level plugin CSS-->
        <?php echo link_tag('assests/vendor/datatables/dataTables.bootstrap4.css'); ?>
        <!-- Custom styles for this template-->
        <?php echo link_tag('assests/css/sb-admin.css'); ?>
    </head>

<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f50a0a;">
    <a class="navbar-brand" href="<?php echo site_url('staff/Dashboard'); ?>">
        <img src="<?php echo base_url('assests/img/logo2.png');?>" height="30">
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Home
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('staff/Bloodreq'); ?>">Blood Request</a>
          <a class="dropdown-item" href="<?php echo site_url('staff/History'); ?>">Donation History</a>
          <a class="dropdown-item" href="<?php echo site_url('staff/Campaign'); ?>">Blood Campaign</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Settings
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo site_url('staff/Change_password'); ?>">Change Password</a>
          <a class="dropdown-item" href="<?php echo site_url('staff/Login/logout'); ?>">Log Out</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    </form>
  </div>
</nav>


</body>
</html>