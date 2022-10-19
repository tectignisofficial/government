<?php
include_once '../include.php';
session_start();
if(isset($_POST['sub'])){
	$email=$_SESSION['email']	;
  $user_otp=$_POST['otp1'];  
  $otp=$_SESSION['otp'];
  echo $user_otp;
  echo $_SESSION['otp'];
  if($otp==$user_otp){
    
    header("Location:reset.php");
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">

  <style>
    .card {
    width: 350px;
    padding: 10px;
    border-radius: 20px;
    background: #fff;
    border: none;
    height: 350px;
    position: relative
}
.container {
    height: 100vh
}
body {
    background: #eee
}
.mobile-text {
    color: #989696b8;
    font-size: 15px
}
.form-control {
    margin-right: 12px
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #ff8880;
    outline: 0;
    box-shadow: none
}
.cursor {
    cursor: pointer
}
  </style>
 <link href="../dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
 <link href="../dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
</head>
<body>
<div class="d-flex justify-content-center align-items-center container">
    <div class="card py-5 px-3">
        <h5 class="m-0">Email verification</h5>
        <span class="mobile-text">Enter the code we just send on your mobile phone <b class="text-danger"><?php echo $email; ?></b></span>
        <div class="d-flex flex-row mt-5 mb-4">
          <form method="post">
          <input type="text" class="form-control" name="otp1"autofocus="">
          </div>
          <input type="submit" class="btn btn-success" name="sub" value="send">
</form>
        <div class="text-center mt-4"><span class="d-block mobile-text">Don't receive the code?</span><span class="font-weight-bold text-danger cursor">Resend</span></div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>