<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;

	$personalTable = "SELECT
							ResidentID,
							CounselorRequest,
							TermAgree,
							SignedBy,
							PaidRent,
							LeaseAbility,
							HousingGoals,
							OweCompanies,
							Concerns,
							ExplainConcerns 
							FROM PersonalStatus
							WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $personalTable ) )
	{
		echo "Prepare PersonalStatus failed";
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
		echo "View PersonalStatus failed. " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();
	
	 echo $row['ResidentID'] . $newline;
	 echo $row['CounselorRequest'] . $newline;
	 echo $row['TermAgree'] . $newline;
	 echo $row['SignedBy'] . $newline;
	 echo $row['PaidRent'] . $newline;
	 echo $row['LeaseAbility'] . $newline;
	 echo $row['HousingGoals'] . $newline;
	 echo $row['OweCompanies'] . $newline;
	 echo $row['Concerns'] . $newline;
	 echo $row['ExplainConcerns'] . $newline;
?>
