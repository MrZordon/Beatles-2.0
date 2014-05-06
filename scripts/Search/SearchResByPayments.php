<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';
	
	$title = "By Payments";
	
	$overDue = "Y";
	$oweCompanies = 500;

	$whereClause = "JOIN PersonalStatus ON GenericInfo.ResidentID = PersonalStatus.ResidentID
								WHERE 
								PersonalStatus.OverDue = :overDue AND 
								PersonalStatus.CompaniesOwed = :oweCompanies ";
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':overDue', $overDue, 2) )
	{
		echo "Binding overDue failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':oweCompanies', $oweCompanies, 2) )
	{
		echo "Binding oweCompanies failed." . $newline;
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
