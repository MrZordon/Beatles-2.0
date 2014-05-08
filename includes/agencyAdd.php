  <?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
    session_start();
	
	$agencyName = filter_var($_POST["agency_Name"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$agencymonthlyAmount = filter_var($_POST["agency_monthlyAmount"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyName2 = filter_var($_POST["agency_Name2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencymonthlyAmount2 = filter_var($_POST["agency_monthlyAmount2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencytotalIncome = filter_var($_POST["agency_totalIncome"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyrateOfPay = filter_var($_POST["agency_rateOfPay"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyworkerName = filter_var($_POST["agency_workerName"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyworkerCity = filter_var($_POST["agency_workerCity"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyworkerPhoneNum = filter_var($_POST["agency_workerPhoneNum"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `membership` WHERE `ResidentID` = $ResidentId");
	
	// If there are no results with the same ResidentID that means we are doing an Insert
	// if there is a result with the same ResidentID we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO `membership`(`ResidentID`,`AgencyName1`,`Amount1`,`AgencyName2`,`Amount2`,`TotalIncome`,`RateOfPay`,`WorkerName`,`WorkerCity`,`WorkerPhone`) VALUES('$ResidentId','$agencyName','$agencymonthlyAmount','$agencyName2','$agencymonthlyAmount2','$agencytotalIncome','$agencyrateOfPay','$agencyworkerName','$agencyworkerCity','$agencyworkerPhoneNum')",$con))
		{
	    	
	    }
		else
		{
			//FUTURE: Error Checking can go here
	  		$data = "Error Inserting Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
			
		}
	}
	else 
	{
		
		if(mysql_query("UPDATE `membership` SET `AgencyName1`='$agencyName',`Amount1`= '$agencymonthlyAmount',`AgencyName2`='$agencyName2',`Amount2`='$agencymonthlyAmount2',`TotalIncome`='$agencyrateOfPay',`RateOfPay`='$agencyrateOfPay',`WorkerName`='$agencyworkerName',`WorkerCity`='$agencyworkerCity',`WorkerPhone`='$agencyworkerPhoneNum' WHERE `ResidentId`='$ResidentId'"))
	    {
	    	
	    }
		else
		{
			//FUTURE: Error Checking can go here
	  		$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			file_put_contents ("test.txt" , $data );
		}
	}
	
    
    ?>