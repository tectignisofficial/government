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
                                    <li class="breadcrumb-item"><a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Intimation
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
                                    <h4 class="card-title" style="font-size:20px;vertical-align:middle">जानेवारी
                                        ,2020 मध्ये घडलेल्या गुन्हयांची माहिती</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="form-group">
                                                <label class="form-label" for="select2-basic"
                                                    style="font-weight: 600;">तारीख श्रेणी:</label>

                                                <div class="row">
                                                    <div class="col-md-4 mb-1">
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
                                                    <div class="col-md-4 mb-1">
                                                        <div class="form-group">
                                                            <select class="select2 form-select" id="select2-basic"
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
                                                    <div class="col-md-4 mb-1">
                                                        <div class="form-group" style="">
                                                            <input class="yearselect form-control" id="year" name="year" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 modal-footer">
                                                <button type="submit" class="btn btn-primary" name="filter">जतन करा</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <?php
if(isset($_POST["filter"])){ ?>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header d-block text-center">
                                    <h4 class="card-title d-block">माहे $dat ,$year मध्ये घडलेल्या गुन्हयांची माहिती
                                    </h4><br>
                                    <h2 class="d-block fw-bold">प्रपत्र - १.</h2><br>
                                    <h5>अनुसूचित जाती / जमाती. अत्याचार प्रतिबंधन अधिनियम १९८९ आणि नागरी हक्क संरक्षण
                                        अधिनियम १९५५ अंतर्गत</h5>
                                </div>
                                <div class=" card-body table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">अ.क्र.</th>
                                                <th rowspan="2">जिल्ह्याचे नाव</th>
                                                <th colspan="8" style="text-align: center;">गुन्हयांचे प्रकार</th>
                                            </tr>
                                            <tr>
                                                <th>खून</th>
                                                <th>बलात्कार</th>
                                                <th>विनयभंग</th>
                                                <th>मारहाण</th>
                                                <th>शिवीगाळ</th>
                                                <th>जाळपोळ</th>
                                                <th>इतर</th>
                                                <th>एकूण</th>
                                            </tr>
                                            <tr>
                                                <th>१</th>
                                                <th>२</th>
                                                <th>३</th>
                                                <th>४</th>
                                                <th>५</th>
                                                <th>६</th>
                                                <th>७</th>
                                                <th>८</th>
                                                <th>९</th>
                                                <th>१०</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
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