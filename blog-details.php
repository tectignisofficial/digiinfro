<?php
include("admin/include/config.php");
$id=$_GET['id'];

if(isset($_POST['save'])){

    $comment=$_POST['comment'];
  $vname=$_POST['vname'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $status=1;

  $sql=mysqli_query($conn,"INSERT INTO `blog_comment`(`comment`,`vname`,`email`,`status`,`phone`) 
  VALUES ('$comment','$vname','$email','$status','$phone')");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
       
        <?php
 $sql=mysqli_query($conn,"select * from `blog` where `category_id`='$id'");

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
        $sql=mysqli_query($conn,"select * from banner_image where id='42'");   
        while($arr=mysqli_fetch_array($sql)){
                      ?>
    <style>
        .breadcrumbs-wrapper:after{
            right: 0;
            background: url('assets/images/banner/<?php echo $arr['file'];?>') no-repeat center center ;
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
                                <h1 class="title">Blog Single</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Blog Single</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Blog Section ======-->
        <section class="blog-area pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-wrapper mb-30">
                            <div class="blog-post-item">
                            <?php 
                 $eid=$_GET['id'];       
            $sql=mysqli_query($conn,"select blog.*, blog_category.* from blog inner join blog_category on blog.category_id=blog_category.id where blog.category_id='$eid'");

            $sql1 = mysqli_query($conn,"select blog.*, blog_comment.* from blog inner join blog_comment on blog_comment.blog=blog.id" );
            $count1=mysqli_num_rows($sql1);
                     $count=1;
                         $arr=mysqli_fetch_array($sql)
                            
                        ?>
                            <div class="post-thumbnail">
                                <a href="blog-details.php?id=<?php echo $arr['id'];?>"><img src="assets/images/blog_image/<?php echo $arr['img'];?>" style="height:450px; width:780px;"></a>
                                  
                                </div>
                                <div class="entry-content">
                                    <div class="post-meta">
                                        <ul>
                                            <li><span><i class="ti-bookmark-alt"></i><a href="#"><?php echo $arr['name'];?></a></span></li>
                                            <li><span><i class="ti-comments-smiley"></i><a href="#"><?php echo $count1;?> Comment</a></span></li>
                                            <li><span><i class="ti-id-badge"></i><a href="#">By admin</a></span></li>
                                            <li><span><i class="ti-calendar"></i><a href="#"><?php echo $arr['date'];?></a></span></li>
                                        </ul>
                                    </div>
                                    <h3 class="title"><a href="blog-details.php?id=<?php echo $arr['id'];?>"><?php echo $arr['title'];?></h3>
                                    <p><?php echo $arr['blog_content'];?></p>
                                   
                                   
                                    <!-- <div class="post-tag">
                                        <a href="#">Feature</a>
                                        <a href="#">Tourism</a>
                                        <a href="#">Job & Feed</a>
                                        <a href="#">Musemus</a>
                                    </div> -->
                                </div>
                                <?php  ?>
                            </div>
                            <div class="comments-area">
                                <h4 class="comments-title mb-35">Comment </h4>
                                <ul class="comments-list">
                                <?php 
                        
                        $sql=mysqli_query($conn,"select * from `blog_comment` where status='0'");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                    <li class="comment">
                                        <div class="comment-wrap">
                                            <div class="comment-author-content">
                                                <span class="author-name"> <b><?php echo $arr['vname'];?></b></span>
                                                <p> <?php echo $arr['comment'];?> </p>
                                                
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>   
                                </ul>
                                
                            </div>
                            <div class="comments-respond">
                                <h4 class="comments-heading mb-20">Write a Review</h4>
                                <form method="post">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" name="comment" placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Full Name" name="vname" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Type your email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="tel" class="form_control" placeholder=" Phone " minlength="10" maxlength="10" name="phone" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_checkbox">
                                                <div class="single-checkbox d-flex">
                                                    <input type="checkbox" id="check1" name="checkbox" checked>
                                                    <label for="check1"><span>Save my name, email, and website in this browser for the next time i comment.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn" type="submit" name="save">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <!-- <div class="widget search-widget mb-30">
                                <h4 class="widget-title">Search</h4>
                                <form>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Search..." name="email" required>
                                        <i class="ti-location-arrow"></i>
                                    </div>
                                </form>
                            </div> -->
                            <div class="widget categories-widget mb-30">
                                <h4 class="widget-title">Categories</h4>
                              

                                <ul class="categories-nav">
                                <?php 
                                    $query=mysqli_query($conn,"select * from blog_category");
                                    $sql2=mysqli_query($conn,"select blog.*, blog_category.* from blog inner join blog_category on blog.category_id=blog_category.id;
                                    ");
                                    $count2=mysqli_num_rows($sql2);
                                    while($sql=mysqli_fetch_array($query))
                                    {
                                    ?>
                                    <li><a href="#"><?php echo $sql['name']  ?> <span><?php echo $count2 ?> </span></a>
                                    </li> 
                                    <?php   } ?>
                                </ul>
                              
                            </div>
                            <div class="widget recent-post-widget mb-30">
                                <h4 class="widget-title">Popular Post</h4>
                                <ul class="recent-post-list">
                                <?php 
                        
                        $sql=mysqli_query($conn,"select * from `blog`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                    <li class="post-thumbnail-content">
                                    <img src="assets/images/blog_image/<?php echo $arr['img'];?>">
                                        <div class="post-title-date">
                                        <span class="posted-on"><i class="ti-calendar"></i><a href="#"><?php echo $arr['date'];?></a></span>
                                        <h6><a href="blog-details.php?id=<?php echo $arr['id'];?>"><?php echo $arr['title'];?></a></h6>
                                        </div>
                                    </li>
                                    <?php   } ?>
                                </ul>
                            </div>
                            <!-- <div class="widget add-widget mb-30">
                                <div class="add-img-box">
                                    <img src="assets/images/elements/add-1.jpg" alt="Add Image">
                                </div>
                           </div> -->
                            <!-- <div class="widget tag-cloud-widget mb-30">
                                <h4 class="widget-title">Popular Tag</h4>
                                <a href="#">Decor</a>
                                <a href="#">Love</a>
                                <a href="#">Trendy</a>
                                <a href="#">Interior</a>
                                <a href="#">Architect</a>
                                <a href="#">Feature</a>
                                <a href="#">Modern</a>
                            </div> -->
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
