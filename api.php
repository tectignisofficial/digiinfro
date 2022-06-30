<?php
include("admin/include/config.php");

if(isset($_GET['delpending'])){
    $penid=$_GET['delpending'];
    $sql=mysqli_query($conn,"delete from vendor where id='$penid'");
    if($sql==1){
        header("location:admin/pendingapproval.php");
    }else{
        header("location:admin/pendingapproval.php");
    }
}

if(isset($_GET['delcom'])){
    $penid=$_GET['delcom'];
    $sql=mysqli_query($conn,"delete from vendor where id='$penid'");
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
        $sql=mysqli_query($conn,"UPDATE `listcategory` SET `slug`='$catslug',`icon`='$caticon',`image`='$file',`status`='$catstatus',`name`='$catname' WHERE id='$catid'");    
    } else if(!empty($catimgtmp) && ($file) || !empty($catimgtmp) && (empty($file) && ($catid))){
        move_uploaded_file($catimgtmp,$loc);
        $sql=mysqli_query($conn,"UPDATE `listcategory` SET `slug`='$catslug',`icon`='$caticon',`image`='$catimage',`status`='$catstatus',`name`='$catname' WHERE id='$catid'");
        
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
    $sql=mysqli_query($conn,"delete from listcategory where id='$delistcate'");
    if($sql==1){
        header("location:admin/category.php");
    }else{
        header("location:admin/category.php");
    }
}

if(isset($_GET['catonstatus'])){
    $staid=$_GET['catonstatus'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `action`='0' where id='$staid'");
    if($query==1){
        header("location:admin/completeappoval.php");
    }
}
if(isset($_GET['catzestatus'])){
    $staid=$_GET['catzestatus'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `action`='1' where id='$staid'");
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
$sql=mysqli_query($conn,"select * from vendor where id='$id' and action='0'");
$arr=mysqli_fetch_array($sql);

$shopname=$arr['shop_name'];
$city=$arr['city'];
$state=$arr['state'];
$category=$arr['category'];
}

if(isset($_GET['catemoratingyes'])){
    $staid=$_GET['catemoratingyes'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `morerating`='0' where id='$staid'");
    if($query==1){
        header("location:admin/morratingcategory.php");
    }
}

if(isset($_GET['catemoratingno'])){
    $staid=$_GET['catemoratingno'];
        $query=mysqli_query($conn,"UPDATE `vendor` SET `morerating`='1' where id='$staid'");
    if($query==1){
        header("location:admin/morratingcategory.php");
    }
}

if(!empty($_POST["state"])){ 
    $state = $_POST["state"];
  $query = mysqli_query($conn,"SELECT state.state_code as stcode,all_cities.city_name as cname, all_cities.state_code as ccode from state inner join all_cities on all_cities.state_code=state.state_code WHERE state.state_code ='$state'"); 
   ?>
     <?php while($row = $query->fetch_assoc()){  ?>
         <option value="<?php echo $row['cname'] ?>"><?php echo $row['cname']?></option> 
    <?php  } 
  }else{ ?>
    <option value="">City not found</option>
 <?php } 
?>
