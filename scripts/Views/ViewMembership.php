<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$membershipTable = "SELECT 
										ResidentID,
										AgencyName1,
										Amount1,
										AgencyName2,
										Amount2,
										TotalIncome,
										RateOfPay,
										WorkerName,
										WorkerCity,
										WorkerPhone 
										From Membership
										WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $membershipTable ) )
	{
		echo "Prepare membership failed.";
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
		echo "View Membership failed. " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();

	echo $row['ResidentID'] . $newline;
	 echo $row['AgencyName1'] . $newline;
	 echo $row['Amount1'] . $newline;
	 echo $row['AgencyName2'] . $newline;
	 echo $row['Amount2'] . $newline;
	 echo $row['TotalIncome'] . $newline;
	 echo $row['RateOfPay'] . $newline;
	 echo $row['WorkerName'] . $newline;
	 echo $row['WorkerCity'] . $newline;
	 echo $row['WorkerPhone'] . $newline;
?>
