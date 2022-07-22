<?php
include("admin/include/config.php");
if(isset($_POST['signup'])){
    $status=1;
    $email=$_POST['email'];  
  $from = 'Enquiry <'.$email.'>' . "\r\n";
  $sendTo = 'Enquiry <'.$email.'>';
  $subject = 'Digiinfromatrics';
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
       echo "<script>alert('Shop Registered Successfully');</script>";    }
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
include("admin/include/config.php");
if(isset($_POST['submit'])){

 
  $email=$_POST['email'];
  

  $sql=mysqli_query($conn,"INSERT INTO `subscriber`(`email`) 
  VALUES ('$email')");
  if($sql==1){

    }
    else
    echo 'connection failed';
    }
  ?>
 
 
 <!--====== Start Footer ======-->
 <footer class="footer-area">
    <div class="footer-wrapper-one dark-black pt-90">
        <div class="footer-widget pb-60">
            <div class="container">
                <div class="row">
                     <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="widget about-widget mb-40">
                            
                            <div class="footer-social">
                                <h4>Follow Us</h4>
                                <ul class="social-link">
                                    <li><a href="https://www.facebook.com"><i class="ti-facebook"></i></a></li>
                                    <li><a href="https://www.twitter.com"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="https://www.linkedin.com"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="https://www.instagram.com"><i class="ti-instagram"></i></a></li>
                                    <li><a href="https://www.whatsapp.com"><i class="fa fa-whatsapp" style="font-size:18px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget recent-post-widget mb-40">
                            <h4 class="widget-title">Recent News</h4>
                            <ul class="post-widget-list">
                                <li class="post-content-item">
                                    <div class="post-title-date">
                                        <span class="posted-on"><a href="#">22 August - 2021</a></span>
                                        <h6 class="title"><a href="blog-details.php">Facilisis a ultricies quis
                                            dictumst fredom...</a></h6>
                                    </div>
                                </li>
                                <li class="post-content-item">
                                    <div class="post-title-date">
                                        <span class="posted-on"><a href="#">22 August - 2021</a></span>
                                        <h6 class="title"><a href="blog-details.php">Facilisis a ultricies quis
                                            dictumst fredom...</a></h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget categories-widget mb-40">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="categories-link">
                                <li><a href="how-work.php">How Work</a></li>
                                <?php
                                $query=mysqli_query($conn,"select * from listcategory where status='Active'");
                                while($arr=mysqli_fetch_array($query)){
                                ?>
                                <li><a href="categorylist.php?categories=<?php echo $arr['name'] ?>"><?php echo $arr['name'] ?></a></li>
                                <?php } ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="widget newsletter-widget mb-40" id="subscribe">
                            <h4 class="widget-title">Newsletter</h4>
                            <p>Subscribe To Our Get a Call To Get Our Update News!.</p>
                            <form method="POST">
                                <div class="form_group">
                                    <input type="email" class="form_control" placeholder="Enter Email" name="email" required>
                                </div>
                                <div class="form_group">
                                    <button class="main-btn" name="submit">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copyright-text">
                    
                            <p>Copyright &copy;  All Rights Reserved  <span>Digiinfromatrics</span>
                            <a href="http://digiinfromatrics.com/"></a></p>
                                
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-link">
                            <ul>
                                <li><a href="terms_and_conditions.php">Terms & Conditions</a></li>
                                <li><a href="pricing.php">Privacy Policy</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--====== End Footer ======-->