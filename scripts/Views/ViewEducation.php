<?php
	
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$educationTable = "SELECT 
									ResidentID,
									EducationMax,
									FurtherEd,
									FurtherPlans 
									FROM Education 
									WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $educationTable ) )
	{
		echo "Prepare education failed";
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
		echo "View Education failed. " . $exception->getMessage();
	}
	
	//$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$row = $stmt->fetch();
	
	echo $row['ResidentID'] . $newline;
	echo $row['EducationMax']. $newline;
	echo $row['FurtherEd'] . $newline;
	echo $row['FurtherPlans'] . $newline;
?>
