<?php
include("include/config.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

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
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- summernote -->

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
              <h1 class="m-0">Blog</h1>
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
      <form method="post">
      <section class="content">
        <div class="container-fluid">
          <div class="row" style="display:flex;">
            <div class="col-8">
              <!-- /.card -->
              <div class="card card-primary">


                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-12">
                      <h5>Title</h5>
                      <input type="text" class="form-control" placeholder="Title">
                    </div>

                  </div>

                  <div class="form-group ">
                    <textarea id="summernote">

                     </textarea>

                  </div>



                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label>Meta Title</label>
                      <input type="text" name="title" class="form-control" id="title" placeholder="Meta Title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label>Meta Description</label>
                      <input type="text" name="description" class="form-control" id="description "
                        placeholder="Meta Description">
                    </div>
                  </div>
                </div>
              </div>
        
            </div>
            <div class="col-4">
              <!-- /.card -->
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-12">
                      <label>Status : </label>
                      <p> <select required class="form-control" name="status" id="Selectstatusblog">
                          <option value="" disabled selected hidden>select</option>
                          <option>Active</option>
                          <option>Deactive</option>

                        </select> </p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-12">
                      <label> Category :</label>
                      <p> <select required class="form-control" name="category" id="SelectCategory">
                          <option value="" disabled selected hidden>select</option>
                          <option>Active</option>
                          <option>Deactive</option>

                        </select> </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="exampledate">Image</label>
                      <input type="file" name="blogimage">

                  </div>
                </div>
              </div>
            </div>


            <!-- /.col -->

            <!-- /.row -->
          </div>
          <!-- /.container-fluid -->
      </section>
</form>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
include("include/footer.php");

?>
    <div class="modal fade" id="dnkModal">
      <div class="modal-dialog">
        <div class="modal-content body1">

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="modal fade" id="dnkModal1">
      <div class="modal-dialog">
        <div class="modal-content body1">

        </div>
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
   
      <script src="plugins/summernote/summernote-bs4.min.js"></script>
      <script>
        $(function () {
          // Summernote
          $('#summernote').summernote()


        })
      </script>
      <script>
        $(document).ready(function () {
          $('.dnkeditid1').click(function () {
            let dnkidno1 = $(this).data('id');

            $.ajax({
              url: 'blogmodalform.php',
              type: 'post',
              data: {
                dnkidno1: dnkidno1
              },
              success: function (response1) {
                $('.body1').html(response1);
                $('#dnkModal1').modal('show');
              }
            });
          });
        });
      </script>
      <script>
        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()

          //Initialize Select2 Elements
          $('.select2bs4').select2({
            theme: 'bootstrap4'
          })
        })
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
      </script>
</body>

</html>