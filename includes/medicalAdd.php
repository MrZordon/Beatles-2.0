<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
    session_start();
	
	$docNameMedical = filter_var($_POST["docName_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$docPhoneNumMedical = filter_var($_POST["docPhoneNum_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$docStreetAddressMedical = filter_var($_POST["docStreetAddress_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$docCityMedical = filter_var($_POST["docCity_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$docStateMedical = filter_var($_POST["docState_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$docZipMedical = filter_var($_POST["docZip_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$medsYNMedical = filter_var($_POST["medsYN_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$medsName1Medical = filter_var($_POST["medsName1_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$medsDosage1Medical = filter_var($_POST["medsDosage1_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$medsWhen1Medical = filter_var($_POST["medsWhen1_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$medsName2Medical = filter_var($_POST["medsName2_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$medsDosage2Medical = filter_var($_POST["medsDosage2_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$medsWhen2Medical = filter_var($_POST["medsWhen2_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$allergiesYNMedical = filter_var($_POST["allergiesYN_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$seizersYNMedical = filter_var($_POST["seizersYN_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$clientYNMedical = filter_var($_POST["clientYN_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$dmhNameMedical = filter_var($_POST["dmhName_Medical"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `medical` WHERE `ResidentID` = '$ResidentId'");
	
	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO `medical`(`ResidentID`, `DocName`, `Street`, `CityTown`, `State`, `Zip`, `Phone`, `Medication`, `Med1`, `Dose1`, `When1`, `Med2`, `Dose2`, `When2`, `Allergies`,`Seizures`, `Epilepsy`, `MentalHealthClient`, `MentalHealthDoc`) VALUES ('$ResidentId','$docNameMedical','$docStreetAddressMedical','$docCityMedical','$docStateMedical','$docZipMedical','$docPhoneNumMedical','$medsYNMedical','$medsName1Medical','$medsDosage1Medical','$medsWhen1Medical','$medsName2Medical','$medsDosage2Medical','$medsWhen2Medical','$allergiesYNMedical','$seizersYNMedical','$seizersYNMedical','$clientYNMedical','$dmhNameMedical')",$con))
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
		
		if(mysql_query("UPDATE `medical` SET `DocName`='$docNameMedical',`Street`='docStreetAddressMedical',`CityTown`='$docCityMedical',`State`='$docStateMedical',`Zip`='$docZipMedical',`Phone`='$docPhoneNumMedical',`Medication`= '$medsYNMedical',`Med1`='$medsName1Medical',`Dose1`='$medsDosage1Medical',`When1`='$medsWhen1Medical',`Med2`='$medsName2Medical',`Dose2`='$medsDosage2Medical',`When2`='$medsWhen2Medical',`Allergies`='$allergiesYNMedical',`Seizures`='$seizersYNMedical',`Epilepsy`='seizersYNMedical',`MentalHealthClient`='$clientYNMedical',`MentalHealthDoc`='$dmhNameMedical' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	
	    }
		else
		{
			// Future Error Logs
			$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}
	
    
    ?>