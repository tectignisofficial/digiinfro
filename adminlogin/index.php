
<?php
session_start();

$conn=mysqli_connect("151.106.124.51","u188140722_digiinfroma","@Dm!n$2025","u188140722_digiinfroma");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }



if(isset($_POST['login'])){
$email=$_POST['email'];
$password1=$_POST['password'];

$sql=mysqli_query($conn,"select * from admin_login where email='$email'");
$row=mysqli_fetch_array($sql);

if($row>0){
    $email=$row['email'];
    $password=$row['password'];
    $hashpassword=password_verify($password1,$password);
    if($hashpassword){
      $_SESSION['id']=$row['id'];

      // $_SESSION['name']=$row['name'];

        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header("location:../admin/index.php");
    }else{
        echo "<script>alert('Password is incorrect');</script>";
    }
}
else{
    echo "<script>alert('Invalid Email Id');</script>";
}
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Digiinfromatrics</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/login.jpg" alt="login" class="login-card-img">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
              
            </p>
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/images/logo.svg" alt="logo" class="logo">
              </div>
              <p class="login-card-description">Sign into your account</p>
                <form method="post">

                  <div class="form-outline mb-4">
                  <label class="form-label">Email</label>
                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email address" required>
                   
                  </div>

                  <div class="form-outline mb-4">
                  <label class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
                   
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="login" name="login" id="login" value="login">Login</button>
    
                  </div>
                </form>


                <!-- <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a> -->
                </nav>
            
            
            
            
              
              
              
              
              
              
              </div>
          </div>
        </div>
      </div>
      <!-- <div class="card login-card">
        <img src="assets/images/login.jpg" alt="login" class="login-card-img">
        <div class="card-body">
          <h2 class="login-card-title">Login</h2>
          <p class="login-card-description">Sign in to your account to continue.</p>
          <form action="#!">
            <div class="form-group">
              <label for="email" class="sr-only">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="password" class="sr-only">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-prompt-wrapper">
              <div class="custom-control custom-checkbox login-card-check-box">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
              </div>              
              <a href="#!" class="text-reset">Forgot password?</a>
            </div>
            <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
          </form>
          <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
        </div>
      </div> -->
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/login-template-free-2/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jul 2022 05:46:43 GMT -->
</html>
