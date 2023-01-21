<?php
  include("config.php");

  $register = $_POST['register'];
  $crime = $_POST['crime'];
  $date_column = $_POST['date_column']; 
  $year = $_POST['year'];
  $district_dropdown = $_POST['district_dropdown'];
  $police_dropdown = $_POST['police_dropdown'];
  $clause = $_POST['clause'];
  $crime_type = $_POST['crime_type'];
  $chk="";
  foreach($crime_type as $chk1)
  {
    $chk .= $chk1.",";
  }
  $prosecutor_name = $_POST['prosecutor_name'];

 echo $insert = "INSERT INTO form1 (`register_no`, `crime_no`, `date`, `year`, `district`, `police_station`, `clause`, `crime_type`, `prosecutor_name`) VALUES ('".$register."','".$crime."','".$date_column."','".$year."','".$district_dropdown."','".$police_dropdown."','".$clause."','".$chk."','".$prosecutor_name."')";
  $sql = mysqli_query($conn,$insert);

  if($sql)
  {
     header("Location:form1.php?status=success&regid=".$register);
  }
?>