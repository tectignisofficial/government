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
                                    <li class="breadcrumb-item"><a href="index.php">मुख्यपृठ</a>
                                    </li>
                                    <li class="breadcrumb-item active">Update
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">

                <!-- Select2 Start  -->
                <section id="accordion-with-margin">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update</h4>
                                </div>
                                <div class="card-body">
                                    <p class="card-text"></p>
                                    <div class="accordion accordion-margin" id="accordionMargin">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingMarginOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accordionMarginOne"
                                                    aria-expanded="false" aria-controls="accordionMarginOne">
                                                    नोंदणी Status
                                                </button>
                                            </h2>
                                            <div id="accordionMarginOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingMarginOne" data-bs-parent="#accordionMargin">
                                                <div class="accordion-body">
                                                    <form class="form form-vertical" method="POST" action="api.php">
                                                        <?php
                                                        $sql=mysqli_query($conn, "select * from stages");
                                                        $count=1;
                                                        $row=mysqli_fetch_array($sql);
                                                        ?>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="first-name-vertical">Stage 1</label>
                                                                    <input type="text" id="first-name-vertical"
                                                                        class="form-control" name="stage_1" value="<?php echo $row['stage_1']; ?>"
                                                                        placeholder="Stage 1" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="email-id-vertical">Stage 2</label>
                                                                    <input type="text" id="email-id-vertical"
                                                                        class="form-control" name="stage_2" value="<?php echo $row['stage_2']?>"
                                                                        placeholder="Stage 2" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="contact-info-vertical">Stage 3</label>
                                                                    <input type="text" id="contact-info-vertical"
                                                                        class="form-control" name="stage_3" value="<?php echo $row['stage_3']?>"
                                                                        placeholder="Stage 3" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="password-vertical">Stage 4</label>
                                                                    <input type="text" id="password-vertical"
                                                                        class="form-control" name="stage_4" value="<?php echo $row['stage_4']?>"
                                                                        placeholder="Stage 4" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="Submit"
                                                                    class="btn btn-primary me-1" name="update">Update</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingMarginTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accordionMarginTwo"
                                                    aria-expanded="false" aria-controls="accordionMarginTwo">
                                                    Alert
                                                </button>
                                            </h2>
                                            <div id="accordionMarginTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingMarginTwo" data-bs-parent="#accordionMargin">
                                                <div class="accordion-body">
                                                    <?php
                                                    $sql=mysqli_query($conn,"select * from final_alert");
                                                    $count=1;
                                                    $row=mysqli_fetch_array($sql);
                                                    ?>
                                                    <form class="form form-vertical" method="post" action="api.php">

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlTextarea1">Final Modal
                                                                        Submit
                                                                        Alert 1</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1" rows="3" name="alert_1" id="alert_1"
                                                                        value="<?php echo $row['alert_1']; ?>"
                                                                        placeholder="Alert"><?php echo $row['alert_1']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlTextarea1">Final Modal
                                                                        Submit
                                                                        Alert 2</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1" rows="3" name="alert_2" id="alert_2"
                                                                        value="<?php echo $row['alert_2']; ?>"
                                                                        placeholder="Alert"><?php echo $row['alert_2']; ?></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="Submit" class="btn btn-primary me-1"
                                                                    name="update" id="">Update</button>
                                                                <!-- <button type="reset" class="btn btn-outline-secondary">Reset</button> -->
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingMarginThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accordionMarginThree"
                                                    aria-expanded="false" aria-controls="accordionMarginThree">
                                                    Complaint Form
                                                </button>
                                            </h2>
                                            <div id="accordionMarginThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingMarginThree" data-bs-parent="#accordionMargin">
                                                <div class="accordion-body">
                                                    <form class="form form-vertical" method="" action="api.php">

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-1">
                                                                    <label class="form-label"
                                                                        for="exampleFormControlTextarea1">Modal</label>
                                                                    <textarea class="form-control"
                                                                        id="exampleFormControlTextarea1" rows="3" name="alert_1" id="alert_1"
                                                                        value=""
                                                                        placeholder="Modal"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="Submit" class="btn btn-primary me-1"
                                                                    name="update" id="">Update</button>
                                                                <!-- <button type="reset" class="btn btn-outline-secondary">Reset</button> -->
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingMarginFour">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#accordionMarginFour"
                                                    aria-expanded="false" aria-controls="accordionMarginFour">
                                                    Accordion Item 4
                                                </button>
                                            </h2>
                                            <div id="accordionMarginFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingMarginFour" data-bs-parent="#accordionMargin">
                                                <div class="accordion-body">
                                                    Cheesecake muffin cupcake dragée lemon drops tiramisu cake gummies
                                                    chocolate cake. Marshmallow tart
                                                    croissant. Tart dessert tiramisu marzipan lollipop lemon drops. Cake
                                                    bonbon bonbon gummi bears topping
                                                    jelly beans brownie jujubes muffin. Donut croissant jelly-o cake
                                                    marzipan. Liquorice marzipan cookie
                                                    wafer tootsie roll. Tootsie roll sweet cupcake.
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
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