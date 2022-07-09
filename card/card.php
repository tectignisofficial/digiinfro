<?php
include("../admin/include/config.php");
$cardid=$_GET['cardid'];
$sql=mysqli_query($conn,"select * from vendor inner join listcategory on listcategory.name=vendor.category where vendor.shop_code='$cardid'");
$row=mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
        <script>
  if (!location.hash) {
    location.hash = "#0";
    location.reload(true);
  } else {
    location.hash = "#1";
  }
</script>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://commonfiles.visitingcardpro.com/css/all.css">
<link rel="stylesheet" href="http://commonfiles.visitingcardpro.com/css/common_css.css">
<link rel="stylesheet" href="http://commonfiles.visitingcardpro.com/css/brands.css">
<link rel="stylesheet" href="http://commonfiles.visitingcardpro.com/css/lightbox.css">
<link rel="stylesheet" href="http://commonfiles.visitingcardpro.com/dist/css/hopscotch.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="http://commonfiles.visitingcardpro.com/js/jquery.js"></script>
<script src="http://commonfiles.visitingcardpro.com/js/popper.js"></script>
<script src="http://commonfiles.visitingcardpro.com/js/bootstrap.js"></script>
<script src="http://commonfiles.visitingcardpro.com/js/bootbox.all.js"></script>
<script src="http://commonfiles.visitingcardpro.com/js/lightbox.js"></script>
<link rel="stylesheet" href="http://commonfiles.visitingcardpro.com/css/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css">
<link rel="icon" href="babasaheb.chitalkar/icon.png">
        <meta name="og:title" content="Mr. Babasaheb Chitalkar - Chitalkar Bandhu"/>
        <meta name="og:type" content="Digital Card"/>
        <meta name="og:url" content=""/>
        <meta property="og:image" content="dist/img/vender_image/<?php echo $row['profile_img'] ?>" />
        <meta name="og:site_name" content="AnnotationDigitalCard"/>
        <meta name="og:description" content="Digital Card of Chitalkar Bandhu"/>
        <title><?php echo $row['authorized_person']; ?></title>
        <style>
           .mb-0{
    margin-bottom:0;
}
.icons{ 
    margin-bottom: 10px;
    box-shadow: 0 14px 15px -15px #000;
    padding-bottom: 5px;
}
ul{
    list-style:none;
    padding:0;
    margin:0;
    text-align:center;
}
ul li{
    display:inline-block;
    margin:0;
    padding:0;
}
.icon-single{
    margin: 5px 1vw;
    width: 12vw;
    height: 12vw;
    border-radius: 50%;
    background-color:  #ff344f;;
    border: 1vw solid #fc0;
    padding-top: 2px;
}
.icon-single a{
    color:#fff;
    font-size: 6vw;
}
.share-now{
  position:fixed; 
  bottom:15%; 
  right:5%;
  width:12vw;
  height:12vw;
  display:flex;
  align-items:center;
  justify-content:center;
  z-index:10
}
.language-shift{
    position: fixed;
    right:5%;
    bottom:5%;
    font-size: 25px;
    background: #e82121;
    border-radius: 50%;
    color: #fff;
    border: 3px solid #fc0;
    z-index: 10;
    width: 12vw;
    height: 12vw;
    display:flex;
    justify-content:center;
    align-items:center;
}
.sepr{
    height: 1px;
    margin: 5px 0;
    float: left;
}
#sepr-center{
    width:80%;
    background-color:#ccc;
}
#sepr-left{
    width:10%;
    background-image: linear-gradient(to left,#ccc , #fff);
}
#sepr-right{
    width:10%;
    background-image: linear-gradient(to right,#ccc , #fff);
}
.fa-contact-plus::before{
    content:url('babasaheb.chitalkar/contact-plus.svg');
    display: inline-block;
    width: 32px;
    margin: auto;
}
.fa-instagram-square{
    content:url('babasaheb.chitalkar/instagram.svg');
    display: inline-block;
    width: 1.5rem;
    margin-bottom: -2px;
}
#main-icon{
    margin-top:20px;
    margin-bottom:10px;
    padding:0 10px;
}
#main-icon > div > div{
    width:35%;
    float:left;
    padding:0;
}
#main-icon a > span{
    text-align:center;
}
#main-icon > div > div:first-child{
    width:30%;
}
#main-icon > div:after,#main-icon > div > div:after{
    display: block;
    clear: both;
    content: "";
}
#main-icon > div > div:not(:last-child){
    border-right:1px solid #ccc;
}
#main-icon > div > div:not(:first-child){
    border-left:1px solid #ccc;
}
#main-icon span h5,#services{
    margin-bottom:5px;
}
#main-icon span{
    color:#000;
    font-size:2.4vw;
    margin: 0 auto;
    display: block;
}
#main-icon h5 i{
    color:#ff344f;;
}
#main-icon h6 i{
    color:#fc0;
}
.btn-md{
    font-size:.9rem !important;
}
.btn-danger-custom{
    color : #fff;
    border: 1vw solid #fc0;
    background-color : #ff344f; !important;
}
.btn-danger-custom:hover{
    color : #fff;
}
.label-service {
    background:#973608;
    color:#fff;
}
.label-service:hover {
    color:#fff;
}
.modal-body h4{
    color: #000;
    
}
.modal-body h4:hover{
    text-decoration:none;
}
.fa-rupee-sign.fa-stack-1x{
    bottom:20%;
}
#address,#services{
    padding:10px 20px;
}
#address h3 i,#services h3 i{
    color:#ff344f;;
}
#services h3{
    margin-bottom: 20px;
}
#services ul strong {
    margin-left: -10px;
    float: left;
    text-align: left;
}
#services ul{
    width:50%;
    float:left;
    padding-left:30px;
}
#services ul li{
    list-style:disc;
    display:list-item;
    text-align:left;
    font-size: 3.0vw;
}
.whywe ul{
    width:100%;
    float:left;
    padding-left:30px;
}
.whywe ul li{
    list-style:disc;
    display:list-item;
    text-align:left;
    font-size: 1rem;
}
#my-drpdwn .card-header i{
    top: 17px;
    position: absolute;
    right: 20px;
}
.card-header{
    color:#424242;
}
#aboutModal p span{
    color:#973608;
}
.card-body p span{
    color:#fc0;
}
.card-body img{
    margin:10px 0;
}
#address a{
    color:#000;
    text-decoration:none;
}
#address p{
    font-size:3.7vw;
}
#main-icon a{
    text-decoration:none;
}
#about p{
    font-size:2.8vw;
}
#photos .modal-content{
    background-color:transparent;
    border:none;
}
.share li img{
    width:15vw;
    border-radius:15px;
}
.footer ul li a i{
    font-size:1.6rem;
    color:#fc0;
}
.footer{
    padding:5px 10px;
}
.footer h5 i{
        color: #fc0            }
.footer img{
    width:5vw;
}
.footer > p{
    margin-bottom: 0px !important;
}
.footer > hr{
    margin-top : 0.5rem !important;
    margin-bottom: 0px !important;
}
.header{
    background-color : #fff;
    padding:50px;
    border-top:20px solid #ff344f;;
    border-bottom:20px solid #ff344f;;
}
.header img{
    margin:0 auto;
    display:block;
    width:100px;
    height:100px;
}
.bottom-header{
    -moz-box-shadow: 0 15px 25px -15px #ccc;
    -webkit-box-shadow: 0 15px 25px -15px #ccc;
    box-shadow: 0 15px 25px -15px #ccc;
    min-height: 20vw;
}
.bottom-header img{
    border: 1vw solid #ccc;
    border-radius: 50%;
    float: left;
    width: 30%;
    margin-left: 2%;
    margin-top: -15px;
}
.bottom-header span{
    float: left;
    width: 65%;
    margin-left: 3%;
    margin-top:4vw;
}
.mt{
    margin-top:6vw;
}
.bottom-header address{
    font-size:3vw;
}
.bottom-header h4{
    font-size:5vw;
}
#share .card-body{
    overflow-y:auto;
    max-height:470px;
}
#photos .card-body{
    overflow-y:auto;
    max-height:470px;
}
#lazyLoadDiv img{
  /* opacity:0;
  transform:translateX(50%); */
  transition:all .5s
}
#lazyLoadDiv img.fade-in-left{
  transform:translateX(0);
  opacity:1;
  transition:all .5s
}
.copy-button{
position:absolute;
top:.5rem;
right:.5rem;
padding:.25rem, .5rem;
border:0;
border-radius:.25rem;
  }
