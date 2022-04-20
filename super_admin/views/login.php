<?php
include_once '../include.php';
session_start();
if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                           // true then header redirect it to the home page directly 
 {
    header("Location:index.php"); 
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atrocity Raigad | Log in</title>
  <link rel="shortcut icon" type="image/png" href="../dist/img/government.png"/>


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div style="text-align:center;width:100%">
  <img src="../assets/img/slide/favicon.png " alt="" height="100" width="100">
</div>
  <div class="login-logo">
   <b>Atrocity Raigad</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">तुमचे सत्र सुरू करण्यासाठी साइन इन करा</p>

      <form action="../api.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" required placeholder="ई-मेल" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" required placeholder="पासवर्ड" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                 लक्षात ठेवा
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" value="साइन इन" name="login" >
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->
      <div class="row">
          <div class="col-8">
              <a href="forgot_password.php">मी पासवर्ड विसरलो</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div>
            <a href="../index.html" class="btn btn-primary btn-block mt-3" > Back to website</a>
            <!-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> -->
          </div>
          <!-- /.col -->
        </div>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
