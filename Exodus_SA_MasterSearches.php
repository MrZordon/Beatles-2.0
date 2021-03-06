<?php

	// Inialize session
	session_start();

	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['userName'])) 
	{
		header('Location: index.php');
	}

?>
<html>
<!-- Include header file -->
	<?php include 'includes/header.php';?>
	
		<?php include('includes/header.php'); ?>

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
						<li><p class="button">Current User: <?php echo $_SESSION['userName']; ?></p></li>
						<li><a href="Exodus_Admin_home.php" class="button" id="home">Home</a></li>
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
 							<div class="reveal-modal-bg" style="display: none"></div>
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
											  <a href="#" data-reveal-id="ModalSearchByType" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Resident Type</a>
										</div></left>
										<left><div class="large-10 small-8 columns">
											  <a href="#" data-reveal-id="ModalSearchByEducation" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Education</a>
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
											  <a href="#" data-reveal-id="ModalSearchByRequest" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search Resident(s) By Counselor Request</a>
										</div></left>
								  </div>
          			</div>
         	 </div>
    </div>
    <!-- End Search Links -->
    
    <!-- Start Content of ModalSearchByName -->
   		<?php
   				include('includes/searchResByName.php')
   			?>
    <!-- End Content of ModalSearchByName -->
    
    <!-- Start Content of ModalSearchByResidence -->
    	<?php
   				include('includes/searchResByFormerResidence.php')
   			?>
    <!-- End Content of ModalSearchByResidence -->
    
    <!-- Start Content of ModalSearchByChildren -->
    	<?php
   				include('includes/searchResByNumChildren.php')
   			?>
    <!-- End Content of ModalSearchByChildren -->
    
    <!-- Start Content of ModalSearchByPolicy -->
   	 	<?php
   				include('includes/searchResByPolicyAgreement.php')
   			?>
    <!-- End Content of ModalSearchByPolicy -->
    
    <!-- Start Content of ModalSearchByEmployment -->
   	 	<?php
   				include('includes/searchResByEmployment.php')
   			?>
    <!-- End Content of ModalSearchByEmployment -->
    
    <!-- Start Content of ModalSearchByIncarceration -->
    	<?php
   				include('includes/searchResByIncarceration.php')
   			?>
    <!-- End Content of ModalSearchByIncarceration -->
    
    <!-- Start Content of ModalSearchByVehicle -->
    		<?php
   				include('includes/searchResByVehicle.php')
   			?>
    <!-- End Content of ModalSearchByVehicle -->
    
    <!-- Start Content of ModalSearchByType -->
   	 	<?php
   				include('includes/searchResByType.php')
   			?>
    <!-- End Content of ModalSearchByType -->
    
    <!-- Start Content of ModalSearchByEducation -->
    	<?php
   				include('includes/searchResByEducation.php')
   			?>
    <!-- End Content of ModalSearchByEducation -->
    
    <!-- Start Content of ModalSearchByPayments -->
    		<?php
   				include('includes/searchResByPayments.php')
   			?>
    <!-- End Content of ModalSearchByPayments -->
    
    <!-- Start Content of ModalSearchByStatus -->
    		<?php
   				include('includes/searchResByStatus.php')
   			?>
    <!-- End Content of ModalSearchByStatus -->
    
    <!-- Start Content of ModalSearchByReferral -->
    		<?php
   				include('includes/searchResByReferral.php')
   			?>
    <!-- End Content of ModalSearchByReferral -->
    
    <!-- Start Content of ModalSearchByRequest -->
    		<?php
   				include('includes/searchResByCounselorRequest.php')
   			?>
    <!-- End Content of ModalSearchByRequest -->
 
    <!--  Incude footer -->
<?php
include ('includes/footer.php')
?>

	</body>
</html>
