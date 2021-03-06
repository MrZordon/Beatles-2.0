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
    
	$incarcerationYN = filter_var($_POST["incarceration_YN"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$incarcerationLoc = filter_var($_POST["incarceration_Loc"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationCharges = filter_var($_POST["incarceration_Charges"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationStart = filter_var($_POST["incarceration_Start"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationEnd = filter_var($_POST["incarceration_End"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incarcerationReason = filter_var($_POST["incarceration_Reason"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
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
		if(mysql_query("INSERT INTO incarceration (ResidentId,Incarcerated,IncarcerationLoc,IncarceratedStartDate,IncarceratedEndDate,IncarcerationCharges,Institutionalized,NameOfInstitution,InstituteStartDate,InstituteReleaseDate,ReasonForInstitutionalization) VALUES('$ResidentId','$incarcerationYN','$incarcerationLoc','$incarcerationStart','$incarcerationEnd','$incarcerationReason','$institutionalizedYN','$institutionName','$institutionStart','$institutionEnd','$institutionReason')",$con))
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
		
		if(mysql_query("UPDATE `incarceration` SET `Incarcerated`= '$incarcerationYN',`IncarcerationLoc`= '$incarcerationLoc',`IncarceratedStartDate`= '$incarcerationStart',`IncarceratedEndDate`='$incarcerationEnd',`IncarcerationCharges`='$incarcerationReason',`Institutionalized`='$institutionalizedYN',`NameOfInstitution`='$institutionName',`InstituteStartDate`='$institutionStart',`InstituteReleaseDate`='$institutionEnd',`ReasonForInstitutionalization`='$institutionReason' WHERE `ResidentID` = '$ResidentId'"))
	    {
	    	
	    }
		else
		{
			$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}
	
    
    ?>