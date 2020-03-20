<!DOCTYPE html>
<html lang="en"> 
<?php
	include('conn.php');
	 session_start();
	if(!isset($_SESSION['vendor_name']))
	{
		header("location:index.php"); 
		//to redirect back to "index.php"
	}
?>
<!--   Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/my-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:51:03 GMT -->
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
	<link href="assets/vendor/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="assets/vendor/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-1.11.1.min.js"></script>
	<link href="assets/vendor/vendor.css" rel="stylesheet"><!-- style css --> 
</head> 
<style>


</style>
<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
<body>

<?php
		
		$company_name=$compnay_Email=$vendor_Name=$admin_status=$admin_Address=$vendor_img=$product_Cat_Id=$company_Contact=$company_website='';
		if(isset($_SESSION['vendor_Id']))
		{
			$up_id=$_SESSION['vendor_Id'];
			$str="Select * from vendor_table where vendor_Id=".$_SESSION['vendor_Id'];
			$results=mysqli_query($link,$str);
			$row=mysqli_fetch_array($results);
			$vendor_Id=$row['vendor_Id'];
			$company_name=$row['company_name'];
			$vendor_Name=$row['vendor_Name'];
			$compnay_Email=$row['compnay_Email'];
			$company_Contact=$row['company_Contact'];
			$company_website=$row['company_website'];
			$image=$row['vendor_img'];
			
			$company_Address=$row['company_Address'];	
			
		}
		if(isset($_POST['submit1']))
			{
					
					if($_FILES["photo"]["tmp_name"]=='')
					{
						$image=$_POST['oldimage'];
					}
					else
					{
						unlink("admin\upload\\".$_POST['oldimage']);
						
						move_uploaded_file($_FILES["photo"]["tmp_name"],"admin/upload/".$_FILES["photo"]["name"]);
						$image=$_FILES["photo"]["name"];
				
					}
					mysqli_query($link,"UPDATE vendor_table SET vendor_Name='".$_POST['fname']."',compnay_Email='".$_POST['com_email']."',company_Contact='".$_POST['contact']."',company_Address='".$_POST['address']."',vendor_img='".$image."' WHERE vendor_Id=".$_SESSION['vendor_Id']);
					header('location:dashboard.php');
			}
