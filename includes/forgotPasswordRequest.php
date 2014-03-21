<!-- This php include file injects a modal to prompt a current user to request a retrieval of their forgotten password.
	
		The current user will be asked to enter the following:
				- Their current username
				- Their current email address associated with their account
		The user will click the "submit" button to request their forgotten password. The user must be approved by the 
		System Administrator, who will receieve an email with the request. The sys admin must log on to Exodus and approve
		the request, which will send a notifcation email to the user containing their password.
-->
<?php

echo'
		<div id="ForgotPasswordModal" class="reveal-modal" data-reveal>
			<h2>Request User\'s Password</h2>
			<hr/>
			<!-- Start form to request a forgotten password -->
			<form>
				<p> *Required </p>
				
					<div class="row">
								<div class="large-6 columns"> 
									<label>*Current User Name: <input type="text" id="userName" /> </label> 
								</div> 
								<div class="large-6 columns"> 
									<label>*Current Email Address: <input type="text" id="emailAddress" placeholder="email@domain.com"/> </label> 
								</div> 
						</div>
						<div class="right">
							<p><a href="#" data-reveal-id="submitForgotPasswordRequest" class="button">Submit Request</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>