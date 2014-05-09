<?php
	// Inialize session
	session_start();

	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['userName'])) 
	{
		header('Location: index.php');
	}
	   
    $now = time(); // checking the time now when home page starts
    if($now > $_SESSION['expire'])
    {
        header('Location: includes/Exodus_logout.php');
    }
	else
	{
		$_SESSION['expire'] = time()+1600;		
	}
?>

<html>


<head>

	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
   
</head>


<body>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/foundation/foundation.tab.js"></script>



    <script>
    $(document).foundation();
  
    </script>

	<!-- Header and Nav -->
    		<div class="large-11 columns">
				<ul class="right button-group">
					<li><p class="button">Current User: <?php echo $_SESSION['userName']; ?></p></li>
					<li><a href="Exodus_LH_MasterSearches.php" class="button" id="searchForResidents">Search for a Resident</a></li>
				</ul>
 		 	</div>
    <!-- End Header and Nav -->
	<p></p>
	<div class="row">

	  	<div class="large-4 columns">
	  		<h1><img src="img/blank-user_300_300.png">
	  	</div>
  		<div class="large-8 columns">
  			<h2> Edit Resident Info </h2>
			<p> Editing Resident Info is done here.  Click the tab of the specific data you want to edit. Click Save and the Information will be updated.
		</div>	
	</div>
		
	<div class="row">
	
		<h3 id="horizontal-tabs">Resident Information</h3>

		<dl class="radius tabs" data-tab>
			<dd class="active"><a href="#panel1">Generic Data</a></dd>
			<dd><a href="#panel2">Children</a></dd>
			<dd><a href="#panel3">Membership</a></dd>
			<dd><a href="#panel4">Medical</a></dd>
			<dd><a href="#panel5">Employment</a></dd>
			<dd><a href="#panel6">Incarcerations</a></dd>
			<dd><a href="#panel7">Vehicle</a></dd>
			<dd><a href="#panel8">Education</a></dd>
		</dl>
		
		<div class="tabs-content">
			<?php
				include"includes/GenericInfoPanelLH.php";
				include"includes/ChildrenPanelLH.php";
				include"includes/MembershipPanelLH.php";
				include"includes/MedicalPanelLH.php";
				include"includes/EmploymentPanelLH.php";
				include"includes/IncarcerationsPanelLH.php";
				include"includes/VehichlePanelLH.php";
				include"includes/EducationPanelLH.php";
			?>
		</div>
	
	</div>

	<script> $(document).foundation({ tab: { callback : function (tab) { console.log(tab); } } }); </script>
    <!-- Footer -->
 
    <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>All Rights Reserved Lazarus House.</p>
        </div>
        <div class="large-6 columns">
         
        </div>
      </div>
    </div>
  </footer>
 

   
</body>


</html>
