<!-- <php
include("config.php");
/*$sel = "SELECT * FROM form1";
$qy = mysqli_query($con,$sel);
$ft = mysqli_fetch_assoc($qy);*/

?> -->
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Form 1 Atrocity</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/toastr.min.css">
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
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/charts/chart-apex.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/extensions/ext-component-toastr.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
     
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script>
    $(document).ready(function() { //alert("outchange");
        $( "#district_dropdown" ).change(function() { 
            //alert("change");
    	var district_id = $( "#district_dropdown" ).val();
    	$("#district_dropdown option[value='0']").remove();

       	$.ajax({ url: "police_station.php",
         data: {district_id: district_id},
         type: 'get',
         async: false,
         success:
         function(msg) {
             alert(msg);//alert(jQuery.parseJSON(msg.value));
         	$('#police_dropdown').find('option').remove().end();
            
         	var police_id = jQuery.parseJSON(msg);
            alert("police_id");
         	for(var i=0;i<police_id.length;i++)
         	{ //alert(i);
         		$('#police_dropdown').append('<option value="'+police_id[i].police_station_id+'">'+police_id[i].police_station_name+'</option>');
         	}
       	 }
        });
    	//$('#city').find('option').remove().end(); 
    	//$('#city').append('<option value="0">Please choose a Region/State</option>');

	});
});
    </script>
    <style>
         /* The Modal (background) */
         .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 20%;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
 /*background-color: rgb(0,0,0); /* Fallback color */
 /* background-color: rgba(0,0,0,0.4);  Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
} 
        </style>
        <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
//document.getElementById("myBtn").onclick = function() {
  function disp()
    {
    document.getElementById("myModal").style.display = "block";

}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

            </script>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
        <div class="navbar-container d-flex content">
            <ul class="nav navbar-nav align-items-center ms-auto">
                <li class="nav-item dropdown dropdown-user">
                    <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="avatar"><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                     <a class="dropdown-item" href="auth-login-cover.html"><i class="me-50" data-feather="power"></i> बाहेर पडा</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between w-100" href="app-file-manager.html">
                <div class="d-flex">
                    <div class="me-75"><img src="app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size me-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a href="#">
                <h6 class="section-label mt-75 mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="app-user-view-account.html">
                <div class="d-flex align-items-center">
                    <div class="avatar me-75"><img src="app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion justify-content-between"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="me-75" data-feather="alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow">   
        </div>
        
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-start mb-0">अनुसूचित जाती/जमाती अत्याचार ग्रस्त
                                    पीडितांची माहिती   </h2>
                                <div class="breadcrumb-wrapper">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">मुख्यपृठ</a>
                                        </li>
                                        <li class="breadcrumb-item active">सरकारी प्रपत्र
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body row">
                <!-- Basic multiple Column Form section start -->
                <section id="multiple-column-form">
                <!--<button id="myBtn" >Open Modal</button>-->
                <?php
                $status = $_GET['status'];
                $regid = $_GET['regid'];
                if($_GET['status'] == 'success')
                {
                ?>
                <div id="myModal" class="modal" style="display:block">
                    

<!-- Modal content -->
<div class="modal-content">

  <!--<span class="close">&times;</span>-->
  <p><strong>Are You Sure To Submit Form?</strong></p>
  <?php
         $sele = "SELECT * FROM form1 WHERE register_no = '".$_GET['regid']."' ";
         $querye = mysqli_query($conn,$sele);
         $fetche = mysqli_fetch_array($querye);

         $seled = "SELECT * FROM district WHERE district_id = '".$fetche['district']."' ";
         $queryed = mysqli_query($conn,$seled);
         $fetched = mysqli_fetch_array($queryed);

         $selep = "SELECT * FROM police_station WHERE police_station_id = '".$fetche['police_station']."' ";
         $queryep = mysqli_query($conn,$selep);
         $fetchep = mysqli_fetch_array($queryep);
  ?>
  <p>नोंद वही क्र. : <?php echo $fetche['register_no']?></p>
  <p>गुन्हा नं. : <?php echo $fetche['crime_no']?></p>
  <p>दिनांक  : <?php echo $fetche['date']?></p>
  <p>वर्ष : <?php echo $fetche['year']?></p>
  <p>जिल्हा : <?php echo $fetched['district_name']?></p>
  <p>पोलीस ठाणे : <?php echo $fetchep['police_station_name']?></p>
  <p>लावलेली कलमे : <?php echo $fetche['clause']?></p>
  <p>गुन्हयांचे प्रकार : <?php echo $fetche['crime_type']?></p>
  <p>फिर्यादीचे नाव : <?php echo $fetche['prosecutor_name']?></p>
 <p><a href="form1.php?edit=1&regid=<?php echo $$_GET['regid'] ?>"> <button id="edit" style="background:blue; color:white">Edit</button></a>
 <a href="form2.php?regid"> <button id="yes" style="background:green; color:white">Yes</button>

</p>
</div>
<?php } ?>
</div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">नोंदणी</h4>
                                </div>
                                <div class="card-body">
                                        <?php
                                        if($_GET['edit']==1)
                                        {
                                             $sel = "SELECT * FROM form1 WHERE register_no = '".$regid."' ";
                                            $query = mysqli_query($conn,$sel);
                                            $fetch = mysqli_fetch_array($query);
                                            ?>
                                        <div class="row">
                                            <div class="col-md-3 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-no-column">नोंद वही क्र.</label>
                                                    <input type="number" id="register1" name="register" value="<?php echo $fetch['register_no'] ?>" disabled class="form-control"  />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class ="mb-1">
                                                    <label class="form-label" for="last-no-column">गुन्हा नं.</label> 
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-text">कॉ.गु.र.नं.</span>
                                                        <input type="text" class="form-control" value="<?php echo $fetch['crime_no'] ?>" disabled id="crime" name="crime" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="date-column">दिनांक</label>
                                                    <input type="date" id="date-column" class="form-control" placeholder="" value="<?php echo $fetch['date'] ?>" name="date_column" />
                                                </div>
                                            </div> 
                                            <div class="col-md-3 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="year-floating">वर्ष</label>
                                                        <select class="select2 form-select" id="year" value="<?php echo $fetch['year'] ?>" name="year">
                                                            <optgroup>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                            </optgroup>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="जिल्हा-id-column">जिल्हा</label>
                                                    <?php
                                                        $sel_dis = "SELECT * FROM district WHERE district_id = '".$fetch['district']."' ";
                                                        $query_dis = mysqli_query($conn,$sel_dis);
                                                        $fetch_dis = mysqli_fetch_array($query_dis);
                                                    ?>
                                                           <select class="select2 form-select" id="district_dropdown" name="district_dropdown">
                                                           <option value="<?php echo $$fetch_dis['district_id'] ?>"><?php echo $fetch_dis['district_name'] ?></option>
                                                   <?php   
                                                    $selsql=mysqli_query($conn,"select * from district");
                                                         while($arr=mysqli_fetch_assoc($selsql)){
                                                            ?> 

                                                            <option value="<?php echo $arr['district_id'] ?>"><?php echo $arr['district_name'] ?></option>
                                                            <?php
                                                         }
                                                        ?>
                                                            <!--<option value="नवी मुंबई">नवी मुंबई</option>
                                                            <option value="रायगड">रायगड</option>-->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="पोलीस ठाणे-id-column">पोलीस ठाणे</label>
                                                    <select class="select2 form-select" id="police_dropdown" name="police_dropdown">
                                                    <option value="0">Select Police Station</option>
                                                       
                                                    
                                                           <!--<option value="खारघर">खारघर पोलीस ठाणे</option>
                                                            <option value="कळंबोली">कळंबोली पोलीस ठाणे</option>
                                                            <option value="खांदेश्वर">खांदेश्वर पोलीस ठाणे</option>
                                                            <option value="पनवेल शहर">पनवेल शहर पोलीस ठाणे</option>
                                                            <option value="पनवेल तालुका">पनवेल तालुका पोलीस ठाणे</option>
                                                            <option value="कामोठे">कामोठे पोलीस ठाणे</option>
                                                            <option value="तळोजा">तळोजा तालुका पोलीस ठाणे</option>
                                                        -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="लावलेली कलमे">लावलेली कलमे</label>
                                                    <textarea class="form-control" id="clause" name="clause" rows="3" placeholder=""><?php echo $fetch['clause'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">  
                                                    <?php
                                                    $crime_types = explode(",",$fetch['crime_type']);
                                                    ?>
                                                    <label class="form-label" for="गुन्हयांचे प्रकार">गुन्हयांचे प्रकार</label>
                                                    <div class="demo-inline-spacing">
                                                        <div class="form-check form-check-primary">
                                                            <?php 
                                                            $arr_crime = array($fetch['crime_type']);
                                                           // foreach($arr_crime as $cri_type){
                                                                 if(in_array("खून",$crime_types)){
                                                            ?>
                                                            <input type="checkbox" class="form-check-input" checked id="colorCheck1" name="crime_type[]" value="खून">
                                                            <?php } else {
                                                                ?>
                                                                <input type="checkbox" class="form-check-input" id="colorCheck1" name="crime_type[]" value="खून">
                                                               <?php 
                                                            } ?>
                                                            <label class="form-check-label" for="colorCheck1" >खून</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <?php
                                                            //foreach($arr_crime as $cri_type){
                                                                if(in_array("खूनाचा प्रयत्न",$crime_types)){
                                                           ?>
                                                            <input type="checkbox" checked class="form-check-input" id="colorCheck2" name="crime_type[]" value="खूनाचा प्रयत्न">
                                                            <?php } else {
                                                                ?>
                                                                <input type="checkbox" class="form-check-input" id="colorCheck2" name="crime_type[]" value="खूनाचा प्रयत्न">
                                                                <?php
                                                            } ?>
                                                            <label class="form-check-label" for="colorCheck2" >खूनाचा प्रयत्न</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                        <?php
                                                            foreach($arr_crime as $cri_type){
                                                                if(in_array("बलात्कार",$crime_types)){
                                                           ?>
                                                            <input type="checkbox" chcked class="form-check-input" id="colorCheck3" name="crime_type[]"  value="बलात्कार">
                                                            <?php } else {
                                                                ?>
                                                                <input type="checkbox" class="form-check-input" id="colorCheck3" name="crime_type[]"  value="बलात्कार">
                                                                <?php } ?>
                                                            <label class="form-check-label" for="colorCheck3" >बलात्कार</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                        <?php 
                                                                 if(in_array("विनयभंग",$crime_types)){
                                                            ?>
                                                            <input type="checkbox" class="form-check-input" checked id="colorCheck4"  name="crime_type[]" value="विनयभंग">
                                                            <?php }else{
                                                                ?>
                                                            <input type="checkbox" class="form-check-input"   id="colorCheck4"  name="crime_type[]" value="विनयभंग">
                                                                <?php
                                                            } ?>
                                                            <label class="form-check-label" for="colorCheck4" >विनयभंग</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                        <?php 
                                                                 if(in_array("मारहाण",$crime_types)){
                                                            ?>
                                                            <input type="checkbox" checked class="form-check-input" id="colorCheck5" name="crime_type[]" value="मारहाण">
                                                            <?php }else{
                                                                ?>
                                                            <input type="checkbox"   class="form-check-input" id="colorCheck5" name="crime_type[]" value="मारहाण">
                                                                <?php } ?> 
                                                            <label class="form-check-label" for="colorCheck5">मारहाण</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                        <?php 
                                                                 if(in_array("शिवीगाळ",$crime_types)){
                                                            ?>
                                                            <input type="checkbox" checked class="form-check-input" id="colorCheck6" name="crime_type[]" value="शिवीगाळ">
                                                            <?php } else {
                                                                ?>
                                                            <input type="checkbox" class="form-check-input" id="colorCheck6" name="crime_type[]" value="शिवीगाळ">
                                                                <?php
                                                            } ?>
                                                            <label class="form-check-label" for="colorCheck6">शिवीगाळ</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                        <?php 
                                                                 if(in_array("जाळपोळ",$crime_types)){
                                                            ?>
                                                            <input type="checkbox" checked class="form-check-input" id="colorCheck7"  name="crime_type[]" value="जाळपोळ">
                                                            <?php } else {
                                                                ?>
                                                            <input type="checkbox" class="form-check-input" id="colorCheck7"  name="crime_type[]" value="जाळपोळ">
                                                                <?php
                                                            } ?>
                                                            <label class="form-check-label" for="colorCheck7">जाळपोळ</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                        <?php 
                                                                 if(in_array("इतर",$crime_types)){
                                                            ?>
                                                            <input type="checkbox" checked class="form-check-input" id="colorCheck8" name="crime_type[]" value="इतर" >
                                                            <?php
                                                                 } else {
                                                                    ?>
                                                            <input type="checkbox" class="form-check-input" id="colorCheck8" name="crime_type[]" value="इतर" >
                                                                    <?php
                                                                 }
                                                            ?>
                                                            <label class="form-check-label" for="colorCheck8">इतर</label>
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="फिर्यादीचे नाव">फिर्यादीचे नाव</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="prosecutor_name" rows="3" cols="15" placeholder=""><?php echo $fetch['prosecutor_name'] ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 modal-footer">
                                             <input type="submit"  onclick="disp()" name="submit" class="btn btn-primary modal1 waves-effect waves-float waves-light" data-bs-toggle="modal" value="नमूद करा" onclick="disp()">
                                                <!--<a href="form2.php"><button type="button" id="formsub" name="submit" class="btn btn-primary modal1 waves-effect waves-float waves-light" data-bs-toggle="modal">नमूद
                                                    करा</button></a>-->
                                            </div>
                                        </div>
                                            <?php
                                        } else {
                                        ?>


                                    <form class="form" method="POST" action="register.php"  enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-3 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="first-no-column">नोंद वही क्र.</label>
                                                    <input type="number" id="register" name="register" class="form-control" placeholder="" name="" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class ="mb-1">
                                                    <label class="form-label" for="last-no-column">गुन्हा नं.</label> 
                                                    <div class="input-group mb-2">
                                                        <span class="input-group-text">कॉ.गु.र.नं.</span>
                                                        <input type="text" class="form-control" id="crime" name="crime" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="date-column">दिनांक</label>
                                                    <input type="date" id="date-column" class="form-control" placeholder="" name="date_column" />
                                                </div>
                                            </div> 
                                            <div class="col-md-3 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="year-floating">वर्ष</label>
                                                        <select class="select2 form-select" id="year" name="year">
                                                            <optgroup>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                            </optgroup>
                                                        </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="जिल्हा-id-column">जिल्हा</label>
                                                 
                                                           <select class="select2 form-select" id="district_dropdown" name="district_dropdown">
                                                           <option value="0">Select District</option>
                                                   <?php   
                                                    $selsql=mysqli_query($conn,"select * from district");
                                                         while($arr=mysqli_fetch_assoc($selsql)){
                                                            ?> 

                                                            <option value="<?php echo $arr['district_id'] ?>"><?php echo $arr['district_name'] ?></option>
                                                            <?php
                                                         }
                                                        ?>
                                                            <!--<option value="नवी मुंबई">नवी मुंबई</option>
                                                            <option value="रायगड">रायगड</option>-->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="पोलीस ठाणे-id-column">पोलीस ठाणे</label>
                                                    <select class="select2 form-select" id="police_dropdown" name="police_dropdown">
                                                    <option value="0">Select Police Station</option>
                                                       
                                                    
                                                       <!--    <option value="खारघर">खारघर पोलीस ठाणे</option>
                                                            <option value="कळंबोली">कळंबोली पोलीस ठाणे</option>
                                                            <option value="खांदेश्वर">खांदेश्वर पोलीस ठाणे</option>
                                                            <option value="पनवेल शहर">पनवेल शहर पोलीस ठाणे</option>
                                                            <option value="पनवेल तालुका">पनवेल तालुका पोलीस ठाणे</option>
                                                            <option value="कामोठे">कामोठे पोलीस ठाणे</option>
                                                            <option value="तळोजा">तळोजा तालुका पोलीस ठाणे</option>
                                                        -->
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="लावलेली कलमे">लावलेली कलमे</label>
                                                    <textarea class="form-control" id="clause" name="clause" rows="3" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">  
                                                    <label class="form-label" for="गुन्हयांचे प्रकार">गुन्हयांचे प्रकार</label>
                                                    <div class="demo-inline-spacing">
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck1" name="crime_type[]" value="खून">
                                                            <label class="form-check-label" for="colorCheck1" >खून</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck2" name="crime_type[]" value="खूनाचा प्रयत्न">
                                                            <label class="form-check-label" for="colorCheck2" >खूनाचा प्रयत्न</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck3" name="crime_type[]"  value="बलात्कार">
                                                            <label class="form-check-label" for="colorCheck3" >बलात्कार</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck4"  name="crime_type[]" value="विनयभंग">
                                                            <label class="form-check-label" for="colorCheck4" >विनयभंग</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck5" name="crime_type[]" value="मारहाण">
                                                            <label class="form-check-label" for="colorCheck5">मारहाण</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck6" name="crime_type[]" value="शिवीगाळ">
                                                            <label class="form-check-label" for="colorCheck6">शिवीगाळ</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck7"  name="crime_type[]" value="जाळपोळ">
                                                            <label class="form-check-label" for="colorCheck7">जाळपोळ</label>
                                                        </div>
                                                        <div class="form-check form-check-primary">
                                                            <input type="checkbox" class="form-check-input" id="colorCheck8" name="crime_type[]" value="इतर" >
                                                            <label class="form-check-label" for="colorCheck8">इतर</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="फिर्यादीचे नाव">फिर्यादीचे नाव</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"  name="prosecutor_name" rows="3" cols="15" placeholder=""></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 modal-footer">
                                             <input type="submit"  onclick="disp()" name="submit" class="btn btn-primary modal1 waves-effect waves-float waves-light" data-bs-toggle="modal" value="नमूद करा" onclick="disp()">
                                                <!--<a href="form2.php"><button type="button" id="formsub" name="submit" class="btn btn-primary modal1 waves-effect waves-float waves-light" data-bs-toggle="modal">नमूद
                                                    करा</button></a>-->
                                            </div>
                                        </div>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0">
            <span class="float-md-start d-block d-md-inline-block mt-25"><strong> © 2023</strong>
                <span class="d-none d-sm-inline-block">, All rights Reserved.</span></span>
                <span class="float-md-end d-none d-md-block">Designed by<a href=""> Tectignis IT Solution<a><i data-feather="heart"></i></span>
        </p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
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