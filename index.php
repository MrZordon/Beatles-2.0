<html>
		<!-- Begin header section-->
		<head>
			<link rel="stylesheet" href="css/foundation.css" />
			<script src="js/vendor/modernizr.js"></script>
		
		</head>
		
		<!-- Begin body of login page -->
		<body>

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
	
						<form>
			
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
												<input type="text" id="userName" placeholder="Username">
											</div>
										</div>
										<div class="row">
											<div class="small-3 columns">
												<label for="password" class="right inline">Password</label>
											</div>
											<div class="small-9 columns">
												<input type="password" id="password" placeholder="Password">
											</div>
										</div>
										<div class="right">
											<a href="Exodus_home.php" class="button">Login</a>
										</div>
								</div>
					</div> 
				<!-- End of the Row -->
			</div>	<!-- End of the Callout Panel -->
			
				<!-- Div to hold the 2 buttons for forgot password and register -->
				<div class="panel callout radius">
				<div class="row">
					<center><div>
							<div class="left" style="padding:0.5em;">
								<a href="#" class = "button">Register</a>
							</div>
					</div></center>
					<div  class="left" style="padding:0.5em;">
						<a href="#" class = "button">Forgot Password</a>
					</div>
				</div>
				</div>
				
			</form>
			<!-- End Form to login -->
 	</div>
</div>
 </div> 

<!-- Begin Footer -->
 <footer class="row">
	<div class="large-12 columns">
			<hr />
		<div class="row">
			<div class="large-6 columns">
					<p>Lazarus House Ministries, Inc. &copy; All Rights Reserved</p>
			</div>
		</div>
	</div>
</footer>

<!-- End body of login page -->
	</body>
</html>