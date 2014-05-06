<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;

	$employmentTable = "SELECT 
										ResidentID,
										CompanyName,
										HoursFrom,
										HoursTo,
										ManagerName,
										ManagerPhoneNum,
										Income,
										RateOfPay,
										CurrentlyEmployed,
										EmploymentGoals 
										FROM Employment 
										WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $employmentTable ) )
	{
		echo "Prepare employee failed";
	}
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':residentID', $residentID, 1 ) )
	{
		echo "Binding residentID failed.";
	}
	
	//Execute the insert
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "View Employment failed. " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();

	echo $row['ResidentID'] . $newline;
	 echo $row['CompanyName'] . $newline;	
	 echo $row['HoursFrom'] . $newline;	 
	 echo $row['HoursTo'] . $newline;	 
	 echo $row['ManagerName'] . $newline;	 
	 echo $row['ManagerPhoneNum'] . $newline;	 
	 echo $row['Income'] . $newline;	 
	 echo $row['RateOfPay'] . $newline;
	 echo $row['CurrentlyEmployed'] . $newline;	 
	 echo $row['EmploymentGoals'] . $newline;
?>
