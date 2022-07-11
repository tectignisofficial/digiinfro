<?php
include("admin/include/config.php");

if(isset($_POST['signup'])){
    $status=1;
    $email=$_POST['email'];  
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <'.$email.'>';
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
        
      </style>
  </head>
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
     <h1>'.$email.'</h1>
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
  
    $sql=mysqli_query($conn,"INSERT INTO `subscriber`(`email`,`status`) 
     VALUES ('$email','$status')");
     if($sql=1){
       echo "<script>alert('Agent Registered Successfully');</script>";    }
     else{
       echo "<script>alert('Something Wrong');</script>";
     }
   }else{
      echo "$sendTo $subject $emailText $from";
   }
  }
  catch(\Exception $e){
    echo "not done";
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
            $sql=mysqli_query($conn,"Select * from seo where page_name='about'");
               while($arr=mysqli_fetch_array($sql)){
             ?>

        <meta name="description" content="<?php echo $arr['meta_description'];?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--====== Title ======-->
        <title><?php echo $arr['meta_title'];?></title>
        <?php } ?>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <?php  
        $sql=mysqli_query($conn,"select * from banner_image where id='11'");   
        while($arr=mysqli_fetch_array($sql)){
                      ?>
    <style>
        .breadcrumbs-wrapper:after{
            right: 0;
            background: url(assets/images/banner/<?php echo $arr['file'];?>) no-repeat center center ;
            background-size: 945px 400px;
        }
    </style>
    <?php }  ?>
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
        <?php include("assets/include/header.php")?>
        <!--====== End Header Section ======-->
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">About Us</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">About us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-area">
            <div class="features-wrapper-three pt-110">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title text-center mb-60">
                                <span class="sub-title">Some Feature.</span>
                                <h2>Caring Your Hobbies</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40">
                                <div class="icon">
                                    <i class="flaticon-add-user"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">User Friendly</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                    <a href="how-work.html" class="btn-link icon-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40">
                                <div class="icon">
                                    <i class="flaticon-gift-box"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Daily Offers</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                    <a href="how-work.html" class="btn-link icon-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40">
                                <div class="icon">
                                    <i class="flaticon-laptop"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Quick Search</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                    <a href="how-work.html" class="btn-link icon-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="features-item features-item-two text-center mb-40">
                                <div class="icon">
                                    <i class="flaticon-headphone"></i>
                                </div>
                                <div class="content">
                                    <h3 class="title">Live Support</h3>
                                    <p>Congue men porttitor blandit erat to loborti lacinia sapien pretium disenty</p>
                                    <a href="how-work.html" class="btn-link icon-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Features Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-area">
            <div class="features-wrapper-four pt-80 pb-115">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="features-img">
                                <img src="assets/images/features/features-1.jpg" alt="Features Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-content-box features-content-box-one">
                                <div class="section-title section-title-left mb-30">
                                    <span class="sub-title">Our Speciality</span>
                                    <h2>Comprehnsive All Great
                                        Destination Here</h2>
                                </div>
                                <h5>Risus urnas Iaculis per amet vestibulum luctus.tincidunt ultricies aenean
                                    quam eros eleifend sodales cubilia mattis quam.</h5>
                                <ul class="features-list-one">
                                    <li class="list-item">
                                        <div class="icon">
                                            <i class="flaticon-find"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Find What You Want</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="icon">
                                            <i class="flaticon-place"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Easy Choose Your Place</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                    <li class="list-item">
                                        <div class="icon">
                                            <i class="flaticon-social-care"></i>
                                        </div>
                                        <div class="content">
                                            <h5>Live Online Assistance</h5>
                                            <p>Rhoncus dolor quam etiam mattis, tincidunt nec lobortis sociis
                                                facilisi aenean netus tempor duis.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Features Section ======-->
        <!--====== Start CTA Section ======-->
        <?php  
        $sql=mysqli_query($conn,"select * from banner_image where id='12'");   
        while($arr=mysqli_fetch_array($sql)){
                      ?>
        <section class="cta-area">
            <div class="cta-wrapper-two bg_cover b" style="background-image: url(assets/images/banner/<?php echo $arr['file']; ?>);">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="company-name">Fioxen</div>
                        </div>
                        <div class="col-lg-5">
                            <div class="cta-content-box">
                                <h2>Visit the Best Places</h2>
                                <p>Pharetra venenatis ante pulvinar fermentum dignissim one malesuada laoreet ridiculus fringilla quam</p>
                                <a href="listing-grid.html" class="main-btn icon-btn">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php } ?>
        <!--====== End CTA Section ======-->
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-area bg_cover pt-110 pb-265" style="background-image: url(assets/images/bg/testimonial-bg-2.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Our Testimoinals</span>
                            <h2>Happy User Feedback</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="testimonial-wrapper-one text-center">
                            <div class="testimonial-review-area">
                                <div class="testimonial-thumb-slider-one">
                                    <?php $sqltesti="select * from testimonial";
                                    $result=$conn->query($sqltesti);
                                    while($row=mysqli_fetch_array($result)){ ?>
                                    <div class="single-thumb">
                                        <img src="assets/images/testimonial/<?php echo $row['image'] ?>" alt="testimonial">
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                                <div class="testimonial-content-slider-one">
                                <?php $sqltestimonial="select * from testimonial";
                                    $result1=$conn->query($sqltestimonial);
                                    while($arr=mysqli_fetch_array($result1)){ ?>
                                    <div class="testimonial-item">
                                        <div class="testimonial-content">
                                            <p><?php echo $arr['description'] ?></p>
                                            <div class="author-info">
                                                <h4><?php echo $arr['name'] ?></h4>
                                                <span class="position"><?php echo $arr['designation'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Testimonial Section ======-->
        <!--====== Start Newsletter Section ======-->
        <section class="newsletter-area mb-5">
            <div class="container">
                <div class="newsletter-wrapper newsletter-wrapper-one bg_cover" style="background-image: url(assets/images/bg/newsletter-bg-1.jpg);">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="newsletter-content-box-one">
                                <div class="icon">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="content">
                                    <h2>Get Special
                                        Rewards</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="newsletter-form">
                                <form method="POST" action="#">
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Enter Address" name="email" required>
                                    <i class="ti-location-pin"></i>
                                    <button class="main-btn" name="signup">Subscribe +</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Newsletter Section ======-->
        
        <!--====== Start Footer ======-->
        <?php include("assets/include/Footer.php")?> 
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
    </body>
</html>