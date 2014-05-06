<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';

	$title = "By Vehicle";
	
	$nameOnRegistration= "Lucy Loo";
	 $licenseNum= "S123456789";
	 $state= "GA";
	 $make= "VW";
	 $color= "Blue";
	 $model= "Rabbit";
	 $oln = "123456";
	
	$whereClause = "JOIN Vehicle ON GenericInfo.ResidentID = Vehicle.ResidentID
								WHERE 
								Vehicle.NameOnRegistration = :nameOnRegistration AND 
								Vehicle.LicenseNum = :licenseNum AND 
								Vehicle.State = :state AND 
								Vehicle.Make = :make AND 
								Vehicle.Model = :model AND 
								Vehicle.OLN = :oln AND 
								Vehicle.Color = :color " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':nameOnRegistration', $nameOnRegistration, 2 ) )
	{
		echo "Binding nameOnRegistration failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':licenseNum', $licenseNum, 2 ) )
	{
		echo "Binding licenseNum failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':state', $state, 2 ) )
	{
		echo "Binding state failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':make', $make, 2 ) )
	{
		echo "Binding make failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':model', $model, 2 ) )
	{
		echo "Binding model failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':oln', $oln, 2 ) )
	{
		echo "Binding oln failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':color', $color, 2 ) )
	{
		echo "Binding color failed." . $newline;
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
