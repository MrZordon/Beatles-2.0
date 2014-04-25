<?php

// Exodus_logout.php - this file handles the logging out of users from Exodus. This php script will submit a query to the DB to changed the user's status of logged in from Y to N.
// It also will end the session and redirect back to the login page of Exodus.

// We need to make sure the session has been started or else everything below is useless.
session_start();

//include the script to connect to the DB
include('../includes/connect_ExodusDB.inc');

//get the user name from the session variables
$userName = $_SESSION['userName'];

//sql query to check the username in the DB for a user that is currently logged on
$sql="SELECT * FROM Users WHERE UserName='$userName'  AND CurrentlyLoggedOn='Y' ";
	
	//input the sql string into a query function and save the results to a variable
	$result=mysql_query($sql);
	
	if(!$result) die ('Unable to run logout query:'.mysql_error());
	
	//Count the number of rows returned in the resut set and save as a variable
	$count=mysql_num_rows($result);
	
	//if only one record matching the userName and status is found, logout the user and end the session
	if($count==1) 
	{
			//sql query to update that the user is not currently logged on to the system
			$login_sql="UPDATE Users SET CurrentlyLoggedOn='N', LastLoggedOn=CURDATE() WHERE UserName='$userName'";
	
			//input the sql string into a query function and save the results to a variable
			$result2=mysql_query($login_sql);
	
			// if query doesnt work throw exception
			if(!$result2) die ('Unable to run logout query:'.mysql_error());
			
			// If the logout is successful we also need to destroy the session
			session_destroy();
		
			//if success, redirect to home page
			 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=../index.php">';    
  	 		 exit;  
			//header("Location: ../index.php");

	} //if not a successful loggout, throw exception / display error page
	else
	{
		//echo $userName;
		include ('Exodus_error.php');
	}
?>