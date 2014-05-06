<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';

	$title = "By Former Residence";
	
	$street= "12 Fairy Lane";
	 $cityTown= "Christmas";
	 $state= "MA";
	 $zip= "00000";
	
	$whereClause = "WHERE 
								Street = :street AND 
								CityTown = :cityTown AND 
								State = :state AND 
								Zip = :zip " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':street', $street, 2 ) )
	{
		echo "Binding street failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':cityTown', $cityTown, 2 ) )
	{
		echo "Binding cityTown failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':state', $state, 2 ) )
	{
		echo "Binding state failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':zip', $zip, 2 ) )
	{
		echo "Binding zip failed." . $newline;
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
