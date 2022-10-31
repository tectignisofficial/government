<?php
if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
{
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atrocity Raigad | Governnment Form </title>
  <link rel="shortcut icon" type="image/png" href="dist/img/government.png"/>



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <script>
var stateObject = {
"रायगड": {
"अलिबाग": ["Thiruvananthapuram", "Palakkad"],
"पनवेल": ["North Goa", "South Goa"],
"मुरुड": ["North Goa", "South Goa"],
"पेण": ["Thiruvananthapuram", "Palakkad"],
"उरण": ["North Goa", "South Goa"],
"कर्जत": ["North Goa", "South Goa"],
"खालापूर": ["Thiruvananthapuram", "Palakkad"],
"माणगाव": ["North Goa", "South Goa"],
"माणगाव": ["North Goa", "South Goa"],
"रोहा": ["Thiruvananthapuram", "Palakkad"],
"तळा": ["North Goa", "South Goa"],
"महड": ["North Goa", "South Goa"],
"म्हसळा": ["Thiruvananthapuram", "Palakkad"],
"श्रीवर्धन": ["North Goa", "South Goa"],
"पोलादपूर": ["North Goa", "South Goa"],

},
"नवी मुंबई": {
"South Australia": ["Dunstan", "Mitchell"],
"Victoria": ["Altona", "Euroa"]
},
}
window.onload = function () {
var district = document.getElementById("district"),
taluka = document.getElementById("taluka"),
police = document.getElementById("police");
for (var dis in stateObject) {
district.options[district.options.length] = new Option(dis, dis);
}
district.onchange = function () {
taluka.length = 1; // remove all options bar first
police.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
for (var talu in stateObject[this.value]) {
taluka.options[taluka.options.length] = new Option(talu, talu);
}
}
district.onchange(); // reset in case page is reloaded
taluka.onchange = function () {
police.length = 1; // remove all options bar first
if (this.selectedIndex < 1) return; // done
var pol = stateObject[district.value][this.value];
for (var i = 0; i < pol.length; i++) {
police.options[police.options.length] = new Option(pol[i], pol[i]);
}
}
}
    </script>
 <link href="dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
 <link href="dist/img/lo.png" rel="icon">
  <link href="./dist/img/lo.png" rel="apple-touch-icon">
</head>
<?php
include_once 'include.php';
session_start();
if(isset($_FILES['files'])){
    $errors= array();
    foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
        $file_name = $key.$_FILES['files']['name'][$key];
        $file_size =$_FILES['files']['size'][$key];
        $file_tmp =$_FILES['files']['tmp_name'][$key];
        $file_type=$_FILES['files']['type'][$key];  
        if($file_size > 2097152){
            $errors[]='File size must be less than 2 MB';
        }       
        $query="INSERT into complaint_form (medical_conformatio_31_report) VALUES('$file_name'); ";
        $desired_dir="file";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{                                  // rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;               
            }
        mysqli_query($conn,$query);           
        }else{
                print_r($errors);
        }
    }
    if(empty($error)){
        echo "Success";
    }
}
?>
<body class="hold-transition sidebar-mini">

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple/>
    <input type="submit"/>
</form>


</body>
</html>