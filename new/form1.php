<?php
session_start();
require("include/config.php");
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
    <title>Form1</title>
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


    <script>
        var citiesByState = {
            "रायगड": ["अलिबाग पोलीस ठाणे", "पनवेल पोलीस ठाणे", "मुरुड पोलीस ठाणे", "पेण पोलीस ठाणे",
                "उरण पोलीस ठाणे",
                "कर्जत पोलीस ठाणे", "खालापूर पोलीस ठाणे", "माणगाव पोलीस ठाणे", "रोहा पोलीस ठाणे",
                "तळा पोलीस ठाणे",
                "महड पोलीस ठाणे", "म्हसळा पोलीस ठाणे", "श्रीवर्धन पोलीस ठाणे", "पोलादपूर पोलीस ठाणे",
                "नेरळ पोलीस ठाणे",
                "खोपोली पोलीस ठाणे", "वडखळ पोलीस ठाणे", "पोयनाड पोलीस ठाणे", "मांडवा पोलीस ठाणे",
                "रेवदंडा पोलीस ठाणे",
                "पाली पोलीस ठाणे", "महाड एम आय डी सी पोलीस ठाणे", "महाड तालुका पोलीस ठाणे",
                "महाड शहर पोलीस ठाणे",
                "दिघी सागरी पोलीस ठाणे", "गोरेगाव पोलीस ठाणे", "नागोठणे पोलीस ठाणे", "माथेरान पोलीस ठाणे"
            ],
            "नवी मुंबई": ["खारघर पोलीस ठाणे", "कळंबोली पोलीस ठाणे", "खांदेश्वर पोलीस ठाणे", "पनवेल शहर पोलीस ठाणे",
                "पनवेल तालुका पोलीस ठाणे", "कामोठे पोलीस ठाणे", "तळोजा पोलीस ठाणे"
            ],

        }

        function makeSubmenu(value) {
            if (value.length == 0) document.getElementById("citySelect").innerHTML = "<option></option>";
            else {
                var citiesOptions = "";
                for (cityId in citiesByState[value]) {
                    citiesOptions += "<option value=" + citiesByState[value][cityId] + ">" + citiesByState[value][
                            cityId] +
                        "</option>";
                }
                document.getElementById("citySelect").innerHTML = citiesOptions;
            }
        }

        function displaySelected() {
            var country = document.getElementById("countrySelect").value;
            var city = document.getElementById("citySelect").value;
            alert(country + "\n" + city);
        }

        function resetSelection() {
            document.getElementById("countrySelect").selectedIndex = 0;
            document.getElementById("citySelect").selectedIndex = 0;
        }
    </script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <?php require("include/header.php");?>
    <!-- END: Header-->


    <!-- BEGIN: Sidebar Menu-->
    <?php require("include/sidebar.php");?>
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
                                    <h4 class="card-title">नोंदणी</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" action="api.php">
                                        <div class="row">
                                            <!-- Basic -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">नोंद वही क्र.</label>
                                                <input type="hidden" name="id1" value='<?php if(isset($_GET['id'])){ echo $_GET['id']; } ?>'>
                                                <input type="text" required class="form-control"
                                                    value="<?php echo $book_no?>" name="book_no" id="basicInput" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">वर्ष</label>
                                                <input type="number" required class="form-control "
                                                    value="<?php echo  $year ?>" name="year" placeholder=""
                                                    type="number" min="1900" max="2099" step="1" id="basicInput" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-basic">दिनांक</label>
                                                <input type="text" id="fp-human-friendly"
                                                    class="form-control flatpickr-human-friendly" required
                                                    value="<?php echo  $date ?>" name="date" />
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="sr-only" for="inlineFormInputGroup">गुन्हा नं.</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">कॉ.गु.र.नं.</div>
                                                    </div>
                                                    <input type="text" required class="form-control "
                                                        value="<?php echo  $complaint_no ?>" name="complaint_no"
                                                        id="inlineFormInputGroup" placeholder="Username">
                                                </div>
                                            </div>

                                            <!-- Multiple -->
                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-array">जिल्हा</label>
                                                <div class="mb-1">

                                                    <select required name="district" class="select2 form-select"
                                                        id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
                                                        <option value="" disabled selected>निवडा</option>
                                                        <option value="नवी मुंबई"
                                                            <?php if($district=='नवी मुंबई'){ echo 'selected'; } ?>>
                                                            नवी मुंबई</option>
                                                        <option value="रायगड"
                                                            <?php if($district=='रायगड'){ echo 'selected'; } ?>>
                                                            रायगड</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-1">
                                                <label class="form-label" for="select2-array">पोलीस ठाणे</label>
                                                <div class="mb-1">

                                                    <select id="citySelect" size="1" required name="police_station"
                                                        class="select2 form-select">
                                                        <option value="" disabled selected>निवडा</option>
                                                        <option></option>
                                                        <option
                                                            value="<?php if(isset($_GET['id'])){ echo $police_station; } ?>"
                                                            <?php if(isset($_GET['id'])){ echo 'selected'; } ?>>
                                                            <?php echo $police_station?></option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="select2-basic">लावलेली कलमे</label>
                                                <input type="text" required class="form-control"
                                                    value="<?php echo  $section?>" name="section" id="basicInput" />
                                            </div>

                                            <div class="col-md-12 mb-1">
                                                <label class="form-label" for="select2-basic">गुन्हयांचे प्रकार</label>
                                                <div class="row" style="margin-left:10px !important">
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" name="crime[]"
                                                            value="खुन"
                                                            <?php if(isset($_GET['id'])){if(in_array("खून,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> id="inlineCheckbox1" />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">खून</label>
                                                    </div>
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="crime[]" value="बलात्कार"
                                                            <?php if(isset($_GET['id'])){if(in_array("बलात्कार,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">बलात्कार</label>
                                                    </div>
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="crime[]" value="विनयभंग"
                                                            <?php if(isset($_GET['id'])){if(in_array("विनयभंग,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">विनयभंग</label>
                                                    </div>
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="crime[]" value="मारहाण"
                                                            <?php if(isset($_GET['id'])){if(in_array("मारहाण,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">मारहाण</label>
                                                    </div>
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="crime[]" value="शिवीगाळ"
                                                            <?php if(isset($_GET['id'])){if(in_array("शिवीगाळ,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">शिवीगाळ</label>
                                                    </div>
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="crime[]" value="जाळपोळ"
                                                            <?php if(isset($_GET['id'])){if(in_array("जाळपोळ,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">जाळपोळ</label>
                                                    </div>
                                                    <div class="col-1 form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox"
                                                            id="inlineCheckbox1" name="crime[]" value="इतर"
                                                            <?php if(isset($_GET['id'])){if(in_array("इतर,",$type_of_offence)) { ?>
                                                            checked="checked" <?php } }?> />
                                                        <label class="form-check-label"
                                                            for="inlineCheckbox1">इतर</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mt-1">
                                                <label class="form-label" for="select2-basic">फिर्यादीचे नाव</label>
                                                <input type="text" required class="form-control"
                                                    value="<?php echo  $complaint_filer_name ?>"
                                                    name="complaint_filer_name" id="basicInput" />
                                            </div>

                                            <div class="col-md-12 modal-footer">
                                                <button type="submit" name="s_ubmit" class="btn btn-primary">नमूद
                                                    करा</button>

                                                <!-- <a href="form2.php" class="btn btn-primary btn-next">
                                                    <span class="align-middle d-sm-inline-block d-none">पुढे जा</span>
                                                    <i data-feather="arrow-right"
                                                        class="align-middle ms-sm-25 ms-0"></i>
                                                </a> -->
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