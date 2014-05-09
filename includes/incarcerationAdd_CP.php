<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
	session_start();
    
	// This is the date format
	// 2014-04-01
	$incarcerationYN = filter_var($_POST["incarceration_YN"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$incarcerationLoc = filter_var($_POST["incarceration_Loc"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationCharges = filter_var($_POST["incarceration_Charges"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationStart = filter_var($_POST["incarceration_Start"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationEnd = filter_var($_POST["incarceration_End"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$institutionalizedYN = filter_var($_POST["institutionalized_YN"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$institutionName = filter_var($_POST["institution_Name"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$institutionStart = filter_var($_POST["institution_Start"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$institutionEnd = filter_var($_POST["institution_End"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$institutionReason = filter_var($_POST["institution_Reason"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `incarceration` WHERE `ResidentID` = $ResidentId");


	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO incarceration (ResidentId,Incarcerated,IncarcerationLoc,IncarceratedStartDate,IncarceratedEndDate,IncarceratedCharges,Institutionalized,NameOfInstitution,InstituteStartDate,InstituteReleaseDate,ReasonForInstitutionalization) VALUES('$ResidentID','$incarcerationYN','$incarcerationLoc','$incarcerationStart','$incarcerationEnd','$incarcerationCharges','$institutionalizedYN','$institutionName','$institutionStart','$institutionEnd','$institutionReason')",$con))
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
		if(mysql_query("UPDATE `incarceration` SET `Incarcerated`= '$incarcerationYN',`IncarcerationLoc`= '$incarcerationLoc',`IncarceratedStartDate`= '$incarcerationStart',`IncarceratedEndDate`='$incarcerationEnd',`IncarcerationCharges`='$incarcerationCharges',`Institutionalized`='$institutionalizedYN',`NameOfInstitution`='$institutionName',`InstituteStartDate`='$institutionStart',`InstituteReleaseDate`='$institutionEnd',`ReasonForInstitutionalization`='$institutionReason' WHERE `ResidentID` = '$ResidentId'"))
	    {

	    }
		else
		{
			$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}

    
    ?>
