<?php
include("include/config.php");
if(isset($_POST['dnkid'])){

    $query=mysqli_query($conn,"select * from feature where id='".$_POST['dnkid']."'");


    
    while($arr=mysqli_fetch_array($query)){
    
echo' <div class="card-body">
<div class="form-group">
  <label for="titlee">Title</label>
  <input type="hidden" class="form-control" value="'.$arr['id'].'" name="idd" id="idd" placeholder="">

  <input type="text" class="form-control" value="'.$arr['title'].'" name="titlee" id="" placeholder="">
</div>
<div class="custom-file">
  <input type="file" name="filee" value="'.$arr['icon'].'" class="custom-file-input" id="formFileMultiple">
  
  <label class="custom-file-label" for="file">Choose file</label>
</div>
<div class="form-group">
  <label>Description</label>
  <input type="text" name="filee" value="'.$arr['icon'].'" class="form-control" hidden>

  <textarea class="form-control" value="'.$arr['description'].'" rows="3" name="descriptionn"
    placeholder="Enter ...">'.$arr['description'].'</textarea>
</div>
<div class="form-group">
  <label>Status</label>
  <select class="form-control" value=""'.$arr['status'].'" name="statuss">
    <option value="on">ON</option>
    <option value="off">OFF</option>
  </select>
</div>
<div class="modal-footer justify-content-between">
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" name="submitt" value="submit" class="btn btn-success"
    style="margin-right: auto;">Save</button>
</div>
</div>';
}
}

if(isset($_POST['submitt']))
{
    $id= $_POST['idd'];
    $titlee= $_POST['titlee'];
    $descriptionn = $_POST['descriptionn'];
    $statuss = $_POST['statuss'];
    $filee=$_FILES['filee']['name'];   
    $filedet=$_FILES['filee']['tmp_name'];
    $loc="../assets/images/icon/".$filee;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE feature SET title='$titlee',description='$descriptionn',status='$statuss',icon='$filee' where id='$id'";
    if (mysqli_query($conn, $sql)){
      echo "<script> alert ('New record has been added successfully !');window.location='feature.php';</script>";

   } else {
      echo "<script> alert ('connection failed !');</script>";
   }
}
?>

