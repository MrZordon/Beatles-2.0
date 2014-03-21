<!-- This php include file injects a modal to prompt a new user to register with the Exodus application.
	
		The new user will be asked to enter the following:
				- A unique username
				- A unique and secure password (must be more than 8 chars long)
				- An email address that they can be reached at / associated with their account
		The user will click the "submit" button to request to be a new user on Exodus. The user must be approved by the 
		System Administrator, who will receieve an email with the request. The sys admin must log on to Exodus and approve
		the request, which will send a notifcation email to the user, who can now use their new username and password.
-->
<?php

echo'
		<div id="RegisterNewUserModal" class="reveal-modal" data-reveal>
			<h2>Register as a New User</h2>
			<hr/>
			<!-- Start form to register a new user with Exodus -->
			<form>
				<p> *Required </p>
				
					<div class="row">
								<div class="large-6 columns"> 
									<label>*New User Name: <input type="text" id="userName"  /> </label> 
								</div> 
								<div class="large-6 columns"> 
									<label>*Email Address: <input type="text" id="userName"  placeholder="email@domain.com" /> </label> 
								</div> 
					</div>
					<div class="row">
								<div class="large-6 columns"> 
									<label>*New Password: <input type="password" id="password" placeholder="At least 8 characters in length" /> </label> 
								</div> 
								<div class="large-6 columns"> 
									<label>*Confirm New Password: <input type="password" id="confirmPassword" placeholder="At least 8 characters in length" /> </label> 
								</div> 
						</div>
						<div class="right">
							<p><a href="#" data-reveal-id="submitRegisterNewUserRequest" class="button">Submit Request</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>