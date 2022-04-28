
<?php
include("../../include.php");
session_start();
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
}
$btn=mysqli_real_escape_string($conn, $_GET['btn1']);
$btn2=mysqli_real_escape_string($conn, $_GET['btn2']);

$id="";
$stage1="";
$stage2="";
$stage3="";
if(isset($_POST['sub1'])){
    $complaint_no=$_POST['complaint_no'];
    $sql=mysqli_query($conn,"select complaint_form.id as id,complaint_form.complaint_no as no, bank_detail.stage_1 as stage1, bank_detail.stage_2 as stage2, bank_detail.stage_3 as stage_3 from complaint_form inner join bank_detail on complaint_form.id=bank_detail.caseid where complaint_form.complaint_no='$complaint_no'");
    while($arr=mysqli_fetch_array($sql)){
        $id=$arr['id'];
        $stage1=$arr['stage1'];
        $stage2=$arr['stage2'];
        $stage3=$arr['stage_3'];
    }
}
if(isset($_POST['sub2'])){
    $id=$_POST['id1'];
    $stage1=$_POST['stage1'];
    $sql=mysqli_query($conn,"UPDATE `bank_detail` SET `stage_1`='$stage1' WHERE caseid='$id'");
}

if(isset($_POST['sub3'])){
    $id1=$_POST['check_id'];
    $stage2=$_POST['stage2'];
    $sql=mysqli_query($conn,"UPDATE `bank_detail` SET `stage_2`='$stage2' WHERE caseid='$id1'");
    echo "<script>alert('$id1');</script>";
    echo "<script>alert('$stage2');</script>";
}

if(isset($_POST['subt3'])){
    $id=$_POST['id3'];
    $stage3=$_POST['stage3'];
    $sql=mysqli_query($conn,"UPDATE `bank_detail` SET `stage_3`='$stage3' WHERE caseid='$id'");
    if($sql==1){
        echo "<script>alert('Case Close');</script>";
        header("location:payment.php");
    }
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atrocity Raigad | Payment </title>
    <link rel="shortcut icon" type="image/png" href="../../dist/img/government.png" />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    
</head>

<body class="hold-transition sidebar-mini">
<div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
      <a href="../index.php" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
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
            <a href="#" class="d-block" style="text-transform:capitalize;font-size:20px;font-weight:500"><?php echo $district; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item menu-open">
              <a href="../index.php" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i> 
               
                <p>
                    मुख्यपृष्ठ 
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
           
            </li>

            <li class="nav-item">

              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  नोंदणी
                  <i class="right fas fa-angle-left"></i>
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="../form1.php" class="nav-link">
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
                  <a href="R1.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल १</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="R2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल २</p>
                  </a>
                </li>
                
                <li class="nav-item">
                  <a href="R4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ४</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="R5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ५</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="complain.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Complaint</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class=" nav-icon fas fa-landmark "></i>
                <p>
                  बँक
                  <i class="right fas fa-angle-left"></i>
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
              <a href="r1opy.php" class="nav-link ">
              <i class="far fa-circle nav-icon"></i> 
                <p>
                बँक माहिती
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="payment.php" class="nav-link active">
              <i class=" far fa-circle nav-icon"></i> 
                <p>
                पेमेंट
                </p>
              </a>
           
            </li>
            </ul>
            </li> 
            <li class="nav-item">
              <a href="../../logout.php" class="nav-link">
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
                            <h1>payment</h1>
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
            <section class="content" id="sec1">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary"> 
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post">
                                    <div class="card-body">
                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">Complaint No</label>
                                                <input type="text" required class="form-control" name="complaint_no" id="complaint" placeholder="" required>
                                                <input type="hidden" name="" value="<?php echo $id ?>" id="vvv" >
                                            </div>
                                        </div>
                                        <div style="text-align: end;">
                                            <button type="submit" id="sub1" name="sub1" class="btn btn-primary"> Submit
                                            </button>
                                        </div>
                                    </div>  

                                </form>
								
                            </div>
    </div>
                                 
    </div>
    </div>
			</section>
			
			<section class="content" id="sec2">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary"> 
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post">
                                    <div class="card-body">
                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">Stage 1</label>
                                                <input type="text" required class="form-control" name="stage1"
                                                    id="stage1" placeholder="">
                                                <input type="hidden" name="id1" value="<?php echo $id ?>" id="id1" >
                                                
                                                <input type="text" value="<?php echo $stage1 ?>" name="id2" id="vv1" style="border: hidden;text-align:center" readonly>
                                            </div>
                                        </div>
                                        <div style="text-align: end;">
                                            <button type="submit" name="sub2" id="sub2" class="btn btn-primary"> Submit
                                            </button>
                                        </div>
                                    </div>  

                                </form>
								
                            </div>
    </div>
                                 
    </div>
    </div>
                         
			</section>
			
			<section class="content" id="sec3">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary"> 
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post">
                                    <div class="card-body">
                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">Stage 2</label>
                                                <input type="text" required class="form-control" name="stage2" 
                                                id="stage2" placeholder="">
                                                <input type="hidden" name="check_id" value="<?php echo $id ?>" >
                                                <input type="text" value="<?php echo $stage2 ?>" name="id2" id="check_id" style="border: hidden;text-align:center" readonly>
                                            </div>
                                        </div>
                                        <div style="text-align: end;">
                                            <button type="submit" id="" name="sub3" class="btn btn-primary"> Submit
                                            </button>
                                        </div>
                                    </div>  

                                </form>
								
                            </div>
    </div>
                                 
    </div>
    </div>
                         
			</section>
			
			<section class="content" id="sec4">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary"> 
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form method="post">
                                    <div class="card-body">
                                        <div class="d-flex form-group " style="margin-left: -12px;">
                                            <div class="form-group col-6">
                                                <label for="exampleदिनांक">Stage 3</label>
                                                <input type="text" required class="form-control" name="stage3" id="stage3" placeholder="">
                                                <input type="hidden" value="<?php echo $id ?>" name="id3" id="id3" >
                                                
                                                <input type="text" value="<?php echo $stage3 ?>" name="id2" id="vv3" style="border: hidden;text-align:center" readonly>
                                            </div>
                                        </div>
                                        <div style="text-align: end;">
                                            <button type="submit" name="subt3" class="btn btn-primary"> Submit
                                            </button>
                                        </div>
                                    </div>  

                                </form>
								
                            </div>
    </div>
                                 
    </div>
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
    
			</section>
                        </div>
                        <!--/.col (left) -->
                        <!-- right column -->

                        <!--/.col (right) -->
                    </div>
                    <!-- /.row -->
                
          
                    <script>
        $(document).ready(function(){
            

            let sub=$("#vvv").val();
            let sub2=$("#vv1").val();
            let sub3=$("#check_id").val();
            let sub4=$("#vv3").val();

            if(sub == ""){
                $("#sec2").css("display"," none");
            }else{
                $("#sec2").css("display","block");
            }

            if(sub2 == ""){
                $("#sec3").css("display"," none");
            }else{
                $("#stage1").css("display","none");
                $("#sec3").css("display","block");
            }

            if(sub3 == ""){
                $("#sec4").css("display"," none");
            }else{
                $("#stage2").css("display","none");
                $("#sec4").css("display","block");
            }

            

            
        })
         
    </script>                     
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
    <script src="../../dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
    
</body>

</html>