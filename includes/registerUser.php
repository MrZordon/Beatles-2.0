<!-- This php include file injects a modal to prompt a new user to register with the Exodus application.
	
		The new user will be asked to enter the following:
				- A unique username
				- A unique and secure password
				- An email address that they can be reached at / associated with their account
		The user will click the "submit" button to request to be a new user on Exodus. The user must be approved by the 
		System Administrator, who will receieve an email with the request. The sys admin must log on to Exodus and approve
		the request, which will send a notifcation email to the user, who can now use their new username and password.
-->

		<div id="RegisterNewUserModal" class="reveal-modal" data-reveal>
			<h2>Register as a New User</h2>
			<hr/>
			<!-- Start form to register a new user with Exodus -->
			<form action="includes/newUserRequest.php"  method="post">
				<p> *Required </p>
				
					<div class="row">
								<div class="large-6 columns"> 
									<label>*New User Name: <input type="text" name="userName"  /> </label> 
								</div> 
								<div class="large-6 columns"> 
									<label>*Email Address: <input type="email" name="emailAddress"  placeholder="email@domain.com" /> </label> 
								</div> 
					</div>
					<div class="row">
						<div class="large-4 columns"> 
							<label>*Select a user type:</label> 
										<select name="userType">
											<option>-- Select --</option>
											<option value="LH">Lazarus House</option> 
											<option value="CP">Capernaum Place</option> 
										</select>
						</div> 
					</div>
					<div class="row">
								<div class="large-6 columns"> 
									<label>*New Password: <input type="password" name="password" placeholder="password" /> </label> 
								</div> 
						</div>
						<div class="right">
							<input type="submit" name="submit" class="button" name="Submit Request">
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>