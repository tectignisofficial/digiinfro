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
            $sql=mysqli_query($conn,"Select * from seo where page_name='listing-list'");
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

        <style>
            <?php if($_GET['categories']);{ ?>
            .cateShop{
                display:none;
            }
            .category{
                display:block;
            }
            <?php } ?>
            <?php if($_GET['category']);{ ?>
            .category{
                display:none;
            }
            .catshop{
                display:block;
            }
            <?php } ?>

            <?php  
        $sql=mysqli_query($conn,"select * from banner_image where id='54'");   
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
                    
                    <div class="col-lg-12">
                        <div class="listing-search-filter mb-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="filter-left d-flex align-items-center">
                                        <div class="show-text">
                                            <span>Showing Result 1-09</span>
                                        </div>
                                        <div class="sorting-dropdown">
                                            <select onChange="window.location.href=this.value;">
                                                <option data-dsplay="Default Sorting">Default Sorting</option>
                                                <?php 
                                                $query=mysqli_query($conn,"select * from listcategory");
                                                while($sql=mysqli_fetch_array($query)){ ?>
                                               <option value="categorylist.php?categories=<?php echo $sql['name'];?>"><?php echo $sql['name'];?></option>
                                                <?php  }  ?>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="filter-right">
                                        <ul class="filter-nav">
                                            <!-- <li><a href="listing-grid.php" class="active"><i class="ti-view-grid"></i></a></li> -->
                                            <li><a href="listing-list.php"><i class="ti-view-list-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-grid-wrapper cateShop">
                            <div class="row">
                                <?php
                            if(($_GET['category']) && ($_GET['shopName'])){
                                $query="select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0' and vendor.category='".$_GET['category']."' and vendor.shop_name like '%".$_GET['shopName']."%'";
                                $row=$conn->query($query);
                                while($result = $row->fetch_assoc()) {
                                    ?>
                                    <div class="col-md-4 col-sm-12">
                                        <div class="listing-item listing-grid-item-two mb-30">
                                            <div class="listing-thumbnail">
                                                <img src="admin/dist/img/vender_image/<?php echo $result['image1'] ?>" alt="Listing Image"   width="370" height="290">
                                                <a href="#" class="cat-btn"><i class="<?php echo $result['icon'] ?>"></i></a>
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
                                                <h3 class="title"><a href="listing-details-2.php?detailpen=<?php echo $result['shop_code']; ?>"><?php echo $result['shop_name'] ?></a></h3>
                                                <p>Popular <?php echo $result['category'] ?> in <?php echo $result['city'] ?></p>
                                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $result['image1'] ?></a><span class="status st-open">Open</span></span>
                                                <div class="listing-meta">
                                                    <ul>
                                                        <li><span><i class="ti-location-pin"></i><?php echo $result['city'].' , '.$result['state'] ?></span></li>
                                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    } 
                                    }                                   
                                else{
                                    echo "<div style='font-size: -webkit-xxx-large;color: goldenrod;width: 100%;text-align: center;line-height: 10pc;'>No shop</div>"; }
                            ?>
                                
                            </div>
                        </div>
                        <!--category and shop-->
                        <div class="listing-grid-wrapper category">
                            <div class="row">
                                <?php
                           if(isset($_GET['categories'])){
                            $query="select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0' and vendor.category='".$_GET['categories']."'";
                            $row=$conn->query($query);
                            if($row->num_rows > 0){
                            
                            while($result = $row->fetch_assoc()) {
                        ?>
                        <div class="col-md-4 col-sm-12">
                            <div class="listing-item listing-grid-item-two mb-30">
                                <div class="listing-thumbnail">
                                    <img src="admin/dist/img/vender_image/<?php echo $result['image1'] ?>" alt="Listing Image"   width="370" height="290">
                                    <a href="#" class="cat-btn"><i class="<?php echo $result['icon'] ?>"></i></a>
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
                                    <h3 class="title"><a href="listing-details-2.php?detailpen=<?php echo $result['shop_code']; ?>"><?php echo $result['shop_name'] ?></a></h3>
                                    <p>Popular <?php echo $result['category'] ?> in <?php echo $result['city'] ?></p>
                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $result['image1'] ?></a><span class="status st-open">Open</span></span>
                                    <div class="listing-meta">
                                        <ul>
                                            <li><span><i class="ti-location-pin"></i><?php echo $result['city'].' , '.$result['state'] ?></span></li>
                                            <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                        }  } else{
                        echo "<div style='font-size: -webkit-xxx-large;color: goldenrod;width: 100%;text-align: center;line-height: 10pc;'>No shop</div>"; }
                        }
                        
                            ?>
                                
                            </div>
                        </div>
                        <!--category and shop-->
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
