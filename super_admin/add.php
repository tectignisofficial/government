<?php
include_once 'include.php';
session_start();
if(isset($_POST["login"])){
	$email=$_POST["email"];
	$password=$_POST["password"];

	$sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
	if(mysqli_num_rows($sql)>0){
		$row=mysqli_fetch_assoc($sql); 
		$verify=password_verify($password,$row['password']);
		$_SESSION['name']=$row['name'];

		if($verify==1){
			echo"<script>alert('Login Sucessful'),window.location='index.php';</script>";
			$_SESSION['use']=$email;
				
		}
		else{
			echo"<script>alert('Invalid Password'),window.location='login.php';</script>";
		}
	}else{
		echo"<script>alert('Wrong email'),window.location='login.php';</script>";
	}
	}


if(isset($_POST['websave']))
{	 
	
	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $role = $_POST['role'];
	 $password = $_POST['password'];
	 $secure_pass = password_hash($password, PASSWORD_BCRYPT);
	
	 $sql = "INSERT INTO webuser (name,role,email,password) VALUES ('$name','$role','$email','$secure_pass')";
	 if (mysqli_query($conn, $sql)) {
		header("location:viewwebuser.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}


$selectquery="select * from complaint_form";
$complaints = mysqli_query($conn,$selectquery);

$selectquery="select * from webuser";
$webresult = mysqli_query($conn,$selectquery);

$admin="select * from webuser where role='admin'";
$adminresult = mysqli_query($conn,$admin);





if(isset($_POST['submi_t']))  
{  
$target_dir = "../file";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));



$book_no=$_POST['book_no']; 
$date=$_POST['date'];  
$complaint_no=$_POST['complaint_no'];
$district=$_POST['district']; 
$taluka=$_POST['taluka']; 
$police_station=$_POST['police_station']; 
$sub_police_station=$_POST['sub_police_station']; 
$section=$_POST['section']; 
$complaint_filer_name=$_POST['complaint_filer_name'];
$complaint_filer_address=$_POST['complaint_filer_address'];
$victim_name=$_POST['victim_name'];
$criminal_name=$_POST['criminal_name'];
$criminal_address=$_POST['criminal_address'];
$category_and_caste=$_POST['category_and_caste']; 
$fir=$_POST['fir']; 
$discription=$_POST['discription']; 
$caste_certificate=$_POST['caste_certificate']; 
$aadhaar_card=$_POST['aadhaar_card'];
$bank_info=$_POST['bank_info'];
$charge_sheet=$_POST['charge_sheet'];
$medical_report=$_POST['medical_report'];
$myfile=$_POST['myfile'];
$checkbox1=$_POST['crime'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$in_ch=mysqli_query($conn,"insert into complaint_form(myfile,medical_report,charge_sheet,bank_info,aadhaar_card,caste_certificate,category_and_caste,discription,fir,criminal_address,criminal_name,victim_name,complaint_filer_address,complaint_filer_name,section,sub_police_station,police_station,taluka,district,book_no,date,complaint_no,type_of_offence)
 values ('$myfile','$medical_report','$charge_sheet','$bank_info','$aadhaar_card','$caste_certificate','$category_and_caste','$discription','$fir','$criminal_address','$criminal_name','$victim_name','$complaint_filer_address','$complaint_filer_name','$section','$sub_police_station','$police_station','$taluka','$district','$book_no','$date','$complaint_no','$chk')");  
if($in_ch==1)  
   {  
	header("Location: .php");
   }
   
else  
   {  
     
   }  
}


?> 