?>

	<?php
		
		$service_name=$service_description=$product_id=$price='';
		if(isset($_SESSION['vendor_Id']))
		{
			$str="Select * from vendor_table where vendor_Id=".$_SESSION['vendor_Id'];
			$results=mysqli_query($link,$str);
			$row=mysqli_fetch_array($results);
			$vendor_Id=$row['vendor_Id'];
			$company_name=$row['company_name'];
			$vendor_Name=$row['vendor_Name'];
			$compnay_Email=$row['compnay_Email'];
			$company_Contact=$row['company_Contact'];
			$company_website=$row['company_website'];
			$image=$row['vendor_img'];
			$company_Address=$row['company_Address'];	
			
		}
		if(isset($_POST['submit3']))
			{
					
					if($_FILES["photo"]["tmp_name"]=='')
					{
						$image=$_POST['oldimage'];
					}
					else
					{
						unlink("admin\upload\\".$_POST['oldimage']);
						
						move_uploaded_file($_FILES["photo"]["tmp_name"],"admin/upload/".$_FILES["photo"]["name"]);
						$image=$_FILES["photo"]["name"];
					}
					mysqli_query($link,"UPDATE vendor_table SET vendor_Name='".$_POST['fname']."',compnay_Email='".$_POST['com_email']."',company_Contact='".$_POST['contact']."',company_Address='".$_POST['address']."',vendor_img='".$image."' WHERE vendor_Id=".$_SESSION['vendor_Id']);
					header('location:dashboard.php');
			}	

				// end the section//
				// change the password //
		if(isset($_POST['submit2']))
		{
				$admin_pwd=$_POST['old_pwd'];
				$new_password=$_POST['new_pwd'];
				$conf_pwd=$_POST['conform_pwd'];
				$pd_id=$_SESSION['vendor_Id'];	
				$str="select * from vendor_table where vendor_Password='".$_POST['old_pwd']."'";
				//echo $str;die;
				$results=mysqli_query($link,$str);
				$row=mysqli_fetch_array($results);
				$admin_database_pwd=$row['vendor_Password'];
				$vendor_Id=$row['vendor_Id'];
				if($admin_database_pwd==$admin_pwd)
				{
					if($new_password==$conf_pwd)
					{
						$str="update vendor_table set vendor_Password='".$new_password."' where vendor_Id='".$_SESSION['vendor_Id']."'";
						$success=mysqli_query($link,$str);
							if($success)
							{
								$_SESSION['msg']=" Password are Successfully Update..";
									//header('location:Category_View.php');
									echo "Password are Successfully Update..";die;
							}
					}
					else
					{
					    $_SESSION['error']="New Password and confirmd Password is not matched..";
						echo "New Password and confirmd Password is not matched..";die;
					}	
				}
				else
				{
					$_SESSION['error']="Old Password is Not Matched..";
					echo "Old Password is Not Matched..";die;
				}
			
		}
		// end the section second//
	?>
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
        <?php include_once 'header.php';?>
        	<!-- header end -->
        <!-- Register Section -->
        
        	 <!-- Register Section -->
       <?php //include_once 'model_login.php';?>
        <!-- Content Start -->
        <div id="content">
        	<!-- Our Story -->
            <?php //include_once 'left_nevigation.php';?>
                     
                    </div> 
                </div>
            </section>
             <div class="container">
              <div class="row">
			  
			  <div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="assets/images/admin_img/<?php echo $_SESSION['img'];?>">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img src="assets/images/admin_img/<?php echo $_SESSION['img'];?>" alt="Image name">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo(ucfirst($vendor_Name)); ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="" value="1" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">My Profile</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Change Password</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Add Services</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Order</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab5" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Order Status</div>
            </button>
        </div>
		
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab6" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Order History</div>
            </button>
        </div>
       
    </div>

        <div class="well">
      <div class="tab-content center_div">
        <div class="tab-pane fade in active " id="tab1">
						 <div class="table-responsive-sm">          
							  <table class="table table-bordered">
								<thead>
								  <tr>
									<th>Full Name</th>
									<th>Company Name</th>
									<th>Email</th>
									<th>Contact</th>
									<th>Website</th>
									<th>Address</th>
									<th>Action</th>
								  </tr>
								</thead>
								<tbody>
								  <tr>
									<td><?php echo $vendor_Name; ?></td>
									<td><?php echo $company_name; ?></td>
									<td><?php echo $compnay_Email; ?></td>
									<td><?php echo $company_Contact; ?></td>
									<td><?php echo $company_website; ?></td>
									<td><?php echo $company_Address; ?></td>
									<td> <button type="button" id="favorites" class="btn btn-default" href="#tab7" data-toggle="tab"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
											<div class="hidden-xs">Edit Profile</div>
										</button></td> 
								  </tr>
								</tbody>
							  </table>
							</div>
					</div>
					<div class="tab-pane fade in" id="tab2">
						<form id="contact_form" method="Post">
                            	<div class="row">
                                	<div class="col-md-8">
                                    	<div class="form-group">
                                        	<label>Old Password</label>
                                            <input type="password" name="old_pwd" class="form-control" data-validation="required" />
                                        </div>
                                    </div>
									</div>
									<div class="row">
                                	<div class="col-md-4">
                                    	<div class="form-group">
                                        	<label>New Password</label>
                                            <input type="password" name="new_pwd" class="form-control" data-validation="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    	<div class="form-group">
                                        	<label>Conform Password</label>
                                            <input type="password" name="conform_pwd" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
												
                                <div class="form-group">
                                	<input type="submit" class="btn btn-info" name="submit2" value="SEND" id="attending_btn"/>
                                </div>
					</form>
					</div>
					<div class="tab-pane fade in" id="tab3">
							<form id="contact_form">
									<div class="row">
											<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Full Name</label>
                                            <input type="text" name="fname" class="form-control" data-validation="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Company Name</label>
                                            <input type="text" name="lname" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Company Email</label>
                                            <input type="text" name="email" class="form-control" data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Contact</label>
                                            <input type="text" name="phno" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
									
                                </div>
								 <div class="row">
                                	<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Email</label>
                                            <input type="text" name="email" class="form-control" data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Phone Number</label>
                                            <input type="text" name="phno" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
									
                                </div>
								 <div class="row">
                                	<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Company Website</label>
                                            <input type="text" name="email" class="form-control" data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Date & Time</label>
                                            <input type="text" name="phno" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
									
                                </div>
								<div class="row">
                                	<div class="col-md-5">
										<div class="form-group">
												<label for="comment">Address:</label>
												<textarea class="form-control" rows="5" id="comment"></textarea>
										</div>
									</div>
								</div>
                                <div class="form-group">
                                	<input type="submit" name="submit3" class="btn btn-info" value="Add Service" id="attending_btn"/>
                                </div>
					</form>
        </div>
        <div class="tab-pane fade in" id="tab4">
			 <div class="table-responsive-sm">          
			  <table class="table table-bordered">
				<thead>
				  <tr>
					<th>#</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Age</th>
					<th>City</th>
					<th>Country</th>
					<th>Sex</th>
					<th>Example</th>
					
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td>1</td>
					<td>Anna</td>
					<td>Pitt</td>
					<td>35</td>
					<td>New York</td>
					<td>USA</td>
					<td>Female</td>
					<td>Yes</td>
				   
				  </tr>
				</tbody>
			  </table>
			  </div>

        </div>
		<div class="tab-pane fade in" id="tab5">
				
                        	<div class="order-status">
                            	<div class="title-info">
                                    <h4>Order Confirmed</h4>
                                    <p>You’re order is confirmed and we will send you the service provider's detail shortly !</p>
                                </div> 
                                <div>
                                	<p class="order-id">Order ID: 78174</p>
                                    <ul>
                                    	<li class="active">
                                        	<span class="icon-box"><i class="fa fa-check" aria-hidden="true"></i></span>
                                            <span class="name">Confirmed</span>
                                        </li>
                                        <li>
                                        	<span class="icon-box"><i class="fa fa-user" aria-hidden="true"></i></span>
                                            <span class="name">Assigned</span>
                                        </li>
                                        <li>
                                        	<span class="icon-box"><i class="fa fa-motorcycle" aria-hidden="true"></i></span>
                                            <span class="name">On the Way</span>
                                        </li>
                                        <li>
                                        	<span class="icon-box"><i class="fa fa-wrench" aria-hidden="true"></i></span>
                                            <span class="name">In Progress</span> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        
		 </div>
		  <div class="tab-pane fade in" id="tab6">
          <h3>This is tab 6</h3>
		   <div class="table-responsive-sm">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
        <th>Sex</th>
        <th>Example</th>
        <th>Example</th>
        <th>Example</th>
        <th>Example</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
        <td>Female</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
      </tr>
    </tbody>
  </table>
  </div>
		   </div>
		  <div class="tab-pane fade in" id="tab7">
               <div class="tab-pane fade in active " id="tab1">

			<form id="contact_form" method="POST"  enctype="multipart/form-data">
		
                            	<div class="row">
                                	<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Full Name</label>
                                            <input type="text" name="fname" value="<?php echo $vendor_Name; ?>" class="form-control" data-validation="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Company Name</label>
                                            <input type="text" name="company_name" value="<?php echo $company_name; ?>" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Company Email</label>
                                            <input type="text" name="com_email" class="form-control" value="<?php echo $compnay_Email; ?>" data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Contact</label>
                                            <input type="text" name="contact" class="form-control" value="<?php echo $company_Contact;?>"data-validation="required"/>
                                        </div>
                                    </div>
									
                                </div>
								 <div class="row">
                                	<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Image</label>
                                            <input type="file" name="photo" class="form-control" value="<?php echo $compnay_Email;?> "data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
									<div class="col-md-5">
                                    	<div class="form-group">
                                        	<label>Company Website</label>
                                            <input type="text" name="website" class="form-control" data-validation="email" value="<?php echo $company_website;?>"/>
                                        </div>
                                    </div>
                                </div>
								 <div class="row"> 
                                </div>
								<div class="row">
                                	<div class="col-md-5">
										<div class="form-group">
												<label for="comment">Address:</label>
												<textarea class="form-control" rows="5" id="comment" name="address"><?php echo $company_Address;?></textarea>
										</div>
									</div>
								</div>
								
                                <div class="form-group">
                                	<input type="submit" name="submit1" class="btn btn-info" value="SEND" id="attending_btn"/>
                                </div>
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
      </div>
