<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
    session_start();
	

	$registrationNameVehichle = filter_var($_POST["registrationName_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$licenseNumVehichle = filter_var($_POST["licenseNum_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$stateVehichle = filter_var($_POST["state_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$makeVehichle = filter_var($_POST["make_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$colorVehichle = filter_var($_POST["color_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$modelVehichle = filter_var($_POST["model_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$olnVehichle = filter_var($_POST["oln_Vehichle"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `vehicle` WHERE `ResidentID` = '$ResidentId'");
	
	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO `vehicle`(`ResidentID`, `NameOnRegistration`, `LicenseNum`, `State`, `Make`, `Color`, `Model`, `OLN`) VALUES ('$ResidentId','$registrationNameVehichle','$licenseNumVehichle','$stateVehichle','$makeVehichle','$colorVehichle','$modelVehichle','$olnVehichle')",$con))
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
		
		if(mysql_query("UPDATE `vehicle` SET `NameOnRegistration`='$registrationNameVehichle',`LicenseNum`='$licenseNumVehichle',`State`='$stateVehichle',`Make`='$makeVehichle',`Color`='$colorVehichle',`Model`='$modelVehichle',`OLN`='$olnVehichle' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	
	    }
		else
		{
			$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}
	
    
    ?>