<?php
include("admin/include/config.php");
if(isset($_POST['submit'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $yourmessage=$_POST['message'];

    $sql=mysqli_query($conn,"insert into contact( `Firstname`, `Lastname`, `Phone`, `Email`, `Subject`, `Yourmessage`) values('$firstname','$lastname','$phone','$email',' $subject','$yourmessage')");
    

    if($sql==1){
        echo '<script>alert("Thank you for contacting us we will reply as soon as possible");</script>';
        header("location:contact.php");
    }else {
        echo '<script>alert("oops...somthing went wrong");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
            $sql=mysqli_query($conn,"Select * from seo");
               while($arr=mysqli_fetch_array($sql)){
             ?>
        <meta name=<?php echo $arr['meta_title'];?> content=<?php echo $arr['meta_description'];?>>
        <?php } ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!--====== Title ======-->
        <title>Vcard - Directory & Listings HTML Template</title>
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
                                <h1 class="title">Contact us</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-section pt-115 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title section-title-left mb-50">
                            <span class="sub-title">Contact With Us</span>
                            <h2>How Can We Help You</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="contact-information-list">
                            <div class="information-item mb-30">
                                <div class="icon">
                                    <i class="ti-location-pin"></i>
                                </div>
                                <div class="info">
                                    <h5>Address</h5>
                                    <p>46 suvastu arcade 3rd Floor
                                        palace road, London.</p>
                                </div>
                            </div>
                            <div class="information-item mb-30">
                                <div class="icon">
                                    <i class="ti-mobile"></i>
                                </div>
                                <div class="info">
                                    <h5>Phone</h5>
                                    <p><a href="tel:445555552580">44 (555) 555 2580</a></p>
                                    <p><a href="tel:445555552580">31 (555) 222 2560</a></p>
                                </div>
                            </div>
                            <div class="information-item mb-30">
                                <div class="icon">
                                    <i class="ti-email"></i>
                                </div>
                                <div class="info">
                                    <h5>Email</h5>
                                    <p><a href="mailto:info@fioxen20.com">info@fioxen20.com</a></p>
                                    <p><a href="mailto:info@fioxen20.com">info@fioxen22.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        
                        <div class="contact-wrapper-one mb-30">
                            <div class="contact-form">
                                <form method="POST">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="First Name" name="fname" id="fname" required>
                                                <span id="fnamespan" class="mb-4"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Last Name" name="lname" id="lname" required>
                                                <span id="lnamespan" class="mb-4"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" minlength="10" maxlength="10" class="form_control phone1" placeholder="Phone" name="phone" id="phone1" required>
                                                <span id="phone1Span" class="mb-4"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Subject" name="subject" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" placeholder="Your Message" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button type="submit" name="submit" id="submit" class="main-btn">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
               
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Contact Section ======-->
        <!--====== Start Map section ======-->
        <section class="contact-page-map">
            <div class="map-box">
                <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
            </div>
        </section><!--====== End Map section ======-->
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
        <script src="assets/js/jquery.nice-select.min.js"></script>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
             $("#phone1Span").hide();
	    $(".phone1").keyup(function(){
	     mobile_check();
	   });
	   function mobile_check(){
		   let mobileno=$(".phone1").val();
		   let vali =/^\d{10}$/; 
		   if(!vali.test(mobileno)){
        validenqtMobile="no";
			    $("#phone1Span").show().html("*Invalid Mobile No").css("color","red").focus();
				mobile_err=false;
			 return false;
		   }
		   else{
        validenqtMobile="yes";
		       $("#phone1Span").hide(); 
		   }
	   }

            $("#fnamespan").hide();
	    $("#fname").keyup(function(){
	     txt_check();
	   });
	   function txt_check(){
      validenqName="no";
		   let txt=$("#fname").val();
		   let vali =/^[A-Za-z ]+$/;
		   if(!vali.test(txt)){
			  $("#fnamespan").show().html("Enter Alphabets only").css("color","red").focus();
			  txt_err=false;
			  return false;
		   }
		   else{
        validenqName="yes";
		       $("#fnamespan").hide();
		       
		   }
	   }

       $("#lnamespan").hide();
	    $("#lname").keyup(function(){
	     last_check();
	   });
	   function last_check(){
        validenqtlast="no";
		   let txt=$("#lname").val();
		   let vali =/^[A-Za-z ]+$/;
		   if(!vali.test(txt)){
			  $("#lnamespan").show().html("Enter Alphabets only").css("color","red").focus();
			  last_err=false;
			  return false;
		   }
		   else{
            validenqtlast="yes";
		       $("#lnamespan").hide();
		       
		   }
	   }

      


	   $("#submit").click(function(){
       txt_err = true;
       last_err = true;
       mobile_err=true;
             txt_check();
             last_check();
             mobile_check();
			   
			   if((txt_err==true) && (last_err==true) && (mobile_err=true)){
			      return true;
			   }
			   else{return false;}
		  });

        let  validenqName,validenqtlast, validenqtMobile;

 let submitenant = document.getElementById("submit");
     submitenant.addEventListener("click", function(){

     if(validenqName == "no" || validenqtlast =="no"){
         swal("Oops...", "Please fill all the fields", "error");
     }
         else{
             swal("Saved!", " Thank you for contacting us we will reply as soon as possible", "success");
         }
     });
        </script>
    </body>
</html>