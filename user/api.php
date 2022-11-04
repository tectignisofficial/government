
<?php
include_once 'include.php';
session_start();
if(isset($_POST["login"])){
	$email=mysqli_real_escape_string($conn,$_POST["email"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);

	$sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email' AND name='Admin'") ;
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($password,$row['password']);
		

		if($verify==1){
			echo"<script>alert('Login Sucessful'),window.location='views/index.php';</script>";
			$_SESSION['use']=$email;
      $_SESSION['admin']=$row['name'];
				
		}
		else{
			echo"<script>alert('Invalid Password'),window.location='views/login.php';</script>";
		}
	}else{
		echo"<script>alert('Wrong email'),window.location='views/login.php';</script>";
	}
	}


if(isset($_POST['websave']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $role = $_POST['role'];
   $district=$_POST['district'];
	 $password = $_POST['password'];
	 $secure_pass = password_hash($password, PASSWORD_BCRYPT);
	
	 $sql = "INSERT INTO webuser (name,role,district,email,password) VALUES ('$name','$role','$','$email','$secure_pass')";
	 if (mysqli_query($conn, $sql)) {
		header("location:views/viewwebuser.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

$selectquery="select * from complaint_form group by district ";
$complaints = mysqli_query($conn,$selectquery);

$sql=mysqli_query($conn,"select type_of_offence from complaint_form where district='navi mumbai'");
$count=mysqli_num_rows($sql);

$sql=mysqli_query($conn,"select type_of_offence from complaint_form where district='raigarh'");
$count1=mysqli_num_rows($sql);

$selectquery="select * from webuser";
$webresult = mysqli_query($conn,$selectquery);

$admin="select * from webuser where role='admin'";
$adminresult = mysqli_query($conn,$admin);
$selectquery="select * from complaint_form";
$formz = mysqli_query($conn,$selectquery);


	if(isset($_POST['subm_it']))  
  {  
    $id=$_POST['id'];
   
   $fir=$_POST['fir']; 
   $discription=$_POST['discription']; 
     
   $sql= mysqli_query($conn,"UPDATE complaint_form SET  fir = '$fir', discription = '$discription' where id = $id");
   if($sql==1)
   {
    header("Location: views/form.php");
   }
   else {
   echo 'error';
    
   }
     
   }



   $selectquery="select * from complaint_form";
   $complaint_form = mysqli_query($conn,$selectquery);

?>










