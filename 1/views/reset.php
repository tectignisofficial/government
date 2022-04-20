<?php include_once '../include.php';
session_start();
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="dist/css/style.css">
</head>
<body>
	
    
	<div class="row">
	<div class="wrapper ">
    <h2>Reset password </h2>
    <div id="formContent">
	<form method="post" id="loginForm">
    <label>New Password</label>
            <div class="form-group pass_show"> 
                <input type="text" class="form-control" name="pass" placeholder="New Password"> 
            </div> 
            <label>Confirm Password</label>
            <div class="form-group pass_show"> 
                <input type="text" class="form-control" placeholder="Confirm Password" name="cpass"> 
            </div> 
		<input type="submit" name="sub" value="Create New Password">
	</form>
    </div>  
	</div>
</div>
</div>
	<?php
		if(isset($_POST['sub'])){
			
			$newpass=$_POST['pass'];
			$cpass=$_POST['cpass'];
			$email=$_SESSION['email'];
			if($newpass==$cpass){
                $pass=password_hash($newpass,PASSWORD_BCRYPT);
				
				$q=mysqli_query($conn,"update webuser set password='$pass',verify_token='0' where email='$email'");
				if($q){
					
					echo"<script>alert('password reset successfully..');window.location='index.php'</script>";
					
				}
			}
			else{
				
				echo"pass and cpass doent match";
			}
		}
	?>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>