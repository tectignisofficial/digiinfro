<?php
include"include/config.php";
 if(isset($_POST['submit'])){
  $hostname = $_POST['host'];
  $port = $_POST['port'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $query="UPDATE email_configuration SET host='$hostname',port='$port',email='$email',password='$password'";
  $result=mysqli_query($conn,$query);
  if($result){
    echo"<script>alert('Successfully Updated');</script>";
  }
  else{
    echo"<script>alert('Not Updated');</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Setting - Email Configuration</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <?php include"include/header.php" ?>

    <!-- Main Sidebar Container -->

    <?php include"include/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Email Configuration</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Email Configuration</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      $sql = "SELECT * FROM `email_configuration`";
      $result = mysqli_query($conn, $sql);
      $arr = mysqli_fetch_assoc($result);
      ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <form class="form-horizontal" name="emailSetupForm" id="emailSetupForm" method="post"
                enctype="multipart/form-data">
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Email setup</h3>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                    <div class="form-group">
                      <label for="inputPassword3">Host<span class="text-danger">*</span></label>
                      
                        <input type="text" name="host" value="<?php echo $arr['host'] ?>"
                          class="form-control" id="host" placeholder="Host">
                        <span id="err_host" class="error invalid-feedback"></span>
                    
                    </div>
                    </div>
                     <div class="col-6">
                    <div class="form-group">
                      <label for="inputPassword3">Port<span
                          class="text-danger">*</span></label>
                     
                        <input type="text" name="port" value="<?php echo $arr['port'] ?>" class="form-control"
                          id="port" placeholder="Port">
                        <span id="err_port" class="error invalid-feedback"></span>
               
                    </div>
                    </div>
</div>

 <div class="row">
                      <div class="col-6">
                    <div class="form-group">
                      <label for="inputPassword3">Email<span
                          class="text-danger">*</span></label>
                     
                        <input type="email" name="email" value="<?php echo $arr['email'] ?>"
                          class="form-control" id="email" placeholder="Email">
                        <span id="err_email" class="error invalid-feedback"></span>
                    
                    </div>
                    </div>
                     <div class="col-6">
                    <div class="form-group">
                      <label for="inputPassword3">Password<span
                          class="text-danger">*</span></label>
                        <input type="password" name="password" value="<?php echo $arr['password'] ?>"
                          class="form-control" id="password" placeholder="Password">
                        <span id="err_password" class="error invalid-feedback"></span>
                    </div>
                    </div>
                    </div>


                  </div>
                  <div class="card-footer">
                    <button type="submit" id="emailSettingSubmit" name="submit" class="btn btn-primary"
                      data-tt="tooltip" title="" data-original-title="Click here to Save">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("include/footer.php"); ?>

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
  <!-- AdminLTE for demo purposes -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>