<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$vehicleTable = "SELECT 
								ResidentID	,
								NameOnRegistration,
								LicenseNum,
								State,
								Make,
								Color,
								Model,
								OLN 
								FROM Vehicle
								WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $vehicleTable ) )
	{
		echo "Prepare vehicle failed";
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
		echo "View Vehicle failed. " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();
	
	 echo $row['ResidentID'] . $newline;
	 echo $row['NameOnRegistration'] . $newline;
	 echo $row['LicenseNum'] . $newline;
	 echo $row['State'] . $newline;
	 echo $row['Make'] . $newline;
	 echo $row['Color'] . $newline;
	 echo $row['Model'] . $newline;
	 echo $row['OLN'] . $newline;
?>
