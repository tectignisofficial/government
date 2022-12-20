<?php
session_start();
require("include/config.php");
$form3=$_GET['form3'];
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
    <title>Form3</title>
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
                            <h2 class="content-header-title float-start mb-0">अनुसूचित जाती/जमाती अत्याचार ग्रस्त
                                पीडितांची माहिती</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index">मुख्यपृठ</a>
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
                                    <h4 class="card-title">पिडीत व्यक्तीची माहिती</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="api.php">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पिडीत व्यक्तीचे
                                                    नाव</label>
                                                <input type="hidden"  class="" name="id"
                                                    value="<?php echo $form3;?>">
                                                <input type="text"  class="form-control"
                                                    value="<?php echo $victim_name;?>" name="victim_name"
                                                    id="victimname" />
                                                    <span class="spanVictimName"></span>
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पिडीत व्यक्तीचा
                                                    पत्ता</label>
                                                <input type="text"  class="form-control"
                                                    value="<?php echo $victim_address;?>" name="victim_address"
                                                    id="basicInput" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पिडीत व्यक्तीचे प्रवर्ग
                                                    आणि जात</label>
                                                <input type="text"  class="form-control"
                                                    name="category_and_caste" value="<?php echo  $category_and_caste;?>"
                                                    id="victimcaste" />
                                                    <span class="spanVictimcaste"></span>
                                            </div>

                                            <div class="row mb-1 rowg" style="width:78%;">
                                                <div class="col-md-3 mb-1">
                                                    <label class="form-label" for="select2-basic">जातीचा दाखला</label>
                                                    <div>
                                                        <div class="col-md-12 mb-1 form-check form-check-inline">
                                                            <input class="form-check-input"  type="radio"
                                                                name="caste_certificate" id="inlineRadio1" value="होय"
                                                                <?php if($caste_certificate=='होय'){ echo 'checked'; } ?> />
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">होय</label>
                                                        </div>
                                                        <div class="col-md-12 mb-1 form-check form-check-inline">
                                                            <input class="form-check-input"  type="radio"
                                                                name="caste_certificate" id="inlineRadio2" value="नाही"
                                                                <?php if($caste_certificate=='नाही'){ echo 'checked'; } ?> />
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">नाही</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-1">
                                                    <label class="form-label" for="select2-basic">आधार कार्ड</label>
                                                    <div>
                                                        <div class="col-md-12 mb-1 form-check form-check-inline">
                                                            <input class="form-check-input"  type="radio"
                                                                name="aadhaar_card" id="inlineRadio1" value="होय"
                                                                <?php if($aadhaar_card=='होय'){ echo 'checked'; } ?> />
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">होय</label>
                                                        </div>
                                                        <div class="col-md-12 mb-1 form-check form-check-inline">
                                                            <input class="form-check-input"  type="radio"
                                                                name="aadhaar_card" id="inlineRadio2" value="नाही"
                                                                <?php if($aadhaar_card=='नाही'){ echo 'checked'; } ?> />
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">नाही</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 mb-1">
                                                    <label class="form-label" for="select2-basic">चार्ज शीट</label>
                                                    <div>
                                                        <div class="col-md-12 mb-1 form-check form-check-inline">
                                                            <input class="form-check-input"  type="radio"
                                                                name="charge_sheet" id="inlineRadio1" value="होय"
                                                                <?php if($charge_sheet=='होय'){ echo 'checked'; } ?> />
                                                            <label class="form-check-label"
                                                                for="inlineRadio1">होय</label>
                                                        </div>
                                                        <div class="col-md-12 mb-1 form-check form-check-inline">
                                                            <input class="form-check-input"  type="radio"
                                                                name="charge_sheet" id="inlineRadio2" value="नाही"
                                                                <?php if($charge_sheet=='नाही'){ echo 'checked'; } ?> />
                                                            <label class="form-check-label"
                                                                for="inlineRadio2">नाही</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <a href="form2?form2=<?= $form3;?>" class="btn btn-outline-secondary btn-prev">
                                                <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                                <span class="align-middle d-sm-inline-block d-none">मागे</span>
                                            </a>
                                            <button type="submit" class="btn btn-primary btn-next" name="sub_mit" id="form3submit">
                                                <span class="align-middle d-sm-inline-block d-none">नमूद करा</span>
                                                <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                                                </button>

                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
            <!-- Select2 End -->

            <!-- <section id="basic-datatable">
                <div class="row">
                    <table class="datatables-basic table-hover table-responsive table table-bordered">
                        <thead>
                            <tr>
                                <th>अनुक्रमांक</th>
                                <th>तक्रार नोंदणी क्र.</th>
                                <th>पत्ता</th>
                                <th>नाव</th>
                                <th>कार्यवाही</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>xyz</td>
                                <td>
                                    <button type="button" class="btn btn-icon rounded-circle btn-flat-primary btnmod1"
                                        data-bs-toggle="modal" data-bs-target="#editUser"><i
                                            data-feather="edit"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section> -->

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
<script src="valid.js"></script>
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