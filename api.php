<?php
include("admin/include/config.php");

if(isset($_POST['id'])){

  $sql=mysqli_query($conn,"select * from vendor where shop_code='".$_POST['id']."'");
  $arr=mysqli_fetch_array($sql);
  echo '<div class="card-body">
  <div class="form-row">
  <div class="form-group col-md-6">
    <h6>Category</h6>';
   echo ' <input type="hidden" name="id" id="id" value="'.$_POST['id'].'">
    <select class="form-control select2" style="width: 100%;" name="category">
    <option value="'.$arr['category'].'" selected="selected">'.$arr['category'].'</option>';
    $query=mysqli_query($conn,"select * from listcategory");
    while($sql=mysqli_fetch_array($query)){
      echo '<option value="'.$sql['name'].'">'.$sql['name'].'</option>';
    }
  echo ' </select>
  </div>
  <div class="form-group col-md-6">
    <h6>Shop Name</h6>
    <input type="text" class="form-control" name="shop_name" value="'.$arr['shop_name'].'" id="shop_name" placeholder="Enter shop name">
  </div>
  </div>

  
  <div class="form-group">
    <h6>Shop Address</h6>
        <textarea class="form-control" name="shop_address" id="shop_address" placeholder="Enter shop address">'.$arr['shop_address'].'</textarea>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <h6>Shop Name</label>
    <input type="text" class="form-control" name="shop_name" id="shop_name" placeholder="Enter shop name" value="'.$arr['shop_name'].'">
  </div>
    <div class="form-group col-md-6">
    <h6>Authorized Person Name</h6>
    <input type="text" class="form-control" value="'.$arr['authorized_person'].'" name="authorized_person" id="example1" placeholder="Enter autorized person name">
    <span id="spanpersonname"></span>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <h6>Mobile No.</h6>
        <input type="tel" class="form-control" name="mobile_no" value="'.$arr['mobile_no'].'" id="mobile_no" placeholder="Enter mobile number" minlength="10"  maxlength="10" >
  </div>
  <div class="form-group col-md-6">
    <h6>WhatsApp No.</label></h6>
    <input type="tel" class="form-control" name="whatsapp_no" value="'.$arr['whatsapp_no'].'" id="whatsapp_no" placeholder="Enter whatsapp number" minlength="10"  maxlength="10">
  </div>
  </div>

  <div class="form-row ">
  <div class="form-group  col-md-6">
  <h6>Email ID<label style="color:Red">*</label></h6>
      <input type="email" class="form-control" name="email" value="'.$arr['email'].'" id="email" placeholder="Enter Email ID" >               
</div>
  <div class="form-group  col-md-6">
    <h6>Website</h6>
    <input type="url" class="form-control" name="website" id="website" value="'.$arr['website'].'" placeholder="Enter website">
  </div>
</div>

<div class="form-row ">
  <div class="form-group col-md-6">
  <h6>Services</h6>
  <select class="form-control select2" style="width: 100%;" name="services">
    <option  value="'.$arr['services'].'" selected="selected">'.$arr['services'].'</option>';
    $query1=mysqli_query($conn,"select * from service");
    while($sql1=mysqli_fetch_array($query1)){
      echo '<option value="'.$sql1['title'].'">'.$sql1['title'].'</option>';
    }
   echo '</select>
</div>
<div class="form-group col-md-6">
<h6>Select a state </h6>
       <select class="form-control select2" name="state" style="width: 100%;" onChange="get1(this.value)">
       <option  value="'.$arr['state'].'" selected="selected">'.$arr['state'].'</option>';  
       $query2=mysqli_query($conn,"select * from state");   
       while($sql2=mysqli_fetch_array($query2)){
        echo '<option value="'.$sql2['state'].'">'.$sql2['state'].'</option>';
      }
      echo '</select>
</div>
</div>

<div class="form-row ">
<div class="form-group col-md-6">
  <h6>City Name</h6>
       <select class="form-control select2 designation"  name="city" style="width: 100%;" onChange="get2(this.value)">
       <option value="'.$arr['city'].'" selected="selected" >'.$arr['city'].'</option>
       </select>
</div>
<div class="form-group col-md-6">
  <h6>location</h6>
      <select class="form-control select2 location" name="location" id="location" style="width: 100%;" >
        <option value="'.$arr['location'].'" selected="selected" >'.$arr['location'].'</option>
      </select>
</div>
</div>


  <div class="form-group">
  <h6> Social Media </h6>
</div>
<div class="row">
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>Facebook</h6>
  <input type="url" class="form-control" value="'.$arr['facebook'].'" name="facebook" id="facebook">
</div>
<!-- /.form-group -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>Instagram</h6>
  <input type="url" class="form-control" value="'.$arr['instagram'].'" name="instagram" id="instagram">
</div>
<!-- /.form-group -->
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>LinkedIn</h6>
  <input type="url" class="form-control" value="'.$arr['LinkedIn'].'" name="linkedin" id="linkedin" >
</div>
<!-- /.form-group -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>YouTube</h6>
  <input type="url" class="form-control" value="'.$arr['youtube'].'" name="youtube" id="youtube">
</div>
<!-- /.form-group -->
</div>
<!-- /.col -->
</div>
</div>

<div class="form-row">
<div class="form-group col-sm-6">
    <h6>Status</h6>
      <select class="form-control" name="status">
      <option value="'.$arr['status'].'" selected="selected" >'.$arr['status'].'</option>
      <option value="Open">Open</option>
      <option value="In Proccess">In Proccess</option>
      <option value="Hold On">Hold On</option>
      <option value="Closed">Closed</option>
      </select>
  </div>
  </div>

<div class="form-row">
<div class="form-group col-sm-6">
    <h6>Image 1</h6>
      <img src="dist/img/vender_image/'.$arr['image1'].'" width="50" height="50">
      <input type="hidden" name="image1" value="'.$arr['image1'].'">
        <input type="file" name="img" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  <div class="form-group col-sm-6">
    <h6>Image 2</h6>
      <img src="dist/img/vender_image/'.$arr['image2'].'" width="50" height="50">
      <input type="hidden" name="image2" value="'.$arr['image2'].'">
        <input type="file" name="img1" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  </div>

  <div class="form-row">
<div class="form-group col-sm-6">
    <h6>Image 1</h6>
      <img src="dist/img/vender_image/'.$arr['image3'].'" width="50" height="50">
      <input type="hidden" name="image5" value="'.$arr['image3'].'">
        <input type="file" name="img5" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  <div class="form-group col-sm-6">
    <h6>Image 2</h6>
      <img src="dist/img/vender_image/'.$arr['image4'].'" width="50" height="50">
      <input type="hidden" name="image6" value="'.$arr['image4'].'">
        <input type="file" name="img6" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-sm-6">
    <h6>Shop Act License Document Upload</h6>
      <img src="dist/img/vender_image/'.$arr['shop_act_license'].'" width="50" height="50">
      <input type="hidden" name="image3" value="'.$arr['shop_act_license'].'">
        <input type="file" name="img2" class="" accept="image/png,image/jpeg,image/jpg,image/pdf">
  </div>
  <div class="form-group col-sm-6">
    <h6>Pan card Document Upload</h6>
      <img src="dist/img/vender_image/'.$arr['pan_card'].'" width="50" height="50">
      <input type="hidden" name="image4" value="'.$arr['pan_card'].'">
        <input type="file" name="img3" class="" accept="image/png,image/jpeg,image/jpg,image/pdf">
  </div>
</div>
</div>';
}

