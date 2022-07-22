<?php
include("admin/include/config.php");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
            $sql=mysqli_query($conn,"Select * from seo where page_name='pricing'");
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <?php  
                        $sql=mysqli_query($conn,"select * from banner_image where id='52'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
    <style>
        .breadcrumbs-wrapper:after  {
            right: 0;
            background: url(assets/images/banner/<?php echo $arr['file'];?>) no-repeat center center;
            background-size: cover;
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
                                <h1 class="title">Pricing Table</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.php">Home</a></li>
                                    <li class="active">Pricing Table</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Pricing Section ======-->
        <section class="pricing-area pt-110 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-title-two text-center mb-60">
                            <h2><span class="line">Affordable</span> Package</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item pricing-item-one text-center mb-40">
                            <div class="pricing-inner-time">
                                <div class="pricing-head">
                                    <span class="title">General</span>
                                    <h2 class="price">25.00</h2>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list">
                                        <li>Construction Drawing</li>
                                        <li>Floor & celling plan</li>
                                        <li>Selection of Material</li>
                                        <li>Structure of a project</li>
                                        <li>Always plan support</li>
                                        <li>Visualization premise</li>
                                    </ul>
                                    <a href="pricing.php" class="main-btn icon-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item pricing-item-one text-center mb-40">
                            <div class="pricing-inner-time">
                                <div class="pricing-head">
                                    <span class="title">General</span>
                                    <h2 class="price">35.00</h2>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list">
                                        <li>Construction Drawing</li>
                                        <li>Floor & celling plan</li>
                                        <li>Selection of Material</li>
                                        <li>Structure of a project</li>
                                        <li>Always plan support</li>
                                        <li>Visualization premise</li>
                                    </ul>
                                    <a href="pricing.php" class="main-btn icon-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="pricing-item pricing-item-one text-center mb-40">
                            <div class="pricing-inner-time">
                                <div class="pricing-head">
                                    <span class="title">General</span>
                                    <h2 class="price">45.00</h2>
                                </div>
                                <div class="pricing-body">
                                    <ul class="list">
                                        <li>Construction Drawing</li>
                                        <li>Floor & celling plan</li>
                                        <li>Selection of Material</li>
                                        <li>Structure of a project</li>
                                        <li>Always plan support</li>
                                        <li>Visualization premise</li>
                                    </ul>
                                    <a href="pricing.php" class="main-btn icon-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Pricing Section ======-->
        <!--====== Start Testimonial Section ======-->
        <section class="testimonial-area bg_cover pt-110 pb-140" style="background-image: url(assets/images/bg/testimonial-bg-1.jpg);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title section-title-two section-title-white text-center mb-40">
                            <h2><span class="line">Customer</span> Feedack</h2>
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
        <!--====== Start Blog Section ======-->
        <section class="blog-area pt-115 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Recent Articles</span>
                            <h2>Every Single Journal</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                     $sqlblog=mysqli_query($conn,"select blog.*, blog_category.* from blog inner join blog_category on blog.category_id=blog_category.id limit 3");

                     $sqlcom1 = mysqli_query($conn,"select blog.*, blog_comment.* from blog inner join blog_comment on blog_comment.blog=blog.id" );
                     $count1=mysqli_num_rows($sqlcom1);
                     while($arr=mysqli_fetch_array($sqlblog)){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-post-item blog-post-item-one mb-40">
                            <div class="post-thumbnail">
                                <a href="blog-details.php?id=<?php echo $arr['id'];?>"><img src="assets/images/blog_image/<?php echo $arr['img'];?>" alt="Blog Image" width="370" height="375"></a>
                                <div class="post-date"><a href="#"><?php $date=$arr['date']; echo date("d",strtotime($date))?> <span><?php $date=$arr['date']; echo date("F",strtotime($date))?></span></a></div>
                            </div>
                            <div class="entry-content">
                                <a href="#" class="cat-btn"><i class="ti-bookmark-alt"></i><?php echo $arr['name'];?></a>
                                <h3 class="title"><a href="blog-details.php?id=<?php echo $arr['id'];?>"><?php echo $arr['title'];?></a></h3>
                                <div class="post-meta">
                                    <ul>
                                        <li><span><i class="ti-comments-smiley"></i><a href="#"><?php echo $count1;?> Comment</a></span></li>
                                        <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                   
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="button text-center mt-40">
                            <a href="blog.php" class="main-btn icon-btn">View Blog</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Blog Section ======-->
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