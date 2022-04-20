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
        $criminal_name='';
        $criminal_address='';
        $age='';
        if(isset($_GET['eid'])){
          $eid=intval($_GET['eid']);
          $sql=mysqli_query($conn,"select * from criminal where id='$eid'");
        while($arr=mysqli_fetch_array($sql)){
            $id=$arr['id'];
            $caseid=$arr['caseid'];
       $criminal_name= $arr['criminal_name'];
        $criminal_address=$arr['criminal_address'];  
        $age=$arr['age'] ; 
       }
        }

        if(isset($_POST['id']))  
        {  
         $id=$_POST['id'];
         $caseid=$_POST['caseid'];
         $criminal_name=$_POST['criminal_name'];
         $criminal_address=$_POST['criminal_address'];
         $criminal_age=$_POST['criminal_age'];
         $sql= mysqli_query($conn,"update criminal set criminal_name='$criminal_name',criminal_address='$criminal_address',age='$criminal_age' where id='$id'");
        
        if($sql==1)
        {
         //header("Location:editform3.php?eid=".$caseid) ;
        }
        else {
        echo 'error';
         
        }
          
        }
   $id=$_GET['id'];
    if(isset($_POST['su_bmit']))  
  {  
   $criminal_name=$_POST['criminal_name'];
   $criminal_address=$_POST['criminal_address'];
   $criminal_age=$_POST['criminal_age'];
   

   if(isset($_GET['eid'])){
    $sql= mysqli_query($conn,"update criminal set criminal_name='$criminal_name',criminal_address='$criminal_address',age='$criminal_age' where id='$id'");
   }else{
    $sql= mysqli_query($conn,"INSERT INTO criminal(`caseid`, `criminal_name`, `criminal_address`, `age`) VALUES ('$id','$criminal_name','$criminal_address','$criminal_age')");
  }
    if($sql==1)
    {
     header("Location:fo.php?id=".$id) ;
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
    
   

<script>
        
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

              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  नोंदणी
                  <i class="right fas fa-angle-left"></i>
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="form1.php" class="nav-link active">
                    <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                    <p >
                    नोंदणी करा
                      <!-- <i class="right fas fa-angle-left"></i> -->
                    </p>
                  </a>

                </li>
                
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  अहवाल
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="report/R1.php" class="nav-link ">
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
                    <p>अहवाल ४</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/R5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ५</p>
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
              <a href="report/r1opy.php" class="nav-link">
              <i class=" nav-icon fas fa-landmark"></i> 
                <p>
                बँक माहिती
                </p>
              </a>
           
            </li>
            <li class="nav-item">
              <a href="../logout.php" class="nav-link">
              <i class=" nav-icon fas fa-user-tie"></i> 
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
                            <h1>सरकारी प्रपत्र</h1>
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
                                            <li  class="active" id="account"><strong>अनुसूचित जाती/जमाती अत्याचार ग्रस्त पीडितांची माहित</strong></li>
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
                                                <input type="text" required class="form-control" value="<?php echo $criminal_name ?>" name="criminal_name"
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
                                                <label for="exampleदिनांक">आरोपीचा वय</label>
                                                <input type="number" required class="form-control" value="<?php echo $age ?>"
                                                    name="criminal_age" id="exampleदिनांक fff4" placeholder="">
                                            </div>

                                        </div>


                                        
                                        <!-- /.card-body -->
                                            
                                                <div style="text-align: end;">
                                                <button type="sumbit" name="su_bmit" class="btn btn-primary bbbt">नमूद करा
                                            </button>
                                                <a href="form1.php?id=<?php echo $id;?>" class="btn btn-primary">मागे जा</a>
                                                <a href="fo.php?id=<?php echo $id;?>" name="sub_mit" class="btn btn-primary">Next</a>
                                                </div>
                                            
        </div>    
                                   </div>      
                                </form>
                            </div>
                            <div class="card-body">
                <table class="table table-bordered table-hover table-responsive" style="display:inline-table">
                  <thead>
                    <tr>
                      <th>अनुक्रमांक</th>
                      <th>criminal_name</th>
                      <th>criminal_address</th>
                      <th>age</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sql=mysqli_query($conn,"select * from criminal where caseid= '$id'");
                    $count=1;
                    while($arr=mysqli_fetch_array($sql)){
                    ?>
                    <tr >
                      <td><?php echo $count;?></td>
                      <td><?php echo $arr['caseid'];?></td>
                      <td><?php echo $arr['criminal_name'];?></td>
                      <td><?php echo $arr['criminal_address'];?></td>
                      <td><?php echo $arr['age'];?></td>
                      <td><a href="form2.php?action=edit&eid=<?php echo $arr['id']; ?>" title="" class="btn btn-success btn-xs delete_purchase">
		                          <i class="fas fa-edit"></i>
		                        </a></td>
                    </tr>
                    <?php $count++;
                  } ?>
                    <tr class="expandable-body d-contents" >
                      <td colspan="7">
                        <p>
                         गुन्हेगारास गुन्हा मान्य आहे.
                        </p>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
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
            <strong>Copyright &copy; 2022</strong>
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