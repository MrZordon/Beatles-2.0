
<?php

	$host="localhost"; //host name
	$username="root";//mysql username
	$password="";//mysql password
	$databaseName="Exodus";//database name

	//connect to server and select database
	$con = mysql_connect("localhost","root","");
		if (!$con)
		{
			die('Could not connect to Exodus Database: ' . mysql_error());
		}

		mysql_select_db("Exodus", $con);

?>