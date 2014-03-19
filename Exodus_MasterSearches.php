<html>
	<head>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body>

    	<script src="js/vendor/jquery.js"></script>
    	<script src="js/foundation/foundation.js"></script>
    	<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		
    	<script>
    		$(document).foundation();
    	</script>

  		<!-- Header and Nav with logo included -->
  		 <div class="row">
					<div class="large-3 columns">
					 	 <h1><img src="img/LHM_logo.png"></h1>
					</div>
			
  		   	<div class="large-9 columns">
					<ul class="right button-group">
						<li><a href="Exodus_home.html" class="button" id="home">Home</a></li>
						<li><a href="#" class="button" id="link2">Link 2</a></li>
						<li><a href="#" class="button" id="link3">Link 3</a></li>
						<li><a href="#" class="button" id="link4">Link 4</a></li>
					</ul>
 		 </div>
 		 </div>
    <!-- End Header and Nav --> 
 
      <!-- List of links to open up search modals for various searches that can be done for resident profiles -->
    <div class="row">
 
 		<!-- Start a panel -->
          <div class="large-12 columns">
            	<div class="radius panel">

							<!-- Prompt the user to select a way to search for residents -->
							<h3 id="searchResidentBar"> Select a Method to Search for a Resident:</h3>
 
 							<!--  List of links to search for a resident formatted to look like buttons stacked-->
								<div class="row collapse">
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByName" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Name</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByResidence" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Former Residence</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByChildren" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Number of Children</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByPolicy" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Policy Agreement</a>
										</div><l/eft>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByEmployment" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Employment</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByIncarceration" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Incarceration / Institutionalization History</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByVehicle" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Vehicle Information</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByType" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Residence Type</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByEducation" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Education</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByWarrants" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Warrants</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByPayments" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Overdue Payments</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByStatus" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Residency Status</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByReferral" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Referral</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByCounselorRequest" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Counselor Request</a>
										</div></left>
								  </div>
          			</div>
         	 </div>
    </div>
    <!-- End Search Links -->
    
    <!-- Start Content of ModalSearchByName -->
    <div id="ModalSearchByName" class="reveal-modal" data-reveal>
		<h2>Search Resident(s) By Name</h2>
		<hr/>
		<!-- Start form for first name, middle initial, or last name-->
		<form>
			<p>**At least one field is required to be completed in order to search for a resident.</p>
					<div class="row"> 
							<div class="large-4 columns"> 
								<label>First Name: <input type="text" placeholder="First Name" /> </label> 
							</div> 
							<div class="large-4 columns"> 
								<label>Last Name: <input type="text" placeholder="Last Name" /> </label> 
							</div>
							<div class="large-4 columns"> 
								<label>Middle Initial:<input type="text" placeholder="Middle Initial" /> </label> 
							</div>
					</div> 
					
					<!-- Submit the data to a query for searching for resident by name -->
					<div class="right">
						<p><a href="#" data-reveal-id="SearchResultsByName" class="button">Search</a></p>
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
		</form>
	</div>	
    
    <!-- End Content of ModalSearchByName -->
    
    <!-- Start Content of ModalSearchByResidence -->
    
    <!-- End Content of ModalSearchByResidence -->
    
    <!-- Start Content of ModalSearchByChildren -->
    
    <!-- End Content of ModalSearchByChildren -->
    
    <!-- Start Content of ModalSearchByPolicy -->
    
    <!-- End Content of ModalSearchByPolicy -->
    
    <!-- Start Content of ModalSearchByEmployment -->
    
    <!-- End Content of ModalSearchByEmployment -->
    
    <!-- Start Content of ModalSearchByIncarceration -->
    
    <!-- End Content of ModalSearchByIncarceration -->
    
    <!-- Start Content of ModalSearchByVehicle -->
    
    <!-- End Content of ModalSearchByVehicle -->
    
    <!-- Start Content of ModalSearchByType -->
    
    <!-- End Content of ModalSearchByType -->
    
    <!-- Start Content of ModalSearchByEducation -->
    
    <!-- End Content of ModalSearchByEducation -->
    
    <!-- Start Content of ModalSearchByWarrants -->
    
    <!-- End Content of ModalSearchByWarrants -->
    
    <!-- Start Content of ModalSearchByPayments -->
    
    <!-- End Content of ModalSearchByPayments -->
    
    <!-- Start Content of ModalSearchByStatus -->
    
    <!-- End Content of ModalSearchByStatus -->
    
    <!-- Start Content of ModalSearchByReferral -->
    
    <!-- End Content of ModalSearchByReferral -->
    
    <!-- Start Content of ModalSearchByCounselorRequest -->
    
    <!-- End Content of ModalSearchByCounselorRequest -->
 
    <!-- Default Footer -->
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
	</body>
</html>
