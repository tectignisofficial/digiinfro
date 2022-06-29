<?php
//new_agreement
include("include/config.php");

?>
<?php
//list of complaints
if(isset($_POST['dnkid'])){
	$sql=mysqli_query($conn,"SELECT * FROM ticket_raise where Sr_no='".$_POST['dnkid']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
              <h4 class="modal-title">'.$arr['client_code'].'</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post"action="modal-form.php">
            <div class="modal-body body1">
                <div class="row">   
                <div class="col-4">
                <b> client code :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['client_code'].' </p>
                </div>
                </div>

                
                <div class="row">   
                 <div class="col-4">
                <b> shop name :</b><br>
                </div>
                <div class="col-8">
                <p>'.$arr['shop_name'].'</p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Subject :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['subject'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Description :</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['description'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                
                <b> comment :</b><br>
                </div>
                <div class="col-8">
			
                <textarea class="form-control" name="comment" id="comment"  value="'.$arr['comment'].'" rows="2">'.$arr['comment'].'</textarea>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Status :</b><br>
                </div>
                <div class="col-8">
                <p> <select class="form-control select2" name="status" style="width: 100%;" required>
                <option selected="selected" disable>Status</option>
                                <option value="Open">Open</option>
                                <option value="In Proccess">In Proccess</option>
                                
                              </select></p>
                </div>
                </div>


        
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              
            </div>
            </form>';
}
if(isset($_POST['dnkidno'])){
	$sql=mysqli_query($conn,"SELECT * FROM ticket_raise where Sr_no='".$_POST['dnkidno']."'");
	$arr=mysqli_fetch_array($sql);
	echo '<div class="modal-header">
              <h4 class="modal-title">'.$arr['client_code'].'</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form method="post" action="modal-form.php">
            <div class="modal-body body1">
                <div class="row">   
                 <div class="col-4">
                <b> status:</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['status'].' </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> comment:</b><br>
                </div>
                <div class="col-8">
                <p> '.$arr['comment'].' </p>
                </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" name="submit" class="btn btn-default" data-dismiss="modal">Close</button>
            </div></form>';
}

if(isset($_POST['submit'])){
	$Sr_no=$_POST['ticket'];
  $comment=$_POST['comment'];
	$status=$_POST['status'];

	$sql= "UPDATE ticket_raise SET status='$status',comment='$comment' WHERE ticket_no='$Sr_no'";
  $result=mysqli_query($conn,$sql);

	if($result==1){
    echo "done";
    header('location:ticket.php');
	}else{
		echo "Something went wrong";
	}
}

?>
