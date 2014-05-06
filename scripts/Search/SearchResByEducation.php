<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';
	
	$title = "By Education";
	
	$educationMax = "High";
	$furtherEd = "Y";

	$whereClause = "JOIN Education ON GenericInfo.ResidentID = Education.ResidentID
								WHERE 
								Education.EducationMax = :educationMax AND
								Education.FurtherEd = :furtherEd " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':educationMax', $educationMax, 2 ) )
	{
		echo "Binding educationMax failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':furtherEd', $furtherEd, 2 ) )
	{
		echo "Binding furtherEd failed." . $newline;
	}
	
	//Execute the search
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "Executing Search: " . $title . "Failed!" . $newline . 
				$exception->getMessage() . $newline;
	}
	
	include getcwd() . '/../View/ViewSearchResults.php';
	
	include getcwd() . '/../CloseConnection.php';
?>
