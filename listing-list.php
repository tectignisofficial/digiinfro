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
        .wide{
            background: white;
        }
        .default{
    border: solid 1px #e8e8e8;
            background: white;
            margin-left:15px;
        }
        <?php  
        $sql=mysqli_query($conn,"select * from banner_image where id='21'");   
        while($arr=mysqli_fetch_array($sql)){
                      ?>
    
        .breadcrumbs-wrapper:after{
            right: 0;
            background: url(assets/images/banner/<?php echo $arr['file'];?>) no-repeat center center ;
            background-size: 945px 400px;
        }
    <?php }  ?>
    .pagination .active{
        background: #ff344f!important;
        color: white;
    }
    .pagination li:hover{
        background: #ff344f!important;
        color: white;}

        :root {
  --star-size: 60px;
  --star-color: #fff;
  --star-colors: #676767;
  --star-background: #ff344f;
}
        .Stars1 {
  --percent: calc(var(--rating) / 5 * 100%);
  
  display: inline-block;
  font-size: 22px;
  font-family: Times; // make sure ★ appears correctly
  line-height: 1;
}
  .Stars1:before {
    content: '★★★★★';
    letter-spacing: 1px;
    background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-colors) var(--percent));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
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
                                    <li><a href="index.php">Home</a></li>
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
                                <form method="post">
                                    <div class="search-form">
                                        <!-- <div class="form_group">
                                            <input type="search" class="form_control" placeholder="Search keyword" name="search" required>
                                            <i class="ti-search"></i>
                                        </div> -->
                                        <div class="form_group">
                                            <select class="wide form_control" name="category">
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
                                            <select class=" wide form_control bycity" name="city" onChange="gett(this.value)">
                                            <option >By city</option>

                                                </select>
                                        </div>
                                        <div class="form_group">
                                            <select class="wide form_control location" name="location">
                                                <option data-dsplay="By place">By place</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="form_group">
                                        <button class="main-btn icon-btn" type="submit" name="subsearch">Search Now</button>
                                    </div>
                                </form>
                            </div>
                            <!-- <div class="widget newsletter-widget mb-30">
                                <div class="newsletter-widget-wrap bg_cover" style="background-image: url(assets/images/newsletter-widget-1.jpg);">
                                    <i class="flaticon-email-1"></i>
                                    <h3>Subscribe Our
                                        Newsletter</h3>
                                    <button class="main-btn icon-btn">Subscribe</button>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="listing-search-filter mb-40">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-- <div class="filter-left d-flex align-items-center">
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
                                    </div> -->
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
                        <?php
                        if (isset($_GET['pageno'])) {
                            $pageno = $_GET['pageno'];
                        } else {
                            $pageno = 1;
                        }
                        $no_of_records_per_page = 10;
                        $offset = ($pageno-1) * $no_of_records_per_page;
                        $total_pages_sql = "SELECT COUNT(*) FROM vendor where vendor.action='0'";
                        $result = mysqli_query($conn,$total_pages_sql);
                        $total_rows = mysqli_fetch_array($result)[0];
                        $total_pages = ceil($total_rows / $no_of_records_per_page);

                        if(isset($_POST['subsearch'])){
                            
                            $state=$_POST['state'];
                            $city=$_POST['city'];
                            $category=$_POST['category'];
                            $location=$_POST['location'];

                            $query="select * from  vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0' and city='$city' or state='$state' or category='$category' or location='$location'  LIMIT $offset, $no_of_records_per_page";
                           
                        $result=$conn->query($query);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="listing-list-wrapper">
                            <div class="listing-item listing-list-item-two mb-60">
                                <div class="listing-thumbnail">
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="listing Image" width="370" height="290">
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
                                           
                                            <?php
                                            $checkreview=$row['shop_code'];
                                            $rsql=mysqli_query($conn,"SELECT round(avg(`rating`),2) AS `average_rate`, count(`rating`) AS `num_of_rating`
                                            FROM list_comment 
                                            WHERE detail_id = '$checkreview'");
                                            $arr1=mysqli_fetch_array($rsql);
                                            ?>
                                            <div class="Stars1" style="--rating: <?php echo $arr1['average_rate'] ?>;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                            <li><span><a href="#">( <?php echo $arr1['num_of_rating'] ?> Reviews)</a></span></li>
                                        </ul>
                                    </div>
                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no'] ?></a></span>
                                    <div class="listing-meta">
                                        <ul>
                                            <li><span><i class="ti-location-pin"></i><?php echo $row['city'] ?>, <?php echo $row['state'] ?></span></li>
                                            <!-- <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li> -->
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
                        $query="select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0' LIMIT $offset, $no_of_records_per_page";
                        $result=$conn->query($query);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="listing-list-wrapper">
                            <div class="listing-item listing-list-item-two mb-60">
                                <div class="listing-thumbnail">
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="listing Image" width="370" height="290">
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
                                           
                                           <?php
                                           $checkreview=$row['shop_code'];
                                           $rsql=mysqli_query($conn,"SELECT round(avg(`rating`),2) AS `average_rate`, count(`rating`) AS `num_of_rating`
                                           FROM list_comment 
                                           WHERE detail_id = '$checkreview'");
                                           $arr1=mysqli_fetch_array($rsql);
                                           ?>
                                           <div class="Stars1" style="--rating: <?php echo $arr1['average_rate'] ?>;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                           <li><span><a href="#">( <?php echo $arr1['num_of_rating'] ?> Reviews)</a></span></li>
                                       </ul>
                                    </div>
                                    <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no'] ?></a></span>
                                    <div class="listing-meta">
                                        <ul>
                                            <li><span><i class="ti-location-pin"></i><?php echo $row['city'] ?>, <?php echo $row['state'] ?></span></li>
                                            <!-- <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li> -->
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
                        <!--pagination-->
                        <ul class="pagination" style="justify-content:center">
        <li class="mr-2"><a href="?pageno=1">First</a></li>
        <!-- <li class="<?php //if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php// if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li> -->
        <?php
        for($i=1;$i<=$total_pages;$i++)
        {
            ?>
            <li class="<?php if($pageno == $i){ echo 'active'; } ?> mr-1" style="border-radius:50%;width: 25px;height: 25px;text-align: center;background: gainsboro;"><a href="?pageno=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php
        }
        ?>
        <!-- <li class="<?php// if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php// if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li> -->
        <li class="ml-2"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
    <!--pagination-->
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
<script>
  function gett(val){
$.ajax({
  type:'POST',
  url:'api.php',
  data:'place='+val,
  success:function(html){
    $('.location').html(html);
  }
});
  }
  </script>
  
    </body>
</html>