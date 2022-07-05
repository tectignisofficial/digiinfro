<?php include("admin/include/config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--====== Title ======-->
        <title>Fioxen - Directory & Listings HTML Template</title>
        <!--====== Favicon Icon ======-->
        <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/png">
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <style>
        .wide{
            background: white;
        }
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
                <form method="post" action="api.php" enctype="multipart/form-data">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="add-listing-form general-listing-form mb-60">
                                <h4 class="title">General Information</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Shop Name" name="shop_name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="category">
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
                                            <input type="text" class="form_control" placeholder="Phone No" name="mobile_no" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Shop Address" name="shop_address"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form details-listing-form mb-60">
                                <h4 class="title">Details Information</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Authorized Person Name" name="authorized_person" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="WhatsApp No" name="whatsapp_no" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email" name="email" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Website" name="website" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide form_control" name="services">
                                                <option value="00" selected disabled>Services</option>
                                                <?php 
                  $query=mysqli_query($conn,"select * from service");
                  while($sql=mysqli_fetch_array($query)){ ?>
               <option value="<?php echo $sql['title'];?>"><?php echo $sql['title'];?></option>
                       <?php }  ?>
                                            </select> 
                                        </div>
                                    </div>
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
                                                    <span>Image +</span>
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
                                    <div>
                                        <button type="submit" name="subit" class="main-btn  btn-warning">Registeration</button>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form map-form mb-60">
                                <div class="map-box">
                                    <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe> 
                                </div>
                            </div>
                            <div class="add-listing-form timing-listing-form mb-60">
                                <h4 class="title">Opening Hours</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="timeing-list">
                                            <h5>Monday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Tuesday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Wednesday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Thursday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Friday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Saturday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
                                        <div class="timeing-list">
                                            <h5>Saturday<span class="time">08 am - 05 pm</span></h5>
                                        </div>
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
        $("#otp").click(function(){
           $(".getotp").show();
        });
    });

        $(document).ready(function(){
            $("#otp").on("click", function () {
            let email = $("#email").val();
            let name = $("#shop_name").val();
            let otp = $("#otp").val();
                $.ajax({
                    type: "POST",
                    url: "api.php",
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
    </body>
</html>