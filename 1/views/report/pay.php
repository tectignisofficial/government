<?php
include("../../include.php");
if(isset($_POST['sub3'])){
    $id1=$_POST['id2'];
    $stage2=$_POST['stage2'];
    $sql=mysqli_query($conn,"UPDATE `bank_detail` SET `stage_2`='$stage2' WHERE caseid='$id1'");
    echo "<script>alert('$id1');</script>";
}


?>