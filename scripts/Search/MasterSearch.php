<?php
	//Start our session
	session_start();
	
	//Passing around session data for DB connect
	$_SESSION['user'] = 'root';
	$_SESSION['password'] = "";
	
	include getcwd() . '/../OpenConnection.php';
	
	$newline = "<br>";

	$searchQuery = "SELECT 
										GenericInfo.ResidentType,
										GenericInfo.Active,
										GenericInfo.ResidentID,
										GenericInfo.FirstName,
										GenericInfo.MiddleInitial,
										GenericInfo.LastName,
										GenericInfo.Gender,
										GenericInfo.SSN,
										GenericInfo.DOB
										FROM GenericInfo ";					
?>
