<?php
		include_once("connect_ExodusDB.inc");
		
		$firstName = $_POST["first_NameGeneric"];
     	$middleName = $_POST["middleInitial_Generic"];
		$lastName = $_POST["last_NameGeneric"];
		$ssn = $_POST["ssn_Generic"];
		$cellPhone = $_POST["cellPhone_Generic"];
		$religion = $_POST["religion_Generic"];
		$streetAddress = $_POST["streetAddress_Generic"];
		$cityAddress = $_POST["townAddress_Generic"];
		$stateAddress = $_POST["stateAddress_Generic"];
		$zipAddress = $_POST["zipAddress_Generic"];;
		$referralName = $_POST["referralName_Generic"];
		$referralAgency = $_POST["referralAgency_Generic"];
		$referralPhone = $_POST["referralPhoneNum_Generic"];
		$nameKin = $_POST["nameKin_Generic"];
		$relationshipKin = $_POST["relationship_Generic"];
		$phoneNumKin = $_POST["phoneNumKin_Generic"];
		$streetKin = $_POST["streetAddressKin_Generic"];
		$cityKin = $_POST["cityKin_Generic"];
		$stateKin = $_POST["stateKin_Generic"];
		$zipKin = $_POST["zipKin_Generic"];
		$comments = $_POST["comments_Generic"];
		$language = $_POST["language_Generic"];
		$currentResident = $_POST["currentResident_Generic"];	
		$ResidentId = $_POST["ResidentId"];

		if(mysql_query("UPDATE genericinfo SET `Active`='$currentResident',`FirstName`='$firstName',`MiddleInitial`='$middleName',`LastName`='$lastName',`SSN`='$ssn',`Language`='$language',`Religion`='$religion',`Street`='$streetAddress',`CityTown`='$cityAddress',`State`='$stateAddress',`Zip`='$zipAddress',`PhoneNum`='$cellPhone',`RefPerson`='$referralName',`RefAgency`='$referralAgency',`RefPhone`='$referralPhone',`NextKin`='$nameKin',`Kinship`='$relationshipKin',`KinStreet`='$streetKin',`KinCityTown`='$cityKin',`KinState`='$stateKin',`KinZip`='$zipKin',`KinPhone`='$phoneNumKin',`Comments`='$comments' WHERE `ResidentID`='$ResidentId'"))
	    {
	    	$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
			
	    }
		else
		{
			// FUTURE Error Checking
	  		$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );
			$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
		}
?>