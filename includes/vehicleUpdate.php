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
		 * 
		 * 
		 */
		include_once("connect_ExodusDB.inc");
		
		$ResidentId = $_POST["ResidentId"];
		
		$registrationNameVehichle = $_POST["registrationName_Vehichle"];
	 	$licenseNumVehichle = $_POST["licenseNum_Vehichle"];
		$stateVehichle = $_POST["state_Vehichle"];
		$makeVehichle = $_POST["make_Vehichle"];
		$colorVehichle = $_POST["color_Vehichle"];
		$modelVehichle = $_POST["model_Vehichle"];
		$olnVehichle = $_POST["oln_Vehichle"];

		if(mysql_query("UPDATE `incarceration` SET `Incarcerated`= '$incarcerationYN',`IncarcerationLoc`= '$incarcerationLoc',`IncarceratedStartDate`= '$incarcerationStart',`IncarceratedEndDate`='$incarcerationEnd',`IncarcerationCharges`='$incarcerationReason',`Institutionalized`='$institutionalizedYN',`NameOfInstitution`='$institutionName',`InstituteStartDate`='$institutionStart',`InstituteReleaseDate`='$institutionEnd',`ReasonForInstitutionalization`='$institutionReason' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
	    }
		else
		{
			// FUTURE: Error Checking can go here
	  		$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
			$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
		}
?>