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
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
  }
  else{
    echo $responseArray['message'];
  }
  }
?>
<?php
if(isset($_POST['searchlist'])){
    $category=$_POST['category'];
    header("location:categorylist.php?category=$category");
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <?php
            $sql=mysqli_query($conn,"Select * from seo where page_name='home'");
               while($arr=mysqli_fetch_array($sql)){
             ?>
        <meta name="description" content="<?php echo $arr['meta_description'];?>">
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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

        <?php  
                        $sql=mysqli_query($conn,"select * from banner_image where id='1'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
    <style>
        .hero-wrapper-one:after {
            width: 43.5%;
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
            <div class="hero-wrapper-one">
                 <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hero-content">
                                <h1>Dream Explore
                                    Discover</h1>
                                <h3>People Don’t Take,Trips Take People</h3>
                                <div class="hero-search-wrapper">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-lg-9 col-md-8 col-sm-12">
                                                <div class="form_group">
                                                <select class="wide form_control" name="category" id="category" required>
                                                <option value="00" selected disabled>Search By Category</option>
                                                <?php 
                                                $query=mysqli_query($conn,"select * from listcategory");
                                                while($sql=mysqli_fetch_array($query)){ ?>
                                                    <option value="<?php echo $sql['name'];?>"><?php echo $sql['name'];?></option>
                                                    <?php  }  ?>
                                            </select>
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="form_group">
                                                    <input type="text" class="form_control" placeholder="Location" name="location" required>
                                                    <i class="ti-location-pin"></i>
                                                </div>
                                            </div> -->
                                            <div class="col-lg-3 col-md-4 col-sm-12">
                                                <div class="form_group">
                                                    <button class="main-btn icon-btn" type="submit" name="searchlist">Search Now</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- <p class="tags"><span>Popular:</span><a href="#">Saloon</a>,<a href="#">Restaurant</a>,<a href="#">Game</a>,<a href="#">Counter</a>,<a href="#">Train Station</a>,<a href="#">Parking</a>,<a href="#">Shooping</a></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Category Section ======-->
        <section class="category-area">
            <div class="container">
                <div class="category-wrapper-one">
                    <div class="row no-gutters">
                        <?php
                        $query=mysqli_query($conn,"select * from listcategory where status='Active'");
                        while($arr=mysqli_fetch_array($query)){
                        ?>
                        <div class="col-lg-2 col-md-4 category-column">
                            <div class="category-item category-item-one">
                                <div class="info text-center">
                                    <div class="icon">
                                        <i class="<?php echo $arr['icon'] ?>"></i>
                                    </div>
                                    <h6><?php echo $arr['name'] ?></h6>
                                </div>
                                <a href="categorylist.php?category=<?php echo $arr['name'] ?>" class="category-btn"><i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </section>
        <!--====== End Category Section ======-->
        <!--====== Start Listing Section ======-->
        <section class="listing-grid-area pt-115 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-75">
                            <span class="sub-title">Featured List</span>
                            <h2>Explore Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php 
                    $query="select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.action='0' limit 6";
                    $result=$conn->query($query);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="listing-item listing-grid-one mb-45">
                            <div class="listing-thumbnail">
                                <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="Listing Image"  width="370" height="290">
                                <span class="featured-btn">Featured</span>
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
                                <span class="price">$05.00 - $80.00</span>
                                <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no'] ?></a></span>
                                <div class="listing-meta">
                                    <ul>
                                        <li><span><i class="ti-location-pin"></i><?php echo $row['city'] ?>,  <?php echo $row['state'] ?></span></li>
                                        <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                        } else {
                            echo "0 results";
                        }
                         ?>
                </div>
            </div>

            <div class="row justify-content-center ">
                        <div class="col-lg-8">
                            <div class="cta-content-box text-center ">
                                <a href="listing-list.php" class="main-btn icon-btn btn-warning">View More</a>
                            </div>
                        </div>
                    </div>
        </section>

        
        <!--====== End Listing Section ======-->
        <!--====== Start offer Section ======-->
        <?php  
                        $sql=mysqli_query($conn,"select * from banner_image where id='2'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
        <section class="cta-area">
            <div class="cta-wrapper-one bg_cover" style="background:url('assets/images/banner/<?php echo $arr['file'];?>');">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="cta-content-box text-center">
                                <img src="assets/images/icon-1.png" alt="offer icon">
                                <h2>Splash Yourself Bigger
                                    Offer on Everyday</h2>
                                <a href="how-work.html" class="main-btn icon-btn">Explore Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php }  ?>
        <!--====== End offer Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-area">
            <div class="features-wrapper-one pt-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="features-img">
                                <img src="assets/images/features/features-1.jpg" alt="Features Image">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="features-content-box features-content-box-one">
                                <div class="section-title section-title-left mb-25">
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
       
        <!--====== Start Download Section ======-->
        <section class="download-app mt-4">
            <div class="download-wrapper-one pt-115">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="app-img">
                                <img src="assets/images/app-1.png" alt="App Image">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="download-content-box download-content-box-one">
                                <div class="section-title section-title-left mb-25">
                                    <span class="sub-title">Downlaod App</span>
                                    <h2>Comprehnsive All Great
                                        Destination Here</h2>
                                </div>
                                <p>Dictumst integer tellus eros quam vestibulum ante tortor mollis adipisn pharetra curae curae and pulvinar porttitor</p>
                                <ul class="button">
                                    <li>
                                        <a href="index.html" class="app-btn">
                                            <div class="icon">
                                                <i class="ti-android"></i>
                                            </div>
                                            <div class="info">
                                                <span>get it on</span>
                                                <h6>Goole Play</h6>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html" class="app-btn">
                                            <div class="icon">
                                                <i class="ti-apple"></i>
                                            </div>
                                            <div class="info">
                                                <span>get it on</span>
                                                <h6>App Store</h6>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="counter-area pt-120">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-ms-12">
                                            <div class="counter-item counter-item-one">
                                                <div class="info">
                                                    <h4><span>Member</span>Professional</h4>
                                                    <h3><span class="count">220</span> +</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-ms-12">
                                            <div class="counter-item counter-item-one">
                                                <div class="info">
                                                    <h4><span>Listing</span>Received</h4>
                                                    <h3><span class="count">72</span>K +</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-ms-12">
                                            <div class="counter-item counter-item-one">
                                                <div class="info">
                                                    <h4><span>Client</span>Satisfaction</h4>
                                                    <h3><span class="count">50</span>K +</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Dowvendornload Section ======-->
        <!--====== Start Popular Listing Section ======-->
        <section class="listing-grid-area pt-75 pb-110">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60">
                            <span class="sub-title">Featured List</span>
                            <h2>Explore Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="listing-slider-one">
                <?php
                        $query=mysqli_query($conn,"select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.morerating='1' limit 4");
                        while($arr=mysqli_fetch_array($query)){
                        ?>
                    <div class="listing-item listing-grid-item-two">
                        <div class="listing-thumbnail">
                            <img src="admin/dist/img/vender_image/<?php echo $arr['image1'] ?>" alt="Listing Image" width="370" height="290">
                            <a href="#" class="cat-btn"><i class="<?php echo $arr['icon'] ?>"></i></a>
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
                            <h3 class="title"><a href="listing-details-2.html"><?php echo $arr['shop_name'] ?></a></h3>
                            <p>Popular <?php echo $arr['category'] ?> in <?php echo $arr['city'] ?></p>
                            <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $arr['mobile_no'] ?></a><span class="status st-open">Open</span></span>
                            <div class="listing-meta">
                                <ul>
                                    <li><span><i class="ti-location-pin"></i><?php echo $arr['city'] ?>, <?php echo $arr['state'] ?></span></li>
                                    <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                   
                    
                </div>
            </div>
        </section>
        <!--====== End Popular Listing Section ======-->
        <!--====== Start Intro Video Section ======-->
        <?php  
                        $sql=mysqli_query($conn,"select * from banner_image where id='3'");   
                        while($arr=mysqli_fetch_array($sql)){
                      ?>
        <section class="intro-video">
            <div class="intro-wrapper-one bg_cover pt-115" style="background-image: url('assets/images/banner/<?php echo $arr['file'] ?>');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="play-content play-content-one text-center">
                                <a href="https://www.youtube.com/watch?v=lJyzByVH1oQ" class="video-popup"><i class="flaticon-play-button"></i></a>
                                <h5>Play Video</h5>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="intro-content-box intro-content-box-one">
                                <div class="section-title section-title-left section-title-white mb-35">
                                    <span class="sub-title">Checkout List</span>
                                    <h2>Professional planners
                                        for your vacation</h2>
                                </div>
                                <p>Risus urnas Iaculis per amet vestibulum luctus tincidunt ultricies aenean
                                    quam eros eleifend sodales cubilia mattis quam.</p>
                                <a href="listing-grid.html" class="main-btn icon-btn">Explore List</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
        <?php } ?>
        <!--====== End Intro Video Section ======-->
        <!--====== Start Newsletter Section ======-->
        <section class="newsletter-area">
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
        <!--====== Start Client Section ======-->
        <!-- <section class="client-area pt-120">
            <div class="client-wrapper-one pb-120">
                <div class="container">
                    <div class="client-slider-one">
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/01.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/02.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/03.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/04.png" alt="Client Image"></a>
                            </div>
                        </div>
                        <div class="client-item">
                            <div class="client-img">
                                <a href="#"><img src="assets/images/client/02.png" alt="Client Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--====== End Client Section ======-->
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