</div>

        	<!-- Our services Section -->
            <section id="services" class="section-block">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>our Services</h2>
                        <p class="sub-heading">You’re in the right place!</p>
                    </div>
                    <div class="service-slider">
					<?php
							$str1="select * from service_table where vendor_id=".$_SESSION['vendor_Id']."";
							$show=mysqli_query($link,$str);
							while($row=mysqli_fetch_array($show))
							{
							?>
							<div class="col-md-3 col-sm-6">
								<a href="service.php">
									<div class="img"><img src="assets/images/service-img/service-img1.jpg" alt="" /></div>
                                <span class="name">Electrical</span>
                            </a>
                        </div>
						 <?php } ?>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img2.jpg" alt="" /></div>
                                <span class="name">Plumbing</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img3.jpg" alt="" /></div>
                                <span class="name">Pest Control</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img4.jpg" alt="" /></div>
                                <span class="name">Painting</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img5.jpg" alt="" /></div>
                                <span class="name">Cleaning</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img6.jpg" alt="" /></div>
                                <span class="name">Appliances</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img7.jpg" alt="" /></div>
                                <span class="name">Carpentry</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="services.php">
                                <div class="img"><img src="assets/images/service-img/service-img8.jpg" alt="" /></div>
                                <span class="name">Computer Repair</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img9.jpg" alt="" /></div>
                                <span class="name">Home Security</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img10.jpg" alt="" /></div>
                                <span class="name">Geyser</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img11.jpg" alt="" /></div>
                                <span class="name">Vehicle Care</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="service.php">
                                <div class="img"><img src="assets/images/service-img/service-img12.jpg" alt="" /></div>
                                <span class="name">Spa</span>
                            </a>
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
        <footer id="footer">
        	<div class="top-footer">
            	<div class="container">
                	<div class="row">
                        <div class="col-md-4 col-sm-6">
                            <h3>Quick Links</h3>
                            <div class="row">
                            	<div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">For Corporates</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Unsubscribe</a></li>
                                        <li><a href="#">Download Apps</a></li>
                                        <li><a href="#">Partner With Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 col-sm-6">
                            <h3>Our Services</h3>
                            <div class="row">
                            	<div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">Pest Control</a></li>
                                        <li><a href="#">Electrical</a></li>
                                        <li><a href="#">Plumbing</a></li>
                                        <li><a href="#">Appliance  Services</a></li>
                                        <li><a href="#">Carpentry</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="#">Geyser</a></li>
                                        <li><a href="#">Vehicle Care</a></li>
                                        <li><a href="#">Painting</a></li>
                                        <li><a href="#">Home Security</a></li>
                                        <li><a href="#">Computer Repair</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h3>Follow us</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="contact-us">
                            	<input type="email" placeholder="Enter email address" />
                                <input type="submit" class="btn btn-primary" value="Submit" />
                            </div>
                            <ul class="list-inline social-links">
                                <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="quick-links">
                        <ul class="list-inline">
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
            	<div class="container">Copyright © 2019-2020 yourname.in. All Rights Reserved.</div>
            </div>
        </footer>
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

<!-- Mirrored from design.dev.drcsystems.ooo:8084/themeforest/easyliving/my-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Mar 2020 07:51:04 GMT -->
</html>
