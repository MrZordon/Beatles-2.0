<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;

	$medicalTable = "SELECT
								ResidentID,
								DocName,
								Street,
								CityTown,
								State,
								Zip,
								Phone,
								Medication,
								Med1,
								Dose1,
								When1,
								Med2,
								Dose2,
								When2,
								Allergies,
								Seizures,
								Epilepsy,
								MentalHealthClient,
								MentalHealthDoc 
								FROM Medical
								WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $medicalTable ) )
	{
		echo "Prepare medical failed";
	}
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':residentID', $residentID, 1 ) )
	{
		echo "Binding residentID failed.";
	}
	
	//Execute the select
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "View Medical failed";
	}
	
	$row = $stmt->fetch();
	
	 echo $row['ResidentID'] . $newline;
	 echo $row['DocName'] . $newline;
	 echo $row['Street'] . $newline;
	 echo $row['CityTown'] . $newline;
	 echo $row['State'] . $newline;
	 echo $row['Zip'] . $newline;
	 echo $row['Phone'] . $newline;
	 echo $row['Medication'] . $newline;
	 echo $row['Med1'] . $newline;
	 echo $row['Dose1'] . $newline;
	 echo $row['When1'] . $newline;
	 echo $row['Med2'] . $newline;
	 echo $row['Dose2'] . $newline;
	 echo $row['When2'] . $newline;
	 echo $row['Allergies'] . $newline;
	 echo $row['Seizures'] . $newline;
	 echo $row['Epilepsy'] . $newline;
	 echo $row['MentalHealthClient'] . $newline;
	 echo $row['MentalHealthDoc'] . $newline;
?>
