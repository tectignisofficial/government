<?php
include("../../include.php");
session_start();
//include '../../api.php';
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
        //header("Location:../login.php"); 
       }//else{
         
        $district='';
        $email=$_SESSION['use'];
        $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
        
        while($res=mysqli_fetch_array($sql)){
          $district=$res['district'];
        }



//if (mysqli_num_rows($bank_detail)){
//}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>अहवाल | R1</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
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
<body class="hold-transition sidebar-mini ">
<div class="wrapper">

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
              </ul>
            </li>

            <li class="nav-item">
              <a href="r1opy.php" class="nav-link active">
              <i class=" nav-icon fas fa-landmark"></i> 
                <p>
                बँक माहिती
                </p>
              </a>
           
            </li>
            <li class="nav-item">
              <a href="../../logout.php" class="nav-link">
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
    <section class="content-header print-card">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="text-center">प्रपत्र - १. </h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/government-master/index.html">Home</a></li>
              <li class="breadcrumb-item active">R1</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!--search-->
    <section class="content card-print ">
          <div class="container-fluid">
            <div class="row  mb-4 " style="float:right" >
              <div class="col-12 col-lg-12">
    <div>
    <form name="search" method="post">
    <div class="input-group">
    <input type="text" class="form-control" name="search" placeholder="Search complaint number">
    <div class="input-group-append">
    <button class="btn btn-secondary" type="submit" name="submit">
    <i class="fa fa-search"></i>
    </button>
    </div>
    				</form>
            <div>
    </div>
    </div>
      </div>
    </section>
    <div class="clearfix"></div>
    <!--search-->

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="container my-2">
                            <div class="card-tools text-center">
                         
                              <button type="button" class="btn btn-tool" id="print" onclick='window.print();' style="background-color: lightgray;">
                                <i class="fas fa-print"></i>
                                Print                    </button>
                              <button type="button" class="btn btn-tool" id="pdf" style="background-color: lightgray;">
                                <i class="fas fa-file-pdf"></i>
                                PDF                    </button>
                               
                              <button type="button" class="btn btn-tool" id="excel" onclick="export_data()" style=" background-color: lightgray;
    color:black;">
      
                                <i class="fas fa-table"></i>
                                Exel               </button> 
                            </div>
                            </div>
                            
            <div class="card print-container" id="ToPrint">
              <div class="card-header">
                

           
             <!--<h2 class=" text-center fs-1 fw-bold ">प्रपत्र - १.</h2>-->
                <br>
                <h5 class=" text-center ">- पीहित व्यक्तीचा बँक खात्याचा तपशीलत</h5>

                <!--<p class=" text-center fw-bolder"> माहे ऑगस्ट , २०२१ मध्ये घडलेल्या गुन्हयांची माहिती</p>-->


            
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">


              <table id="tbl" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                   <th class="text-center"rowspan="2">अ. क्र.</th>
                    <th class="text-center"rowspan="2">नोंद वही क्र.</th>
					   <th class="text-center"rowspan="2">जिल्हा </th>
					   <th class="text-center"rowspan="2">पोलीस ठाणा </th>
					   <th class="text-center"rowspan="2">गुन्हा न.</th>

					  <!-- <th class="text-center"rowspan="2">लावलेली कलमे </th>
					   <th class="text-center"rowspan="2">गुन्हयांचा प्रकार</th>-->
                       <th class="text-center"colspan="1">पीहित </th>
					   <th class="text-center"colspan="5">बँक माहिती</th>
					   <th class="text-center"colspan="3">Payment Status</th>
					  <th class="text-center"rowspan="2">शेरा</th>
                  </tr>
                  <tr>
                      <th class="text-center">नाव</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Account No.</th>
					  <th class="text-center">Bank Name</th>
					  <th class="text-center">Branch Name</th>
					  <th class="text-center">IFSC Code</th>
					  <th class="text-center">Stage1</th>
					  <th class="text-center">Stage2</th>
					  <th class="text-center">Stage3</th>
                    
					  

           
                  </tr>
              

              
              
                  </thead>
                  <tbody>
