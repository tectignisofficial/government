<?php
    include('config.php');

//victim_name victim_address victim_caste caste_certificate aadhaar_card charge_sheet
    $victim_name = $_POST['victim_name'];
    $victim_address = $_POST['victim_address'];
    $victim_caste = $_POST['victim_caste'];
    $caste_certificate = $_POST['caste_certificate'];
    $aadhaar_card = $_POST['aadhaar_card'];
    $charge_sheet = $_POST['charge_sheet'];

      $sel = "SELECT * FROM form1 WHERE register_no = ".$_GET['regid'];
        $query = mysqli_query($conn,$sel);
        $fetch = mysqli_fetch_array($query);

         
        $insert = "INSERT INTO form3 (form1_id,victim_name,victim_address,victim_caste,cast_cert,aadhar,charge_sheet)
        VALUES('".$fetch['form1_id']."','".$victim_name."','".$victim_address."','".$victim_caste."','".$caste_certificate."','".$aadhaar_card."','".$charge_sheet."')";
        $sql = mysqli_query($conn,$insert);

        header("Location:form4.php?regid=".$_GET['regid']);
?>


