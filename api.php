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

