<?php
session_start();
require("include/config.php");
$id=$_GET['form4'];
require("select_api.php");
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
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css">

    <style>
        .position-relative {
            width: 100% !important
        }

        /* .status {
            width: 30% !important
        } */
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
                            <h2 class="content-header-title float-start mb-0">अनुसूचित जाती/जमाती अत्याचार ग्रस्त
                                पीडितांची माहिती</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">मुख्यपृठ</a>
                                    </li>
                                    <li class="breadcrumb-item active">सरकारी प्रपत्र
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
                                    <h4 class="card-title">इतर माहिती</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">

                                            <div class="form-group col-8">
                                                <div style="margin-bottom: 16px; font-weight: 600;">
                                                    <label for="Exampleवघकिय  पुष्टी-३१ अहवाल">FIR</label>
                                                </div>
                                                <div>
                                                    <label for="myfile"
                                                        style="margin-bottom: 25px; font-weight: 600;">फाईल
                                                        निवडा:</label>
                                                        <input type="hidden" required class="" name="id" value="<?php echo $id;?>">
                                                    <input type="file" name="files" style="margin-left: 15px;" multiple
                                                        value="<?php echo $image; ?> " />
                                                </div>
                                            </div>

                                            <div class="form-group col-4">
                                                <div class="mb-1">
                                                    <div class="input-group mb-2">
                                                        <select class="select2 form-select" id="select2-basic"
                                                            name="payStatus">
                                                            <option value="" disabled selected>Status</option>
                                                            <option
                                                                value="stage 1 FIR दाखला / प्रकरण मंजूर आहे / अनुदानाच्या प्रतीक्षेत"
                                                                ="">stage 1 FIR दाखला / प्रकरण मंजूर आहे /
                                                                अनुदानाच्या प्रतीक्षेत</option>
                                                            <option value="stage 2 FIR चौकशी दाखल">stage 2 FIR चौकशी
                                                                दाखल</option>
                                                            <option value="stage 3 न्यायालयाचा निर्णय">stage 3
                                                                न्यायालयाचा निर्णय</option>
                                                            <option value="Stage 4 Documents pending">Stage 4 Documents
                                                                pending</option>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-1" style="font-weight: 600;">
                                                <label class="form-label" for="select2-basic">शेरा</label>
                                                <input type="text" required value="<?php echo $discription; ?>" class="form-control" name="discription" id="basicInput" />
                                            </div>

                                            <div class="d-flex justify-content-between">
                                                <a href="form3.php" class="btn btn-outline-secondary btn-prev">
                                                    <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                    <span class="align-middle d-sm-inline-block d-none">मागे</span>
                                                </a>
                                                <a href="form5.php" class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">नमूद करा</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </a>
                                                <a href="form5.php" class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">पुढे जा</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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