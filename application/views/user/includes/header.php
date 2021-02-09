<!-- Start header -->
<header class="top-header"> 
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
            <a class="navbar-brand" href="<?php echo site_url('user/dashboard'); ?>">
              <img src="<?php echo base_url('assests/img/logo2.png');?>" height="85">
            </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd"> 
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="<?php echo site_url('user/dashboard'); ?>">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Donate
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Appointment
                                </a> 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo site_url('user/Appointment/create'); ?>">Schedule an Appointment</a>
                                    <a class="dropdown-item" href="<?php echo site_url('user/appointment'); ?>">Manage Existing Appointment</a>
                                </div>
                                <!--<a class="dropdown-item" href="#">InstantPass</a>-->
                                <a class="dropdown-item" href="<?php echo site_url('user/blooddrive'); ?>">Blood Drive</a> 
                            </div>
                        </li>
						<li><a class="nav-link" href="<?php echo site_url('user/About'); ?>">About Us</a></li>
						<li><a class="nav-link" href="<?php echo site_url('user/Learn'); ?>">Learn</a></li>
                        <li><a class="nav-link" href="<?php echo site_url('user/Location'); ?>">Locate</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Covid-19</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('user/Covidcentre'); ?>">Testing Centre</a>
                                <a class="dropdown-item" href="<?php echo site_url('user/SafetyProtocol'); ?>">Safety Protocols</a>
							</div>
						</li>
                        <!--<li><a class="nav-link" href="<?php echo site_url('user/Eligible'); ?>">Eligibility</a></li>-->
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?php echo site_url('user/user_profile'); ?>">Settings</a>
                                <a class="dropdown-item" href="<?php echo site_url('user/change_password'); ?>">Change Password</a>
                                <a class="dropdown-item" href="<?php echo site_url('user/History'); ?>">History</a>
                                <a class="dropdown-item" href="<?php echo site_url('user/Login/logout'); ?>">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	<!-- End header -->