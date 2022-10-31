<?php   session_start();  
 include("include.php");

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

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atrocity Raigad | Dashboard</title>
  <link rel="shortcut icon" type="image/png" href="dist/img/government.png" />



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
 <link href="dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
 <link href="dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/government.png" alt="Atrocity" height="60" width="60">
    </div>

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
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Atrocity Raigad</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!--<div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>-->
          <div class="info">
            <a href="#" class="d-block"
              style="text-transform:capitalize;font-size:20px;font-weight:500"><?php echo $role; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link active">
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
            <i class=" nav-icon fas fa-landmark "></i>
                    <p>
                      बँक माहिती
                    </p>
      </a>
            </li>
            <li class="nav-item">
              <a href="member-img.php" class="nav-link">
                <i class="nav-icon fa fa-image"></i>
                <p>
                  सदस्य प्रतिमा
                </p>
              </a>

            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
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
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">गुन्ह्यांचे प्रकार</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <form method="post" id="myForm">
                <div class="form-group text-right d-flex">
                  <label class="mr-4 mt-auto" style="width: -webkit-fill-available;">वर्ष निवडा</label>
                  <input class="yearselect form-control" id="year" name="year" value="2022">
                </div>
              </form>
            </div>
          </div>
          
            <H4 id="txt_name"></H4>
         <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content" style="text-align:center">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <?php
                $currentDate=date('Y');
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='शिवीगाळ,'");
                }else{
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='शिवीगाळ,'");
                }
                  $count1=mysqli_num_rows($query);
                  ?>
                  <h3><?php echo $count1 ?></h3>

                  <p>शिवीगाळ</p>
                </div>
                <div class="icon">

                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <?php
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='मारहाण,'");
                }else{
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='मारहाण,'");
                }
                  $count2=mysqli_num_rows($query);
                  ?>
                  <h3><?php echo $count2 ?></h3>

                  <p>मारहाण</p>
                </div>
                <div class="icon">

                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <?php
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='जाळपोळ,'");
                }else{
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='जाळपोळ,'");
                }
                  $count3=mysqli_num_rows($query);
                  ?>
                  <h3><?php echo $count3 ?></h3>
                  <p>जाळपोळ</p>
                </div>
                <div class="icon">

                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <?php
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='खुन,'");
                }else{
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='खुन,'");
                }
                  $count=mysqli_num_rows($query);
                  ?>
                  <h3><?php echo $count ?></h3>
                  <p>खून</p>
                </div>
                <div class="icon">

                </div>

              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- /.card-body -->
          <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#a632a8; color:white;">
              <div class="inner">
                <?php
                 if(isset($_POST['year'])){
                  $date = $_POST['year'];
                   $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='बलात्कार,'");
                 }else{
                   $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='बलात्कार,'");
                 }
                  $count4=mysqli_num_rows($query);
                  ?>
                <h3><?php echo $count4 ?></h3>

                <p>बलात्कार</p>
              </div>
              <div class="icon">

              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#025669; color:white;">
              <div class="inner">
                <?php
               if(isset($_POST['year'])){
                $date = $_POST['year'];
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='विनयभंग,'");
                }else{
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$currentDate' and type_of_offence='विनयभंग,'");
                }
                  $count5=mysqli_num_rows($query);
                  ?>
                <h3><?php echo $count5 ?></h3>

                <p> विनयभंग</p>
              </div>
              <div class="icon">

              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#FF7514; color:white;">
              <div class="inner">
                <?php
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                  $query=mysqli_query($conn,"select * from complaint_form where year(date)='$date' and type_of_offence='इतर,'");
                }else{
                  $query=mysqli_query($conn,"select * from complaint_form where  year(date)='$currentDate' and type_of_offence='इतर,'");
                }
                  $count6=mysqli_num_rows($query);
                  ?>
                <h3><?php echo $count6 ?></h3>

                <p>इतर</p>
              </div>
              <div class="icon">

              </div>

            </div>
          </div>
        </div>
        </div>
        <!-- /.card -->
        <!-- Main row -->

        <!--row start-->
     
        <!-- /.row -->
        <!-- /.card-body -->
        <!--row close-->

        <div class="content-header" style="text-align:left">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">अर्थसहाय्य रक्कम निधी टप्पे</h1>
              </div><!-- /.col -->
              <!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>

        <!--row start-->
        <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#1C542D; color:white;">
              <div class="inner">

                <?php
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                   $query=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='stage 1'");
                 }else{
                   $query=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='stage 1'");
                 }
                  $count8=mysqli_num_rows($query);
                  ?>
                <h3><?php echo $count8 ?></h3>

                <p>अर्थसहाय्य रक्कम निधी टप्पा १</p>
              </div>
              <div class="icon">

              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#7FB5B5; color:white;">
              <div class="inner">

                <?php
               if(isset($_POST['year'])){
                $date = $_POST['year'];
                  $query=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='stage 2'");
                }else{
                  $query=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='stage 2'");
                }
                  $count9=mysqli_num_rows($query);
                  ?>
                <h3><?php echo $count9 ?></h3>

                <p>अर्थसहाय्य रक्कम निधी टप्पा २</p>
              </div>
              <div class="icon">

              </div>

            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#EFA94A; color:white;">
              <div class="inner">

                <?php
                if(isset($_POST['year'])){
                  $date = $_POST['year'];
                  $query=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$date' and status='stage 3'");
                }else{
                  $query=mysqli_query($conn,"select complaint_form.district as district,image.status as stage1 from image inner join complaint_form on complaint_form.id=image.caseid  where year(complaint_form.date)='$currentDate' and status='stage 3'");
                }
                  $count10=mysqli_num_rows($query);
                  ?>
                <h3><?php echo $count10 ?></h3>
                <p>अर्थसहाय्य रक्कम निधी टप्पा ३ </p>
              </div>
              <div class="icon">

              </div>

            </div>
          </div>


        </div>
        </div>
     
        <!-- /.row -->
        <!-- /.card-body -->

    </div>


    <!--row close-->


    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> &copy; <?php echo date('Y'); ?></strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      Designd by <a href="https://tectignis.in/" target="_blank" style="color: #869099; text-decoration:none">Tectignis
        It Solutions</b></a>
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
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>

  <script src="//code.jquery.com/jquery.min.js"></script>
  <script src="report/year-select.js"></script>
  <script>
    $(document).ready(function () {
      $('#year').on('change', function () {
        this.form.submit();
      });
      var bla = $(this).val();
        $('#txt_name').html(bla);
    });

    $('.yearselect').yearselect({
      selected: 2022
    });
  </script>
</body>

</html>