<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
	session_start();
    
	// This is the date format
	// 2014-04-01
	$violenceYNDomestic = filter_var($_POST["violenceYN_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$safetyYNDomestic = filter_var($_POST["safetyYN_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$restrainingOrderYNDomestic = filter_var($_POST["restrainingOrderYN_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$perpNameDomestic = filter_var($_POST["perpName_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$familyDetailsDomestic = filter_var($_POST["familyDetails_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$homelessDetailsDomestic = filter_var($_POST["homelessDetails_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$housingDetailsDomestic = filter_var($_POST["housingDetails_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$livedAloneYNDomestic = filter_var($_POST["livedAloneYN_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$rentYNDomestic = filter_var($_POST["rentYN_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$landlordCommentsDomestic = filter_var($_POST["landlordComments_Domestic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `incarceration` WHERE `ResidentID` = $ResidentId");


	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO Domestic (ResidentId,DomViolence,SafetyPlan,RestrainingOrder ,PerpName,FamilyInfo,HomelessHistory,HousingHistory,Independent,PaidRent,LeaseAbility) VALUES('$ResidentID','$violenceYNDomestic','$safetyYNDomestic','$restrainingOrderYNDomestic','$perpNameDomestic','$familyDetailsDomestic','$homelessDetailsDomestic','$housingDetailsDomestic','$livedAloneYNDomestic','$rentYNDomestic','$landlordCommentsDomestic')",$con))
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
		if(mysql_query("UPDATE `Domestic` SET `DomViolence`= '$violenceYNDomestic',`SafetyPlan`= '$safetyYNDomestic',`RestrainingOrder`= '$restrainingOrderYNDomestic',`PerpName`='$perpNameDomestic',`FamilyInfo`='$familyDetailsDomestic',`HomelessHistory`='$homelessDetailsDomestic',`HousingHistory`='$housingDetailsDomestic',`Independent`='$livedAloneYNDomestic',`PaidRent`='$rentYNDomestic',`LeaseAbility`='$landlordCommentsDomestic' WHERE `ResidentID` = '$ResidentId'"))
	    {

	    }
		else
		{
			$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}

    
    ?>