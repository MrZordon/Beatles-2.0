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
		
		$docNameMedical = $_POST["docName_Medical"];
	 	$docPhoneNumMedical = $_POST["docPhoneNum_Medical"];
		$docStreetAddressMedical = $_POST["docStreetAddress_Medical"];
		$docCityMedical = $_POST["docCity_Medical"];
		$docStateMedical = $_POST["docState_Medical"];
		$docZipMedical = $_POST["docZip_Medical"];
		$medsYNMedical = $_POST["medsYN_Medical"];
		$medsName1Medical = $_POST["medsName1_Medical"];
		$medsDosage1Medical = $_POST["medsDosage1_Medical"];
		$medsWhen1Medical = $_POST["medsWhen1_Medical"];
	 	$medsName2Medical = $_POST["medsName2_Medical"];
		$medsDosage2Medical = $_POST["medsDosage2_Medical"];
		$medsWhen2Medical = $_POST["medsWhen2_Medical"];
		$allergiesYNMedical = $_POST["allergiesYN_Medical"];
		$seizersYNMedical = $_POST["seizersYN_Medical"];
		$clientYNMedical = $_POST["clientYN_Medical"];
		$dmhNameMedical = $_POST["dmhName_Medical"];

		if(mysql_query("UPDATE `medical` SET `DocName`='$docNameMedical',`Street`='docStreetAddressMedical',`CityTown`='$docCityMedical',`State`='$docStateMedical',`Zip`='$docZipMedical',`Phone`='$docPhoneNumMedical',`Medication`= '$medsYNMedical',`Med1`='$medsName1Medical',`Dose1`='$medsDosage1Medical',`When1`='$medsWhen1Medical',`Med2`='$medsName2Medical',`Dose2`='$medsDosage2Medical',`When2`='$medsWhen2Medical',`Allergies`='$allergiesYNMedical',`Seizures`='$seizersYNMedical',`Epilepsy`='seizersYNMedical',`MentalHealthClient`='$clientYNMedical',`MentalHealthDoc`='$dmhNameMedical' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
	    }
		else
		{
			//FUTURE: Error Checking can go here
	  		$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
			$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
		}
?>