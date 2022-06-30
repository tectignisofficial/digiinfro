<?php include("include/config.php");
  
  $id='';
  $name='';
  $slug='';
  $icon='';
  $image='';
  $status='';
  if(isset($_GET['editlistcate'])){
  $id=$_GET['editlistcate'];
  $sql=mysqli_query($conn,"select * from listcategory where id='$id'");
  $row=mysqli_fetch_array($sql);
  $id=$row['id'];
  $name=$row['name'];
  $slug=$row['slug'];
  $icon=$row['icon'];
  $image=$row['image'];
  $status=$row['status'];
  }?>
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

  <!--icon-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>
  <!--icon-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    label{
        color:grey;
        font-size:1.1rem;
    }
  </style>
     <link href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" rel="stylesheet">
    <link href="dist/css/fontawesome-iconpicker.min.css" rel="stylesheet">
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
    <a href="category.php" class="btn btn-primary"><i class="fa fa-bars">&nbsp;</i>Listing Category</a>
</div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listing Category Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <form method="post" action="../api.php" enctype="multipart/form-data">
                <div class="form-group">
                <label for="catname">Name</label>
                <input type="hidden" name="catid"  value="<?php echo $id; ?>"/>
                <input type="text" name="catname" id="catname" value="<?php echo $name; ?>" class="form-control"/>
                <span id="spancatname"></span>
                </div>
                <div class="form-group">
                <label for="catslug">Slug</label>
                <input type="text" name="catslug" id="catslug" value="<?php echo $slug; ?>" class="form-control"/>
                <span id="spancatslug"></span>
                </div>
                <div class="form-group">
                <label for="caticon">Icon</label>
                <div class="input-group-prepend">
            <span class="input-group-text h-100 selected-icon " ></span>
            <input class="form-control iconpicker" name="caticon" value="<?php echo $icon; ?>" id="caticon" type="text" />
        </div>
                
                </div>
               
                <div class="form-group">
                <label for="catimage">Image</label>
                <input type="file" name="catimage" id="catimage" class="form-control" accept="image/gif, image/jpeg, image/png, image/jpg" />
                </div>
                <?php
                if(isset($_GET['editlistcate'])){ ?>
                    <input type="hidden" name="image" value="<?php echo $image ?>" class="mt-2"/>
                    <img src="image/listCategoryImage/<?php echo $image ?>" width="100" height="100" class="mb-4">
               <?php }
                ?>
                <div class="form-group ">
                <label for="catstatus">Status</label>
                <select type="text" name="catstatus" id="catstatus" class="form-control" >
                    <option value="<?php echo $status ?>"><?php echo $status ?></option>
                    <option value="Active">Active</option>
                    <option value="Deactive">Deactive</option>
                </select>
                </div>
                <div class="form-group">
                <button type="submit" name="catsub" id="catsub" class="btn btn-success">Save
                </button>
                </div>
               </form>
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
<script src="dist/js/valid.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/iconpicker.js"></script>
    <script>
        (async () => {
            const response = await fetch('dist/js/bootstrap5.json')
            const result = await response.json()

            const iconpicker = new Iconpicker(document.querySelector(".iconpicker"), {
                icons: result,
                showSelectedIn: document.querySelector(".selected-icon"),
                searchable: true,
                selectedClass: "selected",
                containerClass: "my-picker",
                hideOnSelect: true,
                fade: true,
                defaultValue: 'bi-alarm',
                valueFormat: val => `bi ${val}`
            });

            iconpicker.set() // Set as empty
            iconpicker.set('bi-alarm') // Reset with a value
        })()
        
    </script>
</body>
</html>
