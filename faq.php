<!DOCTYPE html>
<?php 
	include_once('conn.php');
?>
<html lang="en"> 

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:48:43 GMT -->
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
    	
         <!-- Header Start -->
		<?php 
			include_once('header.php');
		?>
		<!-- Header End   -->
       
        <?php 
			include_once('model_login.php');
		?>
        <!-- Content Start -->
        <div id="content">
        	<!-- FAQ's Section -->
			
            <section id="faq" class="section-block">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>faq</h2>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                       
                       
                       
                       <?php
							$str="select * from faq_table";
							$show=mysqli_query($link,$str);
							while($row=mysqli_fetch_array($show))
							{
						?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
								  
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive<?php echo $row['faq_id'];?>" aria-expanded="false" aria-controls="collapseFive">
                                    	<?php echo $row['faq_question'];?>
										
                                    </a>
											
                                </h4>
                            </div>
							
                            <div id="collapseFive<?php echo $row['faq_id'];?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                               
							  <div class="panel-body">
                                	<p><?php echo $row['faq_answer'];?></p>
                                </div>
								
                            </div>
							
                        </div>
                   <?php } ?>
                    </div>
					
					
                	 
                </div>
            </section>
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
    <script src="assets/js/custom.js"></script><!-- custom js--> 
</body>

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:48:43 GMT -->
</html>
