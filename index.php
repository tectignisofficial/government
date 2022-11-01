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
              <a href="index.php" class="active">Home</a>
              <a href="complaint_status.php">Complaint Status </a>
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
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p> मुख्यमंत्री, महाराष्ट्र राज्य</p>
            </div>
          </li>
          <?php } ?>
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='2'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <!-- <h3><strong>मा.ना.श्री.देवेंद्र फडणवीस</strong></h3> -->
              <p>उपमुख्यमंत्री, महाराष्ट्र राज्य</p>

            </div>
          </li>
          <?php } ?>
        </ul>

        <!-- 2nd Row -->
        <ul class="row">
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='3'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>सामाजिक न्याय व जवशेष सहाय्य जवभाग
मंत्री</p>

            </div>
          </li>
          <?php } ?>
          <!-- <?php
        $sql=mysqli_query($conn,"select * from member_img where id='4'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>सामाजिक न्याय राज्य मंत्री</p>

            </div>
          </li>
          <?php } ?> -->
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='5'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>पालकमंत्री ,जिल्हा रायगड</p>
            </div>
          </li>
          <?php } ?>
          <!-- <?php
        $sql=mysqli_query($conn,"select * from member_img where id='6'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>अप्पर मुख्य सचिव, सामाजिक न्याय व विशेष सहाय्य विभाग</p>

            </div>
          </li>
          <?php } ?> -->
          <!-- <?php
        $sql=mysqli_query($conn,"select * from member_img where id='7'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>पालक सचिव , जिल्हा रायगड</p>

            </div>
            <?php } ?>
          </li> -->
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='8'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>विभागीय आयुक्त (महसूल)कोकण विभाग , मुंबई </p>

            </div>
            <?php } ?>
          </li>
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='9'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>भा.प्र.से. आयुक्त , समाज कल्याण , महाराष्ट्र राज्य </p>
            </div>
          </li>
          <?php } ?>
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='9'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  
                </strong></h3>
              <p>आयुक्त , समाज कल्याण, महाराष्ट्र राज्य</p>
            </div>
          </li>
          <?php } ?>
          <?php
        $sql=mysqli_query($conn,"select * from member_img where id='10'");
        while($fetchsql=mysqli_fetch_array($sql)){
        ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>भा.प्र.से. जिल्हाधिकारी तथा जिल्हा दंडाधिकारी रायगड, अलिबाग</p>

            </div>
          </li>
          <?php } ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="assets/img/Team/11.jpg" class="img-responsive" alt=""></figure>
              <h3><strong>मा.श्रीमती.वंदना कोचुरे</strong></h3>
              <p>प्रादेशिक उपायुक्त, समाज कल्याण, मुंबई विभाग</p>

            </div>
          </li>
                <?php
              $sql=mysqli_query($conn,"select * from member_img where id='12'");
              while($fetchsql=mysqli_fetch_array($sql)){
              ?>
          <li class="col-12 col-md-6 col-lg-3">
            <div class="cnt-block equal-hight" style="height: 320px;">
              <figure><img src="super_admin/member/<?php echo $fetchsql['profile']; ?>" class="img-responsive"
                  alt=""></figure>
              <h3><strong>
                  <?php echo $fetchsql['name'] ?>
                </strong></h3>
              <p>सहाय्यक आयुक्त, समाज कल्याण रायगड, अलिबाग</p>

            </div>
          </li>
          <?php } ?>
        </ul>

        <!-- 3rd Row -->
        <!-- <ul class="row" style="justify-content: center;">

      
        </ul> -->
      </div>
    </section>


    <!--==pdf==-->
    <section>
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
    </section>
    <!--==pdf==-->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">

          <h2 style="color:black">प्रणाली विषयक मुददे</h2>

        </div>

        <div class="accordion-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                data-bs-target="#accordion-list-1">नोंद वही क्रं </a>
              <!--<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                <p>
                 नोंद वही क्रमांक  
                </p>
              </div> -->
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-2" class="collapsed">FIR </a>
              <!-- <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  पिडीत व्यक्तीची माहिती 
                </p>
              </div> -->
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-3" class="collapsed">पिडीत व्यक्तींची माहिती</a>
              <!--<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  अर्थसाहाय्य निधी रकमेच्या टप्प्याची माहिती
                </p>
              </div> -->
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-3" class="collapsed">आरोपींची माहिती</a>
              <!--<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
              <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                <p>
                  अर्थसाहाय्य निधी रकमेच्या टप्प्याची माहिती
                </p>
              </div> -->
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-4" class="collapsed">अर्थसहाय्य निधी रक्कमेच्या टप्प्यांची माहिती </a>

            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-4" class="collapsed">पिडीत व्यक्तीच्या आर्थिक निधीची माहिती </a>

            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-4" class="collapsed">अँप आज्ञावली द्वारे हि सर्व माहिती वरिष्ठ व अधिनस्त कार्यालय वेळोवेळी अद्यावत (Real / Time) करणे.</a>

            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                data-bs-target="#accordion-list-4" class="collapsed">विविध प्रशासकीय माहिती व अहवाल एका क्लीकवर जनरेट / डाउनलोड करता येईल.</a>

            </li>



          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!--
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="row">
              <div class="col-lg-6 info">
                <i class="bx bx-map"></i>
                <h4>Address</h4>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-phone"></i>
                <h4>Call Us</h4>
                <p>+1 5589 55488 55<br>+1 5589 22548 64</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-envelope"></i>
                <h4>Email Us</h4>
                <p>contact@example.com<br>info@example.com</p>
              </div>
              <div class="col-lg-6 info">
                <i class="bx bx-time-five"></i>
                <h4>Working Hours</h4>
                <p>Mon - Fri: 9AM to 5PM<br>Sunday: 9AM to 1PM</p>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-up">
              <div class="form-group">
                <input placeholder="Your Name" type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Your Email" type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="form-group mt-3">
                <input placeholder="Subject" type="text" class="form-control" name="subject" id="subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea placeholder="Message" class="form-control" name="message" rows="5" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
-->

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