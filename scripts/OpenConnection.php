<?php
	//Connection Variables
	$server = "localhost";
	$user =$_SESSION['user'];
	$password = $_SESSION['password'];

	//Database to be created and used
	$database = 'Exo';
	$makeDatabase = "CREATE DATABASE IF NOT EXISTS " . $database;
	$useDatabase = "USE " . $database;
	
	//Establish a connection to the server
	$con = new mysqli ('localhost', 'root', '');
	
	//Check connection 
	if (mysqli_connect_errno()) 
	{
		printf ("Connect failed: %s\n", mysqli_connect_error());
		exit ();
	}
	
	//Strings
	$newLine = "<br>";
	
	//Create Database
	if ( !$con->query( $makeDatabase) )
	{
		echo "Failed to create " . $database . $newLine;
		exit ();
	}
	else
	{
		echo "Created " . $database  . "!" . $newLine;
		echo "Or it already existed..." . $newLine;
	}
	
	//Switch to a PDO connection so we can do prepared statements and such
	$con = new PDO ('mysql:host=localhost; dbname=Exodus; charset=utf8', 'root', '');
	$con->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$con->setAttribute (PDO::ATTR_EMULATE_PREPARES, false);
	
	/*Use Database
	if ( !$con->query( $useDatabase) )
	{
		echo "Can't use " . $database . $newLine . $newLine . "Exiting";
		exit;
	}
	else
	{
		echo "Using the DB -- Already Existed!" . $newLine;
	}*/
?>
