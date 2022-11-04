<?php
include_once 'include.php';


$id=$_GET['complaint_id'];

$book_no='';
$date='';
$year='';
$district='';
$complaint_no='';
$police_station='';
$section='';
$police_station='';
$type_of_offence='';
$complaint_filler_name='';
$sql=mysqli_query($conn, "select * from complaint_form where id='$id'");
while($data=mysqli_fetch_array($sql)){
   $book_no= $data['book_no'];
   $date=$data['date'];  
   $complaint_no=$data['complaint_no'] ; 
   $district=$data['district'];
   $police_station=$data['police_station'] ; 
   $section=$data['section'];
   $type_of_offence=explode(",", $data['type_of_offence']);
   $complaint_filler_name=$data['complaint_filer_name'];
   $year=$data['year'];
}



$criminal_name='';
$criminal_address='';
  $sql=mysqli_query($conn,"select * from criminal where caseid='$id'");
while($arr=mysqli_fetch_array($sql)){
    $caseid=$arr['caseid'];
$criminal_name= $arr['criminal_name'];
$criminal_address=$arr['criminal_address'];  

}



$caseid='';
 $victim_name='';
 $victim_address='';
 $caste_certificate='';
 $aadhaar_card='';
 $charge_sheet='';
 $victim_age='';
 $category_and_caste='';
$sql2=mysqli_query($conn,"select * from victim where caseid='$id'");
 while($arr=mysqli_fetch_array($sql2)){
 $caseid=$arr['caseid'];
 $victim_name= $arr['name'];
 $victim_address=$arr['address'];  
 $caste_certificate=$arr['caste_certificate'] ; 
 $aadhaar_card=$arr['aadhar_card'] ; 
 $charge_sheet=$arr['charge_sheet'];
 $victim_age=$arr['victim_age'];
 $category_and_caste=$arr['caste'];
}

 $bank_name='';
 $account_no='';
 $account_holder_name='';
 $branch_name='';
 $ifsc_code='';
$sql4=mysqli_query($conn,"select * from bank_detail where caseid='$id'");
 while($arr=mysqli_fetch_array($sql4)){
  $bank_name=$arr['bank_name'];
  $account_no=$arr['account_no'];
  $account_holder_name=$arr['account_holder_name'];
  $branch_name=$arr['branch_name'];
  $ifsc_code=$arr['ifsc_code'];

}





$image='';
$discription='';
$status='';
$sql3=mysqli_query($conn, "select * from image where caseid='$id'");
while($image1=mysqli_fetch_array($sql3 )){
  $image=$image1['image'];
  $discription=$image1['discription'];
  $status=$image1['status'];
}



