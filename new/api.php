<?php
session_start();
require("include/config.php");

//form1 start
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
   $checkbox1=$_POST['crime'];  
   $chk="";  
   foreach($checkbox1 as $chk1)  
	 { $chk .= $chk1.",";  }  
   if($_POST['id1'] == ''){
	  $query=mysqli_query($conn,"select * from complaint_form where complaint_no='$complaint_no'");
	 if(mysqli_num_rows($query)>0){
	     echo "<script>alert('Complaint number already exist');window.location.href='form1.php'</script>";
	 }else{
           $in_ch=mysqli_query($conn,"insert into complaint_form(complaint_filer_name,section,police_station,district,book_no,date,complaint_no,type_of_offence,year)
        	values ('$complaint_filer_name','$section','$police_station','$district','$book_no','$date','$complaint_no','$chk','$year')");  
        	if($in_ch==1)  
        	{  
            $last_id = mysqli_insert_id($conn);
            header("Location: form2.php?form2=".$last_id);
        	}
	 }
  }else{
    $id=$_POST['id1'];
    $sql=mysqli_query($conn,"update complaint_form set book_no='$book_no',date='$date',complaint_no='$complaint_no',district='$district',police_station='$police_station',section='$section',complaint_filer_name='$complaint_filer_name',year='$year', type_of_offence='$chk' where id='$id'");
    if($sql==1) { header("Location:form2.php?form2=".$id); }
  }
} 

//form1 end


//form2 start
    if(isset($_POST['form2su_bmit']))  
  {  
   $criminal_name=$_POST['criminal_name'];
   $form_2_id=$_POST['form_2_id'];
   $sql=mysqli_query($conn,"select * from criminal where caseid='$form_2_id'");
   if(mysqli_num_rows($sql)>0){
    $sql= mysqli_query($conn,"update criminal set criminal_name='$criminal_name' where caseid='$form_2_id'");
   }else{
    $sql= mysqli_query($conn,"INSERT INTO criminal(`caseid`, `criminal_name`) VALUES ('$form_2_id','$criminal_name')");
  }
    if($sql==1)
    {
     header("Location:form3?form3=".$form_2_id) ;
    }
    else {  echo 'error'; }
  }
//form2 end

//form3 start
if(isset($_POST['sub_mit']))  
  {  
   $victim_name=$_POST['victim_name']; //
   $victim_address=$_POST['victim_address'];// 
   $caste_certificate=$_POST['caste_certificate'];// 
   $aadhaar_card=$_POST['aadhaar_card'];//
   $charge_sheet=$_POST['charge_sheet'];//
   $category_and_caste=$_POST['category_and_caste'];
   $id4=$_POST['id'];
   $sql=mysqli_query($conn,"select * from victim where caseid='$id4'");
   if(mysqli_num_rows($sql)>0){
    $sql= mysqli_query($conn,"update victim set name='$victim_name',address='$victim_address',victim_age=' $victim_age',caste='$category_and_caste',caste_certificate=' $caste_certificate',aadhar_card='$aadhaar_card',charge_sheet='$charge_sheet' where caseid='$id4'");
   }else{
    $sql=mysqli_query($conn,"insert into victim(caseid,charge_sheet,aadhar_card,caste,caste_certificate,name,address)
    values ('$id4','$charge_sheet','$aadhaar_card','$category_and_caste','$caste_certificate','$victim_name','$victim_address')");  
   }
	if($sql==1) 
  {   
    header("Location:form4?form4=".$id4);	
  }
  else  
	{  
	 echo 'error'; 
	}  
}
  //form3 end

  //form4 start
  if(isset($_POST['subm_it'])){
    $file=$_FILES['files']['name'];    
    $discription=$_POST['discription'];
    $payStatus=$_POST['payStatus'];
    $filedet=$_FILES['files']['tmp_name'];
    $loc="file/".$file;
    move_uploaded_file($filedet,$loc);
    $loc1="file/".$file;
    move_uploaded_file($filedet,$loc1);
    if(isset($_GET['eid'])){
      $sql=mysqli_query($conn,"update image set discription='$discription',status='$payStatus' where caseid='$id'");
    }
    else{
      $sql=mysqli_query($conn,"insert into image (caseid,image,discription,status) values('$id','$file','$discription','$payStatus')");
    }
    if($sql==1){
        header("location:form5.php?id=".$id);
    }else{
        mysqli_error($conn);
    }
 }
//form4 end

 //Alert Update Start
 if(isset($_POST['update'])){
  $alert=$_POST['alert'];

  $sql=mysqli_query($conn,"UPDATE `final_alert` SET `alert`='$alert'");
  if($sql){
    echo "<script>alert('Successfully Submitted');window.location.href='update.php'</script>";
}
else{
    echo "<script>alert('error')</script>";
}
 }
 //Alert Update End
?>