//complete
if(isset($_POST['compid'])){

  $sql=mysqli_query($conn,"select * from vendor where shop_code='".$_POST['compid']."'");
  $arr=mysqli_fetch_array($sql);
  echo '<div class="card-body">
  <div class="form-row">
  <div class="form-group col-md-6">
    <h6>Category</h6>';
   echo ' <input type="hidden" name="id" id="id" value="'.$_POST['compid'].'">
    <select class="form-control select2" style="width: 100%;" name="category">
    <option value="'.$arr['category'].'" selected="selected">'.$arr['category'].'</option>';
    $query=mysqli_query($conn,"select * from listcategory");
    while($sql=mysqli_fetch_array($query)){
      echo '<option value="'.$sql['name'].'">'.$sql['name'].'</option>';
    }
  echo ' </select>
  </div>
  <div class="form-group col-md-6">
    <h6>Shop Name</h6>
    <input type="text" class="form-control" name="shop_name" value="'.$arr['shop_name'].'" id="shop_name" placeholder="Enter shop name">
  </div>
  </div>

  
  <div class="form-group">
    <h6>Shop Address</h6>
        <textarea class="form-control" name="shop_address" id="shop_address" placeholder="Enter shop address">'.$arr['shop_address'].'</textarea>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <h6>Shop Name</label>
    <input type="text" class="form-control" name="shop_name" id="shop_name" placeholder="Enter shop name" value="'.$arr['shop_name'].'">
  </div>
    <div class="form-group col-md-6">
    <h6>Authorized Person Name</h6>
    <input type="text" class="form-control" value="'.$arr['authorized_person'].'" name="authorized_person" id="example1" placeholder="Enter autorized person name">
    <span id="spanpersonname"></span>
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <h6>Mobile No.</h6>
        <input type="tel" class="form-control" name="mobile_no" value="'.$arr['mobile_no'].'" id="mobile_no" placeholder="Enter mobile number" minlength="10"  maxlength="10" >
  </div>
  <div class="form-group col-md-6">
    <h6>WhatsApp No.</label></h6>
    <input type="tel" class="form-control" name="whatsapp_no" value="'.$arr['whatsapp_no'].'" id="whatsapp_no" placeholder="Enter whatsapp number" minlength="10"  maxlength="10">
  </div>
  </div>

  <div class="form-row ">
  <div class="form-group  col-md-6">
  <h6>Email ID<label style="color:Red">*</label></h6>
      <input type="email" class="form-control" name="email" value="'.$arr['email'].'" id="email" placeholder="Enter Email ID" >               
</div>
  <div class="form-group  col-md-6">
    <h6>Website</h6>
    <input type="url" class="form-control" name="website" id="website" value="'.$arr['website'].'" placeholder="Enter website">
  </div>
</div>

<div class="form-row ">
  <div class="form-group col-md-6">
  <h6>Services</h6>
  <select class="form-control select2" style="width: 100%;" name="services">
    <option  value="'.$arr['services'].'" selected="selected">'.$arr['services'].'</option>';
    $query1=mysqli_query($conn,"select * from service");
    while($sql1=mysqli_fetch_array($query1)){
      echo '<option value="'.$sql1['title'].'">'.$sql1['title'].'</option>';
    }
   echo '</select>
</div>
<div class="form-group col-md-6">
<h6>Select a state </h6>
       <select class="form-control select2" name="state" style="width: 100%;" onChange="get1(this.value)">
       <option  value="'.$arr['state'].'" selected="selected">'.$arr['state'].'</option>';  
       $query2=mysqli_query($conn,"select * from state");   
       while($sql2=mysqli_fetch_array($query2)){
        echo '<option value="'.$sql2['state'].'">'.$sql2['state'].'</option>';
      }
      echo '</select>
</div>
</div>

<div class="form-row ">
<div class="form-group col-md-6">
  <h6>City Name</h6>
       <select class="form-control select2 designation"  name="city" style="width: 100%;" onChange="get2(this.value)">
       <option value="'.$arr['city'].'" selected="selected" >'.$arr['city'].'</option>
       </select>
</div>
<div class="form-group col-md-6">
  <h6>location</h6>
      <select class="form-control select2 location" name="location" id="location" style="width: 100%;" >
        <option value="'.$arr['location'].'" selected="selected" >'.$arr['location'].'</option>
      </select>
</div>
</div>


  <div class="form-group">
  <h6> Social Media </h6>
</div>
<div class="row">
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>Facebook</h6>
  <input type="url" class="form-control" value="'.$arr['facebook'].'" name="facebook" id="facebook">
</div>
<!-- /.form-group -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>Instagram</h6>
  <input type="url" class="form-control" value="'.$arr['instagram'].'" name="instagram" id="instagram">
</div>
<!-- /.form-group -->
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>LinkedIn</h6>
  <input type="url" class="form-control" value="'.$arr['LinkedIn'].'" name="linkedin" id="linkedin" >
</div>
<!-- /.form-group -->
</div>
<!-- /.col -->
<div class="col-12 col-sm-6">
<div class="form-group">
  <h6>YouTube</h6>
  <input type="url" class="form-control" value="'.$arr['youtube'].'" name="youtube" id="youtube">
</div>
<!-- /.form-group -->
</div>
<!-- /.col -->
</div>
</div>

<div class="form-row">
<div class="form-group col-sm-6">
    <h6>Image 1</h6>
      <img src="dist/img/vender_image/'.$arr['image1'].'" width="50" height="50">
      <input type="hidden" name="image1" value="'.$arr['image1'].'">
        <input type="file" name="img" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  <div class="form-group col-sm-6">
    <h6>Image 2</h6>
      <img src="dist/img/vender_image/'.$arr['image2'].'" width="50" height="50">
      <input type="hidden" name="image2" value="'.$arr['image2'].'">
        <input type="file" name="img1" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  </div>

  <div class="form-row">
<div class="form-group col-sm-6">
    <h6>Image 1</h6>
      <img src="dist/img/vender_image/'.$arr['image3'].'" width="50" height="50">
      <input type="hidden" name="image5" value="'.$arr['image3'].'">
        <input type="file" name="img5" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  <div class="form-group col-sm-6">
    <h6>Image 2</h6>
      <img src="dist/img/vender_image/'.$arr['image4'].'" width="50" height="50">
      <input type="hidden" name="image6" value="'.$arr['image4'].'">
        <input type="file" name="img6" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  </div>

  <div class="form-row">
  <div class="form-group col-sm-6">
    <h6>Shop Act License Document Upload</h6>
      <img src="dist/img/vender_image/'.$arr['shop_act_license'].'" width="50" height="50">
      <input type="hidden" name="image3" value="'.$arr['shop_act_license'].'">
        <input type="file" name="img2" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
  <div class="form-group col-sm-6">
    <h6>Pan card Document Upload</h6>
      <img src="dist/img/vender_image/'.$arr['pan_card'].'" width="50" height="50">
      <input type="hidden" name="image4" value="'.$arr['pan_card'].'">
        <input type="file" name="img3" class="" accept="image/png,image/jpeg,image/jpg">
  </div>
</div>
</div>';
}

