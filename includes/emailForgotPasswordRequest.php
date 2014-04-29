<!-- Email functionality to email the system admin a reuqest to receieve their password for their account with Exodus application -->
<?php

	//Define Username and emailAddress While using real escape string to help protect against msql injection
	$userName=$_POST['userName'];
	$emailAddress=$_POST['emailAddress'];
	
		//if any fields are empty, redirect to error page and do not execute the query
	 if ( empty($_POST["userName"]) || empty($_POST["emailAddress"]) ) 
	{
	   echo '<script>alert("Please complete all required fields to request your password\n");</script>';
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=javascript:history.go(-1)">';    
  	  exit;  
    }
 else 
{
	
	//real escape the credentials
	$userName = mysql_real_escape_string($userName);
	$emailAddress = mysql_real_escape_string($emailAddress);
	
			//Setup values to be used to send email				
			$from = "From: $emailAddress\n";
			$to = "chimo@comcast.net, $emailAddress";
			$subject="Request to receive account password";
			$body = "I forgot my password and would like to receieve an email with my Exodus account password.\n\n Email Address:$emailAddress\n User Name: $userName\n";
			$message = wordwrap($body, 70);
			
			//send the email with all the parameters set above
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
						<h4 class="hide-for-small">Request to receive your password sent!<hr/></h4>
             		  	<h4 class="show-for-small">Request to receive your password sent!<hr/></h4>
									<h5 class="subheader">Thank you for requesting your password for your Exodus account! Check your inbox of the email address you provided for an email with your credentials from the System Administrator.</h5>
									<h5 class="subheader">Please follow the link provided to return to the Exodus login page.</h5>
									<a href="/Exodus" class="small button" id="home">Login to Exodus</a>
						</div>
          </div>
</div></center>
</body>
</html>
		<?php	include ('footer.php'); }
	
		else //if sending fails, throw exception and display error page
		{
			header("Location: /Exodus/includes/Exodus_error.php");
		}
		
}
	
?>