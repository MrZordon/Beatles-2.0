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
        header('Location: index.php');
    }


?>
<html>
	<!-- Include header file -->
	<head>
			<?php
					include ('includes/header.php');
			?>
	</head>
	<body>

    	<script src="js/vendor/jquery.js"></script>
    	<script src="js/foundation/foundation.js"></script>
    	<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		
    	<script>
    		$(document).foundation();
    	</script>

  		<!-- Header and Nav -->
    	<div class="large-11 columns">
			<ul class="right button-group">
				<li><p class="button">Current User: <?php echo $_SESSION['userName']; ?></p></li>
				<li><a href="Exodus_CP_MasterSearches.php" class="button" id="searchForResidents">Search for a Resident</a></li>
			</ul>
 		 </div>
    <!-- End Header and Nav -->
   
      <div class="row">
      <!--  Lazarus House logo on the left-->
          <div class="large-6 columns">
				<img src="img/LazarusHouseLogoBig.jpg"><br>
          </div>
 
          <div class="large-6 columns">
 
           	 	<h3 class="show-for-small">Lazarus House Ministries, Inc. <hr/></h3>
 
            <div class="panel">
              <h4 class="hide-for-small">Lazarus House Ministries, Inc. <hr/></h4>
            <h5 class="subheader">Welcome to the Capernaum Place home page of Exodus. This is your database access to all resident information. From this page you will be able to access everything you need concerning the information of residents of
            Capernaum Place. If this is your first time using the application, please see the tutorial for help.</h5>
            </div>
 
          <div class="row">
              <div class="large-6 small-6 columns">
                <div class="panel">
                  <h5>Tutorial</h5>
                <h6 class="subheader">How to use the Exodus application.</h6>
               
                <a href="#" class="small button" onclick="$(document).foundation().foundation('joyride', 'start');" >Tutorial</a>
                </div>
              </div>
 
              <div class="large-6 small-6 columns">
                <div class="panel">
                  <h5>Log Out</h5>
                <h6 class="subheader">Log out of Exodus application.</h6>
                <a href="includes/Exodus_logout.php" class="small button" id="logOut">Log Out</a>
                </div>
              </div>
          </div>
 
          </div>
 
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Search Bar to search for residents in the Database by name -->

        <div class="row">
 
          <div class="large-12 columns">
            <div class="radius panel">

            <h3 id="searchResidentBar"> Search For A Resident of Capernaum Place</h3>
 
            <form>
              <div class="row collapse">
 
                <div class="large-10 small-8 columns">
                  <input type="text" placeholder="Enter the Name of a Resident"/>
                </div>
 
                <div class="large-2 small-3 columns">
                  <a href="#" data-reveal-id="SearchModal" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search</a>
                </div>
 
              </div>
            </form>
 
          </div>
          </div>
 
        </div>
 
      <!-- End Search Bar -->
 
 
      <!-- Thumbnails -->
		<div class="reveal-modal-bg" style="display: none"></div>
 
        <div class="row">
            <div class="large-12 show-for-small columns">
          <h3>Header</h3><hr>
        </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="CurrentResidentsModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/homeIcon.png"></a>
            <div class="panel" id="viewCurrentResidents">
              <p>View Current Capernaum Place Residents</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="NewMemberModalCP1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/addUserIcon.png"></a>
            <div id="addResident" class="panel">
              <p>Add A Capernaum Place Resident</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img id="editResidentProfile" src="img/editIcon.png" >
            <div class="panel">
              <p>Edit A Capernaum Place Resident's Profile</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" id="backUpDB"><img src="img/downloadIcon.png"></a>
            <div class="panel">
              <p>Backup Database</p>
            </div>
          </div>
 
        </div>
        <!--  Incude footer -->
	<?php
		include ('includes/footer.php');
	?>
 
      <!-- End Thumbnails -->
 
 <!-- code block to handle tutorial -->
	<script>
	$(document).foundation().foundation('reveal', 'start');
	</script>
   <!-- Joyride Code -->
    <ol class="joyride-list" data-joyride>
        <li data-id="searchResidentBar" data-text="Next" data-options="tip_location: top">
            <p>You can search for a member by name using this search function.</p>
        </li>
        <li data-id="viewCurrentResidents" data-class="custom so-awesome" data-text="Next">
            <h4>View Current Capernaum Place Residents</h4>
            <p>View all current residents of Capernaum Place.</p>
        </li>
        <li data-id="addResident" data-class="custom so-awesome" data-options="tip_location: top" data-text="Next">
            <h4>Add a Resident</h4>
            <p>Create a profile for a new Capernaum Place resident</p>
        </li>
        <li data-id="editResidentProfile" data-class="custom so-awesome" data-text="Next">
            <h4>Edit a Capernaum Place Resident's Profile</h4>
            <p>Edit the profile of an existing resident of Capernaum Place.</p>
        </li>
        <li data-id="backUpDB" data-class="custom so-awesome" data-options="tip_location: top" data-text="Next">
            <h4>Backup Database</h4>
            <p>Download a zip file of the entire database for backup</p>
        </li>
        <li data-id="logOut" data-class="custom so-awesome" data-text="Next">
            <h4>Logout</h4>
            <p>Logout of the Exodus application</p>
        </li>
        <li data-id="searchForResidents" data-class="custom so-awesome" data-text="Next">
            <h4>Search for a Resident</h4>
            <p>Search for a Capernaum Place resident using different search criteria</p>
        </li>
    </ol>
	
	<!--  This is the Modal for adding generic information to residents profile	-->
	<?php 
			include('includes/newMemberModalCP1.php');
		?>
		
	<!--  This is the Modal for adding Children to residents profile	-->
	<?php 
			include('includes/newMemberModalCP2.php');
		?>
		
	<!--  This is the Modal for adding Domestic Violence info to residents profile	-->
	<?php 
			include('includes/newMemberModalCP3.php');
		?>
		
	<!--  This is the Modal for adding Personal Info to residents profile	-->
	<?php 
			include('includes/newMemberModalCP4.php');
		?>
		
	<!--  This is the Modal for adding Employment to residents profile	-->
	<?php 
			include('includes/newMemberModalCP5.php');
		?>
		
	<!--  This is the Modal for adding Criminal to residents profile	-->
	<?php 
			include('includes/newMemberModalCP6.php');
		?>
		
	<!--  This is the Modal for adding Vehichle Info to residents profile	-->
	<?php 
			//include('includes/newMemberModalCP7.php');
		?>
		
	<!--  This is the Modal for search for members	-->
	<?php 
			include('includes/searchMainModal.php');
		?>

	<!-- This is the Modal to display current residents -->
	<?php
		include('includes/currentResidentsModal.php');
	?>
	
 
    

</body>
</html>