.copy-button:hover{
color: #fff;
background-color: #027de7;
  }
@media (min-width:567px){
    .desktop-view{
      padding:80px 0 80px 150px;
    }
    .mobile{
        border:10px solid #ff344f;;
        /* margin:80px 0 80px 150px; */
        max-width:520px;
        box-shadow:5px 5px 20px;
    }
    .bottom-header img{
        border: 5px solid #ccc;
    }
    .bottom-header{
        min-height: 120px;
    }
    .bottom-header span{
        margin-top:25px;
    }
    .mt{
        margin-top:30px;
    }
    .bottom-header address{
        font-size:15px;
    }
    .bottom-header h4{
        font-size:25px;
    }
    .icon-single{
        margin: 5px 5px;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        border: 5px solid #ff344f;
    }
    .icon-single a{
        font-size: 30px;
    }
    .share-now{
      position:fixed; 
      bottom:20%; 
      right:60%;
      width:60px;
      height:60px;
      display:flex;
      align-items:center;
      justify-content:center;
    }
    .language-shift{
    position: fixed;
    right:5%;
    bottom:5%;
    font-size: 25px;
    background: #e82121;
    border-radius: 50%;
    color: #fff;
    border: 3px solid #fc0;
    z-index: 10;
    width: 60px;
    height: 60px;
    display:flex;
    justify-content:center;
    align-items:center;
    }
    #main-icon span{
        font-size:11px;
    }
    .btn-md{
        font-size:1rem !important;
        border: 5px solid #fc0;
    }
    #services ul li{
        font-size: 18px;
    }
    #address p{
        font-size:19px;
    }
    #about p{
        font-size:14px;
    }
    .share li img{
        width:75px;
    }
    .footer img{
        width:25px;
    }
    .footer > p{
        margin-bottom: 0px !important;
    }
    .footer > hr{
        margin-top : 0.5rem !important;
        margin-bottom: 0px !important;
    }
    .thankyou{
        position: absolute;
        top: 30vh;
        right: 15vw;
        text-align:center;
    }
    .thankyou h1{
        font-size: 3vw;
    }
}
@media (max-width:1200px){
    .thankyou{
        display:none;
    }
}
@media (max-width:768px) and (min-width:567px){
    .desktop-view{
        padding:50px 0 50px 50px;
    }
    .mobile{
        display:block;
        /* margin:50px 0 50px 50px; */
    }
    .bottom-header h4{
        font-size:25px;
    }
    .bottom-header address{
        font-size:15px;
    }
}
@media (max-width:567px){
    .bottom-header span{
        margin-top:5.2vw;
    }
}
@media (min-width:375px) and  (max-width:567px){
    .fa-contact-plus::before{
        content:url('babasaheb.chitalkar/contact-plus.svg');
        display: inline-block;
        width: 25px;
        margin: auto;
    }
    .bottom-header{
        min-height: 90px;
    }
}
@media (max-width:375px){
    .fa-contact-plus::before{
        content:url('babasaheb.chitalkar/contact-plus.svg');
        display: inline-block;
        width: 23px;
        margin: auto;
    }
    .h5, h5 {
        font-size: 1.04rem;
    }
}

