
    <?php
    //include db configuration file
    include_once("includes/connect_ExodusDB.inc");
	session_start();
    
	// This is the date format
	// 2014-04-01
    if(isset($_POST["first_NameGeneric"]) && strlen($_POST["first_NameGeneric"])>0)
    {	
    	$firstName = filter_var($_POST["first_NameGeneric"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
     	$middleName = filter_var($_POST["middleInitial_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$lastName = filter_var($_POST["last_NameGeneric"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$gender = filter_var($_POST["gender_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$ssn = filter_var($_POST["ssn_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$cellPhone = filter_var($_POST["cellPhone_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$religion = filter_var($_POST["religion_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$residentType = filter_var($_POST["residentType_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$streetAddress = filter_var($_POST["streetAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$cityAddress = filter_var($_POST["townAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$stateAddress = filter_var($_POST["stateAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$zipAddress = filter_var($_POST["zipAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$referralName = filter_var($_POST["referralName_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$referralAgency = filter_var($_POST["referralAgency_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$referralPhone = filter_var($_POST["referralPhoneNum_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$nameKin = filter_var($_POST["nameKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$relationshipKin = filter_var($_POST["relationship_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$phoneNumKin = filter_var($_POST["phoneNumKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$streetKin = filter_var($_POST["streetAddressKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$cityKin = filter_var($_POST["cityKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$stateKin = filter_var($_POST["stateKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$zipKin = filter_var($_POST["zipKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$comments = filter_var($_POST["comments_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$language = filter_var($_POST["language_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$currentResident = filter_var($_POST["currentResident_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$year = filter_var($_POST["yearDOB_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$month= filter_var($_POST["monthDOB_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$day = filter_var($_POST["dayDOB_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		
		$DOBGeneric= $year . "-" . $month . "-" . $day;
		$DateAdded = date("Y-m-d");
		
	}

	
	
	// If there are no results with the same SSN that means we are doing an Insert
	// if there is a result with the same SSN we are going to do an update
	
	$result= mysql_query("SELECT `ResidentID` FROM `genericinfo` WHERE `SSN` =$ssn");
	//Count the number of rows returned in the result set and save as a variable
	$count = mysql_num_rows($result);
			
	while($row = mysql_fetch_array($result)) 
    {
		$ResidentId = $row[ResidentID];
    }
	
	$_SESSION['ResidentID'] = $ResidentId;

	if($count == 0) 
	{
		if(mysql_query("INSERT INTO genericinfo (FirstName,MiddleInitial,LastName,Gender,SSN,PhoneNum,Religion,ResidentType,Street,CityTown,State,Zip,RefPerson,RefAgency,RefPhone,NextKin,Kinship,KinStreet,KinCityTown,KinState,KinPhone,KinZip,Comments,Active,Language,DateAdded,DOB) VALUES('$firstName','$middleName','$lastName','$gender','$ssn','$cellPhone','$religion','$residentType','$streetAddress','$cityAddress','$stateAddress','$zipAddress','$referralName','$referralAgency','$referralPhone','$nameKin','$relationshipKin','$streetKin','$cityKin','$stateKin','$phoneNumKin','$zipKin','$comments','$currentResident','$language','$DateAdded','$DOBGeneric')",$con))
	    {
	    	$data = "insert";
		   	file_put_contents ("test.txt" , $data );
			
<<<<<<< HEAD
			$result= mysql_query("SELECT `ResidentID` FROM `genericinfo` WHERE `SSN` =$ssn");
			
			
			while($row = mysql_fetch_array($result)) 
			{
				$ResidentId = $row[ResidentID];
				$_SESSION['ResidentID'] = $ResidentId;
			}
			
			$data = "ResID" . $_SESSION['ResidentID']. "ResID2:" . $ResidentId;
			file_put_contents ("test.txt" , $data );	
=======
			$result= mysql_query("SELECT ResidentID FROM GenericInfo WHERE SSN ='$ssn' ");
			$row = mysql_fetch_array($result);
			
			$_SESSION['ResidentID'] = $row['ResidentID'];
>>>>>>> cf7b39fd277935eb47c500e8134b992a5253195a
	    }
		else
		{
	  		$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );	
		}
	}
	else 
	{
		
		if(mysql_query("UPDATE genericinfo SET `ResidentType`='$residentType',`Active`='$currentResident',`FirstName`='$firstName',`MiddleInitial`='$middleName',`LastName`='$lastName',`Gender`='$gender',`SSN`='$ssn',`DOB`='$DOBGeneric',`Language`='$language',`Religion`='$religion',`Street`='$streetAddress',`CityTown`='$cityAddress',`State`='$stateAddress',`Zip`='$zipAddress',`PhoneNum`='$cellPhone',`RefPerson`='$referralName',`RefAgency`='$referralAgency',`RefPhone`='$referralPhone',`NextKin`='$nameKin',`Kinship`='$relationshipKin',`KinStreet`='$streetKin',`KinCityTown`='$cityKin',`KinState`='$stateKin',`KinZip`='$zipKin',`KinPhone`='$phoneNumKin',`Comments`='$comments' WHERE `SSN`='$ssn'"))
	    {
	    	
	    }
		else
		{
			
	  		
		}
	}
	
    
    ?>
