<?php
 include("super_admin/include.php");

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

    .btn-outline-secondary:hover {
      color: #fff !important;
      background-color: #5777ba !important;

    }
  </style>



<body>
  <!-- <div class="card" style="">		  
		  <img class="card-img-top" src="assets/img/newheader.jpg" alt="Card image cap" width="128" height="128">


	</div>
  -->
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
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-8 col-sm-12 text-start">
            <div class="breadcrumb flat">
              <a href="index.php" class="active">Home</a>
              <a href="complaint_status.php">Complaint Status</a>
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
        <div class="section-title">
          <h2>अनुसूचित जाती / अनुसूचित जमाती अत्याचार प्रतिबंधक कायदयाअंतर्गत प्रकारणाची सद्यस्थिती व नुकसान भरपाई
            ॲंड्रॉइड मोबाईल प्रणाली</h2>
        </div>

        <!-- 1st Row -->
        <ul class="row" style="justify-content: center;">
          <?php
          $sql=mysqli_query($conn,"select * from member_img where id='1'");
          while($fetchsql=mysqli_fetch_array($sql)){
          ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p> <?php echo $fetchsql['designation'] ?></p>
            </div>
          </li>
          <?php } ?>
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='2'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <!-- <h3><strong>मा.ना.श्री.देवेंद्र फडणवीस</strong></h3> -->
              <p><?php echo $fetchsql['designation'] ?></p>

            </div>
          </li>
          <?php } ?>
        </ul>

        <ul class="row" style="justify-content: center;">
          <?php
          $sql=mysqli_query($conn,"select * from member_img where id='3'");
          while($fetchsql=mysqli_fetch_array($sql)){
          ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>

            </div>
          </li>
          <?php } ?>
          <?php
      $sql=mysqli_query($conn,"select * from member_img where id='5'");
      while($fetchsql=mysqli_fetch_array($sql)){
      ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>
            </div>
          </li>
          <?php } ?>
        </ul>

        <!-- 2nd Row -->
        <ul class="row" style="justify-content: center;">
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='9'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>
            </div>
          </li>
          <?php } ?>
          <?php
          $sql=mysqli_query($conn,"select * from member_img where id='10'");
          while($fetchsql=mysqli_fetch_array($sql)){
          ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>

            </div>
          </li>
          <?php } ?>
          <?php
              $sql=mysqli_query($conn,"select * from member_img where id='14'");
              while($fetchsql=mysqli_fetch_array($sql)){
              ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>

            </div>
          </li>
          <?php } ?>

        </ul>
        <ul class="row" style="justify-content: center;">
          <?php
              $sql=mysqli_query($conn,"select * from member_img where id='7'");
              while($fetchsql=mysqli_fetch_array($sql)){
              ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong><?php echo $fetchsql['name'] ?></strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>

            </div>
          </li>

          <?php } ?>
          <?php
              $sql=mysqli_query($conn,"select * from member_img where id='12'");
              while($fetchsql=mysqli_fetch_array($sql)){
              ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive" alt="">
              </figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p><?php echo $fetchsql['designation'] ?></p>

            </div>
          </li>
          <?php } ?>
        </ul>

      </div>
    </section>

    <!--==pdf==-->
    <!-- <section>
      <div class="container">
        <div class="row">

          <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="row my-2">
              <div class="col-7">
                <a href="1989 अॅट्रोसिटी कायदा 1992.pdf" target="_blank" class="btn btn-outline-secondary"><i
                    class="fa fa-download"></i>1989
                  अॅट्रोसिटी कायदा 1992</a>
              </div>
              <div class="col-5">
                <a href="2017 09 27.pdf" target="_blank" class="btn btn-outline-secondary"><i class="fa fa-download"></i>2017 09 27</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="row my-2">
              <div class="col-7">
                <a href="2008 08 08 Atrocity samiti.pdf" target="_blank" class="btn btn-outline-secondary"><i
                    class="fa fa-download"></i>2008 08 08
                  Atrocity samiti</a>
              </div>
              <div class="col-5">
                <a href="2016 12 23 Atrocity.pdf" target="_blank" class="btn btn-outline-secondary"><i class="fa fa-download"></i>2016
                  12 23</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="row my-2">
              <div class="col-7">
                <a href="201708011134427630.pdf"  target="_blank" class="btn btn-outline-secondary"><i
                    class="fa fa-download"></i>201708011134427630.pdf</a>
              </div>
              <div class="col-5">
                <a href="2016 12 23 aaa.pdf" target="_blank" class="btn btn-outline-secondary"><i class="fa fa-download"></i>2016 12
                  23</a>
              </div>
            </div>
          </div>

          <div class="col-sm-12 col-lg-6 col-md-6">
            <div class="row my-2">
              <div class="col-7">
                <a href="2016 12 28 SDO Samiti.pdf" target="_blank" class="btn btn-outline-secondary"><i class="fa fa-download"></i>2016
                  12
                  28 SDO
                  Samiti</a>
              </div>
              <div class="col-5">
                <a href="2018 04 13 Atrocity.pdf" target="_blank" class="btn btn-outline-secondary"><i class="fa fa-download"></i>2018
                  04 13</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section> -->
    <!--==pdf==-->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2 style="color:black">प्रणाली विषयक मुददे</h2>

        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <span
                style="margin-left:35px;color:black;font-size:18px;font-weight:500;">अँप आज्ञावली द्वारे हि सर्व माहिती
                वरिष्ठ व अधिनस्त कार्यालय वेळोवेळी अद्यावत (Real / Time) करणे.</span>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <span
                style="margin-left:35px;color:black;font-size:18px;font-weight:500">विविध प्रशासकीय माहिती व अहवाल एका
                क्लीकवर जनरेट / डाउनलोड करता येईल.</span>
            </li>
          </ul>
        </div>
      </div>
    </section><!-- End Frequently Asked Questions Section -->


