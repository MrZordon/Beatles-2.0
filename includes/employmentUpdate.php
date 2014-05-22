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
		
		$currentEmployment = $_POST["current_Employment"];
	 	$companyNameEmployment = $_POST["companyName_Employment"];
		$managerNameEmployment = $_POST["managerName_Employment"];
		$managerPhoneNumEmployment = $_POST["managerPhoneNum_Employment"];
		$hoursFromEmployment = $_POST["hoursFrom_Employment"];
		$hoursToEmployment = $_POST["hoursTo_Employment"];
		$rateOfPayEmployment = $_POST["rateOfPay_Employment"];
		$incomeEmployment = $_POST["income_Employment"];
		$goalsEmployment = $_POST["goals_Employment"];

		if(mysql_query("UPDATE `employment` SET `CompanyName`='$companyNameEmployment',`HoursFrom`='$hoursFromEmployment',`HoursTo`='$hoursToEmployment',`ManagerName`='$managerNameEmployment',`ManagerPhoneNum`='$managerPhoneNumEmployment',`Income`='$incomeEmployment',`RateOfPay`='$rateOfPayEmployment',`CurrentlyEmployed`='$currentEmployment',`EmploymentGoals`= '$goalsEmployment' WHERE `ResidentID` = '$ResidentId'"))
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