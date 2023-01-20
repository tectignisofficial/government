<?php
//form1 start
       $role='';
      //  $email=$_SESSION['use'];
      //  $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
      //  while($res=mysqli_fetch_array($sql)){
      //    $role=$res['role'];
      //  }
        $book_no='';
        $date='';
        $complaint_no='';
        $police_station='';
        $section='';
        $year='';
        $type_of_offence='';
        $complaint_filer_name='';
        $district='';
if(isset($_GET['id'])){
  $id=intval($_GET['id']);
  $sql=mysqli_query($conn,"select * from complaint_form where id='$id'");
   while($arr=mysqli_fetch_array($sql)){
  $book_no= $arr['book_no'];
   $date=$arr['date'];  
   $complaint_no=$arr['complaint_no'] ; 
   $police_station=$arr['police_station'] ;
   $district=$arr['district']; 
   $section=$arr['section'];
   $type_of_offence=explode(",", $arr['type_of_offence']);
   $complaint_filer_name=$arr['complaint_filer_name'];
   $year=$arr['year'];
  }
}
//form1 end

//index start
$currentDate=date('Y');
if(isset($_POST['year'])){
  $date = $_POST['year'];
  $query1=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='शिवीगाळ,'");
  
  $query2=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='मारहाण,'");

  $query3=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='जाळपोळ,'");

  $query4=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='बलात्कार,'");

  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='खुन,'");

  $query5=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='विनयभंग,'");

  $query6=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='इतर,'");

  $query7=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='stage 1 FIR दाखला / प्रकरण मंजूर आहे / अनुदानाच्या प्रतीक्षेत'");

  $query8=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='stage 2 FIR चौकशी
  दाखल'");

  $query9=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='stage 3 न्यायालयाचा निर्णय'");

  $query10=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='Stage 4 Documents pending'");

}else{
  $query1=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='शिवीगाळ,'");

  $query2=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='मारहाण,'");

  $query3=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='जाळपोळ,'");

  $query4=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='बलात्कार,'");

  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='खुन,'");

  $query5=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='विनयभंग,'");

  $query6=mysqli_query($conn,"select * from complaint_form where  year(date)='$currentDate' and type_of_offence='इतर,'");

  $query7=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='stage 1 FIR दाखला / प्रकरण मंजूर आहे / अनुदानाच्या प्रतीक्षेत'");

  $query8=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='stage 2 FIR चौकशी
  दाखल'");

  $query9=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='stage 3 न्यायालयाचा निर्णय'");

  $query10=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='Stage 4 Documents pending'");
}
  $count1=mysqli_num_rows($query1);
  $count2=mysqli_num_rows($query2);
  $count3=mysqli_num_rows($query3);
  $count4=mysqli_num_rows($query4);
  $count=mysqli_num_rows($query);
  $count5=mysqli_num_rows($query5);
  $count6=mysqli_num_rows($query6);
  $count7=mysqli_num_rows($query7);
  $count8=mysqli_num_rows($query8);
  $count9=mysqli_num_rows($query9);
  $count10=mysqli_num_rows($query10);

  //form2 start
  $criminal_name='';
  if(isset($_GET['form2'])){
    $sql=mysqli_query($conn,"select * from criminal where caseid='$form2'");
  while($arr=mysqli_fetch_array($sql)){
  $criminal_name= $arr['criminal_name'];
  }
  }
  //form2 end

  //form3 start
  $victim_name='';
  $victim_address='';
  $caste_certificate='';
  $aadhaar_card='';
  $bank_info='';
  $charge_sheet='';
  $category_and_caste='';
  if(isset($_GET['form3'])){
    $form3=intval($_GET['form3']);
    $sql=mysqli_query($conn,"select * from victim where caseid='$form3'");
  while($arr=mysqli_fetch_array($sql)){
  $caseid=$arr['caseid'];
  $victim_name= $arr['name'];
  $victim_address=$arr['address'];  
  $caste_certificate=$arr['caste_certificate'] ; 
  $aadhaar_card=$arr['aadhar_card'] ; 
  $bank_info=$arr['bank_detail'];
  $charge_sheet=$arr['charge_sheet'];
  $category_and_caste=$arr['caste'];
}
  }
  //form3 end

  // form4 start
  $payStatus='';
        $image='';
        $discription='';
        if(isset($_GET['form4'])){
        $form4=intval($_GET['form4']);
        $sql=mysqli_query($conn,"select * from image where caseid='$form4'");
        while($arr=mysqli_fetch_array($sql)){
        $image=$arr['image'];
        $discription=$arr['discription'];
        }
      }
//form4 end

  // form5 start
  $bank_name='';
        $account_no='';
        $account_holder_name='';
        $branch_name='';
        $ifsc_code='';
        if(isset($_GET['form4'])){
        $form4=intval($_GET['form4']);
        $sql=mysqli_query($conn,"select * from bank_detail where caseid='$form5'");
        while($arr=mysqli_fetch_array($sql)){
        $bank_name=$arr['bank_name'];
        $account_no=$arr['account_no'];
        $account_holder_name=$arr['account_holder_name'];
        $branch_name=$arr['branch_name'];
        $ifsc_code=$arr['ifsc_code'];
        }
      }
//form5 end

//submit&preview start
if(isset($finalform)){
$form1query=mysqli_query($conn,"select * from complaint_form where id='$finalform'");
$form1sql=mysqli_fetch_array($form1query);

$form2query=mysqli_query($conn,"select * from criminal where caseid='$finalform'");
$form2sql=mysqli_fetch_array($form2query);

$form3query=mysqli_query($conn,"select * from victim where caseid='$finalform'");
$form3sql=mysqli_fetch_array($form3query);

$form4query=mysqli_query($conn,"select * from image where caseid='$finalform'");
$form4sql=mysqli_fetch_array($form4query);

$form5query=mysqli_query($conn,"select * from bank_detail where caseid='$finalform'");
$form5sql=mysqli_fetch_array($form5query);
}
//submit&preview end

 //viewwebuser start
 $webresult = mysqli_query($conn,"select * from webuser");

 if(isset($_GET['webuserdelid'])){
   $webuserdelid=$_GET['webuserdelid'];
   $sql=mysqli_query($conn,"delete from webuser where id='$webuserdelid'");
   }
 //viewwebuser end

 //editwebuser start
 if(isset($_POST['editwebsave']))
{	 
  $eid=$_POST['valId'];
	 $name = $_POST['name'];
	 $email = $_POST['email'];
	 $role = $_POST['role'];
   $district=$_POST['district'];
   if(isset($eid)){
     $eid=intval($_POST['valId']);
    $sql="update webuser set name='$name',email='$email',role='$role',district='$district' where id='$eid'";
    $query=mysqli_query($conn, $sql);
    if($query){  header("location:viewwebuser.php"); }
    else{ echo mysqli_error($conn); }
   }	 
	 mysqli_close($conn);
}
 //edit webuser end
?>