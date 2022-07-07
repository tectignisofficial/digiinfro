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
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php include("include/header.php") ?>
  <?php include("include/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Email Template</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Email Template</li>
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
          <div class="col-md-12">
          <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Email Template</h5>
                  <!-- <div class="card-tools">
                  <a href="employees-Grid.html"> <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                      <i class="fas fa-th-large"></i></button></a> 
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                      href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-plus"></i> Add New</button>
                  </div> -->
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="example1" class="table table-striped dataTable dtr-inline"
                          aria-describedby="example1_info">
                          <thead>
                          <tr>
                              <th>Variable</th>
                              <th>Meaning</th>
                          </tr>
                          </thead>
                          <tbody>
                          <tr>
                              <td>{{name}}</td>
                              <td>User Name</td>
                          </tr>              
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
          <div class="card">
                <!-- <div class="card-header">
                  <h5 class="card-title">Email Template</h5>
                  <div class="card-tools">
                  <a href="employees-Grid.html"> <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                      <i class="fas fa-th-large"></i></button></a> 
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                      href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-plus"></i> Add New</button>
                  </div>
                </div> -->

                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                       <label>Subject<sup><b style="color:red;">*</b></sup></label>
                              <div class="input-group">
                                <input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required>
                              </div>
                            <!-- /input-group -->
                          </div>
                         <div class="col-sm-12">
                         <div class="form-group">
                             <label for="description">Description<sup><b style="color:red;">*</b></sup></label>
                                 <textarea id="summernote">
                                 <strong>  Dear <em>{{name}},</em></strong><br><p>Do You Want To Reset Your Password? Please Click The Following Link and Reset Your Password.</p>
                                   </textarea>
                         </div>
                         <div class="col-sm-12">
                            <button class="btn btn-success">Update</button>
                         </div>
                         </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("include/footer.php") ?>

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
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script>
        $(function () {
          // Summernote
          $('#summernote').summernote()
      
          // CodeMirror
          CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
          });
        })
      </script>
</body>
</html>