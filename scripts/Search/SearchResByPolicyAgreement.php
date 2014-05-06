<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';

	$title = "By Policy Agreement";
	
	$termAgree = "Y";
	
	$whereClause = "JOIN PersonalStatus ON GenericInfo.ResidentID = PersonalStatus.ResidentID 
								WHERE 
								PersonalStatus.TermAgree = :termAgree " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':termAgree', $termAgree, 2 ) )
	{
		echo "Binding termAgree failed." . $newline;
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
