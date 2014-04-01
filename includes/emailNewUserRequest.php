<!-- Email functionality to email the system admin a reuqest to register as a user with Exodus application -->
<?php

		//Retreive values using POST
			$userName = $_POST['userName'];
			$password = $_POST['password'];
			$userType = $_POST['userType'];
			$emailAddress = $_POST['emailAddress'];

		//Setup values to be used to send email				
			$from = 'From: Fabled Web Design';
			$to = 'chimo@comcast.net';
			$subject='Request to Register As New Exodus User';
			$body = " I would like to register as a $userType user with Exodus.\n Email Address:$emailAddress\n User Name: $userName\n Password: $password\n ";

			//if the form was submitted, attempt to send the email, and let the user know the status of the email
							if($_POST['submit']) 
							{
								if(mail($to, $subject, $from)) 
								{
									echo '<p>Thank you for your request!';
								}
							else 
							{
								echo '<p>Something went wrong, go back and try again!</p>';
							}
							}
?>