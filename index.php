<!DOCTYPE html>
<html lang="en"> 

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:44:42 GMT -->
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
	<div id="wrapper" class="homePage">
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
     <?php 
		include_once 'header.php';	
	?>
        <!-- Register Section -->
		<?php 
			include_once('model_login.php');
		?>
         <!-- Register Section end-->
        <!-- Banner Section --> 
        <section id="banner" class="banner-slider">
			<div class="banner-img-slider">
                <div id="slide-video">
                    <video autoplay loop width="900px" controls>
                        <source src="assets/video/Video.mp4" />
                    </video>
                </div>
                <div id="slide-video">
                    <video autoplay loop width="900px" controls>
                        <source src="assets/video/Video.mp4" />
                    </video>
                </div>
                <div>
					<div class="banner-thumb"><img src="assets/images/banner-img/banner-img.png" alt="" class="hide" /></div>
				</div>
                <div>
					<div class="banner-thumb"><img src="assets/images/banner-img/banner-img.png" alt="" class="hide" /></div>
				</div>
			</div>
			<div class="blue-overlay"></div>
			<div class="banner-text-wrapper">
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                        	<div class="col-lg-6 col-lg-offset-3 col-md-offset-2 col-md-8">
                            	<h1>Make Life Easy</h1>
                        		<div class="search-wrapper">
                                	<div class="row">
                                    	<div class="col-sm-4">
                                        	<select class="selectpicker">
                                                <option>Select City</option>
                                                <option>Berlin</option>
                                                <option>Frankfurt</option>
                                                <option>Hamburg</option>
                                                <option>Hanover</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-8">
                                        	<div class="service-list">
                                                <form name="myform" id="myform"  action="http://design.dev.drcsystems.ooo:8084/themeforest/easyliving/getvalue.php" enctype="multipart/form-data" method="post">
                                                    <select class="mydds" name="myimge">
                                                        <option value="" selected="selected" title="">What service do you need?</option>
                                                        <option value="electrical" title="icon icon-electrical" class="service1">Electrical</option>
                                                        <option value="security" title="icon icon-home">Home Security</option>
                                                        <option value="pestcontrol" title="icon icon-pestcontrol">Pest Control</option>
                                                        <option value="computerrepair" title="icon icon-computerrepair">Computer Repair</option>
                                                        <option value="cleaning" title="icon icon-cleaning">Cleaning</option>
                                                        <option value="plumber" title="icon icon-plumber">Plumbing</option>
                                                        <option value="appliances" title="icon icon-appliances">Appliances</option>
                                                        <option value="geyser" title="icon icon-geyser">Geyser</option>
                                                        <option value="painting" title="icon icon-painting">Painting</option>
                                                        <option value="vehiclecare" title="icon icon-vehiclecare">Vehicle Care</option>
                                                        <option value="carpentry" title="icon icon-carpentry">Carpentry</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
        
        <!-- Content Start -->
        <div id="content">
        	<!-- Our services Section -->
            <section id="services" class="section-block">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>our Services</h2>
                        <p class="sub-heading">You’re in the right place!</p> 
                    </div>
                    <div class="service-slider">
                        <div class="col-md-3 col-sm-6">
                        	<a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img1.jpg" alt="" /></div>
                                <span class="name">Electrical</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img2.jpg" alt="" /></div>
                                <span class="name">Plumbing</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img3.jpg" alt="" /></div>
                                <span class="name">Pest Control</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img4.jpg" alt="" /></div>
                                <span class="name">Painting</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img5.jpg" alt="" /></div>
                                <span class="name">Cleaning</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img6.jpg" alt="" /></div>
                                <span class="name">Appliances</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img7.jpg" alt="" /></div>
                                <span class="name">Carpentry</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img8.jpg" alt="" /></div>
                                <span class="name">Computer Repair</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img9.jpg" alt="" /></div>
                                <span class="name">Home Security</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img10.jpg" alt="" /></div>
                                <span class="name">Geyser</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img11.jpg" alt="" /></div>
                                <span class="name">Vehicle Care</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="gallery.html">
                                <div class="img"><img src="assets/images/service-img/service-img12.jpg" alt="" /></div>
                                <span class="name">Spa</span>
                            </a>
                        </div>
                    </div>  
                </div>
            </section> 
            <!-- Service Provider Section --> 
            <section id="service-provider">
                <div class="row-height">
                    <div class="col-lg-4 col-sm-height">
                        <div class="inside-full-height left-part">
                            <h2>largest home Service Provider</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-height right-part">
                        <div class="inside-full-height">
                            <div class="row">
                                <div class="col-lg-5 col-sm-6">
                                    <div class="row-height">
                                        <div class="col-sm-height icon"><span><i class="fa fa-support" aria-hidden="true"></i></span></div>
                                        <div class="col-sm-height support">
                                            <span class="time">24/7</span>
                                            <span class="text">online<br>support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6">
                                    <div class="row-height">
                                        <div class="col-sm-height icon"><span><i class="fa fa-phone" aria-hidden="true"></i></span></div>
                                        <div class="col-sm-height call-us">
                                            <span class="text">Call us toll free:</span>
                                            <span class="num">1 800 123 4567</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
        	<!-- How it works Section -->
            <section id="how-works" class="section-block">
            	<div class="container">
                	<div class="top-desc">
                        <h2>How it works</h2>
                        <p class="sub-heading">You’re in the right place!</p>
                    </div>
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                        	<div class="name">Browse Services</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p> 
                        </div>
                        <div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
                        	<div class="name">Schedule Service</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></div>
                        	<div class="name">Book Service</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-gear" aria-hidden="true"></i></div>
                        	<div class="name">Resolves Issues</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </section>
        	<!-- Exceptional Quality Section -->
            <section id="exceptional-quality" class="section-block">
            	<div class="blue-overlay"></div>
               	<div class="container">
                    <div class="h1">Exceptional quality</div>
                    <div class="h1">Make Life Easy</div>
                    <a href="#" class="btn btn-info">Read More</a> 
                </div>
            </section>
        	<!-- Our Customers Section -->
            <section id="our-customers" class="section-block">
            	<div class="container">
                	<div class="top-desc">
                        <h2>Our Happy Customers</h2>
                        <p class="sub-heading">You’re in the right place!</p>
                    </div>
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                            <div class="img"><img src="assets/images/customers-img/cust-img1.jpg" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="img"><img src="assets/images/customers-img/cust-img2.jpg" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="img"><img src="assets/images/customers-img/cust-img3.jpg" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="img"><img src="assets/images/customers-img/cust-img4.jpg" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Get App Section -->
            <section id="get-app" class="section-block">
            	<div class="container">
                	<div class="img">
                    	<img src="assets/images/get-app.png" alt="" />
                    </div>
                	<div class="row">
                    	<div class="col-sm-6">
                        	<div class="app-info">
                                <div><img src="assets/images/app-icon.png" alt="" /></div>
                                <h2>Get the App</h2>
                                <p>Download the App and manage your services on the go</p>
                                <div class="buttons">
                                    <a href="#"><img src="assets/images/app-store.png" alt="" /></a>
                                    <a href="#"><img src="assets/images/google-play.png" alt="" /></a>
                                </div>
                                <a href="#" class="btn btn-info">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Our services Section -->
            <section id="our-services" class="section-block">
            	<div class="container">
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-verifiedprofessionals" aria-hidden="true"></i></div>
                            <div class="name">Verified Professionals</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-insuredwork" aria-hidden="true"></i></div>
                            <div class="name">Insured Work</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-satisfactionguaranteed" aria-hidden="true"></i></div>
                            <div class="name">Satisfaction Guaranteed</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-easypayment" aria-hidden="true"></i></div>
                            <div class="name">Easy Payment</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </section>
      	</div>
        <!-- Footer Start -->
        <?php 
		include_once 'footer.php';
		?>
		
    </div>
    <!-- JavaScript files -->
    <script src="assets/js/jquery-1.12.4.min.js"></script><!-- jquery-1.12.4.min js-->
    <script src="assets/js/bootstrap.min.js"></script><!-- bootstrap.min js-->
    <script src="assets/js/slick.min.js"></script><!-- slick js-->
    <script src="assets/js/bootstrap-select.min.js"></script><!-- Bootstrap selectbox js-->
    <script src="assets/js/custom.js"></script><!-- custom js--> 
    <script type="text/javascript" src="assets/js/jquery-1.6.1.min.js"></script>
    <script src="assets/js/jquery.dd.js"></script><!-- selectbox js-->
    <script language="javascript" type="text/javascript">
		function showvalue(arg) {
			alert(arg);
		}
		$(document).ready(function() {
		try {
				oHandler = $(".mydds").msDropDown().data("dd");
				$("#ver").html($.msDropDown.version);
				} catch(e) {
					alert("Error: "+e.message);
				}
		})
	</script>
</body>

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:45:40 GMT -->
</html>
