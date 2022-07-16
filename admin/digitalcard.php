<?php
include("include/config.php");
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
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $sql=mysqli_query($conn,"DELETE FROM `digitalcard` WHERE `id`='$id'");
  if($sql){
      echo "<script>alert('Digital Card Deleted Successfully');</script>";
      echo "<script>window.location.href='digitalcard.php';</script>";
  }
  else{
      echo "<script>alert('Digital Card Not Deleted');</script>";
      echo "<script>window.location.href='digitalcard.php';</script>";
  }
}

if(isset($_POST['savedigitaleditsave'])){
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
  $editid=$_POST['editid'];
  $oldlogo=$_POST['oldlogo'];
  $oldimg=$_POST['oldimg'];

  if(empty($_FILES['logo']['tmp_name']) && empty($_FILES['profile']['tmp_name']) && ($oldlogo) &&($oldimg)){
    $sql=mysqli_query($conn,"UPDATE `digitalcard` SET `name`='$name',`profile_img`='$oldimg',`email`='$email',`post`='$Post',`whatsapp_no`='$whatsapp_no',`mobile_no`='$mobile_no',`address`='$address',`website`='$website',`facebook_link`='$facebook',`instagram_link`='$insta',`linkedIn_link`='$linkedin',`logo`='$oldlogo' WHERE `id`='$editid'");
  }
  else if(!empty($_FILES['logo']['tmp_name']) && ($oldlogo) || !empty($_FILES['logo']['tmp_name']) && empty($oldlogo)){
    move_uploaded_file($_FILES['logo']['tmp_name'],"image/card_image/".$logo);
    $sql=mysqli_query($conn,"UPDATE `digitalcard` SET `name`='$name',`profile_img`='$oldimg',`email`='$email',`post`='$Post',`whatsapp_no`='$whatsapp_no',`mobile_no`='$mobile_no',`address`='$address',`website`='$website',`facebook_link`='$facebook',`instagram_link`='$insta',`linkedIn_link`='$linkedin',`logo`='$logo' WHERE `id`='$editid'");
  }
  else if(!empty($_FILES['profile']['tmp_name']) && ($oldimg) || !empty($_FILES['profile']['tmp_name']) && empty($oldimg)){
    move_uploaded_file($_FILES['profile']['tmp_name'],"image/card_image/".$profile);

  $sql=mysqli_query($conn,"UPDATE `digitalcard` SET `name`='$name',`profile_img`='$profile',`email`='$email',`post`='$Post',`whatsapp_no`='$whatsapp_no',`mobile_no`='$mobile_no',`address`='$address',`website`='$website',`facebook_link`='$facebook',`instagram_link`='$insta',`linkedIn_link`='$linkedin',`logo`='$oldlogo' WHERE `id`='$editid'");
  }
  if($sql){
      echo "<script>alert('Digital Card Updated Successfully');</script>";
      echo "<script>window.location.href='digitalcard.php';</script>";
  }
  else{
      echo "<script>alert('Digital Card Not Updated');</script>";
      echo "<script>window.location.href='digitalcard.php';</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
  
  <style>
    @media (min-width: 576px){
.modal-dialog {
    max-width: 900px;
    margin: 1.75rem auto;
}
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <?php
  include("include/header.php");
  include("include/sidebar.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
          <div class="col-12">
<div class="mb-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form"><i class="fa fa-plus">&nbsp;</i>Add Card </button> 
</div>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">My Listing</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Profile img</th>
                    <th>Post</th>
                    <th>Mobile_no</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql=mysqli_query($conn,"select * from digitalcard");
                    $count=1;
                    while($arr=mysqli_fetch_array($sql)){
                      
                    ?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $arr['name']; ?></td>
                    <td><?php echo $arr['profile_img']; ?></td>
                    <td><?php echo $arr['post']; ?></td>
                    <td><?php echo $arr['mobile_no']; ?></td>
                    <td><?php echo $arr['email'];?></td>
                    <td>
                    <button class="btn btn-primary editshop" data-id="<?php echo $arr['id'] ?>"><i class="fa fa-edit"></i></button>
                    <a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>
                    <a href="digitalcard.php?id=<?php echo $arr['id']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php $count++; } ?>
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!--modal-->
    <div class="modal" id="editmodal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Vender Registration</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="" enctype="multipart/form-data">
              <div class="modal-body bodymodal">
        
            
              </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="savedigitaleditsave">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <!--modal-->

    <!--modal form-->
    <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="email1">Email</label>
            <input type="email" class="form-control" name="email" id="email1" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small>
          </div>
          <div class="form-group">
            <label for="Post">Post</label>
            <input type="text" class="form-control" id="post" placeholder="Post" name="Post">
          </div>
          <div class="form-group">
            <label for="whatsapp_no">Whatsapp no</label>
            <input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no" placeholder="Whatsapp no">
          </div>
          <div class="form-group">
            <label for="mobile_no">Mobile no</label>
            <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Mobile no">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address">
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control" name="website" id="website" placeholder="website">
          </div>
          <div class="form-group">
            <label for="facebook_link">facebook link</label>
            <input type="text" class="form-control" id="facebook_link" placeholder="Facebook link" name="facebook">
          </div>
          <div class="form-group">
            <label for="instagram_link">Instagram link </label>
            <input type="text" class="form-control" id="instagram_link" placeholder="Instagram link " name="insta">
          </div>
          <div class="form-group">
            <label for="linkedIn_link">LinkedIn link</label>
            <input type="text" class="form-control" name="linkedin" id="linkedIn_link" placeholder="LinkedIn link">
          </div>
          <div class="form-group">
            <label for="profile">Profile image</label>
            <input type="file" name="profile" class="form-control" id="profile" placeholder="Logo">
          </div>
          <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" name="logo" class="form-control" id="logo" placeholder="Logo">
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" name="digital" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
    <!---modal form-->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php"); ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap4.min.js"></script>
<script>
 $(document).ready(function() {
    $('#example1').dataTable();
     $("[data-toggle=tooltip]").tooltip();
} );
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
$(document).ready(function(){
  $(".editshop").click(function(){
  let digiid=$(this).data("id");
  
  $.ajax({
    url:"../api.php",
    method:"POST",
    data:{digiid:digiid},
    success:function(data){
      $(".bodymodal").html(data);
      $("#editmodal").modal("show");
    }
  });
});
});
</script>
</body>
</html>
