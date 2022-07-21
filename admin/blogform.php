<?php
include("include/config.php");

if(isset($_POST['submit'])){

 
  $title=$_POST['title'];
  $blog_content	=$_POST['blog_content'];
  $category=$_POST['category'];
  $meta_title=$_POST['meta_title'];
  $meta_description=$_POST['meta_description'];
  $status=$_POST['status'];

  $file=$_FILES['img']['name'];  
  $file_size=$_FILES['img']['size'];  
  $file_tmp=$_FILES['img']['tmp_name'];
  $file_type=$_FILES['img']['type'];
  
  if(
  move_uploaded_file($file_tmp,"../assets/images/blog_image/".$file)){
 
  
    echo "<script> alert ('New record has been added successfully !');</script>";
 } else {
    echo "<script> alert ('connection failed !');</script>";
 }

  $sql=mysqli_query($conn,"INSERT INTO `blog`(`title`,`blog_content`,`category_id`,`img`,`meta_title`,`meta_description`,`status`) 
  VALUES ('$title','$blog_content','$category','$file','$meta_title','$meta_description','$status')");

$sql=mysqli_query($conn,"select * from `subscriber`"); 
while($arr=mysqli_fetch_array($sql)){ 
   $email=$arr['email'];  

$from = 'Enquiry <ceo@tectignis.in>' . "\r\n";
$sendTo = 'Enquiry <'.$email.'>';
$subject = "New Blog From Digiinfromatrics";
// $fields = array( 'name' => 'name' );
$from = 'Agreerent: 1.0' . "\r\n";
$from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


$emailText = '
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="x-apple-disable-message-reformatting"> 
<title></title>
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
<style>

</style>
</head>
<body>


<!-- big image section -->
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="bg_color">
<?php 
                      
                      $sql=mysqli_query($conn,"select * from `blog`");
                   $count=1;
                       while($arr=mysqli_fetch_array($sql)){
                      ?>
    <tr>
        <td align="center">
            <table border="0" align="center" width="590" cellpadding="0" cellspacing="0" class="container590">
                <tr>

                    <td align="center" class="section-img">
                        <a href=""
                            style=" border-style: none !important; display: block; border: 0 !important;"><img src="../assets/images/blog_image/'.$file.'"
                                style="display: block; width: 590px;" width="590" border="0" alt="" /></a>




                    </td>
                </tr>
                <tr>
                    <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td align="center"
                        style="color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;"
                        class="main-header">


                        <div style="line-height: 35px">

                        '.$title.'

                        </div>
                    </td>
                </tr>

                <tr>
                    <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">
                        <table border="0" width="40" align="center" cellpadding="0" cellspacing="0"
                            bgcolor="eeeeee">
                            <tr>
                                <td height="2" style="font-size: 2px; line-height: 2px;">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td height="20" style="font-size: 20px; line-height: 20px;">&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">
                        <table border="0" width="400" align="center" cellpadding="0" cellspacing="0"
                            class="container590">
                            <tr>
                                <td align="center"
                                    style="color: #888888; font-size: 16px; font-family: Work Sans, Calibri, sans-serif; line-height: 24px;">


                                    <div style="line-height: 24px">

                                    '.$meta_description.'
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <?php    } ?>
                <tr>
                    <td height="25" style="font-size: 25px; line-height: 25px;">&nbsp;</td>
                </tr>

                <tr>
                    <td align="center">
                        <table border="0" align="center" width="160" cellpadding="0" cellspacing="0"
                            bgcolor="5caad2" style="">

                            <tr>
                                <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                            </tr>

                            <tr>
                                <td align="center"
                                    style="color: #ffffff; font-size: 14px; font-family: Work Sans, Calibri, sans-serif; line-height: 26px;">


                                    <div style="line-height: 26px;">
                                        <a href="blog-details.php" style="color: #ffffff; text-decoration: none;">READ MORE</a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td height="10" style="font-size: 10px; line-height: 10px;">&nbsp;</td>
                            </tr>

                        </table>
                    </td>
                </tr>


            </table>

        </td>
    </tr>

</table>


</body>
</html>';

try{
foreach($_POST as $key => $value){
if(isset($fields[$key])){
$emailText.="$fields[$key]: $value\n";
}
}
if( mail($sendTo,$subject,$emailText, "From:" .$from)){
echo "<script>alert('submit');</script>";}
}
catch(\Exception $e){
echo "not done";
}
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
$encode=json_encode($responseArray);
header('content-Type: application/json');
echo $encoded;
}
else{
echo $responseArray['message'];
}
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
      <form method="post" enctype="multipart/form-data">
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
                      <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>

                  </div>

                  <div class="form-group ">
                    <textarea id="summernote" name="blog_content">

                     </textarea>

                  </div>



                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label>Meta Title</label>
                      <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Meta Title">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-12">
                      <label>Meta Description</label>
                      <input type="text" name="meta_description" class="form-control" id="meta_description "
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
                          <option value="1">Publish</option>
                          <option value="0">Draft</option>

                        </select> </p>
                        <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <div class="col-12">
                      <label> Category :</label>
                      <?php 
                  $query=mysqli_query($conn,"select * from blog_category");
                
                  ?>


                      <select class="form-control select2" name="category" id="category" style="width: 100%;" required>
                        <option selected="selected" disabled>select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>
                        <option value="<?php echo $sql['id'];?>"><?php echo $sql['name'];?></option>
                        <?php
                    }
                    ?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card card-primary">
                <div class="card-body">

                  <div class="form-group row">
                    <label for="exampledate">Image</label>
                      <input type="file" name="img">

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