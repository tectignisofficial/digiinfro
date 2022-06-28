<?php

include("include/config.php");

if(isset($_POST['submit'])){
  $category=$_POST['category'];
  $shop_name=$_POST['shop_name'];
	$shop_address=$_POST['shop_address'];
  $authorized_person=$_POST['authorized_person'];
  $mobile_no=$_POST['mobile_no'];
  $whatsapp_no=$_POST['whatsapp_no'];
  $email=$_POST['email'];
  $website=$_POST['website'];
  $services=$_POST['services'];
  $facebook=$_POST['facebook'];
  $instagram=$_POST['instagram'];
  $linkedin=$_POST['linkedin'];
  $youtube=$_POST['youtube'];
 
  $status="open";
  $action="1";
  $image=$_FILES['gallery']['name'];
  move_uploaded_file($dnk,$loc);
 
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <'.$email_no.'>';
  $subject = 'Agreerent';
  // $fields = array( 'name' => 'name' );
  $from = 'Agreerent: 1.0' . "\r\n";
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


  $emailText = '
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting"> 
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <style>
        html,
body {
    margin: 0 auto !important;
    padding: 0 !important;
    height: 100% !important;
    width: 100% !important;
    background: #f1f1f1;
}
* {
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
div[style*="margin: 16px 0"] {
    margin: 0 !important;
}
table,
td {
    mso-table-lspace: 0pt !important;
    mso-table-rspace: 0pt !important;
}
table {
    border-spacing: 0 !important;
    border-collapse: collapse !important;
    table-layout: fixed !important;
    margin: 0 auto !important;
}
img {
    -ms-interpolation-mode:bicubic;
}
a {
    text-decoration: none;
}
*[x-apple-data-detectors], 
.unstyle-auto-detected-links *,
.aBn {
    border-bottom: 0 !important;
    cursor: default !important;
    color: inherit !important;
    text-decoration: none !important;
    font-size: inherit !important;
    font-family: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
}
.a6S {
    display: none !important;
    opacity: 0.01 !important;
}
.im {
    color: inherit !important;
}
img.g-img + div {
    display: none !important;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
    u ~ div .email-container {
        min-width: 320px !important;
    }
}
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
    u ~ div .email-container {
        min-width: 375px !important;
    }
}
@media only screen and (min-device-width: 414px) {
    u ~ div .email-container {
        min-width: 414px !important;
    }
}
    </style>
    <style>
	    .primary{
	background: #17bebb;
}
.bg_white{
	background: #ffffff;
}
.bg_light{
	background: #f7fafa;
}
.bg_black{
	background: #000000;
}
.bg_dark{
	background: rgba(0,0,0,.8);
}
.email-section{
	padding:2.5em;
}
.btn{
	padding: 10px 15px;
	display: inline-block;
}
.btn.btn-primary{
	border-radius: 5px;
	background: #A800BF;
	color: #ffffff;
}
.btn.btn-white{
	border-radius: 5px;
	background: #ffffff;
	color: #000000;
}
.btn.btn-white-outline{
	border-radius: 5px;
	background: transparent;
	border: 1px solid #fff;
	color: #fff;
}
.btn.btn-black-outline{
	border-radius: 0px;
	background: transparent;
	border: 2px solid #000;
	color: #000;
	font-weight: 700;
}
.btn-custom{
	color: rgba(0,0,0,.3);
	text-decoration: underline;
}
h1,h2,h3,h4,h5,h6{
	font-family: "Poppins", sans-serif;
	color: #000000;
	margin-top: 0;
	font-weight: 400;
}
body{
	font-family: "Poppins", sans-serif;
	font-weight: 400;
	font-size: 15px;
	line-height: 1.8;
	color: rgba(0 0 0 / 60%);
}
a{
	color: #A800BF;
}
table{
}
.logo h1{
	margin: 0;
}
.logo h1 a{
	color: #A800BF;
	font-size: 24px;
	font-weight: 700;
	font-family: "Poppins", sans-serif;
}
.hero{
	position: relative;
	z-index: 0;
}
.hero .text{
	color: rgba(0,0,0,.3);
}
.hero .text h2{
	color: #000;
	font-size: 34px;
	margin-bottom: 0;
	font-weight: 200;
	line-height: 1.4;
}
.hero .text h3{
	font-size: 24px;
	font-weight: 300;
}
.hero .text h2 span{
	font-weight: 600;
	color: #000;
}
.text-author{
	bordeR: 1px solid rgba(0,0,0,.05);
	max-width: 50%;
	margin: 0 auto;
	padding: 2em;
}
.text-author img{
	border-radius: 50%;
	padding-bottom: 20px;
}
.text-author h3{
	margin-bottom: 0;
}
ul.social{
	padding: 0;
}
ul.social li{
	display: inline-block;
	margin-right: 10px;
}
.footer{
	border-top: 1px solid rgba(0,0,0,.05);
	color: rgba(0,0,0,.5);
}
.footer .heading{
	color: #000;
	font-size: 20px;
}
.footer ul{
	margin: 0;
	padding: 0;
}
.footer ul li{
	list-style: none;
	margin-bottom: 10px;
}
.footer ul li a{
	color: rgba(0,0,0,1);
}
@media screen and (max-width: 500px) {
}
    </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
    <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
      &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
    </div>
    <div style="max-width: 600px; margin: 0 auto;" class="email-container">
    	<!-- BEGIN BODY -->
      <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
      	<tr>
          <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
          	<table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
          		<tr>
          			<td class="logo" style="text-align: center;">
			            <h1><a href="#">vendor</a></h1>
			          </td>
          		</tr>
          	</table>
          </td>
	      </tr><!-- end tr -->
				<tr>
          <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
            	<tr>
            		<td style="padding: 0 2.5em; text-align: center; padding-bottom: 3em;">
            			<div class="text">
							<h3>Hello <b>'.$shop_name.'</b></h3>
            				<h3>Congratulation your account has been Activated Successfully.</h3>
            			</div>
            		</td>
            	</tr>
            	<tr>
			          <td style="text-align: center;">
			          	<div class="text-author">
				          	
				          	<h3 class="name">'.$shop_address.'</h3>
				          	<span class="position">'.$authorized_person.'</span>
							<p>Client Code&nbsp;:&nbsp;<b>'.$shop_address.'</b><br>Username&nbsp;:&nbsp;<b>'.$whatsapp_no.'</b><br>Password&nbsp;:&nbsp;<b>'.$authorized_person.'</b></p> 
				           	<p><a href="https://www.agreerent.in/client/" class="btn btn-primary">Login Now</a></p>
				           	<p><a href="https://www.agreerent.in/" class="btn-custom">Visit Our Website</a></p>
							
			           	</div>
			          </td>
			        </tr>
            </table><br>
		<h4 class="position" align="center">for any query feel free to email us<br><a href="mailto: support@agreerent.in"> support@agreerent.in</a></h4>			  
          </td>
	      </tr><!-- end tr -->
      <!-- 1 Column Text + Button : END -->
      </table>
    </div>
</body>
</html>';

try{
  foreach($_POST as $key => $value){
    if(isset($fields[$key])){
      $emailText.="$fields[$key]: $value\n";
    }
  }
 if( mail($sendTo,$subject,$emailText, "From:" .$from)){
  
  $sql=mysqli_query($conn,"INSERT INTO `vendor`(`shop_name`, `category`, `shop_address`, `authorized_person`, `mobile_no`, `whatsapp_no`, `email`, `services`, `website`, `facebook`, `instagram`, `LinkedIn`, `youtube`,`status`,`shop_act_license`,`action`) VALUES ('$shop_name','$category','$shop_address','$authorized_person','$mobile_no','$whatsapp_no','$email','$services','$website','$facebook','$instagram','$linkedin','$youtube','$status','$upload_license','$action')");
   if($sql=1){
     echo "<script>alert('vendor Registered Successfully');</script>";    }
   else{
     echo "<script>alert('Something Wrong');</script>";
   }
 }else{
    echo "eeee $sendTo $subject $emailText $from";
 }
}
catch(\Exception $e){
  echo "not done";
}
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
  $encode=json_encode($responseArray);
  header('content-Type: application/json');
  echo $encoded;
}
else{
  echo $responseArray['message'];
}

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.html" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Home
              </p>
            </a>
          </li>
			<li class="nav-item">
            <a href="vendorregistration.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Vendor Registration
              </p>
            </a>
          </li>
			<li class="nav-item ">
            <a href="" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Listing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>


            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendingapproval.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="completeappoval.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Complete Approval</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="category.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
            </ul>
          </li>
			<li class="nav-item">
            <a href="ticket.html" class="nav-link ">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Ticket
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Home Section
                <i class="fas fa-angle-left right"></i> 
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="banner.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="feature.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Feature</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="services.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="testimonial.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testimonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="partners.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Partners</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="offer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Offer</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                SEO Setup
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="seohome.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="seolisting.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listing</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="seoaboutus.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pricing.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pricing</p>
                </a>
              </li>
			  <li class="nav-item">
                <a href="seoblog.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
				<li class="nav-item">
                <a href="contactus.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
				<li class="nav-item">
                <a href="seovender.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Vendor Registration</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Page
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="about.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="tnc.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terms & Condition</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="errorpage.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Location
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="state.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>State</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="city.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>City</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="generalsetting.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="blogsetting.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="paymentaccount.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payment Account</p>
                </a>
              </li>
				<li class="nav-item">
                <a href="googleanalytics.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Google Analytics</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="emailconfiguration.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Configuration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="emailtemplate.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email Template</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
               Blog
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="categoryblog.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="blog.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="commentblog.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Comment</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="contact.html" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Contact
              </p>
            </a>
          </li>
			  <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Subscriber
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="subscriber.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Subscriber</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="emailsubscriber.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Email with Subscriber</p>
                </a>
              </li>
            </ul>
          </li>
            </ul>s
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Vendor Registration</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->


        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vendor Registration</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                <div class="form-group">
                  <label>Category</label>
                  <?php 
                  $query=mysqli_query($conn,"select * from vendor");
                
                  ?>


                      <select class="form-control select2" name="category" id="category" style="width: 100%;" required>
                        <option selected="selected" disabled>select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>
                        <option value="<?php echo $sql['category'];?>"><?php echo $sql['category'];?></option>
                        <?php
                    }
                    ?>
                      </select>

                        
                </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Shop Name</label>
                    <input type="text" class="form-control" name="shop_name" id="shop_name" placeholder="Enter shop name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Shop Address</label>
                        <textarea class="form-control" name="shop_address" id="shop_address" placeholder="Enter shop address"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Authorized Person Name</label>
                    <input type="text" class="form-control" name="authorized_person" id="example1" placeholder="Enter autorized person name">
                    <span id="spanpersonname"></span>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mobile No.</label>
                        <input type="tel" class="form-control" name="mobile_no" id="mobile_no" placeholder="Enter mobile number" minlength="10"  maxlength="10" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">WhatsApp No.</label>
                    <input type="tel" class="form-control" name="whatsapp_no" id="whatsapp_no" placeholder="Enter whatsapp number" minlength="10"  maxlength="10">
                  </div>




                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Email ID.</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
                  </div> -->



                  <div class="form-group row">
                                        <label for="exampleemail" class="col-sm-2 col-form-label">Email ID<label
                                                style="color:Red">*</label></label>
                                        <div class="col-sm-10">
                                        <div class="input-group date" id="reservationdateAllowances" data-target-input="nearest">
                                                <input type="email" class="form-control" name="email" id="email"
                                                 placeholder="Enter Email ID" required>
                                                 
                                                <a class="btn btn-primary" id="otp" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Send OTP</a>

            </div>
            <span id="spanemail"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="collapse multi-collapse row" id="multiCollapseExample1">
                                        <label for="examplepan" class="col-sm-2 ml-1 col-form-label"></label>
                                        <input type="text" class="form-control mt-2 col-lg-6" name="veriotp" id="veriotp" >
                                        <?php
                                        ?>
                                        <p style="color:red;font-size:12px;width:100%;margin-left:17%">Enter OTP sent to your registered email id</p>
                                     </div>
                                    </div>
                                   
                                   













                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Website</label>
                    <input type="url" class="form-control" name="website" id="website" placeholder="Enter website">
                  </div>
                  <div class="form-group">
                  <label>Services</label>
                  <?php 
                  $query=mysqli_query($conn,"select * from vendor");
                
                  ?>


                      <select class="form-control select2" name="services" id="services" style="width: 100%;" required>
                        <option selected="selected" disabled>select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>
                <option value="<?php echo $sql['services'];?>"><?php echo $sql['services'];?></option>
                        <?php }  ?>
                      </select>
                  </div>
                  <div>
                  <div class="row">
                  <h5> Social Media </h5>
                </div>
               

              <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Facebook</label>
                  <input type="url" class="form-control" name="facebook" id="facebook">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Instagram</label>
                  <input type="url" class="form-control" name="instagram" id="instagram">
                </div>
                <!-- /.form-group -->
              </div>
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>LinkedIn</label>
                  <input type="url" class="form-control" name="linkedin" id="linkedin" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>YouTube</label>
                  <input type="url" class="form-control" name="youtube" id="youtube" >
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
                  
               
                <!-- /.card-body -->

               
             
           

          </div>




                  
          <div class="form-group">
                    <label for="exampleInputFile">Gallery</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile" accept="image/png, image/jpeg" multiple>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>







                  <div class="form-group">
                    <label for="exampleInputPassword1">Shop Act License Document Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="license" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>







                  <div class="form-group">
                    <label for="exampleInputPassword1">Pan card Document Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit" id= "submit" style="float:right;">Register</button>
                </div>
              </form>
            </div> 

          </div>
          
                
                  <!-- input states -->
                 
              
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script>

let validenqName;

  $(document).ready(function(){
   //TEXT VALIDATION
   $("#spanpersonname").hide();
	    $("#example1").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
        validenqName="no";
		   let txt=$("#example1").val();
		   let vali =/^[A-Za-z ]+$/;
		   if(!vali.test(txt)){
			  $("#spanpersonname").show().html("Enter Alphabets only").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
            validenqName="yes";
		       $("#spanpersonname").hide();
		       
		   }
	   }
       $("#submit").click(function(){
       txt_err = true;
             txt_check();
			   
			   if((txt_err==true)){
			      return true;
			   }
			   else{return false;}
		  });

    });
      </script>

</body>
</html>
