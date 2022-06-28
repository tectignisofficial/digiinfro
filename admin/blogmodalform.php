<?php
include("include/config.php");



if(isset($_POST['dnkid'])){
	$sql=mysqli_query($conn,"SELECT * FROM blog_category where id='".$_POST['dnkid']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
             
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="blogmodalform.php">
            <div class="modal-body body1">

            <div class="row">   
                <div class="col-4">
                <input type="hidden" class="form-control" name="id"
                value="'.$arr['id'].'">
                <b> Name :</b><br>
                </div>
                <div class="col-8">
                
                <p><input type="text" class="form-control" name="name"
                value="'.$arr['name'].'"> </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Slug :</b><br>
                </div>
                <div class="col-8">
                <p><input type="text" class="form-control" name="slug"
                value="'.$arr['slug'].'"> </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Status :</b><br>
                </div>
                <div class="col-8">
                <p>  <select  class="form-control" name="status"  value="'.$arr['status'].'"
                id="exampleSelectGender" required>
                <option value="" disabled selected hidden>select</option>
                <option value="0">Active</option>
                <option value="1">Deactive</option>
               
            </select>  </p>
                </div>
                </div>


        
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary" name="submi" >Submit</button>
            </div></form>';
}

if(isset($_POST['submi'])){
    $eid=$_POST['id'];
    $name=$_POST['name'];
      $slug=$_POST['slug'];
      $status=$_POST['status'];
  
    $sql=mysqli_query($conn,"UPDATE `blog_category` SET `name`='$name',`slug`='$slug',`status`='$status' WHERE id='$eid'");
    if($sql){
    header("location:categoryblog.php");
    }else{
      echo "<script>alert('error');</script>";
    }
  } 



  if(isset($_POST['dnkidno1'])){
    $sql=mysqli_query($conn,"SELECT * FROM blog_comment where id='".$_POST['dnkidno1']."'");
    $arr=mysqli_fetch_array($sql);
    echo '<div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        <form method="post">
              <div class="modal-body body1">
  
              <div class="row">   
                  <div class="col-4">
                  <b> Name :</b><br>
                  </div>
                  <div class="col-8">
                
                  <p>
                 '.$arr['vname'].' </p>
                  </div>
                  </div>
  
                  <div class="row">   
                   <div class="col-4">
                  <b> Email :</b><br>
                  </div>
                  <div class="col-8">
                  <p>'.$arr['email'].' </p>
                  </div>
                  </div>
  
                  <div class="row">   
                  <div class="col-4">
                 <b> Phone :</b><br>
                 </div>
                 <div class="col-8">
                 <p>'.$arr['phone'].' </p>
                 </div>
                 </div>

                 <div class="row">   
                   <div class="col-4">
                  <b> Comment :</b><br>
                  </div>
                  <div class="col-8">
                  <p>'.$arr['comment'].' </p>
                  </div>
                  </div>
  
          
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
              </div></form>';
  }























  
?>


