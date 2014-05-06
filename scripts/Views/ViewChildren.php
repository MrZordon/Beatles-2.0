<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$childrenTable = "SELECT 
								ResidentID,
								ChildFirstName1,
								ChildLastName1,
								ChildGender1,
								ChildDOB1,
								ChildSSN1,
								ChildCustodyIssues1,
								
								ChildFirstName2,
								ChildLastName2,
								ChildGender2,
								ChildDOB2,
								ChildSSN2,
								ChildCustodyIssues2,
								
								ChildFirstName3,
								ChildLastName3,
								ChildGender3,
								ChildDOB3,
								ChildSSN3,
								ChildCustodyIssues3,
								
								ChildFirstName4,
								ChildLastName4,
								ChildGender4,
								ChildDOB4,
								ChildSSN4,
								ChildCustodyIssues4,
								
								ChildFirstName5,
								ChildLastName5,
								ChildGender5,
								ChildDOB5,
								ChildSSN5,
								ChildCustodyIssues5,
								
								ChildFirstName6,
								ChildLastName6,
								ChildGender6,
								ChildDOB6,
								ChildSSN6,
								ChildCustodyIssues6,
								
								ChildFirstName7,
								ChildLastName7,
								ChildGender7,	
								ChildDOB7,
								ChildSSN7,
								ChildCustodyIssues7,
								
								ChildFirstName8,
								ChildLastName8,
								ChildGender8,
								ChildDOB8,
								ChildSSN8,
								ChildCustodyIssues8 
								
								FROM Children
								WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $childrenTable ) )
	{
		echo "Prepare failed for children.";
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
		echo "View Children failed " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();
	
	echo $row['ResidentID'] . $newline;
	
	echo $row['ChildFirstName1'] . $newline;
	echo $row['ChildLastName1'] . $newline;
	echo $row['ChildGender1'] . $newline;
	echo $row['ChildDOB1'] . $newline;
	echo $row['ChildSSN1'] . $newline;
	echo $row['ChildCustodyIssues1'] . $newline;
	
	echo $row['ChildFirstName2'] . $newline;
	echo $row['ChildLastName2'] . $newline;
	echo $row['ChildGender2'] . $newline;
	echo $row['ChildDOB2'] . $newline;
	echo $row['ChildSSN2'] . $newline;
	echo $row['ChildCustodyIssues2'] . $newline;
	
	echo $row['ChildFirstName3'] . $newline;
	echo $row['ChildLastName3'] . $newline;
	echo $row['ChildGender3'] . $newline;
	echo $row['ChildDOB3'] . $newline;
	echo $row['ChildSSN3'] . $newline;
	echo $row['ChildCustodyIssues3'] . $newline;
	
	echo $row['ChildFirstName4'] . $newline;
	echo $row['ChildLastName4'] . $newline;
	echo $row['ChildGender4'] . $newline;
	echo $row['ChildDOB4'] . $newline;
	echo $row['ChildSSN4'] . $newline;
	echo $row['ChildCustodyIssues4'] . $newline;
	
	echo $row['ChildFirstName5'] . $newline;
	echo $row['ChildLastName5'] . $newline;
	echo $row['ChildGender5'] . $newline;
	echo $row['ChildDOB5'] . $newline;
	echo $row['ChildSSN5'] . $newline;
	echo $row['ChildCustodyIssues5'] . $newline;
	
	echo $row['ChildFirstName6'] . $newline;
	echo $row['ChildLastName6'] . $newline;
	echo $row['ChildGender6'] . $newline;
	echo $row['ChildDOB6'] . $newline;
	echo $row['ChildSSN6'] . $newline;
	echo $row['ChildCustodyIssues6'] . $newline;
	
	echo $row['ChildFirstName7'] . $newline;
	echo $row['ChildLastName7'] . $newline;
	echo $row['ChildGender7'] . $newline;
	echo $row['ChildDOB7'] . $newline;
	echo $row['ChildSSN7'] . $newline;
	echo $row['ChildCustodyIssues7'] . $newline;
	
	echo $row['ChildFirstName8'] . $newline;
	echo $row['ChildLastName8'] . $newline;
	echo $row['ChildGender8'] . $newline;
	echo $row['ChildDOB8'] . $newline;
	echo $row['ChildSSN8'] . $newline;
	echo $row['ChildCustodyIssues8'] . $newline;
?>
