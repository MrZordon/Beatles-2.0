  <?php
    //include db configuration file
    include_once("includes/connect_ExodusDB.inc");
    
	// This is the date format
	// 2014-04-01
	$agencyName = filter_var($_POST["agency_Name"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
 	$agencymonthlyAmount = filter_var($_POST["agency_monthlyAmount"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyName2 = filter_var($_POST["agency_Name2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencymonthlyAmount2 = filter_var($_POST["agency_monthlyAmount2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencytotalIncome = filter_var($_POST["agency_totalIncome"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyrateOfPay = filter_var($_POST["agency_rateOfPay"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyworkerName = filter_var($_POST["agency_workerName"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyworkerCity = filter_var($_POST["agency_workerCity"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	$agencyworkerPhoneNum = filter_var($_POST["agency_workerPhoneNum"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	
	$sql="SELECT ResidentID FROM `genericinfo` WHERE `SSN` = '$ssn'";
	
	//input the sql string into a query function and save the results to a variable
	$result=mysql_query($sql);
	
	//throw exception is the query cant run
	if(!$result) die ('Unable to run login query:'.mysql_error());
	
	//Count the number of rows returned in the result set and save as a variable
	$count = mysql_num_rows($result);
	
	// If there are no results with the same SSN that means we are doing an Insert
	// if there is a result with the same SSN we are going to do an update
	if($count == 0) 
	{
		if(mysql_query("INSERT INTO genericinfo (FirstName,MiddleInitial,LastName,Gender,SSN,PhoneNum,Religion,ResidentType,Street,CityTown,State,Zip,RefPerson,RefAgency,RefPhone,NextKin,Kinship,KinStreet,KinCityTown,KinState,KinPhone,KinZip,Comments,Active,Language,DateAdded,DOB) VALUES('$firstName','$middleName','$lastName','$gender','$ssn','$cellPhone','$religion','$residentType','$streetAddress','$cityAddress','$stateAddress','$zipAddress','$referralName','$referralAgency','$referralPhone','$nameKin','$relationshipKin','$streetKin','$cityKin','$stateKin','$phoneNumKin','$zipKin','$comments','$currentResident','$language','$DateAdded','$DOBGeneric')",$con))
	    {
	    
	    }
		else
		{
			// Future Error Logs
	  		//$data = "Error Inserting Information: " . mysql_error();	
			
		}
	}
	else 
	{
		
		if(mysql_query("UPDATE genericinfo SET `ResidentType`='$residentType',`Active`='$currentResident',`FirstName`='$firstName',`MiddleInitial`='$middleName',`LastName`='$lastName',`Gender`='$gender',`SSN`='$ssn',`DOB`='$DOBGeneric',`Age`='NULL',`Language`='$language',`Religion`='$religion',`Street`='$streetAddress',`CityTown`='$cityAddress',`State`='$stateAddress',`Zip`='zipAddress',`PhoneNum`='$cellPhone',`RefPerson`='$referralName',`RefAgency`='$referralAgency',`RefPhone`='$referralPhone',`NextKin`='$nameKin',`Kinship`='$relationshipKin',`KinStreet`='$streetKin',`KinCityTown`='$cityKin',`KinState`='$stateKin',`KinZip`='$zipKin',`KinPhone`='$phoneNumKin',`Comments`='$comments' WHERE SSN='$ssn'"))
	    {
	    	
	    }
		else
		{
			
		}
	}
	
    
    ?>