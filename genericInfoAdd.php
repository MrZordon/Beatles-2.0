
    <?php
    //include db configuration file
    include_once("includes/connect_ExodusDB.inc");
    
	// This is the date format
	// 2014-04-01
    if(isset($_POST["first_NameGeneric"]) && strlen($_POST["first_NameGeneric"])>0)
    {
    	echo'hello';	
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
		$language = filter_var($_POST["comments_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$currentResident = filter_var($_POST["comments_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	}

	echo $ssn;
	$sql="SELECT * FROM `genericinfo` WHERE `SSN` = '$ssn'";
	
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
		if(mysql_query("INSERT INTO genericinfo (FirstName,MiddleInitial,LastName,Gender,SSN,PhoneNum,Religion,ResidentType,Street,CityTown,State,Zip,RefPerson,RefAgency,RefPhone,NextKin,Kinship,KinStreet,KinCityTown,KinState,KinPhone,KinZip,Comments,Active,Language) VALUES('$firstName','$middleName','$lastName','$gender','$ssn','$cellPhone','$religion','$residentType','$streetAddress','$cityAddress','$stateAddress','$zipAddress','$referralName','$referralAgency','$referralPhone','$nameKin','$relationshipKin','$phoneNumKin','$streetKin','$cityKin','$stateKin','$zipKin','$comments','$currentResident','$language')",$con))
	    {
		   
	    }
		else
		{
	  		echo "Error Adding Information: " . mysql_error();	
		}
	}
	else 
	{		
		if(mysql_query("UPDATE genericinfo SET `ResidentType`='$residentType',`Active`='$currentResident',`ResidentID`='$residentType',`DateAdded`='NULL',`FirstName`='$firstName',`MiddleInitial`='$middleName',`LastName`='$lastName',`Gender`='$gender',`SSN`='$ssn',`DOB`='NULL',`Age`='NULL',`Language`='$language',`Religion`='$religion',`Street`='$streetAddress',`CityTown`='$cityAddress',`State`='$stateAddress',`Zip`='zipAddress',`PhoneNum`='$cellPhone',`RefPerson`='$referralName',`RefAgency`='$referralAgency',`RefPhone`='$referralPhone',`NextKin`='$nameKin',`Kinship`='$relationshipKin',`KinStreet`='$streetKin',`KinCityTown`='$cityKin',`KinState`='$stateKin',`KinZip`='$zipKin',`KinPhone`='$phoneNumKin',`Comments`='$comments'"))
	    {
		   
	    }
		else
		{
	  		echo "Error Adding Information: " . mysql_error();	
		}
	}
	
    
    ?>