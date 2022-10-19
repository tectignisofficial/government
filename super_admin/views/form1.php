<?php
session_start();
include("../include.php");
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
  header("location:index.php");
}
$role='';
       $email=$_SESSION['use'];
       $sql = mysqli_query($conn,"SELECT * FROM webuser WHERE email='$email'") ;
       while($res=mysqli_fetch_array($sql)){
         $role=$res['role'];
       }

        $book_no='';
        $date='';
        $complaint_no='';
        $police_station='';
        $section='';
        $year='';
        $type_of_offence='';
        $complaint_filer_name='';
        // $complaint_filer_address='';
if(isset($_GET['id'])){
  $id=intval($_GET['id']);
  $sql=mysqli_query($conn,"select * from complaint_form where id='$id'");
   while($arr=mysqli_fetch_array($sql)){
  $book_no= $arr['book_no'];
   $date=$arr['date'];  
   $complaint_no=$arr['complaint_no'] ; 
   $police_station=$arr['police_station'] ; 
   $section=$arr['section'];
   $type_of_offence=explode(",", $arr['type_of_offence']);
   $complaint_filer_name=$arr['complaint_filer_name'];
  //  $complaint_filer_address=$arr['complaint_filer_address'];
   $year=$arr['year'];
  }
}

if(isset($_POST['s_ubmit']) && ($_GET['id'])){
  $id=$_GET['id'];
  $book_no=$_POST['book_no']; 
 $date=$_POST['date']; 
 $year=$_POST['year']; 
 $complaint_no=$_POST['complaint_no'];
 $district=$_POST['district']; 
 $police_station=$_POST['police_station']; 
 $section=$_POST['section']; 
 $complaint_filer_name=$_POST['complaint_filer_name'];
//  $complaint_filer_address=$_POST['complaint_filer_address'];
 $checkbox1=$_POST['crime'];  
 $chk="";  
 foreach($checkbox1 as $chk1)  
 {  
  $chk .= $chk1.",";  
 }  
   $sql=mysqli_query($conn,"update complaint_form set book_no='$book_no',date='$date',complaint_no='$complaint_no',district='$district',police_station='$police_station',section='$section',complaint_filer_name='$complaint_filer_name',year='$year', type_of_offence='$chk' where id='$id'");
   if($sql==1){
       header("location:form2.php?eid=".$id);
   }
   else{
echo mysqli_query($conn);
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atrocity Raigad | Governnment Form </title>
  <link rel="shortcut icon" type="image/png" href="../dist/img/government.png" />
  <link rel="stylesheet" href="../dist/css/adminlte.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../dist/css/adminlte.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">

  <script>

    var citiesByState = {
        "raigarh": ["अलिबाग पोलीस ठाणे", "पनवेल पोलीस ठाणे","मुरुड पोलीस ठाणे","पेण पोलीस ठाणे","उरण पोलीस ठाणे","कर्जत पोलीस ठाणे","खालापूर पोलीस ठाणे","माणगाव पोलीस ठाणे","रोहा पोलीस ठाणे","तळा पोलीस ठाणे","महड पोलीस ठाणे","म्हसळा पोलीस ठाणे","श्रीवर्धन पोलीस ठाणे","पोलादपूर पोलीस ठाणे","नेरळ पोलीस ठाणे","खोपोली पोलीस ठाणे","वडखळ पोलीस ठाणे","पोयनाड पोलीस ठाणे","मांडवा पोलीस ठाणे","रेवदंडा पोलीस ठाणे","पाली पोलीस ठाणे","महाड एम आय डी सी पोलीस ठाणे","महाड तालुका पोलीस ठाणे","महाड शहर पोलीस ठाणे","दिघी सागरी पोलीस ठाणे","गोरेगाव पोलीस ठाणे","नागोठणे पोलीस ठाणे","माथेरान पोलीस ठाणे"],
        "navi mumbai": ["खारघर पोलीस ठाणे","कळंबोली पोलीस ठाणे","खांदेश्वर पोलीस ठाणे","पनवेल शहर पोलीस ठाणे","पनवेल तालुका पोलीस ठाणे","कामोठे पोलीस ठाणे","तळोजा पोलीस ठाणे"],

}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option value="+citiesByState[value][cityId]+">"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
  </script>

 <link href="../dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
 <link href="../dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->


        <!-- Messages Dropdown Menu -->

        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light" >Atrocity Raigad</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <!--<div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>-->
          <div class="info">
            <a href="#" class="d-block" style="text-transform:capitalize;font-size:20px;font-weight:500"><?php echo $role; ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->


        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link ">
                 <i class="nav-icon fas fa-tachometer-alt"></i> 
               
                <p>
                    मुख्यपृष्ठ 
                  <!-- <i class="right fas fa-angle-left"></i> -->
                </p>
              </a>
           
            </li>
            <li class="nav-item">

<a href="form1.php" class="nav-link ">
  <i class="nav-icon fas fa-th"></i>
  <p>
  नोंदणी करा
    <!-- <span class="right badge badge-danger">New</span> -->
  </p>
</a>
</li>
            <li class="nav-item">
              <a href="#" class="nav-link ">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  अहवाल
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
               <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="report/R1.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल १</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/R2.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल २</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="report/R4.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ३</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/R5.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>अहवाल ४</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="report/Complaint.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>प्रलंबित प्रकरणे</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-chart-pie"></i>
                <p>
                  वापरकर्ता                                                                                                                                                                                                                                
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="viewwebuser.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p> संकेतस्थल वापरकर्ता

                    </p>
                  </a>
                </li>
                
              </ul>
              <li class="nav-item">
            <a href="report/r1opy.php" class="nav-link">
            <i class=" nav-icon fas fa-landmark "></i>
                    <p>
                      बँक माहिती
                    </p>
      </a>
            </li>
            <!-- <li class="nav-item"> 
            <a href="report/payment.php" class="nav-link">
            <i class=" far fa-circle nav-icon"></i> 
              <p>
              पेमेंट
              </p>
            </a>

            </li>-->
              
          
            <li class="nav-item">
              <a href="member-img.php" class="nav-link">
              <i class="nav-icon fa fa-image"></i>
                <p>
                  सदस्य प्रतिमा
                </p>
              </a>
           
            </li>
            <li class="nav-item">
              <a href="../logout.php" class="nav-link">
              <i class=" nav-icon fas fa-sign-out-alt"></i> 
                <p>
                     बाहेर पडा  
                </p>
              </a>
           
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->


      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>अनुसूचित जाती/जमाती अत्याचार ग्रस्त पीडितांची माहिती</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">मुख्यपृठ</a></li>
                                            <li  class="active" id="account"><strong>/सरकारी प्रपत्र</strong></li>
                <li class="breadcrumb-item active"></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="../api.php" enctype="multipart/form-data">
                
                  <div class="card-body">
                      <div class="col-12" style="text-align:center;">
                      <ul id="progressbar" style="display:flex"  ;>
                                            <li class="active" id="account"><strong>नोंदणी</strong></li>
                                            <li id="personal"><strong>आरोपीची माहिती</strong></li>
                                            
                                            <li id="payment"><strong>पिडीत व्यक्तीची माहिती</strong></li>
                                            <li id="confirm"><strong>इतर माहिती </strong></li>
                                            <li id="confirm"><strong>बँक तपशील </strong></li>
    
                                        </ul>

                      </div>
            
                      <div class=" d-flex form-group " style="margin-left: -12px;">
                   <div class="form-group col-6">
                      <label for="exampleनोंद वही क्र.">नोंद वही क्र.</label>
                      <input type="Textbox" required class="form-control" va lue="<?php echo $book_no?>" name="book_no" id="exampleInputनोंद वही क्र."
                        placeholder="">
                    </div>
                      
                      <div class="form-group col-6">
                        <label for="exampleदिनांक">वर्ष</label>
                        <input required class="form-control " value="<?php echo  $year ?>" name="year" id="exampleदिनांक" placeholder="" type="number" min="1900" max="2099" step="1" >
                      </div>

                    </div>

                    <div class=" d-flex form-group " style="margin-left: -12px;">
                      <div class="form-group col-6">
                        <label for="exampleदिनांक">दिनांक</label>
                        <input type="Date" required class="form-control" value="<?php echo  $date ?>" name="date" id="exampleदिनांक" placeholder="">
                      </div>
                      <div class="form-group col-6">
                        <label for="exampleदिनांक">गुन्हा नं.</label>
                        <input type="varchar" required class="form-control " value="<?php echo  $complaint_no ?>" name="complaint_no" id="exampleदिनांक"
                          placeholder="">
                      </div>

                    </div>
                   

                    <div class="d-flex form-group " style="margin-left: -12px;">
                      <div class="form-group col-6">
                        <label for="Exampleउप विभागा चे नाव">जिल्हा</label>
                        <select required name="district" class="form-control" id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
                        <option value="" disabled selected>District</option>
                        <option  value="navi mumbai"> navi mumbai</option>
                        <option value="raigarh">raigarh</option>
                        </select>
                       
                      </div>
                      <div class="form-group col-6" id="raigarh">
                        <label for="Exampleपोलीस ठाणे" class="form-label">पोलीस ठाणे</label>
                        <select id="citySelect" size="1" required  name="police_station" class="form-control">
                        <option value="" disabled selected>Police Station</option>
                        <option></option>
                        <option value="<?php if(isset($_GET['id'])){ echo $police_station; } ?>"><?php echo $police_station?></option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="Exampleलावलेली कलमे">लावलेली कलमे</label>
                      <input type="Textbox" required class="form-control" value="<?php echo  $section?>" name="section" id="Exampleलावलेली कलमे"
                        placeholder="">
                    </div>



                    <div class=" d-flex form-group " style="margin-left: -12px;">
                      <div class="form-group col-6">
                        <label for="exampleदिनांक">गुन्हयांचा प्रकार</label><br>

                        <div class="d-flex form-group ">
                          <div class="form-group col-3">
                            <input type="checkbox" id="crime1" name="crime[]" value="खुन" <?php if(isset($_GET['id'])){if(in_array("खून,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime1">खून</label><br>
                          </div>
                          <div class="form-group col-3">
                            <input type="checkbox" id="crime2" name="crime[]" value="बलात्कार" <?php if(isset($_GET['id'])){if(in_array("बलात्कार,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime2">बलात्कार</label><br>
                          </div>
                          <div class="form-group col-3">
                            <input type="checkbox" id="crime3" name="crime[]" value="विनयभंग" <?php if(isset($_GET['id'])){if(in_array("विनयभंग,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime3"> विनयभंग</label><br>
                          </div>
                          <div class="form-group col-3">
                            <input type="checkbox" id="crime4" name="crime[]" value="मारहाण" <?php if(isset($_GET['id'])){if(in_array("मारहाण,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime4">मारहाण</label><br>
                          </div>

                          <div class="form-group col-3">
                            <input type="checkbox" id="crime5" name="crime[]" value="शिवीगाळ" <?php if(isset($_GET['id'])){if(in_array("शिवीगाळ,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime5"> शिवीगाळ</label><br>
                          </div>
                          <div class="form-group col-3">
                            <input type="checkbox" id="crime7" name="crime[]" value="जाळपोळ" <?php if(isset($_GET['id'])){if(in_array("जाळपोळ,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime7"> जाळपोळ</label><br>
                          </div>
                          <div class="form-group col-3">
                            <input type="checkbox" id="crime8" name="crime[]" value="इतर" <?php if(isset($_GET['id'])){if(in_array("इतर,",$type_of_offence)) { ?> checked="checked" <?php } }?> >
                            <label for="crime8"> इतर</label><br>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="d-flex form-group " style="margin-left: -12px;">
                      <div class="form-group col-6">
                        <label for="exampleदिनांक">फिर्यादी चे नाव </label>
                        <input type="text" required class="form-control" value="<?php echo  $complaint_filer_name ?>" name="complaint_filer_name" id="exampleदिनांक"
                          placeholder="">
                      </div>
                      <!-- <div class="form-group col-6">
                        <label for="exampleदिनांक">फिर्यादी चे पत्ता</label>
                        <input type="varchar" required class="form-control " value="<?php echo  $complaint_filer_address ?>" name="complaint_filer_address"
                          id="exampleदिनांक" placeholder="">
                      </div> -->
                    </div>
                    <!-- /.card-body -->
                           
                    <div style="text-align: end;">

                                            <button type="submit" name="s_ubmit" class="btn btn-primary"> नमूद करा
                                            </button>
                                        </div>

                </form>
              </div>
              <!-- /.card -->

              <!-- general form elements -->

              <!-- /.card -->

              <!-- Input addon -->

              <!-- /.card -->
              <!-- Horizontal Form -->

              <!-- /.card -->

            </div>
            <!--/.col (left) -->
            <!-- right column -->

            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>&copy; <?php echo date('Y'); ?></strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        Designd by <a href="https://tectignis.in/" target="_blank" style="color: #869099; text-decoration:none">Tectignis It Solutions</b></a>
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- bs-custom-file-input -->
  <script src="../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>
  <!-- Page specific script -->
  
  <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function () {
                return false;
            })

        });
    </script>

     <script>
     $(function() {
  $('#colorselector').select(function(){
    $('#navimumbai').show();
  });
});
    </script> 
</body>

</html>
