<!-- Email functionality to email the system admin a reuqest to register as a user with Exodus application -->
<?php

	//include the script to connect to the DB
	include('connect_ExodusDB.inc');

	//Define Username and Password While using real escape string to help protect against msql injection
	$firstName=$_POST['firstName'];
	$middlesInitial=$_POST['middleInitial'];
	$lastName=$_POST['lastName'];

	
	//real escape the credentials
	$firstName = mysql_real_escape_string($firstName);
	$middlesInitial = mysql_real_escape_string($middlesInitial);
	$lastName = mysql_real_escape_string($lastName);


	//sql query to check the username and password in the DB
	$sql="SELECT ResidentID, FirstName, MiddleInitial, LastName, ResidentType  FROM GenericInfo WHERE FirstName='$firstName' AND MiddleInitial='$middleInitial' AND LastName='$lastName' ";
	
	//submit the query
	$result=mysql_query($sql);
	
	//throw exception is the query cant run
	if(!$result) die ('Unable to run search query:'.mysql_error());
	
		if($result) 
		{ 
		
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			foreach (array_keys($line) as $col_name)
					{
						
					}
			
			do {
					foreach ($line as $col_value)
						{
							$col_value;
						}
				
				} while($line = mysql_fetch_array($result, MYSQL_ASSOC));
		}
		
}
	else // if not successfull, display an error page
	{
		header("Location: Exodus_error.php");
	}
	
?>