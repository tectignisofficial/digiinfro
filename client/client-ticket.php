<?php
include("../admin/include/config.php");
if(isset($_POST['submit'])){
    $ticket_no=$_POST['ticket_no'];
   $shop_name=$_POST['shop_name'];
    $subject=$_POST['subject'];
    $description=$_POST['description'];
    $comment=$_POST['comment'];
    $status=$_POST['status'];

    $sql=mysqli_query($conn,"INSERT INTO `ticket_raise`(`ticket_no`,`shop_name`,`subject`,`description`,`comment`,`status`)
     VALUES('$ticket_no','$shop_name','$subject','$description','$comment','$status')");

     if($sql==1){
        echo"<script>alert('new record has been added succesfully!');</script>";
     }
     else{
        echo"<script>alert('connection failed!');</script>";
     }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vcard project | Ticket client-form</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
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
                    <h1>Client Details</h1> 
                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Client Details</li>
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
                            <div class="card card-primary">
                            

                                <div class="card-header">
                                    <h3 class="card-title">Client form</h3>
                                </div>

                               
                                    <form method="post">
                                    <div class="card-body">

                                    <div class="form-group row">
                                            <label for="inputtext" class="col-sm-2 col-form-label">Client code<span
                                                    class="text-danger">*</span></label>
                                                                   
                                                     <div class="col-sm-4">
                                                    <input type="text" name="client_code" 
                                                    class="form-control" id="exampleclientcode" readonly>

                                            </div>
                                        </div>

                                    <div class="form-group row">
                                            <label for="exampleticketno" class="col-sm-2 col-form-label">Ticket No<label style="color:Red">*</label>
                                            </label>
                                            <div class="col-sm-4">
                                                <input type="text" name="ticket_no" class="form-control" id="ticket no"
                                              placeholder="ticket no"  required>
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label for="exampledate" class="col-sm-2 col-form-label">Shop Name<label style="color:Red">*</label></label>
                                            <div class="col-sm-4">
                                                <input type="text" name="shop_name"
                                                placeholder="shop name" class="form-control" id="shop name"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleprop" class="col-sm-2 col-form-label">Subject
                                            <label style="color:Red">*</label></label>
                                            <div class="col-sm-4">
                                            <input type="text" name="subject" class="form-control" 
                                            placeholder="subject" id="subject"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleprop" class="col-sm-2 col-form-label">Description<label
                                                    style="color:Red">*</label></label>
                                            <div class="col-sm-4">
                                                <input type="text" class="form-control"    placeholder="description" name="description" id="description" required>
                                                    
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="exampleprop" class="col-sm-2 col-form-label">Comment
                                                <label style="color:Red">*</label></label>
                                            <div class="col-sm-4">
                                                <input type="text" name="comment" class="form-control"
                                                    style="text-transform:uppercase" id="comment"
                                                    placeholder="comment" required>

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="exampleprop" class="col-sm-2 col-form-label">Status
                                                <label style="color:Red">*</label></label>
                                            <div class="col-sm-4">
                                                
                                                    <select class="form-control select2" name="status" style="width: 100%;" required>
                <option selected="selected" disable>Status</option>
                                <option value="Open">Open</option>
                                <option value="In Proccess">In Proccess</option>
                                
                              </select>

                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align:end;" >
                    <button type="submit" name="submit" id="sub" class="btn btn-primary  btn-lg" style="color: aliceblue">Submit<i class="mdi mdi-chevron-right"></i></button>
                    </div>
                                    </form>
                                </div>
                            
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'include/footer.php'; ?>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->

    <script src="plugins/jszip/jszip.min.js"></script>

    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- Page specific script -->
    <script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    })
    
    </script>
</body>

</html>