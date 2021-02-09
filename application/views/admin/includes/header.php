<!-- Start header -->
<header class="top-header"> 
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('home'); ?>">
              <img src="<?php echo base_url('assests/img/logo2.png');?>" height="85">
            </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd"> 
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Donate</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('admin/user_profile'); ?>">Appointment</a>
                                <a class="dropdown-item" href="<?php echo site_url('admin/blooddrive'); ?>">Blood Drive</a>
                                <a class="dropdown-item" href="<?php echo site_url('admin/Hospital'); ?>">Hospital</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('admin/Manage_users'); ?>">Manage </a>            
                                <a class="dropdown-item" href="<?php echo site_url('admin/History'); ?>">History</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('admin/change_password'); ?>">Change Password</a>            
                                <a class="dropdown-item" href="<?php echo site_url('admin/Login/logout'); ?>">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->