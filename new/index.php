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
    <title>Statistics Cards - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .mt-auto {
            margin-top: 10px !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered{
            width: 210px;
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
            <div class="content-body">
                <div class="content-header" style="text-align:left">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">गुन्ह्यांचे प्रकार</h1>
                            </div><!-- /.col -->

                            <div class="col-md-6 mb-1">
                                <form method="post" id="myForm">
                                    <div class="form-group text-right d-flex">
                                        <label class="mr-4 mt-auto form-label" for="select2-array" style="width: 72px; margin-left: 199px;">वर्ष
                                            निवडा</label>
                                            <div class="mb-1">
                                                    <select class="select2 form-select" id="select2-basic">
                                                        <option selected>Select</option>
                                                        <option>2020</option>
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                    </select>
                                                </div>
                                    </div>
                                </form>
                            </div>

                            <!-- <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-array">जिल्हा</label>
                                                <div class="mb-1">
                                                    <select class="select2 form-select" id="select2-basic">
                                                        <option selected>Select</option>
                                                        <option>नवी मुंबई</option>
                                                        <option>रायगड</option>
                                                    </select>
                                                </div>
                                            </div> -->
                            <!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- Statistics card section -->
                <section id="statistics-card">
                    <!-- Stats Vertical Card -->
                    <div class="row">
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center bg-light-info">
                                <div class="card-body">
                                    <div class="avatar bg-light-info p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">1</h2>
                                    <p class="card-text">शिवीगाळ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center bg-light-success">
                                <div class="card-body">
                                    <div class="avatar bg-light-warning p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">2</h2>
                                    <p class="card-text">मारहाण</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center bg-light-warning">
                                <div class="card-body">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">0</h2>
                                    <p class="card-text">जाळपोळ</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center bg-light-danger">
                                <div class="card-body">
                                    <div class="avatar bg-light-primary p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">3</h2>
                                    <p class="card-text">खून</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-success p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">0</h2>
                                    <p class="card-text">बलात्कार</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">1</h2>
                                    <p class="card-text">विनयभंग</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 col-sm-6">
                            <div class="card text-center">
                                <div class="card-body">
                                    <div class="avatar bg-light-danger p-50 mb-1">
                                        <div class="avatar-content">
                                            <i data-feather="alert-octagon" class="font-medium-5"></i>
                                        </div>
                                    </div>
                                    <h2 class="fw-bolder">1</h2>
                                    <p class="card-text">इतर</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Statistics Card section-->
            </div>

            <div class="content-body">
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
                <div class="row">
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="avatar bg-light-info p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather="alert-octagon" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">4</h2>
                                <p class="card-text">अर्थसहाय्य रक्कम निधी टप्पा १</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="avatar bg-light-warning p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather="alert-octagon" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">0</h2>
                                <p class="card-text">अर्थसहाय्य रक्कम निधी टप्पा २</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 col-sm-6">
                        <div class="card text-center">
                            <div class="card-body">
                                <div class="avatar bg-light-danger p-50 mb-1">
                                    <div class="avatar-content">
                                        <i data-feather="alert-octagon" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder">1</h2>
                                <p class="card-text">अर्थसहाय्य रक्कम निधी टप्पा ३</p>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/cards/card-statistics.js"></script>
    <script src="app-assets/js/scripts/forms/form-select2.js"></script>
    <!-- END: Page JS-->

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
</body>
<!-- END: Body-->

</html>