<?php
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";
	
	$residentID = 1;
	
	$userTable = "SELECT 
							UserName,
							Password,
							LastLoggedOn,
							CurrentlyLoggedOn,
							UserType 
							FROM Users";
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $userTable ) )
	{
		echo "Prepare users failed";
	}
	
	//Execute the insert
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "View Users Failed. " . $exception->getMessage();
	}
	
	$row = $stmt->fetch();
	
	 echo $row['UserName'] . $newline;
	 echo $row['Password '] . $newline;
	 echo $row['LastLoggedOn'] . $newline;
	 echo $row['CurrentlyLoggedOn'] . $newline;
	 echo $row['UserType'] . $newline;
?>
