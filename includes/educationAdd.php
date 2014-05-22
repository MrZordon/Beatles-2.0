<?php
	/* Add Script Page
	 * 
	 * The add scripts are actually add and update scripts.  The way the modals
	 * are designed allow us to do this.  Values are stored via Ajax Java in a
	 * POST request so once we hit save information once, an additional click
	 * will inturn do an update.
	 * 
	 * We use the following logic to tell.  We store the resident ID in a session
	 * variable.  We then call a select * statement, if the number of rows returned
	 * is 0, that means we are doing an insert into the database.
	 * 
	 * If there is a resident ID, that means there is already an existing member
	 * with this resident ID and we are updating the specific table based on that
	 * Resident ID.
	 * 
	 * TODOS - Add Error Checking, Test for all Values, Organize into a
	 * 		   separate Updates Folder.
	 * 
	 * Known Bugs -- ??
	 */

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