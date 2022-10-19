
<?php   include("../api.php");?>
<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
        header("Location:login.php"); 
       }
       $role='';
       $email=$_SESSION['use'];
       $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
       while($res=mysqli_fetch_array($sql)){
         $role=$res['role'];
       }
               

?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atrology | Add web user</title>
  <link rel="shortcut icon" type="image/png" href="../dist/img/government.png"/>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
 <link href="../dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
 <link href="../dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
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
              <a href="#" class="nav-link">
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
            <a href="report/r1opy.php" class="nav-link">
            <i class=" nav-icon fas fa-landmark "></i>
                    <p>
                      बँक माहिती
                    </p>
      </a>
            </li>
            <li class="nav-item">
            <a href="report/r1opy.php" class="nav-link">
            <i class=" nav-icon fas fa-landmark "></i>
                    <p>
                      बँक माहिती
                    </p>
      </a>
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
            <h1>वापरकर्ता</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">मुख्यपृष्ठ</a></li>
              <li class="breadcrumb-item active">नविन वापरकर्ता </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <form class="form-horizontal" method="post" >
                  <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">नविन संकेतस्थळ वापरकर्ता</h3>
                    </div>
                    <div class="card-body">
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">वापरकर्त्याची भूमिका </label>
                        <div class="col-sm-4">
                          <select class="form-control form-control-sm select2bs4 field_validation select2-hidden-accessible" required name="role" id="role_id" width="100%" placeholder="User Role" data-select2-id="role_id" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="2">निवडा</option>
                              <option value="Administrator">प्रशासक</option>
                               <option value="Warehouse Manager8">व्यवस्थापक</option>
                               <option value="Warehouse Manager">विक्री व्यवस्थापक</option>
                               </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="district" class="col-sm-2 col-form-label">District</label>
                        <div class="col-sm-4">
                          <select class="form-control form-control-sm select2bs4 field_validation select2-hidden-accessible" required name="district" id="district" width="100%"  data-select2-id="role_id" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="2">निवडा</option>
                              <option value="raigarh">Raigarh</option>
                               <option value="navi mumbai">Navi Mumbai</option>
                               </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">नाव</label>
                        <div class="col-sm-4">
                          <input type="text" required name="name"  class="form-control form-control-sm field_validation" id="first_name" placeholder="नाव">
                          <span id="err_first_name" class="error invalid-feedback"></span>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">ई-मेल</label>
                        <div class="col-sm-4">
                          <input type="text" required name="email" class="form-control form-control-sm field_validation" id="email" placeholder="ई-मेल">
                          <span id="err_email" class="error invalid-feedback"></span>
                        </div>
                      </div>
            
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">पासवर्ड</label>
                        <div class="col-sm-4">
                          <input type="password" required name="password" class="form-control form-control-sm field_validation" id="password" placeholder="पासवर्ड">
                          <span id="err_password" class="error invalid-feedback"></span>
                        </div>
                      </div>
            
               
                    </div>
                    <div class="card-footer">
                      <input type="submit" name="websave" id="userSubmit" class="btn btn-info"value="जतन करा">
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>



    <!-- Main content -->
  
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