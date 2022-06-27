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
                <form>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="add-listing-form general-listing-form mb-60">
                                <h4 class="title">General Information</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Place Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <select class="wide">
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
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Keywords" name="keywords" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group">
                                            <textarea class="form_control" placeholder="Description" name="discription"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form details-listing-form mb-60">
                                <h4 class="title">Details Information</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Name" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="email" class="form_control" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Website" name="website" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Designation" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="text" class="form_control" placeholder="Company" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Facebook (Optional)" name="website" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Twitter (Optional)" name="website" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Linked (Optional)" name="website" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form_group">
                                            <input type="url" class="form_control" placeholder="Skype (Optional)" name="website" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-listing-form upload-listing-form mb-60">
                                <h4 class="title">Gallery Images</h4>
                                <p>Click here or drope files to upload</p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="Image">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-1.png" alt="Image">
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="Image">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-1.png" alt="Image">
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form_group file-input-one">
                                            <input type="file" name="Image">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-1.png" alt="Image">
												</div>
											</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form_group file-input-two">
                                            <input type="file" name="Video">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-2.png" alt="Image">
                                                    <span>Add Video +</span>
												</div>
											</div>
                                        </div>
                                        <div class="form_group file-input-two">
                                            <input type="file" name="Image">
                                            <div class="upload-content">
												<div class="upload-title-icon d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/elements/input-3.png" alt="Image">
                                                    <span>Add Video +</span>
												</div>
											</div>
                                        </div>
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