<?php 
include("admin/include/config.php"); 
?>
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
                                <h1 class="title">Listing Grid</h1>
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
        <!--====== Start Listing Section ======-->
        <section class="listing-grid-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <div class="widget search-listing-widget mb-30">
                                <h4 class="widget-title">Filter Search</h4>
                                <form>
                                    <div class="search-form">
                                        <div class="form_group">
                                            <input type="search" class="form_control" placeholder="Search keyword" name="search" required>
                                            <i class="ti-search"></i>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="Category">Category</option>
                                                <option value="01">Museums</option>
                                                <option value="02">Restaurant</option>
                                                <option value="03">Party Center</option>
                                                <option value="04">Fitness Zone</option>
                                                <option value="05">Game Field</option>
                                                <option value="06">Job & Feeds</option>
                                                <option value="07">Shooping</option>
                                                <option value="08">Art Gallery</option>
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="Location">Location</option>
                                                <option value="01">Dhaka</option>
                                                <option value="02">Delhi</option>
                                                <option value="03">lahore</option>
                                                <option value="04">Rome</option>
                                                <option value="05">New york</option>
                                                <option value="06">Pris</option>
                                                <option value="07">Bern</option>
                                                <option value="08">Bangkok</option>
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="By Country">By Country</option>
                                                <option value="01">Bangladesh</option>
                                                <option value="02">India</option>
                                                <option value="03">Pakistan</option>
                                                <option value="04">Italy</option>
                                                <option value="05">America</option>
                                                <option value="06">London</option>
                                                <option value="07">Swizerland</option>
                                                <option value="08">Thailand</option>
                                            </select>
                                        </div>
                                        <!-- <div class="form_group">
                                            <select class="wide">
                                                <option data-dsplay="By place">By place</option>
                                                <option value="01">Dhaka</option>
                                                <option value="02">Delhi</option>
                                                <option value="03">lahore</option>
                                                <option value="04">Rome</option>
                                                <option value="05">New york</option>
                                                <option value="06">Pris</option>
                                                <option value="07">Bern</option>
                                                <option value="08">Bangkok</option>
                                            </select>
                                        </div> -->
                                    </div>
                                    <div class="price-range-widget">
                                        <h4 class="widget-title">Around Distance: 50 km</h4>
                                        <div id="slider-range" class="mb-20"></div>
                                        <div class="price-number">
                                            <span class="amount"><input type="text" id="amount"></span>
                                        </div>
                                        <select class="wide">
                                            <option data-dsplay="Default price">Default price</option>
                                            <option value="01">$10-$30</option>
                                            <option value="02">$30-$70</option>
                                            <option value="03">$70-$100</option>
                                            <option value="04">$100-$130</option>
                                            <option value="05">$130-$150</option>
                                        </select>
                                    </div>
                                    <div class="form_group">
                                        <button class="main-btn icon-btn">Search Now</button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget newsletter-widget mb-30">
                                <div class="newsletter-widget-wrap bg_cover" style="background-image: url(assets/images/newsletter-widget-1.jpg);">
                                    <i class="flaticon-email-1"></i>
                                    <h3>Subscribe Our
                                        Newsletter</h3>
                                    <button class="main-btn icon-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="listing-search-filter mb-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="filter-left d-flex align-items-center">
                                        <div class="show-text">
                                            <span>Showing Result 1-09</span>
                                        </div>
                                        <div class="sorting-dropdown">
                                            <select>
                                                <option data-dsplay="Default Sorting">Default Sorting</option>
                                                <option value="01">Museums</option>
                                                <option value="02">Restaurant</option>
                                                <option value="03">Party Center</option>
                                                <option value="04">Fitness Zone</option>
                                                <option value="05">Game Field</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="filter-right">
                                        <ul class="filter-nav">
                                            <li><a href="listing-grid.php" class="active"><i class="ti-view-grid"></i></a></li>
                                            <li><a href="listing-list.php"><i class="ti-view-list-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-grid-wrapper">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-16.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <span class="featured-btn">Featured</span>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Pizza Recipe</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-17.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Party Corner</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-18.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">City Palace</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-19.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <span class="featured-btn">Featured</span>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Easter Plaza</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-20.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <span class="featured-btn">Featured</span>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Gym Ground</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-21.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Miyami Sea</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-22.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Gym Ground</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-close">Close</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="listing-item listing-grid-item-two mb-30">
                                        <div class="listing-thumbnail">
                                            <img src="assets/images/listing/listing-grid-23.jpg" alt="Listing Image">
                                            <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                            <span class="featured-btn">Featured</span>
                                            <ul class="ratings ratings-four">
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
                                            </ul>
                                        </div>
                                        <div class="listing-content">
                                            <h3 class="title"><a href="listing-details-2.php">Coffee Time</a></h3>
                                            <p>Popular restaurant in california</p>
                                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05">+98 (265) 3652 - 05</a><span class="status st-open">Open</span></span>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i>California, USA</span></li>
                                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                </ul>
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
        <!--====== End Listing Section ======-->
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
    </body>
</html>