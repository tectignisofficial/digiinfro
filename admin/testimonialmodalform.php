<?php
include("include/config.php");
if(isset($_POST['dnkid'])){

    $query=mysqli_query($conn,"select * from testimonial where id='".$_POST['dnkid']."'");
    while($arr=mysqli_fetch_array($query)){
    
echo' <div class="card-body">
<div class="form-group">
  <label for="namee">Name</label>
  <input type="hidden" class="form-control" value="'.$arr['id'].'" name="idd" id="idd" placeholder="">

  <input type="text" class="form-control" value="'.$arr['name'].'" name="namee" id="" placeholder="">
</div>
<div class="row">
    <div class="col-sm-6 custom-file">
        <label class="" type="file" for="filee">Choose file</label>
            <input type="file" name="filee" value="'.$arr['image'].'" class="form-control" id="formFileMultiple">
    </div>
    <div class="col-sm-6 form-group">
        <label for="name">Designation</label>
            <input type="text" value="'.$arr['designation'].'"class="form-control" name="designation" id="" placeholder="">
    </div>
</div>
<div class="form-group">
  <label>Description</label>
  <input type="text" name="filee" value="'.$arr['image'].'" class="form-control" hidden>

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
    $namee= $_POST['namee'];
    $descriptionn = $_POST['descriptionn'];
    $designation = $_POST['designation'];
    $statuss = $_POST['statuss'];
    $filee=$_FILES['filee']['name'];   
    $filedet=$_FILES['filee']['tmp_name'];
    $loc="../assets/images/testimonial/".$filee;
    move_uploaded_file($filedet,$loc);
    $sql="UPDATE testimonial SET name='$namee',description='$descriptionn',designation='$designation',status='$statuss',image='$filee' where id='$id'";
    if (mysqli_query($conn, $sql)){
      echo "<script> alert ('New record has been added successfully !');window.location='testimonial.php';</script>";

   } else {
      echo "<script> alert ('connection failed !');</script>";
   }
}
?>