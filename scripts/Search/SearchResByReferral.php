<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';
	
	$title = "By Referral";
	
	$refPerson= "Python Mo";
	 $refAgency="We Care"; 
	 $refPhone= "4565455896";

	$whereClause = "WHERE 
								GenericInfo.RefPerson = :refPerson AND 
								GenericInfo.RefAgency = :refAgency AND 
								GenericInfo.RefPhone = :refPhone " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':refPerson', $refPerson, 2 ) )
	{
		echo "Binding refPerson failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':refAgency', $refAgency, 2 ) )
	{
		echo "Binding refAgency failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':refPhone', $refPhone, 2 ) )
	{
		echo "Binding refPhone failed." . $newline;
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
