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
  $from = 'Enquiry <ceo@tectignis.in>' . "\r\n";
$sendTo = 'Enquiry <'.$email.'>';
$subject = 'Digital card';
// $fields = array( 'name' => 'name' );
$from = 'Tectignis It Solution : 1.0' . "\r\n";
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
  <p>Link</p>
  <h2 style="background: #00466a;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">'.$email.'</h2>
  <p style="font-size:0.9em;">Regards,<br />Your Brand</p>
  <hr style="border:none;border-top:1px solid #eee" />
  <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
    <p>Tectignis It Solution</p>
    <p>Ashiyaana, kamothe</p>
    <p>Navi Mumbai</p>
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
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    $encode=json_encode($responseArray);
    header('content-Type: application/json');
    echo $encoded;
    }
    else{
    echo $responseArray['message'];    
    }
 
}

if(isset($_POST['idwhatsapp'])){
  $idwhatsapp=$_POST['idwhatsapp'];
  $sql=mysqli_query($conn,"UPDATE `digitalcard` SET `status`=1 WHERE `id`='$idwhatsapp'");
  if($sql==1){
echo "fdgfgfg";
  }
  else{
    echo "not done";
  }
}
?>