<?php
if(isset($_POST['submit'])){
  $search=$_POST['search'];
  $bank_detail = mysqli_query($conn,"select bank_detail.account_holder_name as account_holder_name,bank_detail.account_no as account_no,bank_detail.bank_name as bank_name,bank_detail.branch_name as branch_name,bank_detail.ifsc_code as ifsc_code,bank_detail.stage_1 as stage_1,bank_detail.stage_2 as stage_2,bank_detail.stage_3 as stage_3,complaint_form.book_no as book_no,complaint_form.date as date,complaint_form.district as district,complaint_form.police_station as police_station,complaint_form.complaint_no as complaint_no,complaint_form.complaint_filer_name as complain_name,complaint_form.complaint_filer_address as complain_address,image.discription as discription,victim.name as vname from bank_detail inner join complaint_form on complaint_form.id=bank_detail.caseid inner join image on complaint_form.id=image.caseid left join victim on victim.caseid=complaint_form.id where district='$district' and complaint_form.complaint_no like '%$search%'");
  $i=1;
											while($row = mysqli_fetch_array($bank_detail)) {?>
                         <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td class="text-center"><?php echo $row["book_no"]; ?></td>
                    <td class="text-center"> <?php echo $row["district"]; ?></td>
                    <td class="text-center"><?php echo $row["police_station"];?></td>
                    <td class="text-center"><?php echo $row["complaint_no"]; ?></td>
                    <td class="text-center"><?php echo $row["vname"]; ?></td>
                    <td class="text-center"><?php echo $row['account_holder_name'];?></td>
                    <td class="text-center"><?php echo $row['account_no'];?></td>
                    <td class="text-center"><?php echo $row['bank_name'];?></td>
                    <td class="text-center"><?php echo $row['branch_name'];?></td>
                    <td class="text-center"><?php echo $row['ifsc_code'];?></td>
                    <td class="text-center"><?php echo $row['stage_1'];?></td>
                    <td class="text-center"><?php echo $row['stage_2'];?></td>
                    <td class="text-center"><?php echo $row['stage_3'];?></td>
                    <td class="text-center"><?php echo $row['discription'];?></td>
						  
            
                 
                  </tr>
          <?php        $i++;    }
         
  
}

					  $bank_detail = mysqli_query($conn,"select bank_detail.account_holder_name as account_holder_name,bank_detail.account_no as account_no,bank_detail.bank_name as bank_name,bank_detail.branch_name as branch_name,bank_detail.ifsc_code as ifsc_code,bank_detail.stage_1 as stage_1,bank_detail.stage_2 as stage_2,bank_detail.stage_3 as stage_3,complaint_form.book_no as book_no,complaint_form.date as date,complaint_form.district as district,complaint_form.police_station as police_station,complaint_form.complaint_no as complaint_no,complaint_form.complaint_filer_name as complain_name,complaint_form.complaint_filer_address as complain_address,image.discription as discription,victim.name as vname from bank_detail inner join complaint_form on complaint_form.id=bank_detail.caseid inner join image on complaint_form.id=image.caseid left join victim on victim.caseid=complaint_form.id where district='$district'");
					 
											$i=1;
											while($row = mysqli_fetch_array($bank_detail)) {
											?> 
					  
					  <tr>
                    <td class="text-center"><?php echo $i; ?></td>
                    <td class="text-center"><?php echo $row["book_no"]; ?></td>
                    <td class="text-center"> <?php echo $row["district"]; ?></td>
                    <td class="text-center"><?php echo $row["police_station"];?></td>
                    <td class="text-center"><?php echo $row["complaint_no"]; ?></td>
                    <td class="text-center"><?php echo $row["vname"]; ?></td>
                    <td class="text-center"><?php echo $row['account_holder_name'];?></td>
                    <td class="text-center"><?php echo $row['account_no'];?></td>
                    <td class="text-center"><?php echo $row['bank_name'];?></td>
                    <td class="text-center"><?php echo $row['branch_name'];?></td>
                    <td class="text-center"><?php echo $row['ifsc_code'];?></td>
                    <td class="text-center"><?php echo $row['stage_1'];?></td>
                    <td class="text-center"><?php echo $row['stage_2'];?></td>
                    <td class="text-center"><?php echo $row['stage_3'];?></td>
                    <td class="text-center"><?php echo $row['discription'];?></td>
						  
            
                 
                  </tr>
					   <?php
											$i++;
											}
											?>
                 
                  </tbody>
           
              </table>



               
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


    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>

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
      XLSX.writeFile(fb, 'bank_detail.xlsx');
       
}

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
                
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 1},
                jsPDF: { unit: 'cm', format:"A3", orientation: 'landscape' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>


</body>
</html>
