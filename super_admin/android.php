<?php
$servername = "localhost";
$username = "u188140722_government";
$password = "Admin@123";
$dbname = "u188140722_government";

// connect with database demo
$conn = new mysqli($servername, $username, $password, $dbname);

// an array to display response
$response = array();
// on below line we are checking if the parameter send is id or not.
if($_POST['id']){
	// if the parameter send from the user id id then
	// we will search the item for specific id.
	$id = $_POST['id'];
		//on below line we are selecting the course detail with below id.
	$stmt = $conn->prepare("SELECT book_no, complaint_no,district,taluka,police_station,Sub_police_station,section,type_of_offence,complaint_filer_name,complaint_filer_address,victim_name,criminal_name,criminal_address, category_and_caste,caste_certificate,fir,aadhaar_card,bank_info,charge_sheet,medical_report,medical_conformatio_31_report,discription,date  FROM complaint_form WHERE id = ?");
	$stmt->bind_param("s",$id);
	$result = $stmt->execute();
// on below line we are checking if our
// table is having data with specific id.
if($result == TRUE){
		// if we get the response then we are displaying it below.
		$response['error'] = false;
		$response['message'] = "Retrieval Successful!";
		// on below line we are getting our result.
		$stmt->store_result();
		// on below line we are passing parameters which we want to get.
		$stmt->bind_result($book_no,$complaint_no,$district,$taluka,$police_station,$Sub_police_station,$section,$type_of_offence,$complaint_filer_name,$complaint_filer_address,$victim_name,$criminal_name,$criminal_address, $category_and_caste,$caste_certificate,$fir,$aadhaar_card,$bank_info,$charge_sheet,$medical_report,$medical_conformatio_31_report,$discription,$date);
		// on below line we are fetching the data.
		$stmt->fetch();
		// after getting all data we are passing this data in our array.
		$response['book_no'] = $book_no;
        $response['complaint_no'] = $complaint_no;
		$response['district'] = $district;
		$response['taluka'] = $taluka;
        $response['police_station'] = $police_station;
		$response['Sub_police_station'] = $Sub_police_station;
		$response['section'] = $section;
        $response['type_of_offence'] = $type_of_offence;
        $response['complaint_filer_name'] = $complaint_filer_name;
		$response['complaint_filer_address'] = $complaint_filer_address;
		$response['victim_name'] = $victim_name;
        $response['criminal_name'] = $criminal_name;
		$response['criminal_address'] = $criminal_address;
		$response['category_and_caste'] = $category_and_caste;
        $response['caste_certificate'] = $caste_certificate;
        $response['fir'] = $fir;
        $response['aadhaar_card'] = $aadhaar_card;
        $response['bank_info'] = $bank_info;
        $response['charge_sheet'] = $charge_sheet;
        $response['medical_report'] = $medical_report;
        $response['medical_conformatio_31_report'] = $medical_conformatio_31_report;
        $response['discription'] = $discription;
        $response['date'] = $date;





	} else{
		// if the id entered by user donot exist then
		// we are displaying the error message
		$response['error'] = true;
		$response['message'] = "Incorrect id";
	}
} else{
	// if the user donot adds any parameter while making request
	// then we are displaying the error as insufficient parameters.
	$response['error'] = true;
	$response['message'] = "Insufficient Parameters";
}
// at last we are printing
// all the data on below line.
echo json_encode($response);
?>
