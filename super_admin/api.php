
<?php
include_once 'include.php';
session_start();
if(isset($_POST["login"])){
	$email=mysqli_real_escape_string($conn,$_POST["email"]);
	$password=mysqli_real_escape_string($conn,$_POST["password"]);

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


  $role='';
  $email=$_SESSION['use'];
  $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
  while($res=mysqli_fetch_array($sql)){
    $role=$res['role'];
  }

if(isset($_POST['websave']))
{	 
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $role = $_POST['role'];
   $district=$_POST['district'];
	 $password = $_POST['password'];
	 $secure_pass = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO webuser (name,role,district,email,password) VALUES ('$name','$role','$district','$email','$secure_pass')";
	 if (mysqli_query($conn, $sql)) {
		header("location:viewwebuser.php");
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


  if(isset($_POST['s_ubmit']))  
  {  
   $book_no=$_POST['book_no']; 
   $date=$_POST['date']; 
   $year=$_POST['year']; 
   $complaint_no=$_POST['complaint_no'];
   $district=$_POST['district']; 
   $police_station=$_POST['police_station']; 
   $section=$_POST['section']; 
   $complaint_filer_name=$_POST['complaint_filer_name'];
   $complaint_filer_address=$_POST['complaint_filer_address'];
   $checkbox1=$_POST['crime'];  
   $chk="";  
   foreach($checkbox1 as $chk1)  
	 {  
		$chk .= $chk1.",";  
	 }  
	  $query=mysqli_query($conn,"select * from complaint_form where complaint_no='$complaint_no'");
	 if(mysqli_num_rows($query)>0){
	     echo "<script>alert('Complaint number already exist');window.location.href='views/form1.php'</script>";
	 }else{
           $in_ch=mysqli_query($conn,"insert into complaint_form(complaint_filer_address,complaint_filer_name,section,police_station,district,book_no,date,complaint_no,type_of_offence,year)
        	values ('$complaint_filer_address','$complaint_filer_name','$section','$police_station','$district','$book_no','$date','$complaint_no','$chk','$year')");  
        	if($in_ch==1)  
        	{  
            $last_id = mysqli_insert_id($conn);
            
            header("Location: form2.php?id=".$last_id);
        	}
	 }
} 




  

	if(isset($_POST['su_bmit']))  
  {  
    $id=$_POST['id'];
    $criminal_name=$_POST['criminal_name'];
   $criminal_address=$_POST['criminal_address'];
   $category_and_caste=$_POST['category_and_caste'];  
   $caste_certificate=$_POST['caste_certificate']; 
   $aadhaar_card=$_POST['aadhaar_card'];
   $bank_info=$_POST['bank_info'];
   $charge_sheet=$_POST['charge_sheet'];
   $medical_report=$_POST['medical_report'];
   
  $sql= mysqli_query($conn,"UPDATE complaint_form SET criminal_name = '$criminal_name', criminal_address = '$criminal_address', category_and_caste = '$category_and_caste', caste_certificate = '$caste_certificate', aadhaar_card = '$aadhaar_card', bank_info = '$bank_info', charge_sheet = '$charge_sheet', medical_report = '$medical_report' where id = $id");
  if($sql==1)
  {
   
   header("Location: views/form3.php?id=".$id) ;
  }
  else {
  echo 'error';
   
  }
    
  }

  


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

