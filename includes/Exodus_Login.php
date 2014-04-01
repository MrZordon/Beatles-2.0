<?php
	//open buffer for php
	ob_start();
	
	// Inialize session
	session_start();
	
	//include sessions script to check session has started
	include('Exodus_SessionStart.php');

	//include the script to connect to the DB
	include('connect_ExodusDB.inc');

	//Define Username and Password While using real escape string to help protect against msql injection
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	
	//real escape the credentials
	$userName = mysql_real_escape_string($userName);
	$password = mysql_real_escape_string($password);

	//sql query to check the username and password in the DB
	$sql="SELECT * FROM Users WHERE UserName='$userName' AND Password='$password' ";
	
	//input the sql string into a query function and save the results to a variable
	$result=mysql_query($sql);
	
	//throw exception is the query cant run
	if(!$result) die ('Unable to run login query:'.mysql_error());
	
	//Count the number of rows returned in the resut set and save as a variable
	$count=mysql_num_rows($result);
	
	//if only one record matching the userName and password is found, and the security code matched the session, login success and session initiated
	if($count==1) 
	{
			//set the username as a session variable
			$_SESSION['userName'] = $userName;
		
			// set the time for the session to expire 30 minutes after user logs in
			$expire=time()+1800;
		
			//set cookie to use the expire time for the userName logged in with
			setcookie("user", $userName , $expire);
			
			//sql query to update that the user is currently logged on to the system
			$login_sql="UPDATE Users SET CurrentlyLoggedOn='Y', LastLoggedOn=CURDATE() WHERE UserName='$userName' AND Password='$password' ";
	
			//input the sql string into a query function and save the results to a variable
			$result2=mysql_query($login_sql);
	
			// if query doesnt work throw exception
			if(!$result2) die ('Unable to run login query:'.mysql_error());
			
			//sql query to see what type of user it is, and redirect to correct homepage
			$userType_sql = "SELECT 'userType' FROM Users WHERE UserName='$userName' AND Password='$password' ";
			
			//input the sql string into a query function and save the results to a variable
			$result3=mysql_query($userType_sql);
			// if query doesnt work throw exception
			if(!$result3) die ('Unable to run login query:'.mysql_error());
			
			//extract the userType from the results set returned
			$row = mysql_fetch_row($result3);
			echo $row[0];
			echo $row[1];
			echo $row[2];
			
							// redirect if system administrator	
							if($row[0] = 'SA')
							{
								header("Location: /Exodus/Exodus_Admin_home.php");
							}
							else if($row[0] = 'LH') //redirect if lazarus house user
							{
								header("Location: /Exodus/Exodus_LH_home.php");
							}
							else if($row[0] = 'CP') //redirect if capernaum place user
							{
								header("Location: /Exodus/Exodus_CP_home.php");
							}
	}
	else { 
	//show an error page
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
						<h4 class="hide-for-small">Exodus Login Error!<hr/></h4>
             		  	<h4 class="show-for-small">Exodus Login Error!<hr/></h4>
									<h5 class="subheader">It appears that your credentials do not match up with our records!</h5>
									<h5 class="subheader">You will not be able to access the full functionality of Exodus without properly logging in.</h5>
									<h5 class="subheader">Please follow the link provided to return to the Exodus login page.</h5>
									<a href="/Exodus" class="small button" id="home">Login to Exodus</a>
						</div>
          </div>
</div></center>
</body>
</html>
<?php } 
			include ('footer.php');
		//flush out the php buffer
		ob_flush();
?>