<?php
		/* Update Page
		 * 
		 * The update page is essentially where Information is passed via a
		 * POST Request in a form from one of the various information Panels.
		 * All that is done in each of these for the time being is setting up
		 * a connection to the database, retrieving the information from the
		 * POST, and then finally making an update call to the database to 
		 * change any information that is different.
		 * 
		 * TODOS - Add Error Checking, Test for all Values, Organize into a
		 * 		   separate Updates Folder.
		 */

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