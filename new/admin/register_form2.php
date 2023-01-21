<?php
        include("config.php");
         $sel = "SELECT * FROM form1 WHERE register_no = '".$_GET['regid']."' ";
        $query = mysqli_query($conn,$sel);
        $fetch = mysqli_fetch_array($query);

        $crime_person = $_POST['crime_person'];
        $insert = "INSERT INTO form2 (form1_id,crime_person)VALUES('".$fetch['form1_id']."','".$crime_person."')";
        $sql = mysqli_query($conn,$insert);

        header("Location:form3.php?regid='".$_GET['regid']."'");
?>