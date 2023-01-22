<?php
// Include the database configuration file
include('config.php');
$statusMsg = '';
$mark = $_POST['mark'];

$sel = "SELECT * FROM form1 WHERE register_no = ".$_GET['regid'];
$query = mysqli_query($conn,$sel);
$fetch = mysqli_fetch_array($query);

// File upload path
$targetDir = "fir/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(!empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert =  "INSERT into form4 (form1_id,fir,mark) VALUES ('".$fetch['form1_id']."','".$fileName."','".$mark."')";
            $sql = mysqli_query($conn,$insert);
            if($sql){
                 $statusMsg = "The file ".$fileName. " has been uploaded successfully.";

                header("Location:form5.php?regid=".$_GET['regid']);
            }else{
                $statusMsg = "File upload failed, please try again.";
                ?>
                <a href="form4.php?regid=<?php echo $_GET['regid'] ?>"><button>Back</button></a>
        <?php    } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
            ?><a href="form4.php?regid=<?php echo $_GET['regid'] ?>"><button>Back</button></a>
            <?php
        }
    }else{
        $statusMsg = 'Sorry, only PDF files are allowed to upload.';
        ?>
        <a href="form4.php?regid=<?php echo $_GET['regid'] ?>"><button>Back</button></a>";
  <?php  }
}else{
    $statusMsg = 'Please select a file to upload.';
    
}
  
// Display status message

echo $statusMsg;
?>