
<?php include("admin/include/config.php"); 

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
        <section class="page-breadcrumbs page-breadcrumbs-two bg_cover" style="background-image: url(assets/images/bg/listing-breadcrumbs-1.jpg);"></section>
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
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li><span><a href="#">(02 Reviews)</a></span></li>
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
        <a class="fbtn share twitter" href="http://www.facebook.com/sharer.php?u=http://localhost/digiinfro/card/card.php?cardid=<?php echo $row['shop_code']; ?>" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/facebook.png" alt="fb"></a> 
        
        <!-- Google Plus Share Button -->
        <a class="fbtn share twitter" href="https://twitter.com/share?url=http://localhost/digiinfro/card/card.php?cardid=<?php echo $row['shop_code']; ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/twitter.png" alt="twtr"></a> 
        
        <!-- Twitter Share Button -->
        <a class="fbtn share twitter" href="https://wa.me/whatsappphonenumber/?text=http://localhost/digiinfro/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/whatsapp.png" alt="wtsp"></a>
       
        <!-- Pinterest Share Button -->
        <a class="fbtn share pinterest" href="sms:?body=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu+%0A+http://localhost/digiinfro/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/message.png" alt="sms"></a>
        
       
        <!-- LinkedIn Share Button -->
        <a class="fbtn share linkedin" href="mailto:?subject= <?php echo $row['email']; ?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://localhost/digiinfro/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/email.png" alt="mail"></a>
    </div>
</div>
                                            <!---->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing-thumbnail mb-30">
                                <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="listing image" width="770" height="500">
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
                                    <img src="admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="gallery image" width="170" height="170">
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
                            <div class="listing-review-box mb-50">
                                <h4 class="title">Customer Review</h4>
                                <ul class="review-list">
                                    <li class="review">
                                        <div class="thumb">
                                            <img src="assets/images/listing/review-1.jpg" alt="review image">
                                        </div>
                                        <div class="review-content">
                                            <h5>Moriana Steve</h5>
                                            <span class="date">Sep 02, 2021</span>
                                            <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="review">
                                        <div class="thumb">
                                            <img src="assets/images/listing/review-2.jpg" alt="review image">
                                        </div>
                                        <div class="review-content">
                                            <h5>Moriana Steve</h5>
                                            <span class="date">Sep 02, 2021</span>
                                            <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                    <li class="review">
                                        <div class="thumb">
                                            <img src="assets/images/listing/review-3.jpg" alt="review image">
                                        </div>
                                        <div class="review-content">
                                            <h5>Moriana Steve</h5>
                                            <span class="date">Sep 02, 2021</span>
                                            <p>Musutrum orci montes hac at neque mollis taciti parturient vehicula interdum verra cubilia ipsum duis amet nullam sit ut ornare mattis urna. </p>
                                            <div class="content-meta d-flex align-items-center justify-content-between">
                                                <ul class="ratings ratings-three">
                                                    <li><span class="av-rate">4.5</span></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                    <li class="star"><i class="flaticon-star-1"></i></li>
                                                </ul>
                                                <!-- <a href="#" class="reply"><i class="ti-share-alt"></i>Reply</a> -->
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="listing-review-form mb-30">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="title">Write a Review</h4>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-rating">
                                            <ul class="ratings">
                                                <li><span>Rate Here:</span></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                                <li class="star"><i class="flaticon-star-1"></i></li>
                                            </ul>
                                            <span>(02 Reviews)</span>
                                        </div>
                                    </div>
                                </div>
                                <form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form_group">
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
                                                    <input type="checkbox" id="check4" name="checkbox">
                                                    <label for="check4"><span>Save my name, email, and website in this browser for the next time i comment.</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button class="main-btn icon-btn">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                                            <li><span><a href="#">(02 Reviews)</a></span></li>
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