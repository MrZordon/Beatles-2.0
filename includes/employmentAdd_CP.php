<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
    session_start();

	$agreementYNEmployment = filter_var($_POST["agreementYN_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$companyNameEmployment = filter_var($_POST["companyName_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$managerNameEmployment = filter_var($_POST["managerName_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$managerPhoneNumEmployment = filter_var($_POST["managerPhoneNum_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$hoursFromEmployment = filter_var($_POST["hoursFrom_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$hoursToEmployment = filter_var($_POST["hoursTo_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$rateOfPayEmployment = filter_var($_POST["rateOfPay_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$incomeEmployment = filter_var($_POST["income_Employment"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

	$ResidentId = $_SESSION['ResidentID'];
	$query = mysql_query("SELECT ResidentID FROM `employment` WHERE `ResidentID` = $ResidentId");

	// If there are no results with the same ResidentId that means we are doing an Insert
	// if there is a result with the same ResidentId we are going to do an update
	if (mysql_num_rows($query) == 0) 
	{
		if(mysql_query("INSERT INTO `employment`(`ResidentID`, `CompanyName`, `HoursFrom`, `HoursTo`, `ManagerName`, `ManagerPhoneNum`, `Income`, `RateOfPay`, `CurrentlyEmployed`) VALUES ('$ResidentId','$companyNameEmployment','$hoursFromEmployment','$hoursToEmployment','$managerNameEmployment','$managerPhoneNumEmployment','$incomeEmployment','$rateOfPayEmployment','$agreementYNEmployment')",$con))
	    {

	    }
		else
		{
			// Future Error Logs
	  		$data = "Error Inserting Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'];
			$new = '                                 CurrentEmployment: ' . $agreementYNEmployment;
			file_put_contents ("test.txt" , $data . $new);
		}
	}
	else 
	{

		if(mysql_query("UPDATE `employment` SET `CompanyName`='$companyNameEmployment',`HoursFrom`='$hoursFromEmployment',`HoursTo`='$hoursToEmployment',`ManagerName`='$managerNameEmployment',`ManagerPhoneNum`='$managerPhoneNumEmployment',`Income`='$incomeEmployment',`RateOfPay`='$rateOfPayEmployment',`CurrentlyEmployed`='$agreementYNEmployment' WHERE `ResidentID` = '$ResidentId'"))
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