div.hopscotch-bubble{
    border-radius: 15px;
}
div.hopscotch-bubble .hopscotch-nav-button.prev, div.hopscotch-bubble .hopscotch-nav-button.next {
    border-color: #973608;
    color: #fff;
    margin: 0 0 0 10px;
    /* HS specific*/
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.35);
    background-color: #973608;
    filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#973608', endColorstr='#973608');
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #973608), color-stop(100%, #973608));
    background-image: -webkit-linear-gradient(to bottom, #973608 0%, #973608 100%);
    background-image: -moz-linear-gradient(to bottom, #973608 0%, #973608 100%);
    background-image: -o-linear-gradient(to bottom, #973608 0%, #973608 100%);
    background-image: linear-gradient(to bottom, #973608 0%, #973608 100%);
}
div.hopscotch-bubble .hopscotch-nav-button.prev:hover, div.hopscotch-bubble .hopscotch-nav-button.next:hover {
    background-color: #e82121;
    filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#973608', endColorstr='#973608');
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #973608), color-stop(100%, #973608));
    background-image: -webkit-linear-gradient(to bottom, #973608 0%, #973608 100%);
    background-image: -moz-linear-gradient(to bottom, #973608 0%, #973608 100%);
    background-image: -o-linear-gradient(to bottom,#973608 0%, #973608 100%);
    background-image: linear-gradient(to bottom, #973608 0%, #973608 100%);
}
div.hopscotch-bubble .hopscotch-nav-button.hopscotch-cta {
    border-color: #a7a7a7;
    color: #444;
    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
    background-color: #f2f2f2;
    filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#f2f2f2', endColorstr='#e9e9e9');
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #f2f2f2), color-stop(100%, #e9e9e9));
    background-image: -webkit-linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
    background-image: -moz-linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
    background-image: -o-linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
    background-image: linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
}
div.hopscotch-bubble .hopscotch-nav-button.hopscotch-cta:hover {
    background-color: #e8e8e8;
    filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FFE8E8E8', endColorstr='#FFA9A9A9');
    background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e8e8e8), color-stop(13%, #e3e3e3), color-stop(32%, #d7d7d7), color-stop(71%, #b9b9b9), color-stop(100%, #a9a9a9));
    background-image: -webkit-linear-gradient(to bottom, #e8e8e8 0%, #e3e3e3 13%, #d7d7d7 32%, #b9b9b9 71%, #a9a9a9 100%);
    background-image: -moz-linear-gradient(to bottom, #e8e8e8 0%, #e3e3e3 13%, #d7d7d7 32%, #b9b9b9 71%, #a9a9a9 100%);
    background-image: -o-linear-gradient(to bottom, #e8e8e8 0%, #e3e3e3 13%, #d7d7d7 32%, #b9b9b9 71%, #a9a9a9 100%);
    background-image: linear-gradient(to bottom, #e8e8e8 0%, #e3e3e3 13%, #d7d7d7 32%, #b9b9b9 71%, #a9a9a9 100%);
}
div.hopscotch-bubble .hopscotch-actions {
    margin: 10px 0 0 -10px;
    text-align: left;
}
div.hopscotch-bubble h3{
    margin-right: 0px;
}
        </style>
    </head>
    <body>
        <div class="desktop-view">
        <div class="mobile"> 
            <div class="header">
            <img src="../../admin/dist/img/vender_image/<?php echo $row['image1'] ?>" alt="Logo">
            </div>
            <div class="bottom-header">
                <img src="../../admin/dist/img/vender_image/<?php echo $row['profile_img'] ?>" alt="profile" onClick="hopscotch.startTour(tour,0)" style="cursor:pointer">
                <span>
                    <h4><?php echo $row['authorized_person']; ?></h4>
                    <address>
                    <?php echo $row['post']; ?>, <wbr/>
                        <i><?php echo $row['authorized_person']; ?></i>
                    </address>
                </span>
            </div>
            <div class="mt"></div>
            <span id="sepr-left" class="sepr"></span>
            <span id="sepr-center" class="sepr"></span>
            <span id="sepr-right" class="sepr"></span>
            <div class="clearfix"></div>


            <div class="icons">
                <ul>
                    <li>
                        <div class="icon-single" id="hs-1">
                            <a href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsapp_no']; ?>&amp;text=Hello%2C%20<?php echo $row['authorized_person']; ?>%0A%20&amp;source=&amp;data=" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-2">
                            <a href="tel:<?php echo $row['mobile_no']; ?>"><i class="fas fa-phone-alt"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-4">
                            <a href="http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>" target="_blank" download><i class="fa fa-download"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-3">
                            <a href="https://goo.gl/maps/GzFpDi7fEnTe1htq9" target="_blank"><i class="fas fa-map-marker-alt"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-5">
                            <a href="marathi.php" ><i class="fa fa-language"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-6">
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#share">
                                <i class="fas fa-share">
                                </i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            </a>
            <!-- <div id="main-icon">
                <div>
                    <div>
                        <a href="https://www.facebook.com/annotation-248778162711190/">
                            <span>
                                <h6><i class="fab fa-facebook fa-lg"></i> Facebook</h6>
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/_annotation_/">
                            <span>
                                <h6><i class="fab fa-instagram fa-lg"></i> Instagram</h6>
                            </span>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCTbtH3dIW8BMkUCFE4Rr_FQ">
                            <span>
                                <h6><i class="fab fa-youtube fa-lg"></i> Youtube</h6>
                            </span>
                        </a>
                    </div>
                </div>
            </div> -->
            <div class="clearfix"></div>
            <div id="main-icon">
                <div>
                    <div style="width: 30%;">
                        <a href="tel:+<?php echo $row['mobile_no']; ?>">
                            <span>
                                <h5><i class="fas fa-mobile-alt"></i> Mobile</h5>
                                <span>
                                <?php echo $row['mobile_no']; ?>                                </span>
                            </span>
                        </a>
                    </div>
                    <div style="width: 35%;">
                        <a href="mailto:<?php echo $row['email']; ?>">
                            <span>
                                <h5><i class="far fa-envelope"></i> Email</h5>
                                <span style="overflow:hidden">
                                <?php echo $row['email']; ?>                                </span>
                            </span>
                        </a>
                    </div>
                    <?php if($row['email']!=""){ ?>
                    <div style="width: 35%;">
                        <a href="<?php echo $row['website']; ?>" target="_blank">
                            <span>
                                <h5><i class="fas fa-globe"></i> Website</h5>
                                <span style="overflow:hidden">
                                <?php echo $row['website']; ?>
                                </span>
                            </span>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <!--  -->


            <span id="sepr-left" class="sepr"></span>
            <span id="sepr-center" class="sepr"></span>
            <span id="sepr-right" class="sepr"></span>
            <div class="clearfix"></div>

            <div id="services" class="text-center">
                <h3><i class="fas fa-shield-alt"></i> Products</h3>
                <ul>
                    <li>Chitalkar Bandhu Spl.Bhel</li>
                    <li>Bhadang Bhel</li>
                    <li>Spl.Misal Mix Farsan</li>
                    <li>Spl.Lasun Chiwada</li>
                    <li>Tikat Chiwada & Navratan Mita</li>
                </ul>
                <ul>
                    <li>Cranchy Batata & Banana Wefers</li>
                    <li>All Types of Farsan</li>
                    <li>Bhajani Chakali & Other Types of Chakali</li>
                    <li>Dry Fruits</li>
                </ul>
                <div class="clearfix"></div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                  <div class="col m-2 p-0">
                    <a href="#" data-toggle="modal" data-target = "aboutModal"target="_blank" class="btn btn-md rounded-lg btn-danger-custom w-100 h-100"><strong class=" flex-fill mx-2 text-nowrap">About Us</strong><i class="fas fa-users fa-lg"></i>
                    </a>
                  </div>
                  <div class="col m-2 p-0">
                    <a href="#" data-toggle="modal" data-target = "galleryM"target="_blank" class="btn btn-md rounded-lg btn-danger-custom w-100 h-100"><strong class=" flex-fill mx-2 text-nowrap">Gallery</strong><i class="fas fa-images fa-lg"></i>
                    </a>  
                  </div>
                </div>
                        <!-- <div class="row">
                    <div class="col m-2 p-0">
                        <a href="#" data-toggle="modal" data-target = "paymentModal"target="_blank" class="btn btn-md rounded-lg btn-danger-custom w-100 h-100"><strong class=" flex-fill mx-2 text-nowrap">Make Payment</strong><span id="paymentModal01" class=" fa-stack fa-sm"><i class="fas fa-hand-holding fa-stack-2x fa-lg"></i><i class="fas fa-rupee-sign fa-stack-1x"></i></span>
                        </a>
                    </div>
                    </div> -->
                   </div>  
         
            <span id="sepr-left" class="sepr"></span>
            <span id="sepr-center" class="sepr"></span>
            <span id="sepr-right" class="sepr"></span>
            <div class="clearfix"></div>
            <div class="footer">
                <ul>
                <?php if($row['email']!=""){ ?>
                    <li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fab fa-facebook-square fa-lg"></i></a></li>
                    <?php } ?><?php if($row['email']!=""){ ?>
                    <li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fab fa-instagram-square fa-lg"></i></a></li>
                    <?php } ?> <?php if($row['email']!=""){ ?>
                    <li><a href="<?php echo $row['LinkedIn']; ?>" target="_blank"><i class="fab fa-linkedin fa-lg"></i></a></li>
                    <?php }?>
                </ul>
                <hr>
                <p class="text-center"><small><a href="http://demo.digiinfromatrics.com/" class="text-dark">Product by Digi Infromatics</a> |<a href="http://tec.tectignis.in/" class="text-dark"> Developed by Tectignis IT Solutions</a></small></p>
            </div>
        </div>
        </div>
        <div class="thankyou">
            <h1>
                Thank You!!!
            </h1>
            <h1>
                Have a Nice Day...
            </h1>
        </div>
        <div class="modal" id="share">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal body -->
                    <div class="modal-body">
                        <ul class="share">
                            <li class="show-alert"><a href="https://wa.me/whatsappphonenumber/?text=http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/whatsapp.png" alt="wtsp"></a></li>
                            
                            <li><a href="sms:?body=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu+%0A+http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/message.png" alt="sms"></a></li>
                            <li><a href="mailto:?subject= <?php echo $row['email']; ?>&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>"><img src="http://commonfiles.visitingcardpro.com/social_logos/email.png" alt="mail"></a></li>
                            
                            <li><a href="http://www.facebook.com/sharer.php?u=http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/facebook.png" alt="fb"></a></li>
                            <li><a href="https://twitter.com/share?url=http://demo.digiinfromatrics.com/card/card.php?cardid=<?php echo $row['shop_code']; ?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/twitter.png" alt="twtr"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        <!--
        |-------------
        |ABOUT MODAL
        |-------------
        -->
        <div class="modal fade" id="aboutModal" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="aboutLabel">About Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p><strong><span><?php echo $row['authorized_person']; ?></span></strong>,<?php echo $row['description']; ?></p></strong>
          </div>
        </div>
      </div>
    </div>
    <!--
    |-------------
    |ABOUT MODAL ENDS
    |-------------
    -->
    <!--
    |-------------
    |GALLERY MODAL
    |-------------
    -->
    <div class="modal fade" id="galleryM" tabindex="-1" role="dialog" aria-labelledby="galleryLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="galleryLabel">Gallery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="lazyLoadDiv" class="modal-body" style="max-height:500px; overflow-y:auto; overflow-x:hidden">
            <a href="../../admin/dist/img/vender_image/<?php echo $row['image2'] ?>" data-toggle="lightbox" data-gallery="example-gallery">
            <img src="../../admin/dist/img/vender_image/<?php echo $row['image2'] ?>" alt="gallery image" width="466" height="311" class="img-fluid w-100 my-2">
                <h4>Image 1 </h4>
            </a>
            <a href="../../admin/dist/img/vender_image/<?php echo $row['image3'] ?>" data-toggle="lightbox" data-gallery="example-gallery">
            <img src="../../admin/dist/img/vender_image/<?php echo $row['image3'] ?>" alt="gallery image" width="170" height="170" class="img-fluid w-100 my-2">
                <h4>Image 2 </h4>
            </a>
            <a href="../../admin/dist/img/vender_image/<?php echo $row['image4'] ?>" data-toggle="lightbox" data-gallery="example-gallery">
            <img src="../../admin/dist/img/vender_image/<?php echo $row['image4'] ?>" alt="gallery image" width="170" height="170" class="img-fluid w-100 my-2">
               <h4>Image 3</h4>
            </a>
            <!-- <a href="babasaheb.chitalkar/photos/4.jpg" data-toggle="lightbox" data-gallery="example-gallery">
               <img src="https://via.placeholder.com/1x1/"class="img-fluid w-100 my-2" alt="gallery-image" data-src="babasaheb.chitalkar/photos/4.jpg"/>
               <h4>image 4</h4>
            </a> -->
            
        </div>
      </div>
    </div>
    <!--
    |-------------
    |GALLERY MODAL ENDS
    |-------------
    -->
          
  <script type="text/javascript">
    /*
  |-------------
  |LOADING AND PRELOADER
  |-------------
  */
    // $('.mobile').css('display','none');
    // var perfdata = window.performance.timing;
    // var EstimatedTime = -(perfdata.loadEventEnd-perfdata.navigationStart);
    //   var time = parseInt((EstimatedTime/1000)%60)*100;
    //   $('.progress-bar').animate({
    //       width:"100%"
    //   },time);
    //   document.addEventListener('readystatechange', (event)=>{
    //       if(event.target.readyState !== 'complete'){
    //           
    //       }else{
    //           $('.preloader-main').fadeOut(1000);
    //               setTimeout(() => {
    //           $('.mobile').fadeIn(500);
    //           }, 300);
    //       }
    //   });
    //   setTimeout(() => {
    //   $('.preloader-main').fadeOut(1000);
    //   }, time);
    //   setTimeout(() => {
    //   $('.mobile').fadeIn(500);
    //   }, time+500);
    $('[data-toggle="modal"]').on('click', function(e) {
      e.preventDefault();
      var string = $(this).attr('data-target');
      if (!string.startsWith("#")) {
        $("#" + string).modal('toggle');
      }
    });
    /*
    |-------------
    |LOADING AND PRELOADER ENDS
    |-------------
    */
    /*
    |-------------
    |TOOLTIPS AND COPY BUTTON
    |-------------
    */
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    });
    $('[data-toggle]').on('mouseleave', function(e) {
      $(this).attr('data-original-title', 'Copy to Clipboard');
    })

    function copyClipboard(elm) {
      // var elm = document.getElementById("divClipboard");
      // for Internet Explorer
      if (document.body.createTextRange) {
        var range = document.body.createTextRange();
        range.moveToElementText(elm);
        range.select();
        document.execCommand("Copy");
        // alert("Copied div content to clipboard");
      } else if (window.getSelection) {
        // other browsers
        var selection = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(elm);
        selection.removeAllRanges();
        selection.addRange(range);
        document.execCommand("Copy");
        // alert("Copied div content to clipboard");
      }
    }
    $('.copy-button').on('click', function(e) {
      var copytext = this.nextElementSibling;
      copyClipboard(copytext);
      $(this).tooltip('hide');
      $(this).attr('data-original-title', 'Copied!');
      $(this).tooltip('update');
      $(this).tooltip('show');
    });
    $('.copy-button').on('mouseleave', function(e) {
      $(this).attr('data-original-title', 'Copy to Clipboard');
    });
    $("#copy-vpa").on('click', function(e) {
      e.preventDefault();
      var copytext = document.querySelector('#vpa');
      copyClipboard(copytext);
      $(this).tooltip('hide');
      $(this).attr('data-original-title', 'Copied!');
      $(this).tooltip('update');
      $(this).tooltip('show');
    });
    $('#copy-bank').on('click', function(e) {
      e.preventDefault();
      $(this).tooltip('hide');
      $(this).attr('data-original-title', 'Copied!');
      $(this).tooltip('update');
      $(this).tooltip('show');
      // other browsers
      var table = this.previousElementSibling.previousElementSibling.querySelectorAll('tr')
      var bString = "";
      table.forEach((row) => {
        var count = row.children.length;
        for (var i = 0; i < count; i++) {
          if (i === count - 1) {
            bString += row.children[i].textContent + ";";
            continue;
          }
          bString += row.children[i].textContent + ":";
        }
      })
      var copyText = document.querySelector('#bankd');
      var node = document.createTextNode(bString);
      copyText.appendChild(node);
      copyClipboard(copyText);
    });
    /*
    |-------------
    |TOOLTIPS AND COPY BUTTON ENDS
    |-------------
    */
    $('#paymentModal').on('shown.bs.modal', function(e) {
      var image = $(this).find('img.qr-here');
      var src = image.attr('data-src');
      image.attr('src', src);
    })
    // |-----------------------------
    // | LAZY LOADING GALLERY
    // |-----------------------------
    function preLoadImage(elem) {
      const src = elem.getAttribute('data-src');
      elem.src = src;
      elem.parentNode.setAttribute('href', src);
      elem.classList.add('fade-in-left');
    }
    let observerOptions = {
      root: document.querySelector('#galleryModal #lazyLoadDiv'),
      rootMargin: "100px",
      threshold: 0.5,
    }
    let target = document.querySelectorAll('#galleryModal #lazyLoadDiv img')
    // console.log(target);
    observer = new IntersectionObserver(function(entries, observer) {
      entries.forEach(entry => {
        if (!entry.isIntersecting) {
          return;
        } else {
          preLoadImage(entry.target);
          observer.unobserve(entry.target);
        }
      })
    }, observerOptions);

    target.forEach(touch => {
      observer.observe(touch);
    });
    // |--------------------
    // |LAZY LOADING GALLERY ENDS
    // |--------------------
    function go() {
      window.location.assign("whatsapp://send?text=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu%0Ahttp%3A%2F%2Fbabasaheb.chitalkar.visitingcardpro.com%2F");
    }
    $(document).on("click", ".show-alert", function(e) {
      bootbox.dialog({
        title: "Sharing Options",
        message: "<div class = \"d-block text-center\"><button class=\"btn btn-block btn-primary\" onclick=\"go();\">Share to saved contacts</button><div class=\"d-block mt-2\"><p class=\"h5 text-dark text-center\">OR</p></div><label for =\"guest\">Enter a Number</label><input class=\"form-control\" type=\"tel\" id =\"guest\" required=\"\" maxlength=\"10\" size=\"10\"/><p class = \"small text-danger\"><em>and click the below green button</em></p></div>",
        buttons: {
          Shareto: {
            id: 'harish',
            label: 'Share to a new number',
            className: 'btn-block btn-success',
            callback: function() {
              var number = $('#guest').val();
              if (/^[789]\d{9}$/.test(number)) {
                window.location.assign("whatsapp://send?phone=91" + number + "&text=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu%0Ahttp%3A%2F%2Fbabasaheb.chitalkar.visitingcardpro.com%2F");
                $('#guest').next().text(" ");
              } else {
                $('#guest').next().text("Enter a proper number");
              }
              return false;
            }
          },
        }
      });
    });
  </script>

  <script src="http://commonfiles.visitingcardpro.com/dist/js/hopscotch.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>


  <!-- FOR UNIQUE VIEW COUNT START-->
  <script>
    localStorage.removeItem("Visited");
    if(!localStorage.Counted)
    {
      $.post("https://annotation.co.in/Site/count_visitors",(res)=>{
        localStorage.setItem("Counted",res.status);
      },"json");
    }

  </script>
  <!-- FOR UNIQUE VIEW COUNT END-->
        <!-- Tutorial Edit Start #4 -->
        
        <script>
            // Define the tour!
            var tour = {
                id: "my-tour",
                showCloseButton:false,
                steps: [
                    {
                        showCTAButton:true,
                        ctaLabel: "Skip",
                        onCTA:function(){
                            hopscotch.endTour(true);
                        },
                        title: "Click here to Whatsapp",
                        target: document.querySelector("#hs-1"),
                        placement: "bottom",
                        width: 177
                    },
                    {
                        showCTAButton:true,
                        ctaLabel: "Skip",
                        onCTA:function(){
                            hopscotch.endTour(true);
                        },
                        title: "Click here to Call",
                        target: document.querySelector("#hs-2"),
                        showPrevButton: true,
                        placement: "bottom",
                        arrowOffset: 50,
                        xOffset: -50,
                        width: 171
                    },
                    {
                        showCTAButton:true,
                        ctaLabel: "Skip",
                        onCTA:function(){
                            hopscotch.endTour(true);
                        },
                        title: "Click here to Address Map",
                        target: document.querySelector("#hs-3"),
                        showPrevButton: true,
                        placement: "bottom",
                        arrowOffset: 100,
                        xOffset: -100,
                        width: 201
                    },
                    {
                        showCTAButton:true,
                        ctaLabel: "Skip",
                        onCTA:function(){
                            hopscotch.endTour(true);
                        },
                        title: "Click here to Save Contact",
                        target: document.querySelector("#hs-4"),
                        showPrevButton: true,
                        placement: "bottom",
                        arrowOffset: 150,
                        xOffset: -150,
                        width: 202
                    },
                    {
                        showCTAButton:true,
                        ctaLabel: "Skip",
                        onCTA:function(){
                            hopscotch.endTour(true);
                        },
                        title: "Click here to Send Message",
                        target: document.querySelector("#hs-5"),
                        showPrevButton: true,
                        placement: "bottom",
                        arrowOffset: 150,
                        xOffset: -150,
                        width: 212
                    },
                    {
                        title: "Click here to Share the Card",
                        target: document.querySelector("#hs-6"),
                        showPrevButton: true,
                        placement: "bottom",
                        arrowOffset: 180,
                        xOffset: -180,
                        width: 220
                    }
                ],
                i18n: {
                    // the title of the done button - next
                    prevBtn: "Prev",
                    doneBtn: "Got it!",
                    closeTooltip:"Close"
                },
                onEnd:function(){
                    showAgain();
                }
            };
            
            // Start the tour!
            
            if(localStorage.getItem("tutorial")!="shown")
                hopscotch.startTour(tour);
            function showAgain(){
                bootbox.confirm({
                    message: "Do you need this tutorial in future?<br/><small class='text-muted'>Note : You can trigger it anytime by clicking the Profile Picture</small>",
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    closeButton:false,
                    callback: function (result) {
                        if(result)
                        {
                            localStorage.setItem("tutorial", "not");
                            return;
                        }
                        localStorage.setItem("tutorial", "shown");
                    }
                });
            }
        </script>
        
        <!-- Tutorial Edit End #4 -->
    </body>

</html>
