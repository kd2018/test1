<?php
error_reporting(0);
	 session_start();
	include('conn.php');

	 
?>	 
  <!-- Header Start -->
        <header id="header">
        	<div class="container"> 
            	<div class="row">
                	<div class="col-lg-4 col-md-3 col-sm-2">
                    	<div class="navbar-header">
                            <a class="navbar-brand" href="index.php">
                                <img src="assets/images/logo.png" alt="Logo" class="img-responsive" />
                            </a>
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> 
                        </div> 
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-10">
                    	<div class="right-header clearfix">
                            <nav class="navigation">
                            	<div class="close-menu"><i class="fa fa-close" aria-hidden="true"></i></div>
                                <div class="navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li><a href="index.php">Home</a></li>
                                       
                                        <li><a href="service.php">Our Services</a></li>
										
                                        <li><a href="faq.php">FAQ’s</a></li>
										
                                      <li><a href="#">Vendor <em class="fa fa-angle-down" aria-hidden="true"></em></a>
                                        	<ul class="dropdown-menu"> 
                                            	<li><a href="team.php">Our Team V1</a></li>
                                                <li><a href="team_2.php">Our Team V2</a></li>
                                                <li><a href="team_member.php">Team Member</a></li>
                                            	<li><a href="dashboard.php">My Dashboard</a></li>
                                                <li><a href="order_status.php">My Orders</a></li>
                                                <li><a href="404_page.php">404 Page</a></li>
                                                <li><a href="coming_soon.php">Comingsoon</a></li>
                                                <li><a href="service_1.php">Book Service</a> </li>
                                                <li><a href="User-Register.php">Register</a> </li>
                                            </ul> 
                                        </li>
										 <li><a href="about.php">About Us</a></li>
                                       <!-- <li><a href="contact-us.html">Contact Us</a></li> -->
                                    </ul>
                                </div>
                            </nav>
                            <div class="register-link">
								<!--<img src="upload/" alt="Image name" class="img-circle"/>-->
                                <?php 
								  if(isset($_SESSION['vendor_name']) || isset($_SESSION['customer_Name']))
								  {
								  ?>
									<a href="dashboard.php">
									<em class="fa fa-user" aria-hidden="true"></em><?php  if(isset($_SESSION['vendor_name']))
									{ echo $_SESSION['vendor_name'];   } 
									?>
									<?php  if(isset($_SESSION['customer_Name'])) { echo $_SESSION['customer_Name']; }  ?></a>
									<?php } else { ?>
									 <a href="User-Register.php"><em class="fa fa-user" aria-hidden="true"></em>Register</a>
								   <?php } ?>
								  <?php 
								  if(isset($_SESSION['vendor_name']) || isset($_SESSION['customer_Name']))
								  {
								  ?>
									<a href="logout.php"><em class="fa fa-lock" aria-hidden="true"></em>Logout</a>
								  <?php } else { ?>
								<a href="login.php" ><em class="fa fa-user" aria-hidden="true"></em>LogIn</a>
								<?php } ?>
								
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </header>