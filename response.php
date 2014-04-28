
    <?php
    //include db configuration file
    //include_once("connect_ExodusDB.inc");
    include_once("includes/connect_ExodusDB.inc");
    
	// This is the date format
	// 2014-04-01
	
    if(isset($_POST["first_NameGeneric"]) && strlen($_POST["first_NameGeneric"])>0)
    {	
    	$contentToSave = filter_var($_POST["first_NameGeneric"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
     	$contentToSave2 = filter_var($_POST["middleInitial_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave3 = filter_var($_POST["last_NameGeneric"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave4 = filter_var($_POST["gender_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave5 = filter_var($_POST["ssn_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave6 = filter_var($_POST["cellPhone_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave7 = filter_var($_POST["religion_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave8 = filter_var($_POST["residentType_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave9 = filter_var($_POST["streetAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave10 = filter_var($_POST["townAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave11 = filter_var($_POST["stateAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave12 = filter_var($_POST["zipAddress_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave13 = filter_var($_POST["referralName_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave14 = filter_var($_POST["referralAgency_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave15 = filter_var($_POST["referralPhoneNum_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave16 = filter_var($_POST["nameKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave17 = filter_var($_POST["relationship_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave18 = filter_var($_POST["phoneNumKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave19 = filter_var($_POST["streetAddressKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave20 = filter_var($_POST["cityKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave21 = filter_var($_POST["stateKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave22 = filter_var($_POST["zipKin_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$contentToSave23 = filter_var($_POST["comments_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
	}
	else 
	{
		echo'hello_failed';
	}
    if(mysql_query("INSERT INTO genericinfo (FirstName,MiddleInitial,LastName,Gender,SSN,PhoneNum,Religion,ResidentType,Street,CityTown,State,Zip,RefPerson,RefAgency,RefPhone,NextKin,Kinship,KinStreet,KinCityTown,KinState,KinPhone,KinZip,Comments) VALUES('$contentToSave','$contentToSave2','$contentToSave3','$contentToSave4','$contentToSave5','$contentToSave6','$contentToSave7','$contentToSave8','$contentToSave9','$contentToSave10','$contentToSave11','$contentToSave12','$contentToSave13','$contentToSave14','$contentToSave15','$contentToSave16','$contentToSave17','$contentToSave18','$contentToSave19','$contentToSave20','$contentToSave21','$contentToSave22','$contentToSave23')",$con))
    {
	    echo'hello_if2'; 
    }
	else
	{
  		echo "Error Adding Information: " . mysql_error();	
	}
    ?>