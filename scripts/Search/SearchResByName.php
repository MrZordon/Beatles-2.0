<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';

	$title = "By Name";
	
	$firstName= "MooMoo"; 
	 $middleInitial= "K";
	 $lastName= "Cow";
	
	$whereClause = "WHERE 
								FirstName = :firstName AND 
								MiddleInitial = :middleInitial AND 
								LastName = :lastName " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':firstName', $firstName, 2 ) )
	{
		echo "Binding firstName failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':middleInitial', $middleInitial, 2 ) )
	{
		echo "Binding middleInitial failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':lastName', $lastName, 2 ) )
	{
		echo "Binding lastName failed." . $newline;
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
