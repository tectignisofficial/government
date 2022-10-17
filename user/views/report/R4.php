<?php
include '../../api.php';
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
 header("Location:../login.php"); 
}
$district='';
        $email=$_SESSION['use'];
        $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
        
        while($res=mysqli_fetch_array($sql)){
          $district=$res['district'];
        }
if (mysqli_num_rows($complaints)>0){
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>अहवाल | R4</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">





  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>
  @media print{
    body *{
      visibility:hidden;
    }
    .print-container, .print-container *{
      visibility:visible;
      
    }
    .print-card{
      display:none;
    }
      }
</style>
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

        <!-- Notifications Dropdown Menu -->

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

              <a href="../form1.php" class="nav-link ">
                <i class="nav-icon fas fa-th"></i>
                <p>
                नोंदणी करा
                  <!-- <span class="right badge badge-danger">New</span> -->
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link active">
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
                  <a href="R4.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ४</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="R5.php" class="nav-link ">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ५</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="complain.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>प्रलंबित प्रकरणे</p>
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
              <a href="r1opy.php" class="nav-link">
              <i class="far fa-circle nav-icon"></i> 
                <p>
                बँक माहिती
                </p>
              </a>
            </li>
            <!-- <li class="nav-item"> 
              <a href="payment.php" class="nav-link">
              <i class=" far fa-circle nav-icon"></i> 
                <p>
                पेमेंट
                </p>
              </a>
           
            </li>-->
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
    <section class="content-header print-card">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="text-center">प्रपत्र - १. </h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/government-master/index.php" style="color: #869099; text-decoration:none">Home</a></li>
              <li class="breadcrumb-item active">R4</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
    <div class="col-12">
              <div class="container my-2">

        
            <div class="card print-card">
             <div class="container my-4">
               <div class="row">
                 <div class="col-md-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">अखेर</h3>
              </div>
              <form method="post">
              <div class="card-body">
                <div class="row">
                <!-- Date -->
        

                <div class="form-group col-md-6">
                  <label>Date range:</label>

                  <div class="form-group">
                        <select class="form-control" name="month">
                          <option>select month</option>
                          <option value="january">January</option>
                          <option value="february">February</option>
                          <option value="march">March</option>
                          <option value="april">April </option>
                          <option value="may">May</option>
                          <option value="june">June </option>
                          <option value="july">July </option>
                          <option value="august">August </option>
                          <option value="september">September </option>
                          <option value="october">October</option>
                          <option value="november">November</option>
                          <option value="december">December</option>
                        </select>
                      </div>
                  <!-- /.input group -->
                  <div class="form-group">
                       <input class="yearselect form-control"  id="year" name="year" value="2016">
                      </div>
                </div>
                <!-- /.form group -->

           

                <!-- Date and time range -->
                <div class="form-group col-md-6">
                  <label>Select District :</label>
                    <div class="form-group">
                    <?php 
                        $email=$_SESSION['use'];
                        $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
                        
                        while($res=mysqli_fetch_array($sql)){
                          ?>
                          <input class="form-control " name="district" value="<?php echo $res['district']; ?>" readonly>
                          <?php
                        }
                        ?>
                          
                      </div>
                         
                  </div>
                </div>
                <div class="text-center" id="">
                  <button type="submit" id="" name="filter" class="btn text-center btn-success">Submit</button>
                </div>
              </div>
       
            </div>
     
                      </form>
     
       </div>
        
          </div>
               </div>
               
             </div>

             <?php
if(isset($_POST["filter"]) && ($_POST['district'])){

    $dat=$_POST['month'];
    $district=$_POST['district'];
    $year=$_POST['year'];
    
    $sql=mysqli_query($conn,"select id from complaint_form where monthname(date) ='$dat' and year(date)='$year' and district='$district'");
    if($dat=='select month'){
      echo "<div style='text-align:center;font-size:40px;vertical-align:middle;color:red;'>No RECORD FOUND</div>";
    }else{
    if($sql){
    
   echo" 
   <div class=' card' id=''>
                     <div class='card-tools text-center' style='margin-top:12px'>
                         
                              <button type='button' class='btn btn-tool'  id='btn'
                              onclick='window.print();'  style=' background-color: #145a8b;
    color: white;>
                                <i class='fas fa-print'></i>
                                Print                    </button>
                              <button type='button' class=btn btn-tool' id='pdf' style='background-color: #b70000 ; color:white;'>
                                <i class='fas fa-file-pdf'></i>
                                PDF                    </button>
                                

                                   
                              <button type='button' class='btn btn-tool' id='excel' onclick='export_data()' style='    background-color: #137601;
    color: white;'>
      
                                <i class='fas fa-table'></i>
                                Exel               </button> 
                            </div>
                            
                        <div class='print-container' id='ToPrint'>
                            <div class='card-header' style='margin-top:12px' > 
                            <h2 class=' text-center fs-1 fw-bold '>प्रपत्र ३</h2>
                            <br>
                            <h5 class=' text-center '>विविध कारणांनी अर्थसहाय्यासाठी प्रलंबित असलेली प्रकरणांचा तपशील / तक्त यापुढील </h5>
            
                              <br>
                            <p class=' text-center '> तक्त यापुढील पृष्ठांमधीलअनुक्रमांकाप्रमाणे </p>
                            <p class=' text-center fw-bolder'> माहे  $dat ,$year  अखेर  </p>
            
                        
                          </div>

                  <br>


            
              <!-- /.card-header -->
              <div class='card-body table-responsive p-10' >
              <table id='tbl' class='table table-bordered table-hover'>
              <thead>
              <tr>
                <th class='text-center'> क्र.</th>
                <th class='text-center'>जिल्हा</th>
                <th class='text-center'>	एकूण प्रलंबित प्रकरणे   </th>
                <th class='text-center' colspan='2'> परिपूर्ण प्रकरणे </th>
                <th class='text-center' colspan='2'>दोबार प्रपत्रे सादर न झालेले </th>
                <th class='text-center' colspan='2'>जातीचा दाखला नसलेली प्रकरणे    </th>
           
              </tr>
              <tr>
                <th class='text-center' colspan='3'>&nbsp;</th>
                <th class='text-center'>अनुक्रमांक</th>
                <th class='text-center'> एकूण प्रकरणे </th>
                <th class='text-center'>अनुक्रमांक</th>
                <th class='text-center'> एकूण प्रकरणे </th>
                <th class='text-center'>अनुक्रमांक</th>
                <th class='text-center'> एकूण प्रकरणे </th>
         
       
              </tr>
              </thead>
              
              <tbody>
              
                  ";
      $count=mysqli_num_rows($sql);            

        $i=1;
        echo "
        <tr><td>".$i."</td>
        <td>".$district."</td>
        ";
    $i++;
    }
}
if(isset($_POST["filter"]) && ($_POST['district'])){
  //$dat=$_POST['month'];
  $sum=0;
  $sql=mysqli_query($conn,"select complaint_form.complaint_no as id from complaint_form inner join image on complaint_form.id=image.caseid where image.status!='case completed' and monthname(complaint_form.date) ='$dat' and year(complaint_form.date)='$year' and district='$district' group by id");
       $count=mysqli_num_rows($sql);
        echo "</td><td class='text-center'>". $count."</td> ";} 

if(isset($_POST["filter"]) && ($_POST['district'])){
  //$dat=$_POST['month'];
  $sum=0;
  $sql=mysqli_query($conn,"select complaint_form.complaint_no as id from complaint_form inner join image on complaint_form.id=image.caseid where image.status='case completed' and monthname(complaint_form.date) ='$dat' and year(complaint_form.date)='$year' and district='$district' group by id");
       echo " <td class='text-center'>";
			while($row = mysqli_fetch_array($sql)) {
        echo "<span>".$row['id'].",</span>";
        $sum = $sum + 1;
      }
        echo "</td><td class='text-center'>".$sum ."</td> ";} 

if(isset($_POST["filter"]) && ($_POST['district'])){
  //$dat=$_POST['month'];
  $sum1=0;
  $sql=mysqli_query($conn,"select complaint_no from victim inner join complaint_form on complaint_form.id=victim.caseid where monthname(complaint_form.date) ='$dat' and year(complaint_form.date)='$year'and district='$district' and charge_sheet='नाही'");
       echo " <td class='text-center'>";
			while($row = mysqli_fetch_array($sql)) {
        echo "<span>".$row['complaint_no'].",</span>";
        $sum1 = $sum1+ 1;
      }
        echo "</td><td class='text-center'>".$sum1."</td> ";}
        
        
        if(isset($_POST["filter"]) && ($_POST['district'])){
          //$dat=$_POST['month'];
          $sum2=0;
          $sql=mysqli_query($conn,"select complaint_no from victim inner join complaint_form on complaint_form.id=victim.caseid where monthname(complaint_form.date) ='$dat' and year(complaint_form.date)='$year' and district='$district' and caste_certificate='नाही'");
               echo " <td class='text-center'>";
              while($row = mysqli_fetch_array($sql)) {
                echo "<span>".$row['complaint_no'].",</span>";
                $sum2 = $sum2+ 1;
              }
                echo "</td><td class='text-center'>".$sum2."</td> ";}}?>
              
              
                  </tbody>
           
              </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <strong> &copy; <?php echo date('Y'); ?></strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        Designd by <a href="https://tectignis.in/" target="_blank" style="color: #869099; text-decoration:none">Tectignis It Solutions</b></a>
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
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>



    
<script>
window.onload = function () {
    document.getElementById("pdf")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("ToPrint");
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                
                filename: 'Report4.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 1},
                jsPDF: { unit: 'cm', format:"A3", orientation: 'landscape' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


                
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/moment/moment.min.js"></script>
<script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js" ></script><script src="jquery-table2excel-master/src/jquery.table2excel.js"></script>

<script>

    function export_data(){
     //alert('f');
     let table=document.getElementById("tbl");
      let fb=XLSX.utils.table_to_book(table,{sheet:'sheet1'});
      XLSX.write(fb,{
        bookType:'xlsx',
        type:'base64'
      });
      XLSX.writeFile(fb, 'report4.xlsx');
       
}

    </script>

<script>
    document.getElementById("submit").addEventListener("click", function(){
     none = document.getElementById("none")
     none.classList.add('d-block');
     none.classList.remove('d-none');
  });

</script>

<script src="//code.jquery.com/jquery.min.js"></script>
<script src="year-select.js"></script>
<script>$('.yearselect').yearselect({
  selected: 2016
});
</script>
</body>
</html>
