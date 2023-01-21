<?php
include("config.php");
//echo $district_id = $_GET["district_id"];
//echo "SELECT * FROM police_station where district_id = $district_id";
  $result = mysqli_query($conn,"SELECT * FROM police_station where district_id = $district_id");
?>
<option value="">Select Police Station</option>
<?php
$regions = array();
while($police = mysqli_fetch_assoc($result)){
	array_push($regions, $police);
}
print_r(json_encode($regions));
/*while($row = mysqli_fetch_assoc($result)) {
?>
<option value="<?php echo $row["police_station_id"];?>"><?php echo $row["police_station_name"];?></option>
<?php
}*/
?>