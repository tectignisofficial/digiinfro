<?php
include("include/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin / Digiinfro</title>

 
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
  <script type="text/javascript" src="jscript/graph.js"></script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-core.min.js"></script>
    <script src="https://cdn.anychart.com/releases/8.10.0/js/anychart-pie.min.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="Digi Infromatrics" height="60" width="60">
    </div>

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
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
              <?php 
                   $query=mysqli_query($conn,"select * from vendor");
                   $count2=mysqli_num_rows($query);
                   ?>
                <div class="inner">
               
                  <h3><?php echo $count2 ?></h3>
                  <p>vendor Registration</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="completeappoval" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
              
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
              <?php
                    $sql=mysqli_query($conn,"select * from `vendor` where shop_address IS NULL or location IS NULL or authorized_person IS NULL or mobile_no IS NULL or whatsapp_no IS NULL or email IS NULL or services IS NULL or shop_act_license IS NULL or pan_card IS NULL or shop_name IS NULL or category IS NULL or image1 IS NULL or image2 IS NULL or image3 IS NULL or image4 IS NULL or city IS NULL or state IS NULL or post IS NULL or description IS NULL or profile_img IS NULL;");
                    $count=$sql->num_rows;
                    
                    ?>
                <div class="inner">
                  <h3><?php echo $count ?></h3>
  
                  <p>pending  Approval</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="pendingapproval" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                <?php
                    $sql=mysqli_query($conn,"select * from `vendor` where shop_address IS NOT NULL and authorized_person IS NOT NULL and mobile_no IS NOT NULL and whatsapp_no IS NOT NULL and email IS NOT NULL and services IS NOT NULL and shop_act_license IS NOT NULL and pan_card IS NOT NULL and shop_name IS NOT NULL and category IS NOT NULL and image1 IS NOT NULL and image2 IS NOT NULL and image3 IS NOT NULL and image4 IS NOT NULL and city IS NOT NULL and state IS NOT NULL and location IS NOT NULL and post IS NOT NULL and description IS NOT NULL and profile_img IS NOT NULL;");
                    $count1=$sql->num_rows;
                    ?>
                    <h3> <?php echo $count1 ?> </h3>
                   
  
                  <p>Complete  Approval</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="completeappoval" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
              <?php 
                   $query=mysqli_query($conn,"select * from listcategory");
                   $count=mysqli_num_rows($query);
                   ?>
                <div class="inner">
                <h3><?php echo $count ?></h3>
  
                  <p>Category</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="category.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-6 connectedSortable">
             <!-- Map card -->
     
             <div class="card">
<div class="card-header">
<h3 class="card-title"  style="width:100%">
<i class="fas fa-chart-pie mr-1"></i>
Total Case
</div>
</h3>
<div class="card-body">
<div class="tab-content p-0">

<div class="container" style="width: 50%; margin: 15px auto;">
  <h2>Vendor Registration</h2>
  <div id="container" style="width: 100%; height:300px; margin: 0; padding: 0; "></div>
 
</div>
<script>
   anychart.onDocumentReady(function () {
  var data = anychart.data.set([
    ['complete',<?php echo $count ?>],
    ['pending', <?php echo $count1 ?>],
    
  ]);
  
  var chart = anychart.pie(data);
  chart.innerRadius('55%')
  var palette = anychart.palettes.distinctColors();
  palette.items([
    { color: '#2ecc71' },
    { color: '#3498db' },
    
  ]);

  chart.palette(palette);
 
  chart.legend(false);
  
  var label = anychart.standalones.label();
  label
    .useHtml(true)
    .text(
      '<span style = "color:#3498db; font-size:20px;">Vendor<br/></span>' +
      '<span style="color:#2ecc71; font-size:14px;"><i>Registeration</span>'
    )
    .position('center')
    .anchor('center')
    .hAlign('center')
    .vAlign('middle');
  chart.center().content(label);
  chart.container('container');
    chart.draw();
});
</script>
</div>
</div>
</div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-6 connectedSortable">
     <!-- Map card -->
     <div class="card">
<div class="card-header">
<h3 class="card-title"  style="width:100%">
<i class="fas fa-chart-pie mr-1"></i>
Total Case
</div>
</h3>
<div class="card-body">
<div class="tab-content p-0">

<div class="container" style="width: 50%; margin: 15px auto;">
  <h2>Contact/Subscriber</h2>
  <div id="contain" style="width: 100%; height:300px; margin: 0; padding: 0; "></div>
 
</div>
<?php
$contact=mysqli_query($conn,"select * from contact");
$confull=mysqli_num_rows($contact);
$emailc=mysqli_query($conn,"select * from subscriber");
$emailcfull=mysqli_num_rows($emailc);

?>
<script>
   anychart.onDocumentReady(function () {
  var data = anychart.data.set([
    ['contact',<?php echo $confull ?>],
    ['Subscriber', <?php echo $emailcfull ?>],
   
  ]);
  
  var chart = anychart.pie(data);
  chart.innerRadius('55%')
  var palette = anychart.palettes.distinctColors();
  palette.items([
    
    { color: '#cc8033' },
    { color: '#cca633' },
  ]);

  chart.palette(palette);
 
  chart.legend(false);
  
  var label = anychart.standalones.label();
  label
    .useHtml(true)
    .text(
      '<span style = "color:#3498db; font-size:20px;">pending<br/></span>' +
      '<br/><br/></br><span style="color:#2ecc71; font-size:20px;"><i>complete</span>'
    )
    .position('center')
    .anchor('center')
    .hAlign('center')
    .vAlign('middle');
  chart.center().content(label);
  chart.container('contain');
    chart.draw();
});
</script>
</div>
</div>
</div>
                  <!-- ./col -->
  
         
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <?php include"include/footer.php" ?>
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
  <script src="../client/dist/js/pages/dashboard.js"></script>

</body>

</html>