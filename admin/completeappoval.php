<?php
include("include/config.php");
if(isset($_POST['savevender'])){
  $id=$_POST['id'];
  $category=$_POST['category'];
  $shop_name=$_POST['shop_name'];
  $shop_address=$_POST['shop_address'];
  $shop_name=$_POST['shop_name'];
  $authorized_person=$_POST['authorized_person'];
  $mobile_no=$_POST['mobile_no'];
  $whatsapp_no=$_POST['whatsapp_no'];
  $email=$_POST['email'];
  $website=$_POST['website'];
  $services=$_POST['services'];
  $state=$_POST['state'];
  $city=$_POST['city'];
  $location=$_POST['location'];
  $facebook=$_POST['facebook'];
  $instagram=$_POST['instagram'];
  $linkedin=$_POST['linkedin'];
  $youtube=$_POST['youtube'];
  $status="Closed";
  $image1=$_POST['image1'];
  $image2=$_POST['image2'];
  $image3=$_POST['image3'];
  $image4=$_POST['image4'];
  $image5=$_POST['image5'];
  $image6=$_POST['image6'];
  $img=$_FILES['img']['name'];
  $img1=$_FILES['img1']['name'];
  $img2=$_FILES['img2']['name'];
  $img3=$_FILES['img3']['name'];
  $img5=$_FILES['img5']['name'];
  $img6=$_FILES['img6']['name'];

  $file_ext = explode('.',$img)[1];
  $iuyt= str_replace($file_ext,"webp",$img);

  $file_ext2 = explode('.',$img1)[1];
  $iuyt2= str_replace($file_ext2,"webp",$img1);

  $file_ext3 = explode('.',$img2)[1];
  $iuyt3= str_replace($file_ext3,"webp",$img2);

  $file_ext4 = explode('.',$img3)[1];
  $iuyt4= str_replace($file_ext4,"webp",$img3);

  $file_ext5 = explode('.',$img5)[1];
  $iuyt5= str_replace($file_ext5,"webp",$img5);

  $file_ext6 = explode('.',$img6)[1];
  $iuyt6= str_replace($file_ext6,"webp",$img6);
  
  if(empty($_FILES['img']['tmp_name']) && empty($_FILES['img1']['tmp_name'])  && empty(($_FILES['img2']['tmp_name']))  && empty(($_FILES['img3']['tmp_name']))  && empty(($_FILES['img5']['tmp_name']))  && empty(($_FILES['img6']['tmp_name'])) && ($_POST['image1']) && ($_POST['image2']) && ($_POST['image3']) && ($_POST['image4']) && ($_POST['image5']) && ($_POST['image6'])){
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$image3',`pan_card`='$image4',`status`='$status',`image1`='$image1',`image2`='$image2',`image3`='$image5',`image4`='$image6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor Updated Successfully');</script>";
    }
    else if(empty($_POST['image1']) && empty($_POST['image2'])  && empty($_POST['image3'])  && empty($_POST['image4'])  && empty($_POST['image5'])  && empty($_POST['image6']) && ($_FILES['img']['tmp_name']) && ($_FILES['img1']['tmp_name']) && ($_FILES['img2']['tmp_name']) && ($_FILES['img3']['tmp_name']) && ($_FILES['img5']['tmp_name']) && ($_FILES['img6']['tmp_name'])){
      $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$iuyt3',`pan_card`='$iuyt4',`status`='$status',`image1`='$iuyt',`image2`='$iuyt2',`image3`='$iuyt5',`image4`='$iuyt6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
      echo "<script>alert('Vendor Updated Successfully');</script>";
      }
    else if(!empty($_FILES['img']['tmp_name']) && ($_POST['image1']) || !empty($_FILES['img']['tmp_name']) && (empty($_POST['image1']))){

$info=getimagesize($_FILES['img']['tmp_name']);
if(isset($info['mime'])){
  if($info['mime']=='image/jpeg'){
    $img=imagecreatefromjpeg($_FILES['img']['tmp_name']);
  }else if($info['mime']=='image/png'){
    $img=imagecreatefrompng($_FILES['img']['tmp_name']);
  }else if($info['mime']=='image/gif'){
    $img=imagecreatefromgif($_FILES['img']['tmp_name']);
}
if(isset($img)){
  $output_image=time().'.webp';
  imagewebp($img,$output_image,50); 

    $filedet=$_FILES['img']['tmp_name'];
    $loc="dist/img/vender_image/".$output_image;
    move_uploaded_file($filedet,$loc);
  
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$image3',`pan_card`='$image4',`status`='$status',`image1`='$output_image',`image2`='$image2',`image3`='$image5',`image4`='$image6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor Image 1 Updated Successfully');</script>";
  }
}
  }
  else if(!empty($_FILES['img1']['tmp_name']) && ($_POST['image2']) || !empty($_FILES['img1']['tmp_name']) && (empty($_POST['image2']))){

    $filedet=$_FILES['img1']['tmp_name'];
    $loc="dist/img/vender_image/".$iuyt2;
    move_uploaded_file($filedet,$loc);
  
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$image3',`pan_card`='$image4',`status`='$status',`image1`='$image1',`image2`='$iuyt2',`image3`='$image5',`image4`='$image6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor Image 2 Updated Successfully');</script>";
  }
  else if(!empty($_FILES['img2']['tmp_name']) && ($_POST['image3']) || !empty($_FILES['img2']['tmp_name']) && (empty($_POST['image3']))){
    $filedet=$_FILES['img2']['tmp_name'];
    $loc="dist/img/vender_image/".$iuyt3;
    move_uploaded_file($filedet,$loc);
  
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$iuyt3',`pan_card`='$image4',`status`='$status',`image1`='$image1',`image2`='$image2',`image3`='$image5',`image4`='$image6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor License Updated Successfully');</script>";
  }
  else if(!empty($_FILES['img3']['tmp_name']) && ($_POST['image4']) || !empty($_FILES['img3']['tmp_name']) && (empty($_POST['image4']))){
    $filedet=$_FILES['img3']['tmp_name'];
    $loc="dist/img/vender_image/".$iuyt4;
    move_uploaded_file($filedet,$loc);
  
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$image3',`pan_card`='$iuyt4',`status`='$status',`image1`='$image1',`image2`='$image2',`image3`='$image5',`image4`='$image6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor Pen Card Updated Successfully');</script>";
  }
  else if(!empty($_FILES['img5']['tmp_name']) && ($_POST['image5']) || !empty($_FILES['img5']['tmp_name']) && (empty($_POST['image5']))){
    $filedet=$_FILES['img5']['tmp_name'];
    $loc="dist/img/vender_image/".$iuyt5;
    move_uploaded_file($filedet,$loc);
  
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$image3',`pan_card`='$image4',`status`='$status',`image1`='$image1',`image2`='$image2',`image3`='$iuyt5',`image4`='$image6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor Image 3 Updated Successfully');</script>";
  }
  else if(!empty($_FILES['img6']['tmp_name']) && ($_POST['image6']) || !empty($_FILES['img6']['tmp_name']) && (empty($_POST['image6']))){
    $filedet=$_FILES['img6']['tmp_name'];
    $loc="dist/img/vender_image/".$iuyt6;
    move_uploaded_file($filedet,$loc);
  
    $sql=mysqli_query($conn,"UPDATE `vendor` SET `shop_name`='$shop_name',`category`='$category',`shop_address`='$shop_address',`authorized_person`='$authorized_person',`mobile_no`='$mobile_no',`whatsapp_no`='$whatsapp_no',`email`='$email',`services`='$services',`website`='$website',`facebook`='$facebook',`instagram`='$instagram',`LinkedIn`='$linkedin',`youtube`='$youtube',`shop_act_license`='$image3',`pan_card`='$image4',`status`='$status',`image1`='$image1',`image2`='$image2',`image3`='$image5',`image4`='$iuyt6',`city`='$city',`state`='$state',`location`='$location' WHERE shop_code='$id'");
    echo "<script>alert('Vendor Image 4 Updated Successfully');</script>";
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
    <a class="btn btn-primary" href="vendorregistration.php"><i class="fa fa-plus">&nbsp;</i>Create Listing</a>
    <!-- Example single danger button -->
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
                    <th>Reference No.</th>
                    <th>Shop Name</th>
                    <th>City</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql=mysqli_query($conn,"select * from vendor");
                    $count=1;
                    while($arr=mysqli_fetch_array($sql)){
                      if($arr['shop_name']!='' && $arr['category']!='' && $arr['shop_address']!='' && $arr['authorized_person']!='' && $arr['mobile_no']!='' && $arr['whatsapp_no']!='' && $arr['email']!='' && $arr['services']!='' && $arr['shop_act_license']!='' && $arr['pan_card']!='' && $arr['image1']!='' && $arr['image2']!='' && $arr['image3']!='' && $arr['image4']!='' && $arr['city']!='' && $arr['state']!='' && $arr['location']!='' && $arr['post']!='' && $arr['description']!='' && $arr['profile_img']!=''){
                    ?>
                  <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $arr['shop_code']; ?></td>
                    <td><?php echo $arr['shop_name']; ?></td>
                    <td><?php echo $arr['city']; ?></td>
                    <td><?php echo $arr['category']; ?></td>
                    <td><?php if($arr['action']=='1'){
                      echo "<a href='../api.php?catonstatus=".$arr['shop_code']."' class='btn btn-danger'>Deactive</a>";
                    } else if($arr['action']=='0'){
                      echo "<a href='../api.php?catzestatus=".$arr['shop_code']."' class='btn btn-success'>Active</a>";
                    }?></td>
                    <td>
                    <button class="btn btn-primary editshop" data-id='<?php echo $arr['shop_code']; ?>'><i class="fa fa-edit"></i></button>
                    <a href="../listing-details-2.php?detailpen=<?php echo $arr['shop_code']; ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                    <a href="../api.php?delcom=<?php echo $arr['shop_code']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php } $count++; } ?>
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
              <div class="modal-body bodymodal" id="odymodalb">
        
            
              </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="savevender">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
    <!--modal-->
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
  let compid=$(this).data("id");
  
  $.ajax({
    url:"../api.php",
    method:"POST",
    data:{compid:compid},
    success:function(data){
      $("#odymodalb").html(data);
      $("#editmodal").modal("show");
    }
  });
 
});
});
</script>
</body>
</html>
