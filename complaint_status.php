<?php
// Create connection
$conn = mysqli_connect("localhost", "u188140722_government","Admin@123", "u188140722_government");
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
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">




</head>

<body>
	  <div class="card" style="">		  
		  <img class="card-img-top" src="assets/img/newheader.jpg" alt="Card image cap" width="128" height="128">


	</div>

	<section>
    <div class="container">
      <div class="header clearfix">
        <nav>
        <div id="cover">
  <form method="get" action="">
    <div class="tb">
      <div class="td"><input type="text" placeholder="Search" name="search" required></div>
      <div class="td" id="s-cover">
        <button type="submit" name="submi_t">
          <div id="s-circle"></div>
          <span></span>
        </button>
      </div>
    </div>
  </form>
</div>  



          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Complaint Status <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://government.tectignis.in/raigad/views/login.php">Admin Login</a>
            </li>
          </ul>
        </nav>
        
      </div>
	</div>
	</section>
  <main id="main">

    <style>
       
       .tb {
  display: table;
  width: 100%;
}

.td {
  display: table-cell;
  vertical-align: middle;
}

input,
button {
  color: #fff;
  font-family: Nunito;
  padding: 0;
  margin: 0;
  border: 0;
  background-color: transparent;
}

#cover {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  width: 550px;
  padding: 35px;
  margin: -83px auto 0 auto;
  background-color: #ff7575;
  border-radius: 20px;
  box-shadow: 0 10px 40px #ff7c7c, 0 0 0 20px #ffffffeb;
  transform: scale(0.6);
}

form {
  height: 96px;
}

input[type="text"] {
  width: 100%;
  height: 96px;
  font-size: 60px;
  line-height: 1;
}

input[type="text"]::placeholder {
  color: #e16868;
}

#s-cover {
  width: 1px;
  padding-left: 35px;
}

button {
  position: relative;
  display: block;
  width: 84px;
  height: 96px;
  cursor: pointer;
}

#s-circle {
  position: relative;
  top: -8px;
  left: 0;
  width: 43px;
  height: 43px;
  margin-top: 0;
  border-width: 15px;
  border: 15px solid #fff;
  background-color: transparent;
  border-radius: 50%;
  transition: 0.5s ease all;
}

button span {
  position: absolute;
  top: 68px;
  left: 43px;
  display: block;
  width: 45px;
  height: 15px;
  background-color: transparent;
  border-radius: 10px;
  transform: rotateZ(52deg);
  transition: 0.5s ease all;
}

button span:before,
button span:after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  width: 45px;
  height: 15px;
  background-color: #fff;
  border-radius: 10px;
  transform: rotateZ(0);
  transition: 0.5s ease all;
}

#s-cover:hover #s-circle {
  top: -1px;
  width: 67px;
  height: 15px;
  border-width: 0;
  background-color: #fff;
  border-radius: 20px;
}

#s-cover:hover span {
  top: 50%;
  left: 56px;
  width: 25px;
  margin-top: -9px;
  transform: rotateZ(0);
}

#s-cover:hover button span:before {
  bottom: 11px;
  transform: rotateZ(52deg);
}

#s-cover:hover button span:after {
  bottom: -11px;
  transform: rotateZ(-52deg);
}
#s-cover:hover button span:before,
#s-cover:hover button span:after {
  right: -6px;
  width: 40px;
  background-color: #fff;
}
    </style>
<script>
  $('.search-input').focus(function(){
  $(this).parent().addClass('focus');
}).blur(function(){
  $(this).parent().removeClass('focus');
})
</script>
	  <style>
	  .row.heading h2 {
    color: #fff;
    font-size: 52.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;
    text-transform: uppercase;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}


.our-webcoderskull{
  background: url("http://www.webcoderskull.com/img/right-sider-banner.png") no-repeat center top / cover;
  
}
.our-webcoderskull .cnt-block{ 
   float:left; 
   width:100%; 
   background:#fff; 
   padding:30px 20px; 
   text-align:center; 
   border:2px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.our-webcoderskull .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#337ab7;
}
.our-webcoderskull .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 0;
}
.our-webcoderskull .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
	margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

	  </style>



	  <section class="our-webcoderskull padding-lg">
  <div class="container">
    
	    <!-- 1st Row -->
    <ul class="row">
      <li class="">
          <div class="cnt-block equal-hight" style="height: 349px;">
         
            <table class="table table-striped">
                <thead>
                  <tr>
                   
                    <th scope="col">नोंद वही क्र.</th>
                    <th scope="col">दिनांक</th>
                    <th scope="col">पैसे भरल्याची स्थिती</th>
                  </tr>
                </thead>
                <?php 
                if(isset($_POST['submi_t'])){
                $search=$_POST['search'];
                $sql=mysqli_query($conn,"select complaint_form.complaint_no as no,complaint_form.book_no as bookno, complaint_form.date as dat,bank_detail.stage_1 as stage1, bank_detail.stage_2 as stage2, bank_detail.stage_3 as stage3 from complaint_form inner join bank_detail on complaint_form.id=bank_detail.caseid where complaint_form.complaint_no like '%$search%'");
                $row=mysqli_fetch_array($sql)
                ?>
                <tbody>
                  <tr>
                   
                    <td><?php echo $row['bookno'] ?></td>
                    <td><?php echo $row['dat'] ?></td>
                    <td>
                    <?php
                      $stage1=$row["stage1"];;
                      $stage2=$row["stage2"];;
                      $stage3=$row["stage3"];;
                      if($stage1==''){
                        echo "Case Open";
                      }
                      else if($stage1!='' && $stage2=='' && $stage3==''){
                        echo "First Payment Done";
                      }
                      else if($stage1!='' && $stage2!='' && $stage3==''){
                        echo "Second Payment Done";
                      }
                      else if($stage1!='' && $stage2!='' && $stage3!=''){
                        echo "Case Close";
                      }
                      ?>
                    </td>
                   
                  </tr>
                
                </tbody>
                <?php } ?>
              </table>
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
        &copy; Copyright <strong><span>Atrocity Raigad</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/ -->
        Designed by <a href="https://tectignis.in/">Tectignis IT Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>