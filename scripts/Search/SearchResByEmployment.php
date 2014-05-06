<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';
	
	$title = "By Employment";
	
	$time_input = '11:00 AM';
	$companyName= "Tired Inc";
		//time formattingl
		$date = DateTime::createFromFormat( 'H:i A', $time_input);
		$formatted = $date->format( 'H:i:s');
	 $hoursFrom= $formatted;
	 $hoursTo= $formatted;
	 $managerName= "Meowth Face";
	 $managerPhoneNum= "12345678";
	 $income= "100";
	 $rateOfPay= "20";
	 $currentlyEmployed = "N";
	
	$whereClause = "JOIN Employment ON GenericInfo.ResidentID = Employment.ResidentID 
								WHERE 
								Employment.CurrentlyEmployed = :currentlyEmployed AND
								Employment.CompanyName = :companyName AND 
								Employment.ManagerName = :managerName AND 
								Employment.ManagerPhoneNum = :managerPhoneNum AND 
								Employment.HoursFrom = :hoursFrom AND 
								Employment.HoursTo = :hoursTo AND 
								Employment.RateOfPay = :rateOfPay AND 
								Employment.Income = :income " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':currentlyEmployed', $currentlyEmployed, 2) )
	{
		echo "Binding currentlyEmployed failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':companyName', $companyName, 2 ) )
	{
		echo "Binding companyName failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':managerName', $managerName, 2 ) )
	{
		echo "Binding managerName failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':managerPhoneNum', $managerPhoneNum, 2 ) )
	{
		echo "Binding managerPhoneNum failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':hoursFrom', $hoursFrom, 2 ) )
	{
		echo "Binding hoursFrom failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':hoursTo', $hoursTo, 2 ) )
	{
		echo "Binding hoursTo failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':rateOfPay', $rateOfPay, 1 ) )
	{
		echo "Binding rateOfPay failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':income', $income, 1 ) )
	{
		echo "Binding income failed." . $newline;
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
