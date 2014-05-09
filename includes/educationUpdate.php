<?php
		include_once("connect_ExodusDB.inc");
			
		$ResidentId = $_POST["ResidentId"];
		$residentDegreeEducation = $_POST["residentDegree_Education"];
	 	$continueEdYNEducation = $_POST["continueEdYN_Education"];
		$futureEduEducation = $_POST["futureEdu_Education"];
		

		if(mysql_query("UPDATE `education` SET `EducationMax`='$residentDegreeEducation',`FurtherEd`='$continueEdYNEducation',`FurtherPlans`='$futureEduEducation' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
			
	    }
		else
		{
			// FUTURE Error Checking
	  		$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );
			$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
		}
?>