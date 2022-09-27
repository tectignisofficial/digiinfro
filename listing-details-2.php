
<?php include("admin/include/config.php"); 
// $detailpen=$_GET['detailpen'];
// echo $detailpen;
if(isset($_POST['commentSubmit'])){

    $message=$_POST['message'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $checkbox=$_POST['checkbox'];
    $rating=$_POST['rating'];
    $comid=$_POST['comid'];
    date_default_timezone_set('Asia/Kolkata');
    $date=date('d-m-Y h:i A');
  
    $sql=mysqli_query($conn,"INSERT INTO `list_comment`(`name`, `email`, `message`, `detail_id`, `checkbox`, `date`,`rating`) VALUES ('$name','$email','$message','$comid','$checkbox','$date','$rating')");
  }
  
  $reviewsql=mysqli_query($conn,"SELECT round(avg(`rating`),2) AS `average_rate`, count(`rating`) AS `num_of_rating`
  FROM list_comment 
  WHERE detail_id = '$detailpen'");
  $arr1=mysqli_fetch_array($reviewsql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====== Required meta tags ======-->
        <base href="http://demo.digiinfromatrics.com/">
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <style>
            .sidebar-widget-area .widget.contact-info-widget {
    padding: 0px 30px;
}

.social .fbtn {
    width: 50px;
    display: inline-block;
    color: #fff;
    text-align: center;
    line-height: 18px;
    float: left;
}
.social .fa {
    padding: 15px 0px
}
.facebook {
    background-color: #3b5998;
}
.gplus {
    background-color: #dd4b39;
}
.twitter {
    background-color: #55acee;
}
.stumbleupon {
    background-color: #eb4924;
}
.pinterest {
    background-color: #cc2127;
}
.linkedin {
    background-color: #0077b5;
}
.buffer {
    background-color: #323b43;
}

.share-button.sharer .social.active.top {
    transform: scale(1) translateY(-10px);
}
.share-button.sharer .social.active {
    opacity: 1;
    transition: all 0.4s ease 0s;
    visibility: visible;
}
.share-button.sharer .social.networks-5 {} .share-button.sharer .social.top {
    margin-top: -80px;
    transform-origin: 0 0 0;
}
.share-button.sharer .social {
    margin-left: -65px;
    opacity: 0;
    transition: all 0.4s ease 0s;
    visibility: hidden;
}
.rate{
    display:flex;
    transform:rotateY(180deg);
}
.rate label{
    display:block;
    cursor: pointer;
    width:20px;
    background:white;
}
.rate label:before{
    content:'\f005';
    font-family: FontAwesome;
    position: relative;
    display: block;
    font-size:15px;
}
.rate label:after{
    content:'\f005';
    font-family: FontAwesome;
    position: absolute;
    display: block;
    font-size:15px;
    color:#ff344f;
    top:0;
    opacity:0;
    transition:.5s;
    text-shadow:0 2px 5px rgba(0,0,0,.5);
}
.rate label:hover:after,
.rate label:hover ~ label:after,
.rate input:checked ~ label:after{
    opacity:1;
}
.rate input{
    display:none;
}
.ratingCheck{
display:flex;
transform: rotateY(180deg);
}
.ratingCheck label{
    display:block;
    cursor: pointer;
    width:20px;
    background:white;
}
.ratingCheck label:before{
    content:'\f005';
    font-family: FontAwesome;
    position: relative;
    display: block;
    font-size:15px;
}
.ratingCheck label:after{
    content:'\f005';
    font-family: FontAwesome;
    position: absolute;
    display: block;
    font-size:15px;
    color:#ff344f;
    top:0;
    opacity:0;
    transition:.5s;
    text-shadow:0 2px 5px rgba(0,0,0,.5);
}
.ratingCheck input{
    display:none;
}
.ratingCheck>.fff {
    color:#ff344f;
}
.pagination .active .fa-circle{
  color:#ff344f !important;
}
/* show star */
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
        <!--====== Start breadcrumbs Section ======-->
    
        <section class="page-breadcrumbs page-breadcrumbs-two bg_cover" <?php  
        $sql=mysqli_query($conn,"select * from banner_image where id='54'");   
        while($arr=mysqli_fetch_array($sql)){
                      ?>
    style="background-image: url(assets/images/banner/<?php echo $arr['file'];?>);" <?php }  ?> ></section>
        <!--====== End breadcrumbs Section ======-->
        <!--====== Start Listing Details Section ======-->
        <?php
        if(isset($_GET['detailpen'])){
            $id=$_GET['detailpen'];
            $sql=mysqli_query($conn,"select * from vendor where shop_code='$id'");
            $row=mysqli_fetch_array($sql);          
          }
        ?>
        <section class="listing-details-section pt-120 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="listing-details-wrapper listing-details-wrapper-two">
                            <div class="listing-info-area mb-30">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="listing-info-content">
                                            <ul class="ratings ratings-three">
                                            <div class="Stars1" style="--rating: <?php echo $arr1['average_rate'] ?>;" aria-label="Rating of this product is 2.3 out of 5."></div>
                                                <li><span><a href="#">( <?php echo $arr1['num_of_rating'] ?> Reviews)</a></span></li>
                                            </ul>
                                            <h3 class="title"><?php echo $row['shop_name']; ?></h3>
                                            <div class="listing-meta">
                                                <ul>
                                                    <li><span><i class="ti-location-pin"></i><?php echo $row['city']." , ".$row['state'] ?></span></li>
                                                    <li><span><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $row['mobile_no']; ?></a></span></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="button">
                                            <a href="card/card.php?cardid=<?php echo $row['shop_code']; ?>" class="icon-btn"><i class="ti-mobile"></i></a>

                                           
                                            <div class="share-button sharer" style="    display: contents;background: white;">
    <button type="button" class="icon-btn share_btn " style="background: white;"><i class="ti-share"></i></button>
    <div class="social top center networks-5 d-flex">
        <!-- Facebook Share Button -->
        <a class="fbtn share twitter" href="http://www.facebook.com/sharer.php?u=http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/facebook.png" alt="fb"></a> 
        
        <!-- Google Plus Share Button -->
        <a class="fbtn share twitter" href="https://twitter.com/share?url=http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/twitter.png" alt="twtr"></a> 
        
        <!-- Twitter Share Button -->
        <a class="fbtn share twitter" href="https://wa.me/whatsappphonenumber/?text=http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/whatsapp.png" alt="wtsp"></a>
       
        <!-- Pinterest Share Button -->
        <a class="fbtn share pinterest" href="sms:?body=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu+%0A+http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/message.png" alt="sms"></a>
        
       
        <!-- LinkedIn Share Button -->
        <a class="fbtn share linkedin" href="mailto:?subject= <?php echo $row['email']; ?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/email.png" alt="mail"></a>
    </div>
</div>
                                            <!---->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $detailpen; ?>
                            <div class="listing-thumbnail mb-30">
                                <img src="admin/dist/img/vender_image/<?php echo $row['image2'] ?>" alt="listing image" width="770" height="500">
                            </div>
                            <div class="listing-content mb-30">
                                <h3 class="title">World's Quality <?php echo $row['category'] ?></h3>
                                <p><?php echo $row['description'] ?></p>
                            </div>
                            <!-- <div class="listing-play-box mb-30">
                                <h4 class="title">Documentary</h4>
                                <div class="play-content bg_cover text-center" style="background-image: url(assets/images/bg/video-bg-3.jpg);">
                                    <a href="https://www.youtube.com/watch?v=lJyzByVH1oQ" class="video-popup"><i class="flaticon-play-button"></i></a>
                                </div>
                            </div> -->
                            <div class="listing-gallery-box mb-30">
                                <h4 class="title">Photo Gallery</h4>
                                <div class="gallery-slider-one">
                                    <div class="gallery-item">
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image2'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image2'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image3'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image4'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="gallery image" width="170" height="170">
                                    </div>
                                </div>
                            </div>
                            <!--comment-->
                            <div class="listing-review-box mb-50">
                                <h4 class="title">Customer Review</h4>
                                <ul class="review-list">
                                    <?php
                                     $id=$_GET['detailpen'];
                                    if (isset($_GET['pageno'])) {
                                        $pageno = $_GET['pageno'];
                                    } else {
                                        $pageno = 1;
                                    }
                                    $no_of_records_per_page = 4;
                                    $offset = ($pageno-1) * $no_of_records_per_page;
                                    $total_pages_sql = "SELECT COUNT(*) FROM list_comment  where detail_id='$id'";
                                    $result = mysqli_query($conn,$total_pages_sql);
                                    $total_rows = mysqli_fetch_array($result)[0];
                                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                                   
                                    $commentsql=mysqli_query($conn,"select * from list_comment where detail_id='$id' LIMIT $offset, $no_of_records_per_page");
                                    while($commentrow=mysqli_fetch_array($commentsql))
                                    {
                                    ?>
                                    <li class="review">
                                        <!-- <div class="thumb">
                                            <img src="assets/images/listing/review-3.jpg" alt="review image">
                                        </div> -->
                                        <div class="review-content">
                                            <h5><?php echo $commentrow['name'] ?></h5>
                                            <span class="date"><?php echo $commentrow['date']; ?></span>
                                            <p><?php echo $commentrow['message'] ?></p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="ratingCheck">
                                                    <input type="radio" id="stars5" name="rate" value="5">
                                                    <label for="stars5" <?php if( ($commentrow['rating'] >=5)){ ?>class="fff"<?php } ?>></label>
                                                    <input type="radio" id="stars4" name="rate" value="4">
                                                    <label for="stars4" <?php if( ($commentrow['rating'] >= 4)){ ?>class="fff"<?php } ?>></label>
                                                    <input type="radio" id="stars3" name="rate" value="3" >
                                                    <label for="stars3" <?php if( ($commentrow['rating'] >= 3)){ ?>class="fff"<?php } ?>></label>
                                                    <input type="radio" id="stars2" name="rate" value="2">
                                                    <label for="stars2" <?php if( ($commentrow['rating'] >= 2)){ ?>class="fff"<?php } ?>></label>
                                                    <input type="radio" id="stars1" name="rate" value="1" >
                                                    <label for="stars1" <?php if( ($commentrow['rating'] >= 1)){ ?>class="fff"<?php } ?>></label>
                                                    </li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                    
                            </div>
                                        <!--pagination-->
                                        <div bgcolor="red">
                        <ul class="pagination" style="justify-content:center">
        <!-- <li class="mr-2"><a href="?pageno=1">First</a></li> -->
        <?php
        for($i=1;$i<=$total_pages;$i++)
        {
            ?>
            <li class="<?php if($pageno == $i){ echo 'active'; } ?> mr-1" style="border-radius:50%;width: 25px;height: 25px;text-align:center;background:gainsboro;font-size: x-small;"><a href="?detailpen=<?php echo $row['shop_code'] ?>&pageno=<?php echo $i; ?>"><i class="fa fa-circle" aria-hidden="true" style="color: burlywood;"></i></a></li>
            <?php
        }
        ?>
        <!-- <li class="ml-2"><a href="?pageno=<?php// echo $total_pages; ?>">Last</a></li> -->
    </ul>
    </div>
    <!--pagination-->
                            <!--comment-->
                            <div class="listing-review-form mb-30">
                            <form method='post'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Write a Review</h4>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-rating">
                                            <ul class="ratings">
                                                <li><span>Rate Here:</span></li>
                                                
                                                <li class="rate">
                                                <input type="radio" id="star1" name="rating" value="5" >
                                                    <label for="star1"></label>
                                                    <input type="radio" id="star2" name="rating" value="4" >
                                                    <label for="star2"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" >
                                                    <label for="star3"></label>
                                                    <input type="radio" id="star4" name="rating" value="2">
                                                    <label for="star4"></label>
                                                    <input type="radio" id="star5" name="rating" value="1">
                                                    <label for="star5"></label>
                                    </li>
                                    </ul>   
                                            <span>( <?php echo $arr1['num_of_rating'] ?> Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <input type="hidden" name="comid" value="<?php echo $_GET['detailpen']; ?>">
                                                <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="text" class="form_control" placeholder="Your name" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form_group">
                                                <input type="email" class="form_control" placeholder="Email here" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <div class="single-checkbox d-flex">
                                                    <input type="checkbox" id="check4" name="checkbox" value="1">
                                                    <label for="check4"><span>Save my name, email, and website in this browser for the next time i comment.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn icon-btn" name="commentSubmit">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            </form>
                        </div>
                        <div class="releted-listing-area">
                            <h3 class="title mb-20">Similar <?php echo $row['category']; ?></h3>
                            <div class="releted-listing-slider-one">
                                <?php
                                $cat=$row['category'];
                                $query=mysqli_query($conn,"select * from vendor where category='$cat' and action='0'");
                                while($arr=mysqli_fetch_array($query)){ ?>
                                <div class="listing-item listing-grid-item-one">
                                    <div class="listing-thumbnail">
                                        <img src="admin/dist/img/vender_image/<?php echo $arr['image1'] ?>" alt="Listing Image" width="370" height="290">
                                        <a href="#" class="cat-btn"><i class="flaticon-chef"></i></a>
                                        <span class="featured-btn">Featured</span>
                                        <ul class="ratings ratings-four">
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <li class="star"><i class="flaticon-star-1"></i></li>
                                            <?php
                                            $checkreview=$arr['shop_code'];
                                            $rsql=mysqli_query($conn,"select * from list_comment where detail_id='$checkreview'");
                                            $rfetch=mysqli_num_rows($rsql);
                                            ?>
                                            <li><span><a href="#">( <?php echo $rfetch; ?> Reviews)</a></span></li>
                                        </ul>
                                    </div>
                                    <div class="listing-content">
                                        <h3 class="title"><a href="listing-details-2.php?detailpen=<?php echo $arr['shop_code']; ?>"><?php echo $arr['shop_name'] ?></a></h3>
                                        <p>Popular <?php echo $arr['category'] ?>in <?php echo $arr['state'] ?></p>
                                        <span class="phone-meta"><i class="ti-tablet"></i><a href="tel:+982653652-05"><?php echo $arr['mobile_no'] ?></a><span class="status st-open">Open</span></span>
                                        <div class="listing-meta">
                                            <ul>
                                                <li><span><i class="ti-location-pin"></i><?php echo $arr['city'].' , '.$arr['city'] ?></span></li>
                                                <li><span><i class="ti-heart"></i><a href="#">Save</a></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="sidebar-widget-area">
                            <div class="widget reservation-form-widget mb-30">
                                <h4 class="widget-title">Enquiry</h4>
                                <form method="post">
                                    <div class="form_group">
                                        <input type="hidden" name="shopmail" value="<?php echo $row['email'] ?>">
                                        <input type="text" class="form_control" placeholder="Name" name="name" required>
                                        <i class="ti-user"></i>
                                    </div>
                                    <div class="form_group">
                                        <input type="text" class="form_control" placeholder="Phone" name="phone" required>
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="form_group">
                                        <input type="email" class="form_control" placeholder="Email" name="Email" required>
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="form_group">
                                                <textarea class="form_control" placeholder="Write Message" name="message"></textarea>
                                            </div>
                                    <div class="form_group">
                                        <button class="main-btn icon-btn" type="submit" name="subbook">Book Now</button>
                                    </div>
                                </form>
                            </div>
                            <div class="widget contact-info-widget mb-30">
                                <div class="contact-info-widget-wrap mb-4">
                                    <!-- <div class="contact-map">
                                        <iframe src="https://maps.google.com/maps?q=new%20york&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                                        <a href="#" class="support-icon"><i class="flaticon-headphone"></i></a>
                                    </div> -->
                                    <div class="contact-info-content">
                                        <h4 class="widget-title">Contact Info</h4>
                                        <div class="info-list">
                                            <p><i class="ti-tablet"></i><a href="tel:+98265365205"><?php echo $row['mobile_no'] ?></a></p>
                                            <p><i class="ti-location-pin"></i><?php echo $row['shop_address'].' , '.$row['city'].' , '.$row['state']; ?></p>
                                            <p><i class="ti-email"></i><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></p>
                                            <p  style="overflow:hidden;display: -webkit-box;"><i class="ti-world"></i><a href="<?php echo $row['website'] ?>" style="display:block"><?php echo $row['website'] ?></a></p>
                                        </div>
                                        <ul class="social-link">
                                            <?php if($row['facebook']!=null){?>
                                            <li><a href="<?php echo $row['facebook'] ?>"><i class="ti-facebook"></i></a></li>
                                            <?php } if($row['instagram']!=null){?>
                                            <li><a href="<?php echo $row['instagram'] ?>"><i class="ti-instagram"></i></a></li>
                                            <?php } if($row['LinkedIn']!=null){ ?>
                                            <li><a href="<?php echo $row['LinkedIn'] ?>"><i class="ti-linkedin"></i></a></li>
                                            <?php } if($row['youtube']!=null){?>
                                            <li><a href="<?php echo $row['youtube'] ?>"><i class="ti-youtube"></i></a></li>
                                            <?php } ?>
                                            <!-- <li><a href="#"><i class="fa fa-whatsapp" style="font-size:18px;"></i></a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="widget business-hour-widget mb-30">
                                <h4 class="widget-title">Business Hour</h4>
                                <ul class="time-info">
                                <?php if($row['monday'] != "00:00"){?>
                                    <li><span class="day">Monday</span><span class="time"><?php echo $row['monday'] ?> - <?php echo $row['end_mon'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                    <?php if($row['tuesday'] != "00:00"){?>
                                    <li><span class="day">Tuesday</span><span class="time"><?php echo $row['tuesday'] ?> - <?php echo $row['end_tue'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                    <?php if($row['wednesday'] != "00:00"){?>
                                    <li><span class="day">Wednesday</span><span class="time"><?php echo $row['wednesday'] ?> - <?php echo $row['end_wed'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                    <?php if($row['thursday'] != "00:00"){?>
                                    <li><span class="day">Thursday</span><span class="time"><?php echo $row['thursday'] ?> - <?php echo $row['end_thur'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                    <?php if($row['friday'] != "00:00"){?>
                                    <li><span class="day">Friday</span><span class="time"><?php echo $row['friday'] ?> - <?php echo $row['end_fri'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                    <?php if($row['saturday'] != "00:00"){ ?>
                                    <li><span class="day">Saturday</span><span class="time"><?php echo $row['saturday'] ?> - <?php echo $row['end_sat'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                    <?php if($row['sunday'] != "00:00"){ ?>
                                        <li><span class="day">Saturday</span><span class="time"><?php echo $row['sunday'] ?> - <?php echo $row['end_sun'] ?></span></li>
                                    <?php }else{ ?>
                                    <li><span class="day">Sunday</span><span class="time st-close">Close</span></li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <!-- <div class="widget newsletter-widget mb-30">
                                <div class="newsletter-widget-wrap bg_cover" style="background-image: url(assets/images/newsletter-widget-1.jpg);">
                                    <i class="flaticon-email-1"></i>
                                    <h3>Subscribe Our
                                        Newsletter</h3>
                                   <a href="#subscribe"><button class="main-btn icon-btn">Subscribe</button></a> 
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Listing Details Section ======-->
        <!--====== Start Footer ======-->
        
        <?php include("assets/include/Footer.php") ?>
       <!--====== End Footer ======-->
        <!--====== back-to-top ======-->
        <a href="#" class="back-to-top" ><i class="fas fa-angle-up"></i></a>
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
        <script>
            $( document ).ready(function() {
     //custom button for homepage
     $( ".share_btn" ).click(function(e) {
          $('.networks-5').not($(this).next( ".networks-5" )).each(function(){
             $(this).removeClass("active");
         });
         $(this).next( ".networks-5" ).toggleClass( "active" );
    });   
});
        </script>


<?php
if(isset($_POST['subbook'])){
  $name = $_POST['name'];
  $Email = $_POST['Email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  $shopmail=$_POST['shopmail'];
  date_default_timezone_set('Asia/Kolkata');
  $date = date('d-m-y h:i:s');

$from = 'Enquiry <naiduvedant@gmail.com>' . "\r\n";
$sendTo = 'Enquiry <'.$shopmail.'>';
$subject = 'Enquiry';
// $fields = array( 'name' => 'name' );
$from = 'Tectignis IT Solution: 1.0' . "\r\n";
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
    html,
body {
margin: 0 auto !important;
padding: 0 !important;
height: 100% !important;
width: 100% !important;
background: #f1f1f1;
}
* {
-ms-text-size-adjust: 100%;
-webkit-text-size-adjust: 100%;
}
</style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
<div style="margin:50px auto;width:70%;padding:20px 0">
<div style="border-bottom:1px solid #eee">
<a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Enquiry</a>
</div>
<p style="font-size:1.1em">Hi '.$name.'</p>
<p>Enquiry</p>
<h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'. $message.'</h2>
<p style="font-size:0.9em;">Regards,<br />Your Brand</p>
<hr style="border:none;border-top:1px solid #eee" />
<div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
<p>Your Brand Inc</p>
<p>1600 Amphitheatre Parkway</p>
<p>California</p>
</div>
</div>
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
$sql=mysqli_query($conn,"INSERT INTO `enquiry`(`name`, `phonenumber`, `email`, `message`,`shop_email`,`date`) VALUES ('$name','$phone','$Email','$message','$shopmail','$date')");
if($sql){
  echo "<script>swal('success','Thanks For Contacting us','success').then function({
    window.location.href = 'listing-list.php';
  })</script>";}
else{
  echo "<script>swal('error','Something Wrong','error').then function({
    window.location.href = 'listing-list.php';
  })</script>";
}
}else{
echo "eeee $sendTo $subject $emailText $from";
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


    </body>
</html>