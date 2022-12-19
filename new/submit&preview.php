<?php
session_start();
require("include/config.php");
$finalform=$_GET['formId'];
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
                                    <h4 class="card-title fw-bold">नोंदणी</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="api.php">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">नोंद वही क्र.</label>
                                                <input type="hidden" name="id1" value=''>
                                                <input type="text" class="form-control bookno" value="<?= $form1sql['book_no'] ?>" name="book_no"
                                                    id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="sr-only" for="inlineFormInputGroup">गुन्हा नं.</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">कॉ.गु.र.नं.</div>
                                                    </div>
                                                    <input type="text" readonly class="form-control complaintno"
                                                        value="<?= $form1sql['complaint_no'] ?>" name="complaint_no" id="inlineFormInputGroup"
                                                        placeholder="">
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">दिनांक</label>
                                                <input type="text" class="form-control bookno" value="<?= $form1sql['date'] ?>" name="date"
                                                    id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">वर्ष</label>
                                                <input type="text" class="form-control bookno" value="<?= $form1sql['book_no'] ?>" name="year"
                                                    id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">जिल्हा</label>
                                                <input type="hidden" name="id1" value=''>
                                                <input type="text" class="form-control district" value="<?= $form1sql['district'] ?>"
                                                    name="district" id="countrySelect" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पोलीस ठाणे</label>
                                                <input type="hidden" name="id1" value=''>
                                                <input type="text" class="form-control policestation" value="<?= $form1sql['book_no'] ?>"
                                                    name="police_station" id="citySelect" readonly />
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="select2-basic">लावलेली कलमे</label>
                                                <input type="text" readonly class="form-control section" value="<?= $form1sql['book_no'] ?>"
                                                    name="section" id="basicInput" />
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="select2-basic">गुन्हयांचे प्रकार</label>
                                                <input type="text" readonly class="form-control crime" value="<?= $form1sql['book_no'] ?>"
                                                    name="crime" id="basicInput" />
                                            </div>

                                            <div class="col-md-12 mt-1">
                                                <label class="form-label" for="select2-basic">फिर्यादीचे नाव</label>
                                                <input type="text" readonly class="form-control complaintfilername"
                                                    value="<?= $form1sql['book_no'] ?>" name="complaint_filer_name" id="basicInput" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title fw-bold">आरोपीची माहिती</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="api.php">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">आरोपीचे नाव</label>
                                                <input type="hidden" required class="" name="form_2_id" value=""
                                                    id="exampleदिनांक" placeholder="">
                                                <input type="text" readonly class="form-control" value=""
                                                    name="criminal_name" id="basicInput" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title fw-bold">पिडीत व्यक्तीची माहिती</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="api.php">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पिडीत व्यक्तीचे
                                                    नाव</label>
                                                <input type="hidden" required class="" name="id" value="">
                                                <input type="text" readonly class="form-control" value=""
                                                    name="victim_name" id="basicInput" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पिडीत व्यक्तीचा
                                                    पत्ता</label>
                                                <input type="text" readonly class="form-control" value=""
                                                    name="victim_address" id="basicInput" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">पिडीत व्यक्तीचे प्रवर्ग
                                                    आणि जात</label>
                                                <input type="text" readonly class="form-control"
                                                    name="category_and_caste" value="" id="basicInput" />
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <div class="row mb-1 rowg" style="width:78%;">
                                                    <div class="col-md-4 mb-1">
                                                        <label class="form-label" for="select2-basic">जातीचा
                                                            दाखला</label>
                                                        <input type="text" readonly class="form-control"
                                                            name="caste_certificate" value="" id="basicInput" />
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label class="form-label" for="select2-basic">आधार कार्ड</label>
                                                        <input type="text" readonly class="form-control"
                                                            name="aadhaar_card" value="" id="basicInput" />
                                                    </div>
                                                    <div class="col-md-4 mb-1">
                                                        <label class="form-label" for="select2-basic">चार्ज शीट</label>
                                                        <input type="text" readonly class="form-control"
                                                            name="charge_sheet" value="" id="basicInput" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title fw-bold">इतर माहिती</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data" action="api.php">
                                        <div class="row">

                                            <div class="form-group col-8">
                                                <div style="margin-bottom: 16px; font-weight: 600;">
                                                    <label for="Exampleवघकिय  पुष्टी-३१ अहवाल">FIR</label>
                                                </div>
                                                <div>
                                                    <label for="myfile"
                                                        style="margin-bottom: 25px; font-weight: 600;">फाईल
                                                        निवडा:</label>
                                                    <input type="hidden" readonly class="" name="form4" value="">
                                                    <input type="file" style="margin-left: 15px;" name="files" multiple
                                                        value="<?php echo $image; ?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Status</label>
                                                <input type="hidden" required class="" name="id" value="">
                                                <input type="text" readonly class="form-control" value=""
                                                    name="payStatus" id="basicInput" />
                                            </div>

                                            <div class="col-md-6 mb-1" style="font-weight: 600;">
                                                <label class="form-label" for="select2-basic">शेरा</label>
                                                <input type="text" readonly value="" class="form-control"
                                                    name="discription" id="basicInput" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title fw-bold">बँक तपशील</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Account Holder
                                                    Name</label>
                                                <input type="text" class="form-control" id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Account Number</label>
                                                <input type="text" class="form-control" id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Bank Name</label>
                                                <input type="text" class="form-control" id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">Branch Name</label>
                                                <input type="text" class="form-control" id="basicInput" readonly />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">IFSC Code</label>
                                                <input type="text" class="form-control" id="basicInput" readonly />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center modal-footer" style="display: initial; margin-top: -28px; border-top: 0px;">
                            <button type="submit" class="btn btn-primary me-1 mt-2" name="s_ubmit">Final Submit</button>
                            <button type="reset" class="btn btn-outline-secondary mt-2" data-bs-dismiss="modal"
                                aria-label="Close">
                                No
                            </button>
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