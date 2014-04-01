<html>
	<!-- Include header file -->
	<?php
		include('includes/header.php')
		?>

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
				<li><a href="Exodus_SA_MasterSearches.php" class="button" id="searchForResidents">Search for a Resident</a></li>
				<li><a href="#" class="button" id="link2">Link 3</a></li>
				<li><a href="#" class="button" id="link3">Link 4</a></li>
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
            <h5 class="subheader">Welcome to the System Administrator home page of Exodus. This is your database access to all resident information. From this page you will be able to access everything you need concerning the information of residents of Lazarus House
            and Capernaum Place. If this is your first time using the application, please see the tutorial for help.</h5>
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

            <h3 id="searchResidentBar"> Search For A Resident of Lazarus House or Capernaum Place</h3>
 
            <form>
              <div class="row collapse">
 
                <div class="large-10 small-8 columns">
                  <input type="text" placeholder="Enter the Name of a Resident"/>
                </div>
 
                <div class="large-2 small-3 columns">
                  <a href="#" data-reveal-id="SecondModal1" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search</a>
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
              <p>View Current Residents</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="NewMemberModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/addUserIcon.png"></a>
            <div id="addResident" class="panel">
              <p>Add A Resident</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img id="editResidentProfile" src="img/editIcon.png" >
            <div class="panel">
              <p>Edit A Resident's Profile</p>
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
		include ('includes/footer.php')
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
            <h4>View Current Residents</h4>
            <p>View all current residents of both Lazarus House & Capernaum Place.</p>
        </li>
        <li data-id="addResident" data-class="custom so-awesome" data-options="tip_location: top data-text="Next">
            <h4>Add a Resident</h4>
            <p>Create a profile for a new resident</p>
        </li>
        <li data-id="editResidentProfile" data-class="custom so-awesome" data-text="Next">
            <h4>Edit a Resident's Profile</h4>
            <p>Edit the profile of an existing resident</p>
        </li>
        <li data-id="backUpDB" data-class="custom so-awesome" data-options="tip_location: top data-text="Next">
            <h4>Backup Database</h4>
            <p>Download a zip file of the entire database for backup</p>
        </li>
        <li data-id="logOut" data-class="custom so-awesome" data-text="Next">
            <h4>Logout</h4>
            <p>Logout of the Exodus application</p>
        </li>
        <li data-id="searchForResidents" data-class="custom so-awesome" data-text="Next">
            <h4>Search for a Resident</h4>
            <p>Search for a resident using different search criteria</p>
        </li>
        <li data-id="link2" data-class="custom so-awesome" data-text="Next">
            <h4>Link2</h4>
            <p>Link2</p>
        </li>
        <li data-id="link3" data-class="custom so-awesome" data-text="Next">
            <h4>Link3</h4>
            <p>Link3</p>
        </li>
        <li data-id="link4" data-class="custom so-awesome" data-text="End">
            <h4>Link4</h4>
            <p>Link4</p>
        </li>

    </ol>
	
	
	<!--  This is the Modal for adding generic information to residents profile	-->
	<?php 
			include('includes/newMemberModal1.php');
		?>
		
	<!--  This is the Modal for adding Children to residents profile	-->
	<?php 
			include('includes/newMemberModal2.php');
		?>
		
	<!--  This is the Modal for adding Agency Assist to residents profile	-->
	<?php 
			include('includes/newMemberModal3.php');
		?>
		
	<!--  This is the Modal for adding Medical to residents profile	-->
	<?php 
			include('includes/newMemberModal4.php');
		?>
		
	<!--  This is the Modal for adding Employment to residents profile	-->
	<?php 
			include('includes/newMemberModal5.php');
		?>
		
	<!--  This is the Modal for adding Criminal to residents profile	-->
	<?php 
			include('includes/newMemberModal6.php');
		?>
		
	<!--  This is the Modal for adding Vehichle Info to residents profile	-->
	<?php 
			include('includes/newMemberModal7.php');
		?>
		
		<!--  This is the Modal for adding Education Info to residents profile	-->
	<?php 
			include('includes/newMemberModal8.php');
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
