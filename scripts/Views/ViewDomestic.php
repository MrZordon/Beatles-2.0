<?php
	
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$domesticTable = "SELECT 
									ResidentID,
									CoParentIssues,
									DomViolence,
									SafetyPlan,
									RestrainingOrder,
									PerpName,
									FamilyInfo,
									HomelessHistory,
									HousingHistory,
									Independent 
									FROM DomesticInfo 
									WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $domesticTable ) )
	{
		echo "Prepare domestic failed";
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
		echo "View Domestic failed";
	}

	$row = $stmt->fetch();
	
	echo $row['ResidentID'] . $newline;
	echo $row['CoParentIssues'] . $newline;
	echo $row['DomViolence'] . $newline;
	echo $row['SafetyPlan'] . $newline;
	echo $row['RestrainingOrder'] . $newline;
	echo $row['PerpName'] . $newline;
	echo $row['FamilyInfo'] . $newline;
	echo $row['HomelessHistory'] . $newline;
	echo $row['HousingHistory'] . $newline;
	echo $row['Independent'] . $newline;
?>
