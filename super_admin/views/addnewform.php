<?php
//include '../api.php';
include_once '../include.php';
session_start();

if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
  header("location:index.php");
   }
   $role='';
   $email=$_SESSION['use'];
   $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
   while($res=mysqli_fetch_array($sql)){
     $role=$res['role'];
   }

$id=intval($_GET['id']);
    if(isset($_POST['su_bmit']))  
  {  
   $criminal_name=$_POST['criminal_name'];
   $criminal_address=$_POST['criminal_address'];
   $category_and_caste=$_POST['category_and_caste'];  
   $criminal_age=$_POST['criminal_age'];
   $caste_certificate=$_POST['caste_certificate']; 
   $aadhaar_card=$_POST['aadhaar_card'];
   $charge_sheet=$_POST['charge_sheet'];

    $sql= mysqli_query($conn,"INSERT INTO criminal(`caseid`, `criminal_name`, `criminal_address`, `age`, `category_and_caste`, `caste_certificate`, `aadhaar_card`, `charge_sheet`) VALUES ('$id','$criminal_name','$criminal_address','$criminal_age',' $category_and_caste','$caste_certificate','$aadhaar_card','$charge_sheet')");
  
    if($sql==1)
    {
     header("Location:editform2.php?eid=".$id) ;
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
    <title>Atrocity Raigad | Governnment Form </title>
    <link rel="shortcut icon" type="image/png" href="../dist/img/government.png" />


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
    
    <!-- add button-->
    <script>
        $(document).ready(function () {
            let max_fields = 10; //maximum input boxes allowed
            let wrapper = $(".input_fields_wrap"); //Fields wrapper
            let add_button = $(".add_field_button"); //Add button ID
            let htm='<div class="input_fields_wrap div" style="text-align: start"><div class="d-flex form-group " style="margin-left: -12px;"><div class="form-group col-6"><label for="exampleदिनांक">आरोपीचे नाव </label><input type="text" required class="form-control" name="criminal_name" id="exampleदिनांक" placeholder=""> </div><div class="form-group col-6"><label for="exampleदिनांक">आरोपीचा पत्ता</label> <input type="varchar" required class="form-control" name="criminal_address" id="exampleदिनांक" placeholder=""></div></div><div class="form-group"><label for="Exampleप्रवर्ग आणि जात ">प्रवर्ग आणि जात</label><input type="Textbox" required class="form-control"  name="category_and_caste" id="Exampleप्रवर्ग आणि जात " placeholder=""></div><div class="form-group d-flex " style="margin-left: -12px;"> <div class="form-group col-2"><label for="Exampleउप विभागा चे नाव">जातीचा दाखला </label> <div class="custom-control custom-radio"> <input class="custom-control-input" required type="radio" id="customRadio1" value="होय" name="caste_certificate"><label for="customRadio1" class="custom-control-label">होय </label> </div><div class="custom-control custom-radio"> <input class="custom-control-input" type="radio" id="customRadio2" value="नाही" name="caste_certificate"><label for="customRadio2" class="custom-control-label">नाही </label> </div> </div> <div class="form-group col-2">           <label for="Exampleउप विभागा चे नाव">आधार कार्ड </label>  <div class="custom-control custom-radio">  <input class="custom-control-input" required type="radio"                id="customRadio3" value="होय" name="aadhaar_card"> <label for="customRadio3" class="custom-control-label">होय</label>  </div>  <div class="custom-control custom-radio">       <input class="custom-control-input" type="radio" id="customRadio4" value="नाही" name="aadhaar_card"> <label for="customRadio4" class="custom-control-label">नाही </label>         </div></div><div class="form-group col-2">  <label for="Exampleउप विभागा चे नाव">बँक माहिती </label> <div class="custom-control custom-radio">  <input class="custom-control-input" required type="radio" id="customRadio5" value="होय" name="bank_info">  <label for="customRadio5" class="custom-control-label">होय</label>  </div>  <div class="custom-control custom-radio">      <input class="custom-control-input" type="radio" id="customRadio6"  value="नाही" name="bank_info">  <label for="customRadio6" class="custom-control-label">नाही </label>  </div>    </div>  <div class="form-group col-2"> <label for="Exampleगुन्हा नं.">चार्ज शीट </label>          <div class="custom-control custom-radio"> <input class="custom-control-input" required type="radio" id="customRadio7" value="होय" name="charge_sheet"> <label for="customRadio7" class="custom-control-label">होय</label> </div> <div class="custom-control custom-radio">         <input class="custom-control-input" required type="radio"   id="customRadio8" value="नाही" name="charge_sheet"> <label for="customRadio8" class="custom-control-label">नाही </label>   </div>   </div> <div class="form-group col-2"><label for="Exampleगुन्हा नं.">वघकिय अहवाल </label>   <div class="custom-control custom-radio">  <input class="custom-control-input" required type="radio" id="customRadio9" value="होय" name="medical_report">  <label for="customRadio9" class="custom-control-label">होय</label> </div> <div class="custom-control custom-radio">          <input class="custom-control-input" type="radio" id="customRadio10"                      value="नाही" name="medical_report"> <label for="customRadio10" class="custom-control-label">नाही    </label> </div>   </div> </div>   <!-- /.card-body -->       <div>        <div class="input_fields_wrap" style="text-align: start">  </div>           </div><a href="#" class="remove_field btn btn-danger">Remove</a>';

            let x = 1; //initlal text box count

            $(add_button).click(function (e) { //on add input button click
                e.preventDefault();
                if (x < max_fields) { //max input box allowed

                    //text box increment
                    $(wrapper).append(
                        htm
                        ); //add input box
                    x++;
                }
            });

            $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text

                e.preventDefault();
                $(this).parent('.div').remove();
                x--;
            });

            //insert data
        /*$("add_form").submit(function(e){
        e.preventDefault();
        $("#sub1").val('Adding...');
        $.ajax({
        url:'form2.php',
        method:'post',
        data:$(this).serialize(),
        success:function(response){
            console.log(response);
        }
        });
        });*/
        });
    </script>


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light" >Atrocity Raigad</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!--<div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>-->
          <div class="info">
            <a href="#" class="d-block" style="text-transform:capitalize;font-size:20px;font-weight:500"><?php echo $role; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i> 
               
                <p>
                    मुख्यपृष्ठ 
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
           
            </li>

           <li class="nav-item">

              <a href="form1.php" class="nav-link ">
                <i class="nav-icon fas fa-th"></i>
                <p>
                नोंदणी करा
                  
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  अहवाल
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
               <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="report/R1.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल १</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/R2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल २</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="report/R4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ३</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/R5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ४</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/Complaint.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>प्रलंबित प्रकरणे</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  वापरकर्ता                                                                                                                                                                                                                                
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="viewwebuser.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> संकेतस्थल वापरकर्ता

                    </p>
                  </a>
                </li>
                
              </ul>
            </li>
            <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class=" nav-icon fas fa-landmark "></i>
              <p>
                बँक
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
            <a href="report/r1opy.php" class="nav-link">
            <i class="far fa-circle nav-icon"></i> 
              <p>
              बँक माहिती
              </p>
            </a>

            </li>
            <!-- <li class="nav-item"> 
            <a href="report/payment.php" class="nav-link">
            <i class=" far fa-circle nav-icon"></i> 
              <p>
              पेमेंट
              </p>
            </a>

            </li>-->
              
            </ul>
            </li>
            <li class="nav-item">
              <a href="../logout.php" class="nav-link">
              <i class=" nav-icon fas fa-sign-out-alt"></i> 
                <p>
                     बाहेर पडा  
                </p>
              </a>
           
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->


      </div>
      <!-- /.sidebar -->
    </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>अनुसूचित जाती/जमाती अत्याचार ग्रस्त पीडितांची माहित</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">मुख्यपृठ</a></li>
                                <li class="breadcrumb-item active">सरकारी प्रपत्र</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row flow">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary insert_field">
                           
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post"  enctype="multipart/form-data" id="add_form">
                                    <div class="card-body">
                                    <div class="col-12" style="text-align:center;">
                                        <ul id="progressbar" style="display:flex"  ;>
                                            <li  class="active" id="account"><strong>नोंदणी</strong></li>
                                            <li  class="active" id="personal"><strong>आरोपीची माहिती</strong></li>
                                            
                                            <li id="payment"><strong>पिडीत व्यक्तीची माहिती</strong></li>
                                            <li id="confirm"><strong>इतर माहिती </strong></li>
                                            <li id="confirm"><strong>समाप्त </strong></li>
    
                                        </ul>

                                       </div>
                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                           
                                               <input type="hidden" required class="" name="id" value="<?php echo $id;?>"
                                                    id="exampleदिनांक" placeholder="">
                                            
                                        </div>
                                        </div>

