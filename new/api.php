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
            header("Location: form2.php?id=".$last_id);
        	}
	 }
  }else{
    $id=$_POST['id1'];
    $sql=mysqli_query($conn,"update complaint_form set book_no='$book_no',date='$date',complaint_no='$complaint_no',district='$district',police_station='$police_station',section='$section',complaint_filer_name='$complaint_filer_name',year='$year', type_of_offence='$chk' where id='$id'");
    if($sql==1) { header("Location:form2.php?id=".$id); }
  }
} 

//form1 end


//form2 start
    if(isset($_POST['form2su_bmit']))  
  {  
   $criminal_name=$_POST['criminal_name'];
   $form_2_id=$_POST['form_2_id'];
   if(isset($_GET['eid'])){
    $id3=$_GET['eid'];
    $sql= mysqli_query($conn,"update criminal set criminal_name='$criminal_name' where id='$id3'");
    if($sql==1){
      header("Location:form2.php?id=".$id);
    }
   }else{
    $sql= mysqli_query($conn,"INSERT INTO criminal(`caseid`, `criminal_name`) VALUES ('$form_2_id','$criminal_name')");
  }
    if($sql==1)
    {
     header("Location:form3?id=".$id) ;
    }
    else {
    echo 'error';
     
    }
  }
//form2 end
?>