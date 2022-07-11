<?php include("admin/include/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
            $sql=mysqli_query($conn,"Select * from seo where page_name='add-listing'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
        <meta name="description" content="<?php echo $arr['meta_description'];?>">
        <!--====== Title ======-->
        <title><?php echo $arr['meta_title'];?></title>
        <?php } ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Favicon Icon ======-->
        <?php
            $sql=mysqli_query($conn,"Select * from general_settings");
               while($arr=mysqli_fetch_array($sql)){
             ?>
        <link rel="shortcut icon" href="assets/images/bg/<?php echo $arr['select_favicon'] ?>" type="image/png">
        <?php } ?>
        <!--====== Bootstrap css ======-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!--====== FontAwesoem css ======-->
        <link rel="stylesheet" href="assets/fonts/themify-icons/themify-icons.css">
        <!--====== Flaticon css ======-->
        <link rel="stylesheet" href="assets/fonts/flaticon/flaticon.css">
        <!--====== Magnific Popup css ======-->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--====== Slick css ======-->
        <link rel="stylesheet" href="assets/css/slick.css">
        <!--====== Nice-select css ======-->
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <!--====== Jquery ui css ======-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
        <!--====== Animate css ======-->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!--====== Default css ======-->
        <link rel="stylesheet" href="assets/css/default.css">
        <!--====== Style css ======-->
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker@v1.0.2-rc2/mdtimepicker.min.css">
       <style>
        .wide{
            background: white;
        }
        .picker3{
            border:none;
            width:70px;
            color:black !important;
        }
        .inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
label{
    height: 60px;
    margin-bottom: 30px;
    font-size: 18px;
    font-weight: 700;
    color: #0d0d0d;
    border-radius: 5px;
    width:  100%;;
    background: white;
    padding: 0 25px;
    line-height:60px;
}
<?php  
        $sql=mysqli_query($conn,"select * from banner_image where id='31'");   
        while($arr=mysqli_fetch_array($sql)){
                      ?>
    
        .breadcrumbs-wrapper:after{
            right: 0;
            background: url(assets/images/banner/<?php echo $arr['file'];?>) no-repeat center center ;
            background-size: 945px 400px;
        }
    <?php }  ?>
       </style>
    </head>
    <body>
        <!--====== Start Preloader ======-->
        <div class="preloader">
            <div class="loader">
                <img src="assets/images/loader.png" alt="loader">
            </div>
        </div>
        <!--====== End Preloader ======-->
        <!--====== Start Header Section ======-->
        <?php include("assets/include/header.php") ?>
        <!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">Add Listing</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Listing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Add Listing Section ======-->
        <section class="fioxen-add-listing pt-120">
            <div class="container">
                <form method="post" enctype="multipart/form-data">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="add-listing-form general-listing-form mb-60">
                                <h4 class="title">General Information</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="text" class="form_control shop_name" placeholder="Shop Name" id="shop_name" name="shop_name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="category" id="category">
                                                <option value="00" selected disabled>Category</option>
                                                <?php 
                                                $query=mysqli_query($conn,"select * from listcategory");
                                                while($sql=mysqli_fetch_array($query)){ ?>
                                                    <option value="<?php echo $sql['name'];?>"><?php echo $sql['name'];?></option>
                                                    <?php  }  ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone No" name="mobile_no" id="mobile_no" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Shop Address" name="shop_address" id="shop_address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form details-listing-form mb-60">
                                <h4 class="title">Details Information</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Authorized Person Name" name="authorized_person" id="authorized_person">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="WhatsApp No" name="whatsapp_no" id="whatsapp_no">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="email" class="form_control email" placeholder="Email" id="email" name="email" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Website" name="website" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="services" id="services">
                                                <option value="00" selected disabled>Services</option>
                                                <?php 
                                                $query=mysqli_query($conn,"select * from service");
                                                while($sql=mysqli_fetch_array($query)){ ?>
                                            <option value="<?php echo $sql['title'];?>"><?php echo $sql['title'];?></option>
                                                    <?php }  ?>
                                            </select> 
                                        </div>
                                    </div>
                                    <!--new-->
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Post" name="Post" id=""> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                        <input type="file" name="profileimage" id="file" class="inputfile form_control" />
                                        <label for="file">Choose a Profile Image</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Description" name="description"></textarea>
                                        </div>
                                    </div>
                                    <!--new-->
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <select class="wide form_control"  onChange="get(this.value)" name="state">
                                                <option selected disabled>State</option>
                                                <?php 
                                                    $query=mysqli_query($conn,"select * from state");
                                                    while($sql=mysqli_fetch_array($query)){ ?>
                                                <option value="<?php echo $sql['state'];?>"><?php echo $sql['state'];?></option>
                                                            <?php } ?>
                                                <option value="01">Maharashtra</option>
                                                <option value="02">Delhi</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <select class="wide city form_control" onChange="gett(this.value)" name="city">
                                                <option selected disabled>City</option>
                                                
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group">
                                            <select class="wide form_control location" name="location">
                                                <option selected disabled>Location</option>
                                                
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group" style="text-align:center">
                                        <button class="main-btn" type ="button" id="otp">Get OTP</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form details-listing-form mb-60 getotp">
                                <h4 class="title">OTP</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="OTP" name="veriotp" id="veriotp">
                                            <p style="color:red;font-size:12px;width:100%;margin-left:17%">Enter OTP sent to your registered email id</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form details-listing-form mb-60">
                                <h4 class="title">Social Media</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Facebook" name="facebook" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Instagram" name="instagram" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="LinkedIn" name="linkedin" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="YouTube" name="youtube" >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form upload-listing-form mb-60">
                                <h4 class="title">Gallery Images</h4>
                                <p>Click here or drope files to upload</p>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="img" accept="image/png,image/jpeg,,image/jpg">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-1.png" alt="Image">
                                                    <span>Logo +</span>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="img2" accept="image/png, image/jpeg" >
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-1.png" alt="Image">
                                                    <span>Image +</span>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="img3" accept="image/png, image/jpeg" >
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-3.png" alt="Image">
                                                    <span>Image +</span>
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="img4">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-3.png" alt="Image">
                                                    <span>Image +</span>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form upload-listing-form mb-60">
                                <h4 class="title">Upload Documents</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <p>Shop Act License</p>
                                        <div class="form_group file-input-two">
                                            <input type="file" name="license">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-4.png" alt="Image">
                                                    <span>Upload +</span>
												</div>
											</div>
                                        </div>
                                    </div>    
                                    <div class="col-lg-6">
                                    <p>Pan Card</p>
                                        <div class="form_group file-input-two">
                                            <input type="file" name="pan">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-4.png" alt="Image">
                                                    <span>Upload +</span>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="add-listing-form map-form mb-60">
                                <div class="map-box">
                                    <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> 
                                </div>
                            </div> -->
                            <div class="add-listing-form timing-listing-form mb-60">
                                <h4 class="title">Opening Hours</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="timeing-list">
                                            <h5>Monday<span class="d-flex time">
                                                <input type="text" class="picker3"  placeholder="08 am" name="monopen" value="00:00 am">-&nbsp;<input type="text" name="monend" class="picker3"  placeholder="08 pm" value="00:00 pm"></span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Tuesday<span class="d-flex time">
                                                <input type="text" name="tueopen" class="picker3"  placeholder="08 am" value="00:00 am">-&nbsp;<input type="text" name="tueend" class="picker3"  placeholder="08 pm" value="00:00 pm"></span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Wednesday<span class="d-flex time">
                                                <input type="text" name="wedopen" class="picker3"  placeholder="08 am" value="00:00 am">-&nbsp;<input type="text" name="wedend" class="picker3"  placeholder="08 pm" value="00:00 pm"></span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Thursday<span class="d-flex time">
                                                <input type="text" class="picker3"  placeholder="08 am" name="thuropen" value="00:00 am">-&nbsp;<input type="text" class="picker3"  placeholder="08 pm" name="thurend" value="00:00 pm"></span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Friday<span class="d-flex time">
                                                <input type="text" class="picker3"  placeholder="08 am" name="friopen" value="00:00 am">-&nbsp;<input type="text" class="picker3"  placeholder="08 pm" name="friend" value="00:00 pm"></span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Saturday<span class="d-flex time">
                                                <input type="text" class="picker3"  placeholder="08 am" name="satopen" value="00:00 am">-&nbsp;<input type="text" class="picker3"  placeholder="08 pm" name="satend" value="00:00 pm"></span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Sunday<span class="d-flex time">
                                                <input type="text" class="picker3"  placeholder="08 am" name="sunopen" value="00:00 am">-&nbsp;<input type="text" class="picker3"  placeholder="08 pm" name="sunend" value="00:00 pm"></span></h5>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" name="subit" class="main-btn  btn-warning">Registration</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section><!--====== End Add Listing Section ======-->
        <!--====== Start Footer ======-->
        <?php include("assets/include/Footer.php") ?>
       <!--====== End Footer ======-->

       
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="ti-angle-up"></i></a>

        <!--====== Jquery js ======-->
        <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <!--====== Popper js ======-->
        <script src="assets/js/popper.min.js"></script>
        <!--====== Bootstrap js ======-->
        <script src="assets/js/bootstrap.min.js"></script>
        <!--====== Slick js ======-->
        <script src="assets/js/slick.min.js"></script>
        <!--====== Magnific Popup js ======-->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!--====== Isotope js ======-->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!--====== Imagesloaded js ======-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--====== Nice-select js ======-->
        <!-- <script src="assets/js/jquery.nice-select.min.js"></script> -->
        <!--====== counterup js ======-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <!--====== waypoints js ======-->
        <script src="assets/js/jquery.waypoints.js"></script>
        <!--====== Ui js ======-->
        <script src="assets/js/jquery-ui.min.js"></script>
        <!--====== Wow js ======-->
        <script src="assets/js/wow.min.js"></script>
        <!--====== Main js ======-->
        <script src="assets/js/main.js"></script>
        <!--time-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--====== Jquery js ======-->
<script src="https://cdn.jsdelivr.net/gh/dmuy/MDTimePicker@v1.0.2-rc2/mdtimepicker.min.js"></script>
        <script type="text/javascript">
	$(document).ready(function(){
        $('.picker1, .picker4, .picker5, .picker6').mdtimepicker();
        $('.picker2').mdtimepicker({ readOnly: false, hourPadding: true })
            .on('timechanged', function (e) {
                console.log(e.time, e.value);
        });
        $('.picker3').mdtimepicker({ is24hour: true });
    });
</script>
        <!--time-->
        <script>
  function get(val){
$.ajax({
  type:'POST',
  url:'api.php',
  data:'state='+val,
  success:function(html){
    $('.city').html(html);
  }
});
  }
  </script>
  <script>
  function gett(val){
$.ajax({
  type:'POST',
  url:'api.php',
  data:'city='+val,
  success:function(html){
    $('.location').html(html);
  }
});
  }
  </script>
  <script>
        $(document).ready(function(){
            $(".getotp").hide();
            $("#otp").on("click", function () {
            let email = $("#email").val();
            let name = $("#shop_name").val();
            let otp = $("#otp").val();
            $(".getotp").show();
                $.ajax({
                    type:"POST",
                    url: "ch.php",
                    data:{
                        email:email,
                        otp:otp,
                        name:name
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
$mobile_no="91".$_POST['mobile_no'];
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
$monopen=$_POST['monopen'];
$monend=$_POST['monend'];
$tueopen=$_POST['tueopen'];
$tueend=$_POST['tueend'];
$wedopen=$_POST['wedopen'];
$wedend=$_POST['wedend'];
$thuopen=$_POST['thuopen'];
$thuend=$_POST['thuend'];
$friopen=$_POST['friopen'];
$friend=$_POST['friend'];
$satopen=$_POST['satopen'];
$satend=$_POST['satend'];
$sunopen=$_POST['sunopen'];
$sunend=$_POST['sunend'];
$Post=$_POST['Post'];
$description=$_POST['description'];

$status="open";
$action="1";

$image=$_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name']; 
$loc="dist/img/vender_image/".basename($image);

$image1=$_FILES['img2']['name'];
$tmp_name = $_FILES['img2']['tmp_name']; 
$loc1="dist/img/vender_image/".basename($image1);

$image2=$_FILES['img3']['name'];
$tmp_name = $_FILES['img3']['tmp_name']; 
$loc2="dist/img/vender_image/".basename($image2);

$image3=$_FILES['img4']['name'];
$tmp_name = $_FILES['img4']['tmp_name']; 
$loc3="dist/img/vender_image/".basename($image3);

$video=$_FILES['video']['name'];
$tmp_name = $_FILES['video']['tmp_name']; 
$loc4="dist/img/vender_image/".basename($video);

$license=$_FILES['license']['name'];
$tmp_name = $_FILES['license']['tmp_name']; 
$loc5="dist/img/vender_image/".basename($license);

$pan=$_FILES['pan']['name'];
$tmp_name = $_FILES['pan']['tmp_name']; 
$loc6="dist/img/vender_image/".basename($pan);

$profileimage=$_FILES['profileimage']['name'];
$tmp_name = $_FILES['pprofileimagean']['tmp_name']; 
$loc6="dist/img/vender_image/".basename($profileimage);

move_uploaded_file($tmp_name, $loc);
 move_uploaded_file($tmp_name, $loc1);
 move_uploaded_file($tmp_name, $loc2);
 move_uploaded_file($tmp_name, $loc3);
 move_uploaded_file($tmp_name, $loc4);
 move_uploaded_file($tmp_name, $loc5);
 move_uploaded_file($tmp_name, $loc6);

$otpsql=mysqli_query($conn,"SELECT * FROM otp where email='$email'");
$otprow=mysqli_fetch_assoc($otpsql);
$otp=$otprow['otp'];
if($veriotp == ""){
 echo "<script>swal('oops..','please Verify your email first then submit','error');</script>";
}else{
if($otp==$veriotp){

    if($category == "" || $shop_name == "" || $shop_address== "" || $authorized_person=="" || $mobile_no == "" || $whatsapp_no == "" || $city=="" || $state=="" || $email=="" || $services=="" || $location==""  || $veriotp=="" || $monopen=="" || $monend=="" || $tueopen=="" || $tueend=="" || $wedopen=="" || $wedend=="" || $thuopen=="" || $thuend=="" || $friopen=="" || $friend=="" || $satopen=="" || $satend=="" || $sunopen=="" || $sunend== "" || $Post=="" || $description=="" || $profileimage==""){
 echo "<script>swal('oops','please fill all the fields','success');</script>";

}
 

$imgEncoded = base64_encode(file_get_contents($tmp_name));

//   $loc="dist/img/";

//   move_uploaded_file($_FILES['img']['tmp_name'],$loc.$image);

$from = 'Enquiry <ceo@tectignis.in>' . "\r\n";
$sendTo = 'Enquiry <'.$email.'>';
$subject = 'Tectignis';
// $fields = array( 'name' => 'name' );
$from = 'Tectignis It Solution: 1.0' . "\r\n";
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
                           <img src="http://demo.digiinfromatrics.com/admin/dist/img/vender_image/"'.$image.'" alt="" style="width: 100px; max-width: 600px; height: auto; margin: auto; display: block;">
                           <h3 class="name">'.$shop_name.'</h3>
                           <span class="position">'.$shop_name.'</span>
                         <p>Client Code&nbsp;:&nbsp;<b>'.$shop_name.'</b><br>Username&nbsp;:&nbsp;<b>'.$email.'</b><br>Password&nbsp;:&nbsp;<b>'.$shop_name.'</b></p> 
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

$sql=mysqli_query($conn,"INSERT INTO `vendor`(`shop_name`, `category`, `shop_address`, `authorized_person`, `mobile_no`, `whatsapp_no`, `email`, `services`,`website`, `facebook`, `instagram`, `LinkedIn`, `youtube`,`status`,`shop_act_license`,`video`,`pan_card`,`action`,`image1`,`image2`,`image3`,`image4`,`location`,`city`,`state`, `monday`, `tuesday`, `wednesday`, `thursday`, `friday`, `saturday`, `sunday`, `end_mon`, `end_tue`, `end_wed`, `end_thur`, `end_fri`, `end_sat`, `end_sun`, `post`, `description`, `profile_img`) VALUES ('$shop_name','$category','$shop_address','$authorized_person','$mobile_no','$whatsapp_no','$email','$services','$website','$facebook','$instagram','$linkedin','$youtube','$status','$license','$video','$pan','$action','$image','$image1','$image2','$image3','$location','$city','$state','$monopen','$tueopen','$wedopen','$thuropen','$friopen','$satopen','$sunopen','$endmon','$endtue','$endwed','$endthur','$endfri','$endsat','$endsun','$Post','$description','$profileimage')");
if($sql){
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
<script src="/path/to/bootstrap-material-datetimepicker.js"></script>
<script>$('#time').bootstrapMaterialDatePicker({ date: false });</script>
    </body>
</html>