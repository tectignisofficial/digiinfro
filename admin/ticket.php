

<?php

include("include/config.php");

if(isset($_GET['delid'])){
$id=mysqli_real_escape_string($conn,$_GET['delid']);
$dnk=mysqli_query($conn,"delete from ticket_raise where Sr_no='$id'");
if($dnk=1){
    header("location:ticket.php");
}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vcard project | admin ticket</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include 'include/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include 'include/sidebar.php'; ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ticket</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Ticket</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->
                            <div class="card">
                                
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Sr.No</th>
                                                <th>Client Code</th>
                                                <th>Ticket No</th>
                                                
                                                <th>Shop Name</th>
                                                <th>Subject</th>
                                                <th>Description</th>
                                                <th>comment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                        
                        $sql=mysqli_query($conn,"select * from `ticket_raise`");
                     $count=1;
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                                            <tr>
                                                <td> <?php echo $count;?> </td>
                                                <td> <?php echo $arr['client_code'];?></td>
                                                <td> <?php echo $arr['ticket_no'];?> </td>
                                                
                                                <td> <?php echo $arr['shop_name'];?></td>
                                                <td> <?php echo $arr['subject'];?></td>
                                                <td> <?php echo $arr['description'];?> </td>
                                                <td> <?php echo $arr['comment'];?> </td>
                                                
                                                <td> 
                                                <?php
                                                $status=$arr['status'];
                                                
                                               if($status=='Open'){
                                                    echo '<span class="badge badge-success">Open</span>';
                                                }
                                                else if($status=='In Proccess'){
                                                    echo '<span class="badge badge-danger">In Proccess</span>';
                                                }
                                                
                                                ?>    
                                                </td>
                                                <td>
                                                     <?php
                                                                                $status=$arr['status'];
                                                                                if($status=='Closed'){
                                                                                ?>
                                                                   <button class="btn btn-sm btn-primary dnkediti" data-id='<?php echo $arr['Sr_no']; ?>'><i class="fas fa-eye"></i></button>

                                                            <a href="listofcomplaint.php?delid=<?php echo $arr['Sr_no']; ?>">
                                                            <button type="button" class="btn btn-danger btn-sm btn-icon"
                                                            onclick="ConfirmDelete()" style="color: aliceblue"> <i
                                                                class="fas fa-trash"></i> </button></a>
                                                                            <?php
                                                                                }
                                                                                else{
                                                                                ?>
                                               <button class="btn btn-sm btn-primary dnkediti" data-id='<?php echo $arr['Sr_no']; ?>'><i class="fas fa-eye"></i></button>

                                                <button class="btn btn-sm btn-primary dnkeditid" data-id='<?php echo $arr['Sr_no']; ?>'><i class="fas fa-edit"></i></button>
                                                    <a href="ticket.php?delid=<?php echo $arr['Sr_no']; ?>"><button
                                                            type="button" class="btn btn-danger btn-sm btn-icon"
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
            </section>
            <!-- /.content -->
        </div>
        
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
        <!-- /.modal-dialog -->
      </div>
        <!-- /.content-wrapper -->
        <?php include("include/footer.php"); ?>



        <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
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
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->

<script>
$(document).ready(function(){
$('.dnkeditid').click(function(){
  let dnkid = $(this).data('id');

  $.ajax({
   url: 'modal-form.php',
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
<script>
$(document).ready(function(){
$('.dnkediti').click(function(){
  let dnkidno = $(this).data('id');

  $.ajax({
   url: 'modal-form.php',
   type: 'post',
   data: {dnkidno: dnkidno},
   success: function(response1){ 
     $('.body1').html(response1);
     $('#dnkModal1').modal('show'); 
   }
 });
});
});
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

</html>