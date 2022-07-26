<?php
include("include/config.php");

if(isset($_POST['otp'])){

  
  $email=$_POST['email'];
  $name=$_POST['name'];
  $otp= rand(100000, 999999);
  

  $query=mysqli_query($conn,"select * from vendor where email='$email'");
if(mysqli_num_rows($query)>0){
    echo "Email already Registered";
}
else{
$from = 'Enquiry <naiduvedant@gmail.com>' . "\r\n";
$sendTo = 'Enquiry <'.$email.'>';
$subject = 'Your OTP for Verification Email';
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
    <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Agreerent</a>
  </div>
  <p style="font-size:1.1em">Hi '.$name.'</p>
  <p>Please enter below OTP to verify your Email id.</p>
  <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$otp.'</h2>
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
  $otpsql=mysqli_query($conn,"SELECT * FROM otp where email='$email'");
  $otprow=mysqli_fetch_assoc($otpsql);
  $emailotp=$otprow['email'];
   if($emailotp==$email){
    $sql=mysqli_query($conn,"UPDATE `otp` SET `otp`='$otp' WHERE email='$email'");
   }
   else{
  $sql=mysqli_query($conn,"INSERT INTO `otp`(`shop_name`,`email`, `otp`) VALUES ('$name','$email','$otp')");}
   if($sql=1){
     echo "Otp send in your email";    }
   else{
     echo "Something Wrong";
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

}
//

?>
<?php
if(!empty($_POST["state"])){ 
  $department_id = $_POST["state"];
$query = mysqli_query($conn,"SELECT state.state_code as stcode,all_cities.city_name as cname, all_cities.state_code as ccode from state inner join all_cities on all_cities.state_code=state.state_code WHERE state.state ='$department_id'"); 
 ?>
 <option disabled>Select city</option>
   <?php while($row = mysqli_fetch_array($query)){ ?>
       <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname']?></option> 
  <?php } 
}


?>

<?php
if(!empty($_POST["city"])){ 
  $department_id = $_POST["city"];
$query = mysqli_query($conn,"SELECT all_cities.city_code,search_location.city_name,search_location.location_name as loc_name,search_location.city_code from all_cities inner join search_location on search_location.city_name=all_cities.city_name WHERE all_cities.city_name ='$department_id'"); 
 ?>
 <option disabled>Select location</option>
   <?php while($row = $query->fetch_assoc()){  ?>
       <option value="<?php echo $row['loc_name'] ?>"><?php echo $row['loc_name']?></option> 
  <?php  } 
}
?>

<?php
if(isset($_POST['digital'])){
  $logo=$_FILES['logo']['name'];
  $profile=$_FILES['profile']['name'];
  $linkedin=$_POST['linkedin'];
  $insta=$_POST['insta'];
  $facebook=$_POST['facebook'];
  $website=$_POST['website'];
  $address=$_POST['address'];
  $mobile_no=$_POST['mobile_no'];
  $whatsapp_no=$_POST['whatsapp_no'];
  $Post=$_POST['Post'];
  $email=$_POST['email'];
  $name=$_POST['name'];

  //email
  $from = 'Enquiry <ceo@tectignis.in>';
  $sendTo = 'Enquiry <'.$email.'>';
  $subject = 'Digital Card';
  $from = 'Digital Card ';
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from .= "Content-Type: multipart/mixed;"; 
$from .= "boundary = $boundary\r\n";

$emailText = '
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="-1">
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="icon" href="babasaheb.chitalkar/icon.png">
        <meta name="og:title" content="Mr. Babasaheb Chitalkar - Chitalkar Bandhu"/>
        <meta name="og:type" content="Digital Card"/>
        <meta name="og:url" content=""/>
        <meta property="og:image" content="http://babasaheb.chitalkar.visitingcardpro.com/babasaheb.chitalkar/profile.jpg" />
        <meta name="og:site_name" content="AnnotationDigitalCard"/>
        <meta name="og:description" content="Digital Card of Chitalkar Bandhu"/>
        <title>Govind Bavkar</title>
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
                background-color:  #fff;
                border: 1vw solid #800080;
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
                content:url("babasaheb.chitalkar/contact-plus.svg");
                display: inline-block;
                width: 32px;
                margin: auto;
            }
            .fa-instagram-square{
                /* content:url("babasaheb.chitalkar/instagram.svg"); */
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
                color:#973608;
            }
            #main-icon h6 i{
                color:#fc0;
            }
            .btn-md{
                font-size:.9rem !important;
            }
            .btn-danger-custom{
                color : #fff;
                border: 1vw solid #800080;
                background-color : #fff !important;
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
                color:#973608;
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
                border-top:20px solid #800080;
                border-bottom:20px solid #800080;
            }
            .header img{
                margin:0 auto;
                display:block;
                width:100%;
            }
            .bottom-header{
                -moz-box-shadow: 0 15px 25px -15px #ccc;
                -webkit-box-shadow: 0 15px 25px -15px #ccc;
                box-shadow: 0 15px 25px -15px #ccc;
                min-height: 20vw;
            }
            .bottom-header img{
                border: 1vw solid #800080;
                border-radius: 50%;
                float: left;
                width: 26%;
                margin-left: 2%;
                margin-top: 1px;
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
              opacity:0;
              transform:translateX(50%);
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
                    border:10px solid #800080;;
                    max-width:520px;
                    box-shadow:5px 5px 20px;
                }
                .bottom-header img{
                    border: 5px solid #800080;
                }
                .bottom-header{
                    min-height: 133px;
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
                    border: 5px solid #800080;
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
                    border: 5px solid #800080;
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
                    content:url("babasaheb.chitalkar/contact-plus.svg");
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
                    content:url("babasaheb.chitalkar/contact-plus.svg");
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
                filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr="#973608", endColorstr="#973608");
                background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #973608), color-stop(100%, #973608));
                background-image: -webkit-linear-gradient(to bottom, #973608 0%, #973608 100%);
                background-image: -moz-linear-gradient(to bottom, #973608 0%, #973608 100%);
                background-image: -o-linear-gradient(to bottom, #973608 0%, #973608 100%);
                background-image: linear-gradient(to bottom, #973608 0%, #973608 100%);
            }
            div.hopscotch-bubble .hopscotch-nav-button.prev:hover, div.hopscotch-bubble .hopscotch-nav-button.next:hover {
                background-color: #e82121;
                filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr="#973608", endColorstr="#973608");
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
                filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr="#f2f2f2", endColorstr="#e9e9e9");
                background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #f2f2f2), color-stop(100%, #e9e9e9));
                background-image: -webkit-linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
                background-image: -moz-linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
                background-image: -o-linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
                background-image: linear-gradient(to bottom, #f2f2f2 0%, #e9e9e9 100%);
            }
            div.hopscotch-bubble .hopscotch-nav-button.hopscotch-cta:hover {
                background-color: #e8e8e8;
                filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr="#FFE8E8E8", endColorstr="#FFA9A9A9");
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
    <!---->
        <div class="desktop-view">
        <div class="mobile"> 
            <div class="header">
                <img src="Govind.Bavkar\company logo.png" alt="logo">
            </div>
            <div class="bottom-header">
                <img src="Govind.Bavkar\Govind_Bavkar.jpg" alt="profile" onClick="hopscotch.startTour(tour,0)" style="cursor:pointer">
                <span>
                    <h4>Mr. Govind Bavkar</h4>
                    <address>
                    Founder & CEO, <wbr/>
                        <i>Tectignis IT Solution Pvt. Ltd</i>
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
                            <a href="https://api.whatsapp.com/send?phone=9987805688&amp;text=Hello%2C%20Govind%20Bavkar %0A%20&amp;source=&amp;data=" target="_blank" ><i class="fab fa-whatsapp fa-lg" style="color:#800080;"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-2">
                            <a href="tel:+918879253568"><i class="fa-solid fa-phone" style="color:#800080;"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="icon-single" id="hs-3">
                            <a href="https://g.page/Tectignis?share" target="_blank"><i class="fas fa-map-marker-alt" style="color:#800080;"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
            </a>
            <div class="clearfix"></div>
            <div id="main-icon">
                <div>
                    <div style="width: 30%;">
                        <a href="tel:+918879253568">
                            <span>
                                <h5><i class="fas fa-mobile-alt"  style="color:#800080"></i> Mobile</h5>
                                <span>
                                    +918879253568                                </span>
                            </span>
                        </a>
                    </div>
                    <div style="width: 35%;">
                        <a href="mailto:ceo@tectignis.in">
                            <span>
                                <h5><i class="far fa-envelope"  style="color:#800080"></i> Email</h5>
                                <span>
                                    ceo@tectignis.in                               </span>
                            </span>
                        </a>
                    </div>
                    <div style="width: 35%;">
                        <a href="http://tectignis.in/" target="_blank">
                            <span>
                                <h5><i class="fas fa-globe"  style="color:#800080"></i> Website</h5>
                                <span>
                                www.tectignis.in
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>

            <span id="sepr-left" class="sepr"></span>
            <span id="sepr-center" class="sepr"></span>
            <span id="sepr-right" class="sepr"></span>
            <div class="clearfix"></div>

            <div id="services" class="text-center">
                <h3><i class="fas fa-shield-alt"  style="color:#800080"></i> Services</h3>
                <ul>
                    <li>WEBSITE DESIGN & DEVELOPMENT</li>
                    <li>SOFTWARE DEVELOPMENT</li>
                    <li>MOBILE APP DEVELOPMENT</li>
                    <li>DIGITAL MARKETING</li>
                    <li>SOCIAL MEDIA MARKETING</li>
                </ul>
                <ul>
                    <li>HARDWARE & NETWORKING</li>
                    <li>PC / LAPTOP AMC</li>
                    <li>GRAPHICS DESIGNING</li>
                    <li>CLOUD SERVICES</li>
                    <li>IT CONSULTING & STRATEGY</li>
                </ul>
                <div class="clearfix"></div>
            </div>
            
            <div class="container-fluid">
                <div class="row">
                  <div class="col m-2 p-0">
                    <button type="button" data-toggle="modal" data-target="#exampleModal" target="_blank" class="btn btn-md rounded-lg btn-danger-custom w-100 h-100"><strong class=" flex-fill mx-2 text-nowrap" style="color:#800080">About Us</strong><i class="fas fa-users fa-lg"></i>
                    </button>
                  </div>
                </div>
                   </div>  
            
            <span id="sepr-left" class="sepr"></span>
            <span id="sepr-center" class="sepr"></span>
            <span id="sepr-right" class="sepr"></span>
            <div class="clearfix"></div>
            <div class="footer">
                <ul>
                    <li><a href="https://www.facebook.com/tectignisofficial/" target="_blank" ><i class="fab fa-facebook-square fa-lg" style="color:#800080;"></i></a></li>
                    <li><a href="https://www.instagram.com/tectignisofficial/" target="_blank"><i class="fab fa-instagram fa-lg" style="color:#800080;"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/tectignis-it-solutions/" target="_blank"><i class="fab fa-linkedin fa-lg" style="color:#800080;"></i></a></li>

                   
                </ul>
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
                            <li class="show-alert"><img src="http://commonfiles.visitingcardpro.com/social_logos/whatsapp.png" alt="wtsp"></li>
                            <li><a href="sms:?body=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu+%0A+http%3A%2F%2Fbabasaheb.chitalkar.visitingcardpro.com%2F"><img src="http://commonfiles.visitingcardpro.com/social_logos/message.png" alt="sms"></a></li>
                            <li><a href="mailto:?subject=Chitalkar Bandhu&body=Here is the digital Business card - http://babasaheb.chitalkar.visitingcardpro.com/ Please Visit http://babasaheb.chitalkar.visitingcardpro.com/"><img src="http://commonfiles.visitingcardpro.com/social_logos/email.png" alt="mail"></a></li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://babasaheb.chitalkar.visitingcardpro.com/&amp;quote=Here%20is%20the%20digital%20Business%20card%20-%20http://babasaheb.chitalkar.visitingcardpro.com/%20Please%20Visit%20http://babasaheb.chitalkar.visitingcardpro.com/" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/facebook.png" alt="fb"></a></li>
                            <li><a href="http://twitter.com/home?status=Here%20is%20the%20digital%20Business%20card%20-%20http://babasaheb.chitalkar.visitingcardpro.com/%20Please%20Visit%20http://babasaheb.chitalkar.visitingcardpro.com/" target="_blank"><img src="http://commonfiles.visitingcardpro.com/social_logos/twitter.png" alt="twtr"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="aboutLabel">About Us</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Tectignis IT Solutions empowers your organization to gain a competitive edge. Armed with state-of-the-art information technology tools, techniques and a skilled workforce, we provide you with customized solutions for all your business processes. Our proficiency lies in developing revolutionary web services for you to meet the challenges of tomorrows information age.</p>
            <p>Over the years Tectignis IT Solutions has acquired in-depth knowledge and wide expertise in Web Designing & SEO Services of a varied category of businesses to all over India and committed to providing web solutions and aims to be a one-stop solution provider in this field.</p>
            <p>We emphasize on providing best website designing services and combined web add-ons that help customer to gain a competitive advantage from website design and SEO services India. At Tectignis IT Solutions we always strive to enables corrective measures to uplift website designing quality and reduce cost.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="galleryModal" tabindex="-1" role="dialog" aria-labelledby="galleryLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="galleryLabel">Gallery</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
      </div>
    </div>
          
  <script type="text/javascript">
    $("[data-toggle="modal"]").on("click", function(e) {
      e.preventDefault();
      var string = $(this).attr("data-target");
      if (!string.startsWith("#")) {
        $("#" + string).modal("toggle");
      }
    });
    $(function() {
      $("[data-toggle="tooltip"]").tooltip()
    });
    $("[data-toggle]").on("mouseleave", function(e) {
      $(this).attr("data-original-title", "Copy to Clipboard");
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
    $(".copy-button").on("click", function(e) {
      var copytext = this.nextElementSibling;
      copyClipboard(copytext);
      $(this).tooltip("hide");
      $(this).attr("data-original-title", "Copied!");
      $(this).tooltip("update");
      $(this).tooltip("show");
    });
    $(".copy-button").on("mouseleave", function(e) {
      $(this).attr("data-original-title", "Copy to Clipboard");
    });
    $("#copy-vpa").on("click", function(e) {
      e.preventDefault();
      var copytext = document.querySelector("#vpa");
      copyClipboard(copytext);
      $(this).tooltip("hide");
      $(this).attr("data-original-title", "Copied!");
      $(this).tooltip("update");
      $(this).tooltip("show");
    });
    $("#copy-bank").on("click", function(e) {
      e.preventDefault();
      $(this).tooltip("hide");
      $(this).attr("data-original-title", "Copied!");
      $(this).tooltip("update");
      $(this).tooltip("show");
      // other browsers
      var table = this.previousElementSibling.previousElementSibling.querySelectorAll("tr")
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
      var copyText = document.querySelector("#bankd");
      var node = document.createTextNode(bString);
      copyText.appendChild(node);
      copyClipboard(copyText);
    });
    /*
    |-------------
    |TOOLTIPS AND COPY BUTTON ENDS
    |-------------
    */
    $("#paymentModal").on("shown.bs.modal", function(e) {
      var image = $(this).find("img.qr-here");
      var src = image.attr("data-src");
      image.attr("src", src);
    })
    // |-----------------------------
    // | LAZY LOADING GALLERY
    // |-----------------------------
    function preLoadImage(elem) {
      const src = elem.getAttribute("data-src");
      elem.src = src;
      elem.parentNode.setAttribute("href", src);
      elem.classList.add("fade-in-left");
    }
    let observerOptions = {
      root: document.querySelector("#galleryModal #lazyLoadDiv"),
      rootMargin: "100px",
      threshold: 0.5,
    }
    let target = document.querySelectorAll("#galleryModal #lazyLoadDiv img")
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
            id: "harish",
            label: "Share to a new number",
            className: "btn-block btn-success",
            callback: function() {
              var number = $("#guest").val();
              if (/^[789]\d{9}$/.test(number)) {
                window.location.assign("whatsapp://send?phone=91" + number + "&text=Here+is+the+Digital+Business+Card+of+Chitalkar+Bandhu%0Ahttp%3A%2F%2Fbabasaheb.chitalkar.visitingcardpro.com%2F");
                $("#guest").next().text(" ");
              } else {
                $("#guest").next().text("Enter a proper number");
              }
              return false;
            }
          },
        }
      });
    });
  </script>

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
                    message: "Do you need this tutorial in future?<br/><small class="text-muted">Note : You can trigger it anytime by clicking the Profile Picture</small>",
                    buttons: {
                        confirm: {
                            label: "Yes",
                            className: "btn-success"
                        },
                        cancel: {
                            label: "No",
                            className: "btn-danger"
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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
    </body>
</html>';

try{
  foreach($_POST as $key => $value){
    if(isset($fields[$key])){
      $emailText.="$fields[$key]: $value\n";
    }
   }
   if( mail($sendTo,$subject,$emailText, "From:" .$from)){
    move_uploaded_file($_FILES['logo']['tmp_name'],"image/card_image/".$logo);
    move_uploaded_file($_FILES['profile']['tmp_name'],"image/card_image/".$profile);
    $sql=mysqli_query($conn,"INSERT INTO `digitalcard`(`name`, `profile_img`, `email`, `post`, `whatsapp_no`, `mobile_no`, `address`, `website`, `facebook_link`, `instagram_link`, `linkedIn_link`, `logo`) VALUES ('$name','$profile','$email','$Post','$whatsapp_no','$mobile_no','$address','$website','$facebook','$insta','$linkedin','$logo')");
    if($sql){
        echo "<script>alert('Digital Card Added Successfully');</script>";
        echo "<script>window.location.href='digitalcard.php';</script>";
    }
    else{
        echo "<script>alert('Digital Card Not Added');</script>";
        echo "<script>window.location.href='digitalcard.php';</script>";
    }
  }
}
catch(\Exception $e){
  echo "not done";
  }
 
}
?>