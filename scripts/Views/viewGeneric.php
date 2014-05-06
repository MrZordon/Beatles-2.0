<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;

	$genericTable = "SELECT 
							ResidentType,
							Active,
							ResidentID,
							DateAdded,
							FirstName,
							MiddleInitial,
							LastName,
							Gender,
							SSN,
							DOB,
							Language,
							Religion,
							Street,
							CityTown,
							State,
							Zip,
							PhoneNum,
							RefPerson,
							RefAgency,
							RefPhone,
							NextKin,
							Kinship,
							KinStreet,
							KinCityTown,
							KinState,
							KinZip,
							KinPhone
							FROM GenericInfo
							WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $genericTable ) )
	{
		echo "Prepare failed";
	}
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':residentID', $residentID, 1 ) )
	{
		echo "Binding residentID failed.";
	}

	//Execute the insert
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "View Generic failed. " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();
	
	 echo $row['ResidentType'] . $newline;
	 echo $row['Active'] . $newline;
	 echo $row['ResidentID'] . $newline;
	 echo $row['DateAdded'] . $newline;
	 echo $row['FirstName'] . $newline;
	 echo $row['MiddleInitial'] . $newline;
	 echo $row['LastName'] . $newline;
	 echo $row['Gender'] . $newline;
	 echo $row['SSN'] . $newline;
	 echo $row['DOB'] . $newline;
	 echo $row['Language'] . $newline;
	 echo $row['Religion'] . $newline;
	 echo $row['Street'] . $newline;
	 echo $row['CityTown'] . $newline;
	 echo $row['State'] . $newline;
	 echo $row['Zip'] . $newline;
	 echo $row['PhoneNum'] . $newline;
	 echo $row['RefPerson'] . $newline;
	 echo $row['RefAgency'] . $newline;
	 echo $row['RefPhone'] . $newline;
	 echo $row['NextKin'] . $newline;
	 echo $row['Kinship'] . $newline;
	 echo $row['KinStreet'] . $newline;
	 echo $row['KinCityTown'] . $newline;
	 echo $row['KinState'] . $newline;
	 echo $row['KinZip'] . $newline;
	 echo $row['KinPhone'] . $newline;
?>
