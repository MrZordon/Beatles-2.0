<html>
		<!-- Include header file -->
	<?php include('includes/header.php'); ?>
		
		<!-- Begin body of login page -->
		<body>
		
		<!-- Scripts for modals using foundation CSS / JS -->
		<script src="js/vendor/jquery.js"></script>
    	<script src="js/foundation/foundation.js"></script>
    	<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		
    	<script>
    		$(document).foundation();
    	</script>

			  <!-- Header and Nav -->
			  <div class="row">
					<div class="large-3 columns">
					  <h1><img src="img/LHM_logo.png"></h1>
					</div>
					</hr>
			  </div>
			  <!-- End Header and Nav -->
 
			  <!-- First Band (Image) -->
				<div class="row">
 
			  		<div class="large-7 columns">
		
						<!--  Main title of login page-->
						<h3 class="show-for-small">Welcome to Exodus<hr/></h3>
 
							<!-- Welcome panel gives user information how to register an account, login, or retrieve a forgotten password --> 
							<div class="panel">
								<h4 class="hide-for-small">Welcome to Exodus<hr/></h4>
								<h5 class="subheader">Welcome to the Lazarus House Resident Database Application.</h5>
								<h5 class="subheader"> If your are a current user, please enter your username and password to login.</h5>
								<h5 class="subheader">If you are new to the application, please click the "Register" button to create an account with Exodus. </h5>
								<h5 class="subheader">If you forgot your password, click the "Forgot Password" button to submit a request to retrieve your password.</h5>
							</div>
							
					</div> <!-- End div for welcome panel on left side -->
		  
		  			<!-- Start login form to submit userName and password to login to Exodus-->
					<div class="large-5 columns">
	
	<!--  Start form to submit a query to validate the username and password using POST -->
		<form action="includes/Exodus_Login.php" method="post">
				<div class="panel callout radius">
						<h3>Login<hr/></h3>
		
							<div class="row">
				
									<!-- Username and Password labels and input textboxes -->
									<div class="large-10 columns">
												<div class="row">
													<div class="small-3 columns">
														<label for="userName" class="right inline">Username</label>
													</div>
													<div class="small-9 columns">
														<input type="text" id="userName" name="userName" placeholder="Username">
													</div>
												</div>
												<div class="row">
													<div class="small-3 columns">
														<label for="password" class="right inline">Password</label>
													</div>
													<div class="small-9 columns">
														<input type="password" id="password" name="password" placeholder="Password">
													</div>
												</div>
												<div class="right">
													<input type="submit" id="submit" name="submit" class="button">
												</div>
								</div> <!-- end column -->
						</div> <!-- end row -->
				</div>	<!-- End of the Callout Panel -->
			</form>
			<!-- End Form to login -->
			
				<!-- Div to hold the 2 buttons for forgot password and register -->
				<div class="panel callout radius">
				<div class="row">
					<center><div>
							<div class="left" style="padding:0.5em;">
								<a href="#" data-reveal-id="RegisterNewUserModal" onclick="$(document).foundation().foundation('reveal', 'start');" class="button">Register</a>
							</div>
					</div></center>
					<div  class="left" style="padding:0.5em;">
						<a href="#" data-reveal-id="ForgotPasswordModal" onclick="$(document).foundation().foundation('reveal', 'start');" class="button">Forgot Password</a>
					</div>
				</div>
				</div>
				
				<!-- Include register user php file -->
				<?php
						include ('includes/registerUser.php')
					?>
					
					<!-- Include forgot password php file -->
				<?php
						include ('includes/forgotPasswordRequest.php')
					?>
 	</div>
</div>
 </div> 

<!--  Incude footer -->
<?php
include ('includes/footer.php')
?>

<!-- End body of login page -->
	</body>
</html>