if(!empty($_POST["editstate"])){ 
  $state = $_POST["editstate"];
$query = mysqli_query($conn,"SELECT state.state_code as stcode,all_cities.city_name as cname, all_cities.state_code as ccode from state inner join all_cities on all_cities.state_code=state.state_code WHERE state.state ='$state'"); 
 ?>
 <option disabled>Select city</option>
   <?php while($row = mysqli_fetch_array($query)){ ?>
       <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname']?></option> 
  <?php } 
}
if(!empty($_POST["editcity"])){ 
  $city = $_POST["editcity"];
$query = mysqli_query($conn,"SELECT all_cities.city_code,search_location.city_name,search_location.location_name as loc_name,search_location.city_code from all_cities inner join search_location on search_location.city_name=all_cities.city_name WHERE all_cities.city_name ='$city'"); 
 ?>
 <option disabled>Select city</option>
   <?php while($row = mysqli_fetch_array($query)){ ?>
       <option value="<?php echo $row['loc_name'] ?>"><?php echo $row['loc_name']?></option> 
  <?php } 
}


if(isset($_GET['delpending'])){
    $penid=$_GET['delpending'];
    $sql=mysqli_query($conn,"delete from vendor where shop_code='$penid'");
    if($sql==1){
        header("location:admin/pendingapproval.php");
    }else{
        header("location:admin/pendingapproval.php");
    }
}

