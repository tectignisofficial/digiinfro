<?php
include("include/config.php");

if(isset($_POST['save'])){

 
  $name=$_POST['name'];
  $slug=$_POST['slug'];
  $status=$_POST['status'];
  

  $sql=mysqli_query($conn,"INSERT INTO `blog_category`(`name`,`slug`,`status`) 
  VALUES ('$name','$slug','$status')");
}


if(isset($_GET['delid'])){
  $id=mysqli_real_escape_string($conn,$_GET['delid']);
  $sql=mysqli_query($conn,"delete from blog_category where id='$id'");
  

  if($sql=1){
      header("location:categoryblog.php");
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

  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  
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
            <h1 class="m-0">Category Table</h1>
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
   

    <!-- Main content -->
    <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                        <div class="card-tools my-3" style="text-align:end;">
                                                <a class="btn btn-primary"  data-tt="tooltip" title=""  data-toggle="modal" data-target="#myModal"
                                                    data-original-title="Click here to Add New Enquiry"><i
                                                    class="fas fa-user-friends mr-2"></i>New Blog Category</a>

                                                    
                                    </div>
                            <!-- /.card -->
                            <div class="card">
                                
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from `blog_category`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            <tr>
                                                <td> <?php echo $count;?> </td>
                                                <td> <?php echo $arr['name'];?> </td>
                                                <td> <?php echo $arr['slug'];?></td>
                                                <td> 
                                                <?php
                                                $status=$arr['status'];
                                                if($status=='0'){
                                                    echo '<span class="badge badge-success">Active</span>';
                                                }
                                               
                                                else if($status=='1'){
                                                    echo '<span class="badge badge-danger">Deactive</span>';
                                                }
                                                ?>    
                                                </td> 
                                                <td>
                                                     <?php
                                                                                $status=$arr['status'];
                                                                                if($status=='Closed'){
                                                                                ?>
                                                                  

                                                            
                                                                            <?php
                                                                                }
                                                                                else{
                                                                                ?>
                                               
                                                <button class="btn btn-sm btn-primary dnkeditid" data-id='<?php echo $arr['id']; ?>'><i class="fas fa-edit"></i></button>
                                               <a href="categoryblog.php?delid=<?php echo $arr['id']; ?>"><button
                                                            type="button" class="btn btn-danger btn-rounded btn-icon"
                                                            onclick="ConfirmDelete()" style="color: aliceblue"> <i
                                                                class="fas fa-trash"></i> </button></a>
                                                                <?php } ?>
</td>
                                                                                </tr>
                                                                                <?php $count++;   } ?>
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
                </div>
                <!-- /.container-fluid -->
                <!-- modal form -->
                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header"style="text-align:center;">
                        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Caregory Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <div class="modal-body" >
                      <div class="card-body">       
                      <form method="post">
            <div class="modal-body body1">
                <div class="row">   
                <div class="col-4">
                <b> Name :</b><br>
                </div>
                <div class="col-8">
                <p>  <input type="text" name="name" class="form-control" placeholder="name" required> </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Slug :</b><br>
                </div>
                <div class="col-8">
                <p> <input type="text" name="slug" class="form-control" placeholder="slug" required>  </p>
                </div>
                </div>

                <div class="row">   
                 <div class="col-4">
                <b> Status :</b><br>
                </div>
                <div class="col-8">
                <p>  <select required class="form-control" name="status"
                                id="SelectStatus">
                                <option value="" disabled selected hidden>select</option>
                                <option value="0">Active</option>
                                <option value="1">Deactive</option>
                               
                            </select>  </p>
                </div>
                </div>

                        
                    </div>
                  
                <!-- end modal form -->
                
                
                <div class="my-2 d-flex justify-content-between align-items-center">
                  
                </div>
                
             
                      </div>
                      <div class="modal-footer" style="justify-content:center;">
                      <div class="mt-6">
                      <button type="close" class="btn btn-danger" value="close" name="close"> Close</button>
                          
                        </div>
                        <div class="mt-6">
                          <button type="submit" class="btn btn-primary" value="Save" name="save">Save</button>
                        </div>

                        
                      </form>
</div>
                      </div>
                    </div>
                  </div>
                </div>
            </section>
    <!-- /.content -->
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
          <!-- /.modal-content -->
        </div>
  </div>
  <!-- /.content-wrapper -->
  <?php
include("include/footer.php");

?>


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
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="plugins/jszip/jszip.min.js"></script>
    <script src="plugins/pdfmake/pdfmake.min.js"></script>
    <script src="plugins/pdfmake/vfs_fonts.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
   <!-- AdminLTE App -->

    <script>
$(document).ready(function(){
$('.dnkeditid').click(function(){
  let dnkid = $(this).data('id');

  $.ajax({
   url: 'blogmodalform.php',
   type: 'post',
   data: {dnkid: dnkid},
   success: function(response1){ 
     $('.body1').html(response1);
     $('#dnkModal').modal('show'); 
   }
 });
});
});
</script>
    <!-- AdminLTE App -->
    <script>
     $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
$(function() {
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
