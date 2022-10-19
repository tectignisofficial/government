<?php
// Create connection
$conn = mysqli_connect("151.106.124.51", "u188140722_government","Admin#3025", "u188140722_government");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Atrocity Raigad</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--Teams -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="assets/img/lo.png" rel="icon">
  <link href="assets/img/lo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    .btn-primary {
      background-color: #5777ba !important;
    }

    .btn-outline-secondary {
      color: #5777ba !important;
      border-color: #5777ba !important;
    }
    .btn-outline-secondary:hover{
      color: #fff !important;
      background-color: #5777ba !important;

    }
  </style>
</head>

<body>
  <!-- Just an image -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <!-- <a class="navbar-brand" href="#">
    <img src="assets/img/lo.png" width="100" alt="">
  </a> -->
    <a class="navbar-brand headerlogo" href="#">
      <img src="assets/img/atrorcity-header4.png" height="100" alt="">
    </a>
    <a class="navbar-brand mobileView">
      <img src="assets/img/atrorcity-header1.png" height="100" alt="">
    </a>
    <a class="form-inline my-2 my-lg-0 mobileView">
      <img src="assets/img/atrorcity-header.png" height="100" alt="">
    </a>
  </nav>

  <main id="main">
  <section>
      <div class="container">
        <!-- <div class="header clearfix">
          <nav>
            <ul class="nav nav-pills float-right">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="complaint_status.php">Complaint Status <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="change.html">Admin Login</a>
              </li>
            </ul>
          </nav>
          
        </div> -->
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-8 col-sm-12 text-start">
            <div class="breadcrumb flat">
              <a href="index.php">Home</a>
              <a href="complaint_status.php" class="active">Complaint Status </a>
              <a href="change.html">Admin Login</a>
            </div>
          </div>
          <div class="col-sm-12 col-lg-4 downloadBtn">
            <button class="btn btn-sm btn-outline-secondary">Download Mobile Application</button>
          </div>
        </div>
      </div>
    </section>

    <section class="our-webcoderskull padding-lg">
      <div class="container">

        <!-- 1st Row -->
        <ul class="row">
          <li class="">
            <div class="cnt-block equal-hight" style="height: 349px;">

              <div style="float:left">
                <div class="wrap">
                  <form method="post" class="search">
                    <input type="text" x-webkit-speech name="search" placeholder="Search..">

                    <button class="searchButton" type="submit" name="submi_t">
                      <i class="bi bi-search"></i>
                    </button>
                  </form>
                </div>
              </div>
              <?php 
                if(isset($_POST['submi_t'])){
                $search=$_POST['search'];
                $sql=mysqli_query($conn,"select complaint_form.complaint_no as no,complaint_form.book_no as bookno, complaint_form.date as dat,image.caseid as cid,image.status as status from complaint_form inner join image on image.caseid=complaint_form.id where complaint_form.complaint_no like '%$search%'");
                $arr=mysqli_fetch_array($sql);
                $num=mysqli_num_rows($sql);
                if($num==0){
                  echo '<div style="text-align:center;margin-top:50px">No Record Found</div>';
                }
                else{
                ?>

              <table class="table table-striped ">
                <thead>
                  <tr>
                    <th scope="col">नोंद वही क्र.</th>
                    <td>
                      <?php echo $arr['bookno'] ?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="col">दिनांक</th>
                    <td>
                    <?php $input=$arr['dat']; $date=strtotime($input);
										echo date('d-m-Y',$date);?>
                    </td>
                  </tr>
                  <tr>
                    <th scope="col">अनुदान रक्कमेची सद्यस्थिती</th>
                    <td>
                      <?php $payStatus= $arr['status'];
                      if($payStatus=='stage 1'){
echo $payStatus.' (FIR दाखला / प्रकरण मंजूर आहे / अनुदानाच्या प्रतीक्षेत)';
                      }else if($payStatus=='stage 2'){
echo $payStatus.' (FIR चौकशी दाखल)';
                      }else if($payStatus=='stage 3'){
echo $payStatus.' (न्यायालयाचा निर्णय)';
                      }else if($payStatus=='case completed'){
echo $payStatus;
                      }
                      ?>
                     
                    </td>

                  </tr>
                </thead>
              </table>
              <?php } } ?>
            </div>
          </li>
        </ul>
        <!-- 2nd Row -->
      </div>
    </section>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container py-4">
      <div class="copyright">
        &copy; <strong><span style="color:#5777ba;">Atrocity Raigad</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://tectignis.in/" target="_blank">Tectignis IT Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>