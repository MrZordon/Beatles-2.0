<!-- Email functionality to email the system admin a reuqest to register as a user with Exodus application -->
<?php

	//include the script to connect to the DB
	include('connect_ExodusDB.inc');

	//Define Username and Password While using real escape string to help protect against msql injection
	$userName=$_POST['userName'];
	$emailAddress=$_POST['emailAddress'];
	$userType=$_POST['userType'];
	$password=$_POST['password'];
	$currentlyLoggedOn = 'N';
	
	//real escape the credentials
	$userName = mysql_real_escape_string($userName);
	$emailAddress = mysql_real_escape_string($emailAddress);
	$userType = mysql_real_escape_string($userType);
	$password = mysql_real_escape_string($password);

	//sql query to check the username and password in the DB
	$sql="INSERT INTO Users (UserName, Password, LastLoggedOn, CurrentlyLoggedOn, userEmail, userType) VALUES ('$userName', '$password',' ', '$currentlyLoggedOn', '$emailAddress', '$userType')";
	
	//submit the query
	$result=mysql_query($sql);
	
	//throw exception is the query cant run
	if(!$result) die ('Unable to run login query:'.mysql_error());
	
	if($result) 
	{
			//Setup values to be used to send email				
			$from = "From: $emailAddress\n";
			$to = "chimo@comcast.net";
			$subject="Request to Register As New Exodus User";
			$body = "I would like to register as a $userType user with Exodus.\n\n Email Address:$emailAddress\n User Name: $userName\n Password: $password\n ";
			$message = wordwrap($body, 70);
			
			//send and email
			if(mail($to, $subject, $message, $from)) 
			{
			?>
<html>
	<!-- Include header file -->
	
	<link rel="stylesheet" href="/Exodus/css/foundation.css" />
			<script src="/Exodus/js/vendor/modernizr.js"></script>	
	<body>

    	<script src="/Exodus/js/vendor/jquery.js"></script>
    	<script src="/Exodus/js/foundation/foundation.js"></script>
    	<script src="/Exodus/js/foundation/foundation.joyride.js"></script>
		<script src="/Exodus/js/foundation/foundation.reveal.js"></script>
		
    	<script>
    		$(document).foundation();
    	</script>
    	
<center><div class="row">
      <!--  Lazarus House logo on the left-->
          <div class="large-6 columns">
				<img src="/Exodus/img/LazarusHouseLogoBig.jpg"><br>
          </div>
</div>
 <div class="row">
	<div class="large-6 columns">
          	
					<div class="panel">
						<h4 class="hide-for-small">Request to be a New User Sent!<hr/></h4>
             		  	<h4 class="show-for-small">Request to be a New User Sent!<hr/></h4>
									<h5 class="subheader">Thank you for registering as a new user with Exodus! Check your inbox of the email address you supplied for a confirmation email.</h5>
									<h5 class="subheader">Please follow the link provided to return to the Exodus login page.</h5>
									<a href="/Exodus" class="small button" id="home">Login to Exodus</a>
						</div>
          </div>
</div></center>
</body>
</html>
		<?php	}
			else 
			{
				header("Location: /Exodus/");
			}
	}
	else
	{
		header("Location: /Exodus/includes/Exodus_error.php");
	}
	
?>