if(isset($_GET['delcom'])){
    $penid=$_GET['delcom'];
    $sql=mysqli_query($conn,"delete from vendor where shop_code='$penid'");
    if($sql==1){
        header("location:admin/completeappoval.php");
    }else{
        header("location:admin/completeappoval.php");
    }
}

if(isset($_POST['catsub'])){
    $catname=$_POST['catname'];
    $catslug=$_POST['catslug'];
    $caticon=$_POST['caticon'];
    $catstatus=$_POST['catstatus'];
    $catimage=$_FILES['catimage']['name'];
    $catimgtmp=$_FILES['catimage']['tmp_name'];
    $catid=$_POST['catid'];
    $file=$_POST['image'];
    
    $loc="image/listCategoryImage/".$catimage;
    echo "<script>alert($catid $catimgtmp $file);</script>";
    if(empty($catimgtmp) && ($file) && ($catid)){
        $sql=mysqli_query($conn,"UPDATE `listcategory` SET `slug`='$catslug',`icon`='$caticon',`image`='$file',`status`='$catstatus',`name`='$catname' WHERE shop_code='$catid'");    
    } else if(!empty($catimgtmp) && ($file) || !empty($catimgtmp) && (empty($file) && ($catid))){
        move_uploaded_file($catimgtmp,$loc);
        $sql=mysqli_query($conn,"UPDATE `listcategory` SET `slug`='$catslug',`icon`='$caticon',`image`='$catimage',`status`='$catstatus',`name`='$catname' WHERE shop_code='$catid'");
        
      }else{
    move_uploaded_file($catimgtmp,$loc);
    $sql=mysqli_query($conn,"INSERT INTO `listcategory`(`slug`, `icon`, `image`, `status`, `name`) VALUES ('$catslug','$caticon','$catimage','$catstatus','$catname')");
    
}
if($sql==1){
    header("location:admin/category.php");
}else{
    header("location:admin/listingcategory.php");
}
}

