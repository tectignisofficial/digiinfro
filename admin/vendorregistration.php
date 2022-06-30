<?php include("include/config.php"); ?>

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>


<?php
include('include/header.php');
include('include/sidebar.php');
?>
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
             
                <div class="card-body">
                <form method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                  <label>Category</label>
                  <?php 
                  $query=mysqli_query($conn,"select * from listcategory");
                
                  ?>


                      <select class="form-control select2" name="category" id="category" style="width: 100%;" >
                        <option selected="selected" disabled>select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>
                        <option value="<?php echo $sql['name'];?>"><?php echo $sql['name'];?></option>
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

                  <label for="exampleemail" class="col-sm-2 col-form-label">Email ID<label
                                                style="color:Red">*</label></label>

                  <div class="form-group row">
                                      
                                        <div class="col-sm-12">
                                        <div class="input-group date" id="reservationdateAllowances" data-target-input="nearest">
                                                <input type="email" class="form-control" name="email" id="email"
                                                 placeholder="Enter Email ID" >
                                                 
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


                      <select class="form-control select2" name="services" id="services" style="width: 100%;" >
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

                  <div class="form-group">
                <label>Select a state </label>
                  <?php 
                   $query=mysqli_query($conn,"select * from state");
                   ?>
 
                       <select class="form-control select2" name="state" style="width: 100%;" onChange="get(this.value)" >
                         <option selected="selected" disabled>select</option>
                         <?php
                    while($sql=mysqli_fetch_array($query))
                    {
                      ?>

                <option value="<?php echo $sql['state'];?>"><?php echo $sql['state'];?></option>
                         <?php } ?>
                       </select>
                        
                </div>

                  <div class="form-group">
                  <label>City Name</label>
             
                   
                       <select class="form-control select2 designation" name="city" style="width: 100%;" >
                         
                       </select>
                        
                </div>

                <div class="form-group">
                  <label>location</label>
                  <?php 
                  $query=mysqli_query($conn,"select * from location");
                
                  ?>


                      <select class="form-control select2" name="location" id="location" style="width: 100%;" >
                        <option selected="selected" disabled>select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>
                        <option value="<?php echo $sql['name'];?>"><?php echo $sql['name'];?></option>
                        <?php
                    }
                    ?>
                      </select>

                        
                </div>


                
                


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
                    <label for="exampleInputFile">Image 1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile" accept="image/png,image/jpeg,,image/jpg">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputFile">Image 2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile" accept="image/png, image/jpeg" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Image 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile" accept="image/png, image/jpeg" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">Image 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gallery" class="custom-file-input" id="exampleInputFile" accept="image/png, image/jpeg" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->





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
                  </div> -->
                 

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="subit" id="submit" style="float:right;">Register</button>
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

<!-- <script>

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
      </script> -->



      <script>
        $(document).ready(function(){

            $("#otp").on("click", function () {
            
            let email = $("#email").val();
            let name = $("#shop_name").val();
            let otp = $("#otp").val();
                $.ajax({
                    type: "POST",
                    url: "newcheck.php",
                    data:{
                        
                        email:email,
                        otp:otp,
                        name:name,
                    },
                    cache: false,
                    success: function(datadnk)
                    {
                        alert(datadnk);
                    }
                });
            });
        });
    </script>



<?php

if(isset($_POST['subit'])){

  $category=$_POST['category'];
$shop_name=$_POST['shop_name'];
$shop_address=$_POST['shop_address'];
$authorized_person=$_POST['authorized_person'];
$mobile_no=$_POST['mobile_no'];
$whatsapp_no=$_POST['whatsapp_no'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$website=$_POST['website'];
$services=$_POST['services'];
$facebook=$_POST['facebook'];
$instagram=$_POST['instagram'];
$linkedin=$_POST['linkedin'];
$youtube=$_POST['youtube'];
$location=$_POST['location'];
$veriotp=$_POST['veriotp'];
$status="open";
$action="1";

$otpsql=mysqli_query($conn,"SELECT * FROM otp where email='$email'");
$otprow=mysqli_fetch_assoc($otpsql);
$otp=$otprow['otp'];
if($veriotp == ""){
 echo "<script>swal('oops..','please Verify your email first then submit','error');</script>";
}else{
if($otp==$veriotp){
$image=$_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name']; 
 $size     = $_FILES['img']['size']; 
 $type     = $_FILES['img']['type']; 
 $error     = $_FILES['img']['error'];
$loc="dist/img/agent_photo/".basename($image);
if($category == "" || $shop_name == "" || $shop_address== "" || $authorized_person=="" || $mobile_no == "" || $whatsapp_no == "" || $city=="" || $state=="" || $email=="" || $location=="" || $services==""){
 echo "<script>swal('oops','please fill all the fields','success');</script>";

}
 move_uploaded_file($tmp_name, $loc);

$imgEncoded = base64_encode(file_get_contents($tmp_name));

//   $loc="dist/img/";

//   move_uploaded_file($_FILES['img']['tmp_name'],$loc.$image);

$from = 'Enquiry <ceo@tectignis.in>' . "\r\n";
$sendTo = 'Enquiry <'.$email.'>';
$subject = 'Agreerent';
// $fields = array( 'name' => 'name' );
$from = 'Agreerent: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from .= "Content-Type: multipart/mixed;"; 
$from .= "boundary = $boundary\r\n"; 


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
                     <h1><a href="#">AGREERENT</a></h1>
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
                           <img src="https://agreerent.in/admin/dist/img/agent_photo/'.$shop_name.'" alt="" style="width: 100px; max-width: 600px; height: auto; margin: auto; display: block;">
                           <h3 class="name">'.$shop_name.'</h3>
                           <span class="position">'.$shop_name.'</span>
                         <p>Client Code&nbsp;:&nbsp;<b>'.$shop_name.'</b><br>Username&nbsp;:&nbsp;<b>'.$email_no.'</b><br>Password&nbsp;:&nbsp;<b>'.$shop_name.'</b></p> 
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

$sql=mysqli_query($conn,"INSERT INTO `vendor`(`shop_name`, `category`, `shop_address`, `authorized_person`, `mobile_no`, `whatsapp_no`, `email`,`website`, `facebook`, `instagram`, `LinkedIn`, `youtube`,`status`,`shop_act_license`,`action`,`image1`,`location`,`city`,`state`) VALUES ('$shop_name','$category','$shop_address','$authorized_person','$mobile_no','$whatsapp_no','$email','$website','$facebook','$instagram','$linkedin','$youtube','$status','$upload_license','$action','$file','$location','$city','$state')");
if($sql=1){
  echo "<script>swal('success','vendor Registered Successfully','success');</script>";    }
else{
  echo "<script>swal('error','Something Wrong','error');</script>";
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

else{
echo "<script>swal('oops...','Invalid Otp','warning');</script>";
}
}
}




?>


<script>
  function get(val){
$.ajax({
  type:'POST',
  url:'newcheck.php',
  data:'state='+val,
  success:function(html){
    $('.designation').html(html);
  }
});
  }
  </script>

</body>
</html>
