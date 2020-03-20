<!DOCTYPE html>
<html lang="en"> 

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:51:20 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
    <meta name="format-detection" content = "telephone=no">
    <meta name="description" content="">
    <meta name="author" content=""> 
    
    <!-- Title -->
    <title>easy living</title> 
    
    <!-- favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico">
    
    <!-- Icons -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet"><!-- font-awesome.min css -->
    <link href="assets/css/custom-icons.css" rel="stylesheet"><!-- custom-icons css -->
    <!-- CSS Stylesheet -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"><!-- bootstrap.min css -->
    <link href="assets/css/slick.css" rel="stylesheet"><!-- slick css -->
    <link href="assets/css/slick-theme.css" rel="stylesheet"><!-- slick-theme css -->
    <link href="assets/css/bootstrap-select.css" rel="stylesheet"><!-- bootstrap selectbox css -->
    <link href="assets/css/style.css" rel="stylesheet"><!-- style css --> 
	<link href="assets/css/css3.css" rel="stylesheet"><!-- css3 css -->
	<link href="assets/css/theme/theme-1.css" rel="stylesheet" id="switch_style"><!-- style css --> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--[if gte IE 9]>
		<style type="text/css">
			.thumb-hover,
			.contact{filter: none;}
		</style>
	<![endif]-->
</head> 

<body>
	<div id="wrapper" class="innerPage">
    	<!-- Style Box Start -->
    	<div class="style-box">
        	<div class="box-icon"><i class="fa fa-cog"></i></div>
            <div class="inner-box">
            	<h2>Style Selector </h2>
                <!--<h3>Layout Style</h3>
                <div class="layout-style">
                	<div class="full-layout"><div class="box"></div><span>Fullwidth</span></div>
                    <div class="box-layout"><div class="box"></div><span>Boxed</span></div> 
                </div>-->
                <h3>Predefined Colors</h3>
                <div class="color-box">	
                	<ul>
                    	<li class="theme-1"><a href="javascript:void(0);"></a></li>
                        <li class="theme-2"><a href="javascript:void(0);"></a></li>
                        <li class="theme-3"><a href="javascript:void(0);"></a></li>
                        <li class="theme-4"><a href="javascript:void(0);"></a></li>
                        <li class="theme-5"><a href="javascript:void(0);"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Start -->
		<?php 
			include_once('header.php');
		?>
		<!-- Header End   -->
        
        <!-- Content Start -->
        <div id="content">
        	<!-- Contact Us Section -->
            <section id="contact-us" class="section-block"> 
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                    	<div class="col-sm-8">
                        	<h3>Write Us</h3>
                        	<form id="contact_form">
                            	<div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>First Name</label>
                                            <input type="text" name="fname" class="form-control" data-validation="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>Last Name</label>
                                            <input type="text" name="lname" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>Email</label>
                                            <input type="text" name="email" class="form-control" data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>Phone Number</label>
                                            <input type="text" name="phno" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="msg" class="form-control" ></textarea>
                                </div>
                                <div class="form-group">
                                	<input type="submit" class="btn btn-info" value="SEND" id="attending_btn"/>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4">
                        	<h3>Our Office Address</h3>
                            <address>
                            	<p><i class="fa fa-map-marker" aria-hidden="true"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>+1 123 456 7890</p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@yourwebsite.com">info@yourwebsite.com</a></p>
                            </address>
                        </div>
                	</div>
                </div>
            </section>
             <!-- Contact Map -->
            <div class="contact-map">
                <div id="map" class="map inside-full-height"></div>
            </div>
        </div>   
           
       <!-- Footer Start -->
		<?php 
				include_once('footer.php');
		?>
        <!-- Footer End -->
    </div>
    <!-- JavaScript files -->
    <script src="assets/js/jquery-1.12.4.min.js"></script><!-- jquery-1.12.4.min js-->
    <script src="assets/js/bootstrap.min.js"></script><!-- bootstrap.min js-->
    <script src="assets/js/slick.min.js"></script><!-- slick js-->
    <script src="assets/js/bootstrap-select.min.js"></script><!-- Bootstrap selectbox js-->
    <script src="assets/js/waypoints.min.js"></script> 
	<script src="assets/js/jquery.counterup.min.js"></script><!-- counter js -->
    <script src="assets/js/jquery.form-validator.min.js"></script><!-- form-validator js-->  
    <script type='text/javascript' src='https://maps.google.com/maps/api/js?key=AIzaSyAciPo9R0k3pzmKu6DKhGk6kipPnsTk5NU'></script>
    <script src="assets/js/map-cstomize.js" type="text/javascript"></script><!-- map js-->
	<script src="assets/js/custom.js"></script><!-- custom js--> 
</body>

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:51:23 GMT -->
</html>
