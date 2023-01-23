<?php 
require("include/config.php");

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description"
        content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Select - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css"
        href="app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css" />
        <link rel="stylesheet" type="text/css"
        href="app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css" />
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap5.min.css" />
        <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/rowGroup.bootstrap5.min.css" />

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-flat-pickr.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/pickers/form-pickadate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">\

    <style>
        .dt-button {
            border: 1px solid !important;
            background-color: transparent;
            margin: 1%;
            display: inline-block;
            font-weight: 400;
            line-height: 1;
            color: #6e6b7b;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.786rem 1.5rem;
            font-size: 1rem;
            border-radius: 0.358rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, background 0s, border 0s;


        }
    </style>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php include("include/header.php");?>
    <!-- END: Header-->


    <!-- BEGIN: Sidebar Menu-->
    <?php include("include/sidebar.php");?>
    <!-- END: Sidebar Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0"></h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">मुख्यपृठ</a>
                                    </li>
                                    <li class="breadcrumb-item active">अहवाल ४
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Select2 Start  -->
                <section class="basic-select2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" style="font-size:20px;vertical-align:middle">अखेर</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="form-group">
                                                <label class="form-label" for="select2-basic"
                                                    style="font-weight: 600;">तारीख श्रेणी:</label>

                                                <div class="row">
                                                    <div class="col-md-3 mb-1">
                                                        <div class="mb-1">
                                                            <select name="district" class="select2 form-select"
                                                                id="countrySelect" size="1" required>
                                                                <option value="" disabled selected>जिल्हा निवडा</option>
                                                                <option value="नवी मुंबई">
                                                                    नवी मुंबई</option>
                                                                <option value="रायगड">
                                                                    रायगड</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <div class="form-group">
                                                            <select class="select2 form-select" id="monthSelect"
                                                                name="month" required>
                                                                <option value="" disabled selected>महिना निवडा</option>
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
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <div class="form-group" style="">
                                                            <input class="yearselect form-select" id="select2"
                                                                name="year" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-1">
                                                        <div class="mb-1">
                                                            <?php
                                                        $query=mysqli_query($conn,"select * from stages");
                                                        $count=1;
                                                        $sql=mysqli_fetch_array($query);
                                                        ?>
                                                            <select class="select2 form-select" id="select2-basic"
                                                                name="payStatus">
                                                                <option value="" disabled selected>Status</option>
                                                                <option>Stage 1 <?php echo $sql['stage_1']; ?></option>
                                                                <option>Stage 2 <?php echo $sql['stage_2']; ?></option>
                                                                <option>Stage 3 <?php echo $sql['stage_3']; ?></option>
                                                                <option>Stage 4 <?php echo $sql['stage_4']; ?></option>
                                                            </select>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 modal-footer" style="justify-content: center;">
                                                <button type="submit" class="btn btn-primary" name="filter">नमूद
                                                    करा</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
if(isset($_POST["filter"])){ ?>
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header d-block text-center">
                                        <h1 class="d-block fw-bold">प्रपत्र - ४.</h1><br>
                                        <h4 class="card-title">दाखल झालेल्या गुन्हयांप्रमाणे सहाय्य देण्यासाठी /
                                            मंजुरीसाठी
                                            गुन्हेनिहाय अप्राप्त कागदपत्रांची माहिती माहे ($month & $year), अखेर.</h4>
                                        <br>
                                        <h5 class="d-block">तक्त यापुढील पृष्ठांमधील अनुक्रमांकाप्रमाणे
                                        </h5><br>
                                        <h4 class="card-title d-block fw-bolder">माहे $month $year अखेर
                                        </h4>
                                    </div>
                                    <div class=" card-body table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                                <tr>
                                                    <th rowspan="2">क्र.</th>
                                                    <th rowspan="2">नोंद वही क्र.</th>
                                                    <th rowspan="2">दिनांक</th>
                                                    <th rowspan="2">जिल्हा</th>
                                                    <th rowspan="2">पोलीस ठाणे</th>
                                                    <th rowspan="2">गुन्हा न.</th>
                                                    <th rowspan="2">लावलेली कलमे</th>
                                                    <th rowspan="2">गुन्हयांचे प्रकार</th>
                                                    <th rowspan="2">फिर्यादीचे नाव</th>
                                                    <th rowspan="2">आरोपीचे नाव</th>
                                                    <th colspan="6" style="text-align: center;">पिडीत व्यक्तीची माहिती
                                                    </th>
                                                    <th rowspan="2">शेरा</th>
                                                    <th rowspan="2">Status</th>
                                                </tr>
                                                <tr>
                                                    <th>नाव</th>
                                                    <th>पत्ता</th>
                                                    <th>प्रवर्ग आणि जात</th>
                                                    <th>जातीचा दाखला</th>
                                                    <th>आधार कार्ड</th>
                                                    <th>चार्ज शिट</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                         $sql=mysqli_query($conn,"select * from complaint_form inner join victim on complaint_form.id=caseid;");
                        $count=1;
                         while($row=mysqli_fetch_array($sql)){ 
                         ?>
                                                <tr>
                                                    <td><?php echo $count;?></td>
                                                    <td><?php echo $row['book_no'];?></td>
                                                    <td><?php echo $row['date'];?></td>
                                                    <td><?php echo $row['district'];?></td>
                                                    <td><?php echo $row['police_station'];?></td>
                                                    <td><?php echo $row['complaint_no'];?></td>
                                                    <td><?php echo $row['section'];?></td>
                                                    <td><?php echo $row['type_of_offence'];?></td>
                                                    <td><?php echo $row['complaint_filer_name'];?></td>
                                                    <td><?php echo $row['criminal_name'];?></td>
                                                    <td><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['address'];?></td>
                                                    <td><?php echo $row['caste'];?></td>
                                                    <td><?php echo $row['caste_certificate'];?></td>
                                                    <td><?php echo $row['aadhar_card'];?></td>
                                                    <td><?php echo $row['charge_sheet'];?></td>
                                                    <td><?php echo $row['discription'];?></td>
                                                    <td><?php echo $row['status'];?></td>
                                                </tr>
                                                <?php $count++; }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <?php }?>
                    </div>
                </section>
                <!-- Select2 End -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include("include/footer.php");?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-select2.js"></script>
    <script src="app-assets/js/scripts/forms/pickers/form-pickers.js"></script>
    <!-- END: Page JS-->

    <script src="app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/jszip.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js"></script>
    <script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": true,
                "autoWidth": false,
                "buttons": ["print", "pdf", "excel"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>

    <script>
        $(window).on('load', function () {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="year-select.js"></script>
    <script>
        $('.yearselect').yearselect({
            selected: 2016
        });
    </script>
</body>
<!-- END: Body-->

</html>