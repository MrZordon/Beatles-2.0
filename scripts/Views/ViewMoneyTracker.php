<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$moneyTrackerTable = "SELECT 
											ResidentID,
											CurrentBalance,
											WithdrawOrDeposit,
											PreviousBalance,
											Amount,
											ApprovedBy 
											FROM MoneyTracker
											WHERE ResidentID = :residentID" ;
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $moneyTrackerTable ) )
	{
		echo "Prepare moneyTracker failed";
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
		echo "Insertion into Money Tracker failed. " . $exception->getMessage();
	}									
	
	$row = $stmt->fetch();
	
	echo $row['ResidentID'] . $newline;
	 echo $row['CurrentBalance'] . $newline;
	 echo $row['WithdrawOrDeposit'] . $newline;
	 echo $row['PreviousBalance'] . $newline;
	 echo $row['Amount'] . $newline;
	 echo $row['ApprovedBy'] . $newline;
?>