<!--pdf-->
<section id="faq" class="faq section-bg " style="background:#9f9f9f;">
<div class="accordion-list">
          <ul>
          <li data-aos="fade-up">
              <a href="1989 अॅट्रोसिटी कायदा 1992.pdf" target="_blank">अनुसूचित जाती आणि अनुसूचित जमाती (अत्याचार
                प्रतिबंधक) अचधतनयम, १९८९ (१९९२ यथाविद्यमान, मराठी आवृती)</a>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a href="अनुसूचित जाति एवं अनुसूचित जनजाति (अत्याचार निवारण) अधिनियम 1989 (हिंदी आवृत्ती).pdf"
                target="_blank">अनुसूचित जाति एवं अनुसूचित जनजाति (अत्याचार निवारण) अधिनियम 1989 (हिंदी आवृत्ती)</a>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <a href="Scheduled Caste and Scheduled Tribe (Prevention of Atrocities) Act, 1989 (English Article).pdf"
                target="_blank">Scheduled Caste and Scheduled Tribe (Prevention of Atrocities) Act, 1989 (English
                Article)</a>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <a href="2016 12 23 Atrocity.pdf" target="_blank">अत्याचाराचे बळी ठरणाऱ्या अन सूचित जाती/अनुसूचित
                जमातींच्या व्व्यक्तींना नवीन अत्यािार प्रततबंधक नियमान्वये दे ण्यात येणाऱ्या नुकसान भरपाईबाबत.</a>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <a href="201708011134427630.pdf" target="_blank">पीडितांना अर्थसहाय्य पुनर्वसन करण्यासाठी “मनोधैर्य योजने”
                च्या अर्थसहाय्यच्या निकषात सुधारणा करण्याबाबत. </a>

            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <a href="पीडितांना मोबदला व इतर सुविधा देण्यासाठी आकस्मिकता योजना तयार करण्याबाबत..pdf"
                target="_blank">पीडितांना मोबदला व इतर सुविधा देण्यासाठी आकस्मिकता योजना तयार करण्याबाबत</a>

            </li>
          </ul>
        </div>

</section>
<!--pdf-->
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container py-4">
      <div class="copyright">
        &copy; <strong><span style="color:#5777ba;">Atrocity Raigad</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://tectignis.in/" target="_blank">Tectignis IT Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>