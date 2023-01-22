<?php
    include('config.php');

//victim_name victim_address victim_caste caste_certificate aadhaar_card charge_sheet
//acc_hold acc_no bank_name branch ifsc
    $acc_hold = $_POST['acc_hold'];
    $acc_no = $_POST['acc_no'];
    $bank_name = $_POST['bank_name'];
    $branch = $_POST['branch'];
    $ifsc = $_POST['ifsc'];
    //$charge_sheet = $_POST['charge_sheet'];

      $sel = "SELECT * FROM form1 WHERE register_no = ".$_GET['regid'];
        $query = mysqli_query($conn,$sel);
        $fetch = mysqli_fetch_array($query);

         
        $insert = "INSERT INTO form5 (form1_id,acc_hold,acc_no,bank_name,branch,ifsc)
        VALUES('".$fetch['form1_id']."','".$acc_hold."','".$acc_no."','".$bank_name."','".$branch."','".$ifsc."')";
        $sql = mysqli_query($conn,$insert);
        echo "<script> alert('You have form submitted successfuly'); </script>";
        //header("Location:form1.php");
?>


