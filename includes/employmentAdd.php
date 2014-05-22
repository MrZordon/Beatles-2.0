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
	
	$currentEmployment = filter_var($_POST["current_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$companyNameEmployment = filter_var($_POST["companyName_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$managerNameEmployment = filter_var($_POST["managerName_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$managerPhoneNumEmployment = filter_var($_POST["managerPhoneNum_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$hoursFromEmployment = filter_var($_POST["hoursFrom_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$hoursToEmployment = filter_var($_POST["hoursTo_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$rateOfPayEmployment = filter_var($_POST["rateOfPay_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incomeEmployment = filter_var($_POST["income_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$goalsEmployment = filter_var($_POST["goals_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `employment` WHERE `ResidentID` = $ResidentId");
	
	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO `employment`(`ResidentID`, `CompanyName`, `HoursFrom`, `HoursTo`, `ManagerName`, `ManagerPhoneNum`, `Income`, `RateOfPay`, `CurrentlyEmployed`, `EmploymentGoals`) VALUES ('$ResidentId','$companyNameEmployment','$hoursFromEmployment','$hoursToEmployment','$managerNameEmployment','$managerPhoneNumEmployment','$incomeEmployment','$rateOfPayEmployment','$currentEmployment','$goalsEmployment')",$con))
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
		
		if(mysql_query("UPDATE `employment` SET `CompanyName`='$companyNameEmployment',`HoursFrom`='$hoursFromEmployment',`HoursTo`='$hoursToEmployment',`ManagerName`='$managerNameEmployment',`ManagerPhoneNum`='$managerPhoneNumEmployment',`Income`='$incomeEmployment',`RateOfPay`='$rateOfPayEmployment',`CurrentlyEmployed`='$currentEmployment',`EmploymentGoals`= '$goalsEmployment' WHERE `ResidentID` = '$ResidentId'"))
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