if(isset($_GET['delistcate'])){
    $delistcate=$_GET['delistcate'];
    $sql=mysqli_query($conn,"delete from listcategory where shop_code='$delistcate'");
    if($sql==1){
        header("location:admin/category.php");
    }else{
        header("location:admin/category.php");
    }
}

if(isset($_GET['catonstatus'])){
    $staid=$_GET['catonstatus'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `action`='0' where shop_code='$staid'");
    if($query==1){
        header("location:admin/completeappoval.php");
    }
}
if(isset($_GET['catzestatus'])){
    $staid=$_GET['catzestatus'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `action`='1' where shop_code='$staid'");
    if($query==1){
        header("location:admin/completeappoval.php");
    }
}

$shopname="";
$city="";
$state="";
$category="";
if(isset($_GET['detailpen'])){
$id=$_GET['detailpen'];
$sql=mysqli_query($conn,"select * from vendor where shop_code='$id' and action='0'");
$arr=mysqli_fetch_array($sql);

$shopname=$arr['shop_name'];
$city=$arr['city'];
$state=$arr['state'];
$category=$arr['category'];
}

if(isset($_GET['catemoratingyes'])){
    $staid=$_GET['catemoratingyes'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `morerating`='0' where shop_code='$staid'");
    if($query==1){
        header("location:admin/morratingcategory.php");
    }
}

if(isset($_GET['catemoratingno'])){
    $staid=$_GET['catemoratingno'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `morerating`='1' where shop_code='$staid'");
    if($query==1){
        header("location:admin/morratingcategory.php");
    }
}

if(isset($_POST['saverat'])){
    $saverat=$_POST['shopname'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `morerating`='1' where shop_code='$saverat'");
    if($query==1){
        header("location:admin/morratingcategory.php");
    }
}


if(!empty($_POST["state"])){ 
    $state = $_POST["state"];
  $query = mysqli_query($conn,"SELECT state.state_code as stcode,all_cities.city_name as cname, all_cities.state_code as ccode from state inner join all_cities on all_cities.state_code=state.state_code WHERE state.state ='$state'"); 
   ?>
   <option selected disabled>City</option>
     <?php while($row = $query->fetch_assoc()){  ?>
         <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname']?></option> 
    <?php  } 
  }
?>

<?php 
if(!empty($_POST["city"])){ 
$city = $_POST["city"];
$query = mysqli_query($conn,"SELECT all_cities.city_code,search_location.city_name,search_location.location_name as loc_name,search_location.city_code from all_cities inner join search_location on search_location.city_name=all_cities.city_name WHERE all_cities.city_name ='$city'"); 
 ?>
 <option disabled selected>Location</option>
   <?php while($row = $query->fetch_assoc()){  ?>
       <option value="<?php echo $row['loc_name'] ?>"><?php echo $row['loc_name']?></option> 
  <?php  } 
}
?>

<?php

if(isset($_POST['subit'])){

  $category=$_POST['category'];
$shop_name=$_POST['shop_name'];
$shop_address=$_POST['shop_address'];
$authorized_person=$_POST['authorized_person'];
$mobile_no=$_POST['mobile_no'];
$whatsapp_no=$_POST['whatsapp_no'];
$city=$_POST['city'];
$state=$_POST['state'];
$email=$_POST['email'];
$website=$_POST['website'];
$services=$_POST['services'];
$facebook=$_POST['facebook'];
$instagram=$_POST['instagram'];
$linkedin=$_POST['linkedin'];
$youtube=$_POST['youtube'];
$location=$_POST['location'];
$veriotp=$_POST['veriotp'];
$status="open";
$action="1";

$image=$_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name']; 
$loc="dist/img/vender_image/".basename($image);

$image1=$_FILES['img2']['name'];
$tmp_name = $_FILES['img2']['tmp_name']; 
$loc="dist/img/vender_image/".basename($image1);

$image2=$_FILES['img3']['name'];
$tmp_name = $_FILES['img3']['tmp_name']; 
$loc="dist/img/vender_image/".basename($image2);

$image3=$_FILES['img4']['name'];
$tmp_name = $_FILES['img4']['tmp_name']; 
$loc="dist/img/vender_image/".basename($image3);

$video=$_FILES['video']['name'];
$tmp_name = $_FILES['video']['tmp_name']; 
$loc="dist/img/vender_image/".basename($video);

$license=$_FILES['license']['name'];
$tmp_name = $_FILES['license']['tmp_name']; 
$loc="dist/img/vender_image/".basename($license);

$pan=$_FILES['pan']['name'];
$tmp_name = $_FILES['pan']['tmp_name']; 
$loc="dist/img/vender_image/".basename($pan);



$otpsql=mysqli_query($conn,"SELECT * FROM otp where email='$email'");
$otprow=mysqli_fetch_assoc($otpsql);
$otp=$otprow['otp'];
if($veriotp == ""){
 echo "<script>swal('oops..','please Verify your email first then submit','error');</script>";
}else{
if($otp==$veriotp){

if($category == "" || $shop_name == "" || $shop_address== "" || $authorized_person=="" || $mobile_no == "" || $whatsapp_no == "" || $city=="" || $state=="" || $email=="" || $location=="" || $services==""){
 echo "<script>swal('oops','please fill all the fields','success');</script>";

}
 move_uploaded_file($tmp_name, $loc);

$imgEncoded = base64_encode(file_get_contents($tmp_name));

//   $loc="dist/img/";

//   move_uploaded_file($_FILES['img']['tmp_name'],$loc.$image);

$from = 'Enquiry <ceo@tectignis.in>' . "\r\n";
$sendTo = 'Enquiry <'.$email.'>';
$subject = 'Agreerent';
// $fields = array( 'name' => 'name' );
$from = 'Agreerent: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$from .= "Content-Type: multipart/mixed;"; 
$from .= "boundary = $boundary\r\n"; 


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
div[style*="margin: 16px 0"] {
 margin: 0 !important;
}
table,
td {
 mso-table-lspace: 0pt !important;
 mso-table-rspace: 0pt !important;
}
table {
 border-spacing: 0 !important;
 border-collapse: collapse !important;
 table-layout: fixed !important;
 margin: 0 auto !important;
}
img {
 -ms-interpolation-mode:bicubic;
}
a {
 text-decoration: none;
}
*[x-apple-data-detectors], 
.unstyle-auto-detected-links *,
.aBn {
 border-bottom: 0 !important;
 cursor: default !important;
 color: inherit !important;
 text-decoration: none !important;
 font-size: inherit !important;
 font-family: inherit !important;
 font-weight: inherit !important;
 line-height: inherit !important;
}
.a6S {
 display: none !important;
 opacity: 0.01 !important;
}
.im {
 color: inherit !important;
}
img.g-img + div {
 display: none !important;
}
@media only screen and (min-device-width: 320px) and (max-device-width: 374px) {
 u ~ div .email-container {
     min-width: 320px !important;
 }
}
@media only screen and (min-device-width: 375px) and (max-device-width: 413px) {
 u ~ div .email-container {
     min-width: 375px !important;
 }
}
@media only screen and (min-device-width: 414px) {
 u ~ div .email-container {
     min-width: 414px !important;
 }
}
 </style>
 <style>
     .primary{
 background: #17bebb;
}
.bg_white{
 background: #ffffff;
}
.bg_light{
 background: #f7fafa;
}
.bg_black{
 background: #000000;
}
.bg_dark{
 background: rgba(0,0,0,.8);
}
.email-section{
 padding:2.5em;
}
.btn{
 padding: 10px 15px;
 display: inline-block;
}
.btn.btn-primary{
 border-radius: 5px;
 background: #A800BF;
 color: #ffffff;
}
.btn.btn-white{
 border-radius: 5px;
 background: #ffffff;
 color: #000000;
}
.btn.btn-white-outline{
 border-radius: 5px;
 background: transparent;
 border: 1px solid #fff;
 color: #fff;
}
.btn.btn-black-outline{
 border-radius: 0px;
 background: transparent;
 border: 2px solid #000;
 color: #000;
 font-weight: 700;
}
.btn-custom{
 color: rgba(0,0,0,.3);
 text-decoration: underline;
}
h1,h2,h3,h4,h5,h6{
 font-family: "Poppins", sans-serif;
 color: #000000;
 margin-top: 0;
 font-weight: 400;
}
body{
 font-family: "Poppins", sans-serif;
 font-weight: 400;
 font-size: 15px;
 line-height: 1.8;
 color: rgba(0 0 0 / 60%);
}
a{
 color: #A800BF;
}
table{
}
.logo h1{
 margin: 0;
}
.logo h1 a{
 color: #A800BF;
 font-size: 24px;
 font-weight: 700;
 font-family: "Poppins", sans-serif;
}
.hero{
 position: relative;
 z-index: 0;
}
.hero .text{
 color: rgba(0,0,0,.3);
}
.hero .text h2{
 color: #000;
 font-size: 34px;
 margin-bottom: 0;
 font-weight: 200;
 line-height: 1.4;
}
.hero .text h3{
 font-size: 24px;
 font-weight: 300;
}
.hero .text h2 span{
 font-weight: 600;
 color: #000;
}
.text-author{
 bordeR: 1px solid rgba(0,0,0,.05);
 max-width: 50%;
 margin: 0 auto;
 padding: 2em;
}
.text-author img{
 border-radius: 50%;
 padding-bottom: 20px;
}
.text-author h3{
 margin-bottom: 0;
}
ul.social{
 padding: 0;
}
ul.social li{
 display: inline-block;
 margin-right: 10px;
}
.footer{
 border-top: 1px solid rgba(0,0,0,.05);
 color: rgba(0,0,0,.5);
}
.footer .heading{
 color: #000;
 font-size: 20px;
}
.footer ul{
 margin: 0;
 padding: 0;
}
.footer ul li{
 list-style: none;
 margin-bottom: 10px;
}
.footer ul li a{
 color: rgba(0,0,0,1);
}
@media screen and (max-width: 500px) {
}
 </style>
</head>
<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
 <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
   &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
 </div>
 <div style="max-width: 600px; margin: 0 auto;" class="email-container">
     <!-- BEGIN BODY -->
   <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
       <tr>
       <td valign="top" class="bg_white" style="padding: 1em 2.5em 0 2.5em;">
           <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
               <tr>
                   <td class="logo" style="text-align: center;">
                     <h1><a href="#">AGREERENT</a></h1>
                   </td>
               </tr>
           </table>
       </td>
       </tr><!-- end tr -->
             <tr>
       <td valign="middle" class="hero bg_white" style="padding: 2em 0 4em 0;">
         <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
             <tr>
                 <td style="padding: 0 2.5em; text-align: center; padding-bottom: 3em;">
                     <div class="text">
                         <h3>Hello <b>'.$shop_name.'</b></h3>
                         <h3>Congratulation your account has been Activated Successfully.</h3>
                     </div>
                 </td>
             </tr>
             <tr>
                   <td style="text-align: center;">
                       <div class="text-author">
                           <img src="http://demo.digiinfromatrics.com/admin/dist/img/vender_image/"'.$image.'" alt="" style="width: 100px; max-width: 600px; height: auto; margin: auto; display: block;">
                           <h3 class="name">'.$shop_name.'</h3>
                           <span class="position">'.$shop_name.'</span>
                         <p>Client Code&nbsp;:&nbsp;<b>'.$shop_name.'</b><br>Username&nbsp;:&nbsp;<b>'.$email.'</b><br>Password&nbsp;:&nbsp;<b>'.$shop_name.'</b></p> 
                            <p><a href="https://www.agreerent.in/client/" class="btn btn-primary">Login Now</a></p>
                            <p><a href="https://www.agreerent.in/" class="btn-custom">Visit Our Website</a></p>
                         
                        </div>
                   </td>
                 </tr>
         </table><br>
     <h4 class="position" align="center">for any query feel free to email us<br><a href="mailto: support@agreerent.in"> support@agreerent.in</a></h4>			  
       </td>
       </tr><!-- end tr -->
   <!-- 1 Column Text + Button : END -->
   </table>
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

$sql=mysqli_query($conn,"INSERT INTO `vendor`(`shop_name`, `category`, `shop_address`, `authorized_person`, `mobile_no`, `whatsapp_no`, `email`,`website`, `facebook`, `instagram`, `LinkedIn`, `youtube`,`status`,`shop_act_license`,`video`,`pan_card`,`action`,`image1`,`image2`,`image3`,`image4`,`location`,`city`,`state`) VALUES ('$shop_name','$category','$shop_address','$authorized_person','$mobile_no','$whatsapp_no','$email','$website','$facebook','$instagram','$linkedin','$youtube','$status','$license','$video','$pan','$action','$image','$image1','$image2','$image3','$location','$city','$state')");
if($sql=1){
  echo "<script>swal('success','vendor Registered Successfully','success');</script>";    }
else{
  echo "<script>swal('error','Something Wrong','error');</script>";
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

else{
echo "<script>swal('oops...','Invalid Otp','warning');</script>";
}
}
}

//otp verification
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


?>