if(isset($_POST['updatecomplaintform'])){

  $book_no=$_POST['book_no'];
  $date=$_POST['date'];
  $year=$_POST['year'];
  $complaint_no=$_POST['complaint_no'];
  $district=$_POST['district'];
  $police_station=$_POST['police_station'];
  $section=$_POST['section'];
  $complaint_filler_name=$_POST['complaint_filler_name'];
  $checkbox1=$_POST['crime'];
  $criminal_name=$_POST['criminal_name'];
  $criminal_address=$_POST['criminal_address'];
  $victim_name=$_POST['victim_name'];
  $victim_address=$_POST['victim_address'];
  $category_and_caste=$_POST['category_and_caste'];
  $charge_sheet=$_POST['charge_sheet'];
  $aadhaar_card=$_POST['aadhaar_card'];
  $caste_certificate=$_POST['caste_certificate'];
  $status=$_POST['status'];
  $discription=$_POST['discription'];
  $bank_name=$_POST['bank_name'];
  $account_no=$_POST['account_no'];
  $account_holder_name=$_POST['account_holder_name'];
  $branch_name=$_POST['branch_name'];
  $ifsc_code=$_POST['ifsc_code'];

   $chk="";  
   foreach($checkbox1 as $chk1)  
	 {  
		$chk .= $chk1.",";  
	 }  
	
    $sql=mysqli_query($conn, "UPDATE `complaint_form` SET `book_no`='$book_no',`complaint_no`='$complaint_no',`district`='$district',`police_station`='$police_station',`section`='$section',`type_of_offence`='$chk', `complaint_filer_name`='$complaint_filler_name',`date`='$date',`year`='$year' WHERE id='$id'");

    $sql1=mysqli_query($conn, "UPDATE `criminal` SET `criminal_name`='$criminal_name',`criminal_address`='$criminal_address' WHERE caseid='$id'");


    $sql2=mysqli_query($conn, "UPDATE `victim` SET  `charge_sheet`='$charge_sheet',`aadhar_card`='$aadhaar_card',`caste_certificate`='$caste_certificate',`caste`='$category_and_caste',`victim_age`='$victim_age',`name`='$victim_name',`address`='$victim_address' where caseid='$id'");


    $sql3=mysqli_query($conn, "UPDATE `image` SET  `discription`='$discription',`status`='$status' where caseid='$id'");


    $sql4=mysqli_query($conn, "UPDATE `bank_detail` SET `bank_name`='$bank_name',`account_no`='$account_no',`account_holder_name`='$account_holder_name',`branch_name`='$branch_name',`ifsc_code`='$ifsc_code' where      caseid='$id'");

    if($sql4==1)
        {
         header("Location:updatecomplaintform.php?complaint_id=".$id) ;
        }
        else {
        echo 'error';
         
        }
   }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>
  <link rel="shortcut icon" type="image/png" href="../dist/img/government.png" />
  <link rel="stylesheet" href="../dist/css/adminlte.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">


  <style>
    .card-heading {
      background-color: #007bff;
      border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
      /* background-color: transparent; */
      border-bottom: 1px solid rgba(0, 0, 0, .125);
      padding: 0.75rem 1.25rem;
      position: relative;
      border-top-left-radius: 0.25rem;
      border-top-right-radius: 0.25rem;
      padding: 0.75rem;
      margin-bottom: 1.5rem;
      /* background-color: rgba(0,0,0,.03); */
      border-bottom: 0 solid rgba(0, 0, 0, .125);
    }

    .heading {
      font-weight: 900;
      color: #fff;
      font-size: 1rem;
      align-items: center;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-8">
              <h1>अनुसूचित जाती/जमाती अत्याचार ग्रस्त पीडितांची माहिती</h1>
            </div>
            <div class="col-sm-4">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">मुख्यपृठ</a></li>
                <li class="breadcrumb-item active">/सरकारी प्रपत्र</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <form method="POST">

                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">नोंदणी</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">नोंद वही क्र. <sup style="color:red;">*</sup></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="book_no" value="<?php echo $book_no ?>" placeholder="नोंद वही क्र." >
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputPassword1">वर्ष <sup style="color:red;">*</sup></label>
                        <input value="<?php echo $year ?>" class="form-control" id="year" name="year" value="2016" readonly>

                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputPassword1">दिनांक <sup style="color:red;">*</sup></label>
                          <input value="<?php echo $date ?>" type="Date"  name="date" class="form-control" id="exampleदिनांक" placeholder="">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">गुन्हा नं. <sup style="color:red;">*</sup></label>
                        <input type="text" name="complaint_no" class="form-control" value="<?php echo $complaint_no ?>" id="exampleInputEmail1" placeholder="गुन्हा नं." >
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputPassword1">जिल्हा <sup style="color:red;">*</sup></label>
                        <input class="form-control" value="<?php echo $district ?>" name="district" readonly>
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputPassword1">पोलीस ठाणे <sup style="color:red;">*</sup></label>
                        <input type="Dropdown" value="<?php echo $police_station ?>" name="police_station" class="form-control " id="Exampleपोलीस ठाणे" placeholder="" readonly>
                      </div>

                      <div class="form-group col-12">
                        <label for="exampleInputEmail1">लावलेली कलमे <sup style="color:red;">*</sup></label>
                        <input type="text"value="<?php echo $section ?>" class="form-control" id="exampleInputEmail1"name="section" placeholder="लावलेली कलमे" >
                      </div>

                      <div class="form-group col-12">
                        <label for="exampleदिनांक">गुन्हयांचा प्रकार <sup style="color:red;">*</sup></label><br>
                        <div class="row">

                          <div class="d-flex form-group ">
                            <div class="form-group col-3">
                              <input type="checkbox" id="crime1" name="crime[]" value="खून" <?php if(in_array("खून",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime1">खून</label><br>
                            </div>
                            <div class="form-group col-3">
                              <input type="checkbox" id="crime2" name="crime[]" value="बलात्कार" <?php if(in_array("बलात्कार",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime2">बलात्कार</label><br>
                            </div>
                            <div class="form-group col-3">
                              <input type="checkbox" id="crime3" name="crime[]" value="विनयभंग" <?php if(in_array("विनयभंग",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime3"> विनयभंग</label><br>
                            </div>
                            <div class="form-group col-3">
                              <input type="checkbox" id="crime4" name="crime[]" value="मारहाण" <?php if(in_array("मारहाण",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime4">मारहाण</label><br>
                            </div>

                            <div class="form-group col-3">
                              <input type="checkbox" id="crime5" name="crime[]" value="शिवीगाळ"<?php if(in_array("शिवीगाळ",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime5"> शिवीगाळ</label><br>
                            </div>
                            <div class="form-group col-3">
                              <input type="checkbox" id="crime7" name="crime[]" value="जाळपोळ"<?php if(in_array("जाळपोळ",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime7"> जाळपोळ</label><br>
                            </div>
                            <div class="form-group col-3">
                              <input type="checkbox" id="crime8" name="crime[]" value="इतर"<?php if(in_array("इतर",$type_of_offence)) { ?> checked="checked" <?php } ?> >
                              <label for="crime8"> इतर</label><br>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">फिर्यादी चे नाव <sup style="color:red;">*</sup></label>
                        <input value="<?php echo $complaint_filler_name ?>" name="complaint_filler_name"type="text" class="form-control" id="exampleInputEmail1" placeholder="फिर्यादी चे नाव" >
                      </div>

                    </div>

                  </div>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->

                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">आरोपीची माहिती
                    </h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">

                    <div class="row">

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">आरोपीचे नाव <sup style="color:red;">*</sup></label>
                        <input type="text" value="<?php echo $criminal_name ?>"class="form-control" id="exampleInputEmail1" name="criminal_name" placeholder="आरोपीचे नाव" >
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">आरोपीचा पत्ता <sup style="color:red;">*</sup></label>
                        <input type="text" value="<?php echo $criminal_address ?>" name="criminal_address" class="form-control" id="exampleInputEmail1" placeholder="आरोपीचे पत्ता" >
                      </div>

                    </div>


                  </div>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->

                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">पिडीत व्यक्तीची माहिती</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">पिडीत व्यक्तीचे नाव  <sup style="color:red;">*</sup></label>
                        <input type="text" value="<?php echo $victim_name ?>" class="form-control" name="victim_name" id="exampleInputEmail1" placeholder="पिडीत व्यक्तीचे नाव" >
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">पिडीत व्यक्तीचा पत्ता <sup style="color:red;">*</sup></label>
                        <input type="text" value="<?php echo $victim_address ?>"  name="victim_address" class="form-control" id="exampleInputEmail1" placeholder="पिडीत व्यक्तीचे पत्ता" >
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">पिडीत व्यक्तीचे प्रवर्ग आणि जात <sup style="color:red;">*</sup></label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="category_and_caste" value="<?php echo $category_and_caste ?>"  placeholder="पिडीत व्यक्तीचे प्रवर्ग आणि जात" >
                      </div>

                      <div class="form-group col-12" style="">
                        <div class="row">
                          <div class="form-group col-2">
                            <label for="Exampleउप विभागा चे नाव">जातीचा दाखला <sup style="color:red;">*</sup></label>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input"   type="radio" id="customRadio1" value="होय"  <?php if($caste_certificate=='होय') {?> <?php echo "checked";?> <?php }?>
                                name="caste_certificate">
                              <label for="customRadio1" class="custom-control-label">होय </label>

                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio2" value="नाही" <?php if($caste_certificate=='नाही') {?> <?php echo "checked";?> <?php }?>
                                name="caste_certificate">
                              <label for="customRadio2" class="custom-control-label">नाही </label>
                            </div>
                          </div>
                          <div class="form-group col-2">
                            <label for="Exampleउप विभागा चे नाव">आधार कार्ड <sup style="color:red;">*</sup></label>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input"  type="radio" id="customRadio3" value="होय"
                              <?php if($aadhaar_card=='होय') {?> <?php echo "checked";?> <?php }?>
                                name="aadhaar_card">
                              <label for="customRadio3" class="custom-control-label">होय</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input" type="radio" id="customRadio4" value="नाही" <?php if($aadhaar_card=='नाही') {?> <?php echo "checked";?> <?php }?>
                                name="aadhaar_card">
                              <label for="customRadio4" class="custom-control-label">नाही </label>
                            </div>
                          </div>

                          <div class="form-group col-2">
                            <label for="Exampleगुन्हा नं.">चार्ज शीट <sup style="color:red;">*</sup></label>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input"  type="radio" id="customRadio7" value="होय" <?php if($charge_sheet=='होय') {?> <?php echo "checked";?> <?php }?>
                                name="charge_sheet">
                              <label for="customRadio7" class="custom-control-label">होय</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input class="custom-control-input"  type="radio" id="customRadio8" value="नाही" <?php if($charge_sheet=='नाही') {?> <?php echo "checked";?> <?php }?>
                                name="charge_sheet">
                              <label for="customRadio8" class="custom-control-label">नाही </label>
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">इतर माहिती</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">FIR फाईल निवडा <sup style="color:red;">*</sup></label>
                        <a class="btn btn-primary"target="_blank" href="file/<?php echo $image ?>"><i
                              class="fas fa-eye"></i></a>
                        <!-- <input type="file" class="form-control" id="exampleInputEmail1"  > -->
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputPassword1">अनुदान रक्कमेची सद्यस्थिती <sup style="color:red;">*</sup></label>
                        <select class="form-control select2" name="status" >
                          <option value="<?php  $status; ?>"<?php if($status) { echo "selected='selected'"; }?>disabled><?php echo $status;  ?></option>
                          <option value="stage 1" selected>stage 1 FIR दाखला / प्रकरण मंजूर आहे / अनुदानाच्या प्रतीक्षेत</option>
                        <option value="stage 2">stage 2 FIR चौकशी दाखल</option>
                        <option value="stage 3">stage 3 न्यायालयाचा ननणणय</option>
                        <option value="Stage 4">Stage 4 Documents pending</option>
                        </select>
                      </div>

                      <div class="form-group col-12">
                        <label for="exampleInputEmail1">शेरा <sup style="color:red;">*</sup></label>
                        <input type="Text" value="<?php echo $discription?>"class="form-control" name="discription" id="exampleInputEmail1" placeholder="शेरा" >
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->

                </div>
                <!-- /.card -->

                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">बँक तपशील</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <div class="card-body">

                    <div class="row">
                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">खातेधारकाचे नाव</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="account_holder_name"value="<?php echo $account_holder_name ?>"placeholder="खातेधारकाचे नाव">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">खाते क्रमांक</label>
                        <input type="number" value="<?php echo $account_no ?>" class="form-control" name="account_no" id="exampleInputEmail1" placeholder="खाते क्रमांक">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">बँकेचे नाव</label>
                        <input type="text"value="<?php echo $bank_name ?>" name="bank_name"class="form-control" id="exampleInputEmail1" placeholder="बँकेचे नाव">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">शाखेचे नाव</label>
                        <input type="text"value="<?php echo $branch_name ?>"
                        name="branch_name"class="form-control" id="exampleInputEmail1" placeholder="शाखेचे नाव">
                      </div>

                      <div class="form-group col-6">
                        <label for="exampleInputEmail1">IFSC कोड</label>
                        <input type="text" value="<?php echo $ifsc_code?>"  name="ifsc_code" class="form-control" id="exampleInputEmail1" placeholder="IFSC कोड">
                      </div>
                    </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" name="updatecomplaintform" class="btn btn-primary">नमूद करा</button>
                  </div>

                </div>
                <!-- /.card -->

              </form>
              <!-- /.form -->





            </div>
            <!--/.col (left) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
   footer
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!-- <script src="../../dist/js/demo.js"></script> -->
  <script src="report/year-select.js"></script>
  <script>
    $('.yearselect').yearselect({
      selected: 2016
    });
  </script>

<script>

  var citiesByState = {
      "raigarh": ["अलिबाग पोलीस ठाणे", "पनवेल पोलीस ठाणे","मुरुड पोलीस ठाणे","पेण पोलीस ठाणे","उरण पोलीस ठाणे","कर्जत पोलीस ठाणे","खालापूर पोलीस ठाणे","माणगाव पोलीस ठाणे","रोहा पोलीस ठाणे","तळा पोलीस ठाणे","महड पोलीस ठाणे","म्हसळा पोलीस ठाणे","श्रीवर्धन पोलीस ठाणे","पोलादपूर पोलीस ठाणे","नेरळ पोलीस ठाणे","खोपोली पोलीस ठाणे","वडखळ पोलीस ठाणे","पोयनाड पोलीस ठाणे","मांडवा पोलीस ठाणे","रेवदंडा पोलीस ठाणे","पाली पोलीस ठाणे","महाड एम आय डी सी पोलीस ठाणे","महाड तालुका पोलीस ठाणे","महाड शहर पोलीस ठाणे","दिघी सागरी पोलीस ठाणे","गोरेगाव पोलीस ठाणे","नागोठणे पोलीस ठाणे","माथेरान पोलीस ठाणे"],
      "navi mumbai": ["खारघर पोलीस ठाणे","कळंबोली पोलीस ठाणे","खांदेश्वर पोलीस ठाणे","पनवेल शहर पोलीस ठाणे","पनवेल तालुका पोलीस ठाणे","कामोठे पोलीस ठाणे","तळोजा पोलीस ठाणे"],

}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option value="+citiesByState[value][cityId]+">"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
</script>
  <!-- Page specific script -->
  <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>
</body>

</html>