<div>
                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">आरोपीचे नाव </label>
                                                <input type="text" required class="form-control"  name="criminal_name"
                                                    id="exampleदिनांक" placeholder="">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">आरोपीचा पत्ता</label>
                                                <input type="varchar" value="<?php echo  $criminal_address ?>" required class="form-control"
                                                    name="criminal_address" id="exampleदिनांक" placeholder="">
                                            </div>

                                        </div>

                                        

                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                                <label for="Exampleप्रवर्ग आणि जात ">आरोपीचा प्रवर्ग आणि जात</label>
                                                <input type="Textbox" required class="form-control"
                                                name="category_and_caste"  id="Exampleप्रवर्ग आणि जात fff3" placeholder="">
                                            </div>
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">आरोपीचा वय</label>
                                                <input type="number" required class="form-control" 
                                                    name="criminal_age" id="exampleदिनांक fff4" placeholder="">
                                            </div>

                                        </div>


                                        <div class="form-group d-flex " style="margin-left: -12px;">
                                            <div class="form-group col-2">
                                                <label for="Exampleउप विभागा चे नाव">जातीचा दाखला </label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" required type="radio"
                                                        id="customRadio1" value="होय" name="caste_certificate" >
                                                    <label for="customRadio1" class="custom-control-label">होय </label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio2"
                                                        value="नाही" name="caste_certificate" >
                                                    <label for="customRadio2" class="custom-control-label">नाही </label>
                                                </div>
                                            </div>
                                            <div class="form-group col-2">
                                                <label for="Exampleउप विभागा चे नाव">आधार कार्ड </label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" required type="radio"
                                                        id="customRadio3" value="होय"  name="aadhaar_card">
                                                    <label for="customRadio3" class="custom-control-label">होय</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" type="radio" id="customRadio4"
                                                        value="नाही"  name="aadhaar_card">
                                                    <label for="customRadio4" class="custom-control-label">नाही </label>
                                                </div>
                                            </div>
                                
                                            <div class="form-group col-2">
                                                <label for="Exampleगुन्हा नं.">चार्ज शीट </label>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" required type="radio"
                                                        id="customRadio7"  value="होय" name="charge_sheet">
                                                    <label for="customRadio7" class="custom-control-label">होय</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input class="custom-control-input" required type="radio"
                                                        id="customRadio8" value="नाही" name="charge_sheet">
                                                    <label for="customRadio8" class="custom-control-label">नाही </label>
                                                </div>
                                            </div>
                                    
                                        </div>

                                        
                                        <!-- /.card-body -->
                                            
                                                <div style="text-align: end;">
                                                <button type="sumbit" name="su_bmit" class="btn btn-primary bbbt">नमूद करा
                                            </button>
                                                
                                                </div>
                                            
        </div>    
                                   </div>      
                                </form>
                            </div>
                          
                            <!-- /.card -->

                            <!-- general form elements -->

                            <!-- /.card -->

                            <!-- Input addon -->

                            <!-- /.card -->
                            <!-- Horizontal Form -->

                            <!-- /.card -->

                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->

                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; <?php echo date('Y'); ?></strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        Designd by Tectignis It Solutions</b>
      </div>
    </footer>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    
    
</body>


</html>