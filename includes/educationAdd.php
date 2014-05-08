<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
	session_start();
    
	$residentDegreeEducation = filter_var($_POST["residentDegree_Education"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$continueEdYNEducation = filter_var($_POST["continueEdYN_Education"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$futureEduEducation = filter_var($_POST["futureEdu_Education"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `education` WHERE `ResidentID` = $ResidentId");
	
	
	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO `education`(`ResidentID`, `EducationMax`, `FurtherEd`, `FurtherPlans`) VALUES ('$ResidentId','$residentDegreeEducation','$continueEdYNEducation','$futureEduEducation')",$con))
	    {
	    
	    }
		else
		{
			// Future Error Logs
	  		$data = "Error Inserting Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}
	else 
	{
		
		if(mysql_query("UPDATE `education` SET `EducationMax`='$residentDegreeEducation',`FurtherEd`='$continueEdYNEducation',`FurtherPlans`='$futureEduEducation' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	
	    }
		else
		{
			// Future Error Logs
			$data = "Error Inserting Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}
	
    
    ?>