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
		
		$agencyName = $_POST["agency_Name"];
	 	$agencymonthlyAmount = $_POST["agency_monthlyAmount"];
		$agencyName2 = $_POST["agency_Name2"];
		$agencymonthlyAmount2 = $_POST["agency_monthlyAmount2"];
		$agencytotalIncome = $_POST["agency_totalIncome"];
		$agencyrateOfPay = $_POST["agency_rateOfPay"];
		$agencyworkerName = $_POST["agency_workerName"];
		$agencyworkerCity = $_POST["agency_workerCity"];
		$agencyworkerPhoneNum = $_POST["agency_workerPhoneNum"];

		if(mysql_query("UPDATE `membership` SET `AgencyName1`='$agencyName',`Amount1`= '$agencymonthlyAmount',`AgencyName2`='$agencyName2',`Amount2`='$agencymonthlyAmount2',`TotalIncome`='$agencytotalIncome',`RateOfPay`='$agencyrateOfPay',`WorkerName`='$agencyworkerName',`WorkerCity`='$agencyworkerCity',`WorkerPhone`='$agencyworkerPhoneNum' WHERE `ResidentId`='$ResidentId'"))
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