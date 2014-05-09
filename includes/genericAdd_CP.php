<?php
    //include db configuration file
    include_once("/connect_ExodusDB.inc");
	session_start();
    

    if(isset($_POST["first_NameGeneric"]) && strlen($_POST["first_NameGeneric"])>0)
    {	
    	$firstName = filter_var($_POST["first_NameGeneric"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
     	$middleName = filter_var($_POST["middleInitial_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$lastName = filter_var($_POST["last_NameGeneric"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$gender = filter_var($_POST["gender_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$ssn = filter_var($_POST["ssn_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$cellPhone = filter_var($_POST["cellPhone_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$residentType = filter_var($_POST["residentType_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$currentResident = 'Y';
		$year = filter_var($_POST["yearDOB_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$month= filter_var($_POST["monthDOB_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$day = filter_var($_POST["dayDOB_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

		$DOBGeneric= strtotime("$year" + "-" + "$month" + "-" + "$day");
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
		if(mysql_query("INSERT INTO GenericInfo (FirstName,MiddleInitial,LastName,Gender,SSN,PhoneNum,ResidentType,Active,DateAdded,DOB) VALUES('$firstName','$middleName','$lastName','$gender','$ssn','$cellPhone','$residentType','$currentResident','$DateAdded','$DOBGeneric')",$con))
	    {
	    	$data = "insert";
		   	file_put_contents ("test.txt" , $data );
			
			$result= mysql_query("SELECT ResidentID FROM GenericInfo WHERE SSN ='$ssn' ");
			$row = mysql_fetch_array($result);
			
			$_SESSION['ResidentID'] = $row['ResidentID'];
			file_put_contents ("test.txt" , $_SESSION['ResidentID'] );
	    }
		else
		{
	  		$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );	
		}
	}
	else 
	{

		if(mysql_query("UPDATE genericinfo SET `ResidentType`='$residentType',`Active`='$currentResident',`FirstName`='$firstName',`MiddleInitial`='$middleName',`LastName`='$lastName',`Gender`='$gender',`SSN`='$ssn',`DOB`='$DOBGeneric',`PhoneNum`='$cellPhone' WHERE `SSN`='$ssn'"))
	    {
			$result= mysql_query("SELECT ResidentID FROM GenericInfo WHERE SSN ='$ssn' ");
			$row = mysql_fetch_array($result);
			
			$_SESSION['ResidentID'] = $row['ResidentID'];
			//file_put_contents ("test.txt" , $_SESSION['ResidentID'] );
	    }
		else
		{
			$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );	
		}
	}

    
    ?>
