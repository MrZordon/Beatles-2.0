<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';
	
	$title = "By Counselor Request";

	$counselorRequest = 'N';
	
	$whereClause = "JOIN PersonalStatus ON PersonalStatus.ResidentID = GenericInfo.ResidentID 
					WHERE 
					PersonalStatus.CounselorRequest = :counselorRequest " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//echo $fullQuery . $newline;
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':counselorRequest', $counselorRequest, 2 ) )
	{
		echo "Binding counselorRequest failed." . $newline;
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
