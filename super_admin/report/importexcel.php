<?php
    include '../include.php';
    if(isset($_POST["Import"])){
     
     
    		echo $filename=$_FILES["file"]["tmp_name"];
     
     
    		 if($_FILES["file"]["size"] > 0)
    		 {
     
    		  	$file = fopen($filename, "r");
    	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
    	         {
     
    	          //It wiil insert a row to our subject table from our csv file`
    	           $sql = "INSERT INTO `complaint_form`(`caseid`, `book_no`, `complaint_no`, `district`, `police_station`, `section`, `type_of_offence`, `complaint_filer_name`, `complaint_filer_address`,`date`, `cdate`, `year`) VALUES ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]','$emapData[7]','$emapData[8]','$emapData[9]','$emapData[10]','$emapData[11]')";


                        $sql1 = "INSERT INTO `criminal`(`caseid`, `criminal_name`, `criminal_address`, `age`, `date`) VALUES ('$emapData[0]','$emapData[12]','$emapData[13]','$emapData[14]','$emapData[15]')";
    	         //we are using mysql_query function. it returns a resource on true else False on error
    	          $result = mysqli_query( $conn, $sql );
                  $result2 = mysqli_query( $conn, $sql1 );
    				if(! $result2 )
    				{
    					echo "<script type=\"text/javascript\">
    							alert(\"Invalid File:Please Upload CSV File.\");
    							window.location = \"../index.php\"
    						</script>";
     
    				}
     
    	         }
    	         fclose($file);
    	         //throws a message if data successfully imported to mysql database from excel file
    	         echo "<script type=\"text/javascript\">
    						alert(\"CSV File has been successfully Imported.\");
    						window.location = \"../index.php\"
    					</script>";
     
     
     
    			 //close of connection
    			mysqli_close($conn); 
     
     
     
    		 }
    	}	 
    ?>		 		