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
        .default{
    border: solid 1px #e8e8e8;
            background: white;
            margin-left:15px;
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
                                <h1 class="title">List Layout</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">List Layout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Listing Section ======-->
        <section class="listing-list-area pt-120 pb-90">
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
                                            <select class="wide form_control">
                                                <option data-dsplay="Category">Category</option>
                                                <?php
                                                $sql=mysqli_query($conn,"select * from listcategory where status='Active'");
                                                while($arr1=mysqli_fetch_array($sql)){
                                                ?>
                                                <option value="<?php echo $arr1['name'] ?>"><?php echo $arr1['name'] ?></option>
                                                <?php } ?>
                                            
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide form_control" name="state" onChange="get(this.value)">
                                                
                                                <option >State</option>
                                                <?php
                                                $sql=mysqli_query($conn,"select * from state");
                                                while($arr1=mysqli_fetch_array($sql)){
                                                ?>
                                                 <option value="<?php echo $arr1['state'];?>"><?php echo $arr1['state'];?></option>
                                                 <?php } ?>
                                               
                                            </select>
                                        </div>
                                        <div class="form_group">
                                            <select class=" wide form_control bycity" name="city">
                                            <option >By city</option>

                                                </select>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide form_control">
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
                                        </div>
                                    </div>
                                   
                                    <div class="form_group">
                                        <button class="main-btn icon-btn" type="submit" name="subsearch">Search Now</button>
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
                                            <select class="default form_control">
                                                <option data-dsplay="Default Sorting">Default Sorting</option>
                                                <?php
                                                $sql=mysqli_query($conn,"select * from listcategory  where status='Active'");
                                                while($arr1=mysqli_fetch_array($sql)){
                                                ?>
                                                <option value="<?php echo $arr1['name'] ?>"><?php echo $arr1['name'] ?></option>
                                                <?php } ?>
                                    
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="filter-right">
                                        <ul class="filter-nav">
                                            <li><a href="listing-grid.html" class="active"><i class="ti-view-grid"></i></a></li>
                                            <li><a href="listing-list.html"><i class="ti-view-list-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        if(isset($_POST['subsearch'])){
                            $state=$_POST['state'];
                            $city=$_POST['city'];

                            $query="select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0' and city='$city' and state='$state'";
                        $result=$conn->query($query);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="listing-list-wrapper">
                            <div class="listing-item listing-list-item-two mb-60">
                                <div class="listing-thumbnail">
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="listing Image">
                                    <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                        <div class="meta-icon-title d-flex align-items-center">
                                            <div class="icon">
                                                <i class="<?php echo $row['icon'] ?>"></i>
                                            </div>
                                            <div class="title">
                                                <h6><?php echo $row['name'] ?></h6>
                                            </div>
                                        </div>
                                        <span class="status st-open">Open</span>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="listing-details-2.html"><?php echo $row['shop_name'] ?></a></h3>
                                    <div class="ratings">
                                        <ul class="ratings ratings-three">
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li><span><a href="#">(02 Reviews)</a></span></li>
                                        </ul>
                                    </div>
                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no'] ?></a></span>
                                    <div class="listing-meta">
                                        <ul>
                                            <li><span><i class="ti-location-pin"></i><?php echo $row['city'] ?>, <?php echo $row['state'] ?></span></li>
                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php }
                        } else {
                            echo "0 results";
                        }
                        }
                        else{
                        $query="select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0'";
                        $result=$conn->query($query);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="listing-list-wrapper">
                            <div class="listing-item listing-list-item-two mb-60">
                                <div class="listing-thumbnail">
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="listing Image">
                                    <div class="thumbnail-meta d-flex justify-content-between align-items-center">
                                        <div class="meta-icon-title d-flex align-items-center">
                                            <div class="icon">
                                                <i class="<?php echo $row['icon'] ?>"></i>
                                            </div>
                                            <div class="title">
                                                <h6><?php echo $row['name'] ?></h6>
                                            </div>
                                        </div>
                                        <span class="status st-open">Open</span>
                                    </div>
                                </div>
                                <div class="listing-content">
                                    <h3 class="title"><a href="listing-details-2.php?detailpen=<?php echo $row['shop_code']; ?>"><?php echo $row['shop_name'] ?></a></h3>
                                    <div class="ratings">
                                        <ul class="ratings ratings-three">
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li><span><a href="#">(02 Reviews)</a></span></li>
                                        </ul>
                                    </div>
                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no'] ?></a></span>
                                    <div class="listing-meta">
                                        <ul>
                                            <li><span><i class="ti-location-pin"></i><?php echo $row['city'] ?>, <?php echo $row['state'] ?></span></li>
                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php }
                        } else {
                            echo "0 results";
                        }
                    }
                         ?>
                           
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
    $('.bycity').html(html);
  }
});
  }
  </script>

  
    </body>
</html>