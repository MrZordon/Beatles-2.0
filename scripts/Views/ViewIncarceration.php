<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;

	$incarcerationTable = "SELECT 
										ResidentID,
										Incarcerated,
										IncarcerationLoc,
										IncarceratedStartDate,
										IncarceratedEndDate,
										IncarcerationCharges,
										Institutionalized,
										NameOfInstitution,
										InstituteStartDate,
										InstituteReleaseDate,
										ReasonForInstitutionalization 
										FROM Incarceration
										WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $incarcerationTable ) )
	{
		echo "Prepare incarceration failed";
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
		echo "View Incarceration Failed";
	}
	
	$row = $stmt->fetch();
	
	 echo $row['ResidentID'] . $newline;
	 echo $row['Incarcerated'] . $newline;
	 echo $row['IncarcerationLoc'] . $newline;
	 echo $row['IncarceratedStartDate'] . $newline;
	 echo $row['IncarceratedEndDate'] . $newline;
	 echo $row['IncarcerationCharges'] . $newline;
	 echo $row['Institutionalized'] . $newline;
	 echo $row['NameOfInstitution'] . $newline;
	 echo $row['InstituteStartDate'] . $newline;
	 echo $row['InstituteReleaseDate'] . $newline;
	 echo $row['ReasonForInstitutionalization'] . $newline;
?>
