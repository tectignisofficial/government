<?php
include '../../api.php';
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
 header("Location:../../login.php"); 
}

if (mysqli_num_rows($appresult)>0){
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3 | DataTables</title>

    <!-- Google Font: Source Sans Pro -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
    />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="../../plugins/fontawesome-free/css/all.min.css"
    />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css" />
  </head>
  <body class="hold-transition sidebar-mini">
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
              ><i class="fas fa-bars"></i
            ></a>
          </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
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
        <a href="index.html" class="brand-link">
          <img
            src="../../dist/img/AdminLTELogo.png"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: 0.8"
          />
          <span class="brand-text font-weight-light">Government Software</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img
                src="../../dist/img/user2-160x160.jpg"
                class="img-circle elevation-2"
                alt="User Image"
              />
            </div>
            <div class="info">
              <a href="#" class="d-block">Administrator</a>
            </div>
          </div>

          <!-- SidebarSearch Form -->

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul
              class="nav nav-pills nav-sidebar flex-column"
              data-widget="treeview"
              role="menu"
              data-accordion="false"
            >
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

              <li class="nav-item menu-open">
                <a href="/government-master/index.html" class="nav-link active">
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
                    तक्रार
                    <i class="right fas fa-angle-left"></i>
                    <!-- <span class="right badge badge-danger">New</span> -->
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item menu-open">
                    <a
                      href="../../pages/forms/governmentform.html"
                      class="nav-link"
                    >
                      <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                      <p>
                        तक्रार करा
                        <!-- <i class="right fas fa-angle-left"></i> -->
                      </p>
                    </a>
                  </li>
                  <li class="nav-item menu-open">
                    <a href="../..//pages/tables/R5.html" class="nav-link">
                      <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                      <p>
                        अहवाल
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
                    <a href="../../pages/tables/R1.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>अहवाल १</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/R2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>अहवाल २</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/R3.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>अहवाल ३</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/R4.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>अहवाल ४</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../../pages/tables/R5.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>अहवाल ५</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="../../pages/tables/allreport.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>संपूर्ण अहवाल</p>
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
                    <a
                      href="../../pages/forms/viewwebuser.html"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>संकेतस्थल वापरकर्ता</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a
                      href="../../pages/forms/viewmobileuser.php"
                      class="nav-link"
                    >
                      <i class="far fa-circle nav-icon"></i>
                      <p>मोबाईल ॲप वापरकर्ता</p>
                    </a>
                  </li>
                </ul>
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
                <h1>डेटा टेबल</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">DataTables</li>
                </ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">User List</h3>
                    <div class="card-tools">
                      <ul class="nav nav-pills ml-auto">
                        <li class="nav-item">
                          <a
                            class="nav-link active"
                            href="addappuser.php"
                            ><i class="fas fa-user mr-2"></i>Add User</a
                          >
                        </li>
                      </ul>
                    </div>
                  </div>

                  <!-- /.card-header -->
                  <div class="card-body">
                    <table
                      id="example2"
                      class="table table-bordered table-hover"
                    >
  
									

                      <thead>
                        <tr>
                        <th>अ. क्र.</th>
                          <th>नाव</th>
                          <th>ई-मेल</th>
                          <th>वापरकर्त्याची भूमिका</th>
                          <th>District</th>
                          <th>कार्यवाही</th>
                        </tr>
                      </thead>
                      		   <?php
											$i=0;
											while($row = mysqli_fetch_array($appresult)) {
											?> 
                      <tbody>
                        <tr>
                        <td><?php echo $row["id"]; ?></td>
                          <td><?php echo $row["name"]; ?></td>
                          <td><?php echo $row["email"]; ?></td>
                          <td><?php echo $row["role"]; ?></td>
                          <td><?php echo $row["district"]; ?></td>

      
                                  <td class="p-2">
                                    <a
                                      href="#"
                                      class="btn btn-info btn-xs"
                                      data-tt="tooltip"
                                      title=""
                                      data-original-title="Edit Sale"
                                    >
                                      <i class="fas fa-edit"></i>
                                    </a>
                                  
                               
                                    <a
                                      href="#"
                                      data-toggle="modal"
                                      data-target="#delete_sale"
                                      data-tt="tooltip"
                                      title=""
                                      class="btn btn-danger btn-xs delete_sale"
                                      data-sale_id="4"
                                      data-original-title="Delete Sale"
                                    >
                                      <i class="fas fa-trash"></i>
                                    </a>
                                  </td>
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
        <div class="float-right d-none d-sm-block">
          <p>
            Developed by
            <a href="https://tectignis.in/">Tectignis It Solutions</a>
          </p>
        </div>
        <strong>Copyright &copy; 2022 </strong> All rights reserved.
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
        $("#example1")
          .DataTable({
            responsive: true,
            lengthChange: false,
            autoWidth: false,
            buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
          })
          .buttons()
          .container()
          .appendTo("#example1_wrapper .col-md-6:eq(0)");
        $("#example2").DataTable({
          paging: true,
          lengthChange: false,
          searching: false,
          ordering: true,
          info: true,
          autoWidth: false,
          responsive: true,
        });
      });
    </script>
  </body>
</html>
