<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';

	$title = "By Type";
	
	$residentType = "CP";
	
	$whereClause = "WHERE 
					GenericInfo.ResidentType = :residentType " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':residentType', $residentType, 2 ) )
	{
		echo "Binding residentType failed." . $newline;
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
