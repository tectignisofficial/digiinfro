


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Compose Message</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
  include("include/header.php");
  include("include/sidebar.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Email For Subscriber</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Email For Subscriber</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col -->
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">Email For Subscriber</h3>
              </div>
              <!-- /.card-header -->
              <form action="" method="post">
              <div class="card-body">
                <div class="form-group">
                  <h5>Subject <span class="text-danger">*</span></h5>
                  <input class="form-control" type="text" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                  <h5>Message<span class="text-danger">*</span></h5>
                    <textarea id="compose-textarea" class="form-control" name="message" style="height: 300px">
                    </textarea>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-warning" name="save"> Send Email</button>
              </div>
              </form>
              <!-- /.card-footer -->
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
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

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
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  });
</script>
  <script>
$(document).ready(function() {
  $('#compose-textarea').summernote({
    height: 200,
    onImageUpload: function(files, editor, welEditable) {
      sendFile(files[0], editor, welEditable);
    }
  });

  function sendFile(file, editor, welEditable) {
    data = new FormData();
    data.append("file", file);
    $.ajax({
      data: data,
      type: "POST",
      url: "Your URL POST (php)",
      cache: false,
      contentType: false,
      processData: false,
      success: function(url) {
        editor.insertImage(welEditable, url);
      }
    });
  }
});
</script>
</script>
<?php
include"include/config.php";
if(isset($_POST['save'])){
  $subj=$_POST['subject'];  
  $message=$_POST['message'];                        
                     $sql=mysqli_query($conn,"select * from `subscriber`"); 
                     while($arr=mysqli_fetch_array($sql)){ 
                        $email=$arr['email'];  

  $from = 'Enquiry <ceo@tectignis.in>' . "\r\n";
  $sendTo = 'Enquiry <'.$email.'>';
  $subject = $subj;
  // $fields = array( 'name' => 'name' );
  $from = 'Agreerent: 1.0' . "\r\n";
  $from .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $from .= "Content-Type: multipart/mixed;"; 
  $from .= "boundary = $boundary\r\n"; 
  
  
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
  <body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f1f1f1;">
     <div>
      <p>'.$message.'</p>
      <div>congratulations</div>
     </div>
  </body>
  </html>';
  
  try{
    foreach($_POST as $key => $value){
      if(isset($fields[$key])){
        $emailText.="$fields[$key]: $value\n";
      }
    }
  if(mail($sendTo,$subject,$emailText, "From:" .$from)){
    $sql=mysqli_query($conn,"insert into `emailsub` (`message`) values ('$message')");
  }
    
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
echo"<script>swal({
  title: 'Good job!',
  text: 'You clicked the button!',
  icon: 'success',
});</script>";
  }
?>

<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
