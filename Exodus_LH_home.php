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
	<!-- Include header file -->
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			

			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		    <script type="text/javascript">
				$(document).ready(function() 			
				{
					//alert("ready");
		    		//##### Add record when Add Record Button is click #########
		    		$("#FormSubmit").click(function (e) 
		    		{
		    			e.preventDefault();
					    if($("#content_Text").val()==='')
					    {
					    	alert("Please enter some text!");
					    	return false;
					    }
					    var myData = {content_txt: $("#contentText").val(),content_txt2: $("#contentText2").val()}; //build a post data structure
			    	
					    /*var myData					={firstNameGeneric: $("#contentText").val(),
					    							  middleInitialGeneric: $("#middleInitialGeneric").val(),
					    							  lastNameGeneric: $("#lastNameGeneric").val(),
					    							  genderGeneric: $("#genderGeneric").val(),
					    							  ssn: $("#ssn").val(),
					    							  cellPhoneGeneric: $("#cellPhoneGeneric").val(),
					    							  religionGeneric: $("#religionGeneric").val(),
					    							  streetAddressGeneric: $("#streetAddressGeneric").val(),
					    							  cityAddressGeneric: $("#cityAddressGeneric").val(),
					    							  stateAddressGeneric: $("#stateAddressGeneric").val(),
					    							  zipAddressGeneric: $("#zipAddressGeneric").val()}
				    	*/
				    	//var firstNameGeneric 		= ; //build a post data structure
				    	//var middleInitialGeneric 	= ; //build a post data structure
				    	//var lastNameGeneric 		= ; //build a post data structure
				    	//var genderGeneric 			= ; //build a post data structure
				    	/var ssn 					= ; //build a post data structure
				    	
				    	// This will be saved for Date of Birth and Age
				    	//var myData 				= 'content_txt='+ $("#contentText").val(); //build a post data structure
				    	//var myData 				= 'content_txt='+ $("#contentText").val(); //build a post data structure
				    	//var cellPhoneGeneric 		= ; //build a post data structure
				    	/var religionGeneric 		= ; //build a post data structure
				    	
				    	// Previous Residential Info
				    	//var streetAddressGeneric 	= ; //build a post data structure
				    	//var cityAddressGeneric 		= ; //build a post data structure
				    	//var stateAddressGeneric 	= ; //build a post data structure
				    	//var zipAddressGeneric		= ; //build a post data structure
				    	
				    	
				    	jQuery.ajax(
				    	{
				    			type: "POST", // Post / Get method
				    			url: "includes/response.php", //Where form data is sent on submission
				    			dataType:"text", // Data type, HTML, json etc.
				    			
				    			//Form variables
				    			data:myData,
				    			 
				    			success:function(response)
				    			{
				    				$("#responds").append(response);
				  				},
						    	error:function (xhr, ajaxOptions, thrownError)
						    	{
						    		alert(thrownError);
				    			}
		    			});
		    		});
		 
				});
			</script>
			<?php
					include ('includes/header.php');
			?>
			<style>
    
			    .form_style #textarea {
			    border: 1px solid #CCCCCC;
			    }
			     
			    .form_style #FormSubmit {
			    display: block;
			    background: #000000;
			    border: 1px solid #000066;
			    color: #FFFFFF;
			    margin-top: 5px;
			    }
			    #responds{
			    margin: 0px;
			    padding: 0px;
			    list-style: none;
			    }
			    #responds li{
			    list-style: none;
			    padding: 10px;
			    background: #D1CFCE;
			    margin-bottom: 5px;
			    border-radius: 5px;
			    width: 400px;
			    font-family: arial;
			    font-size: 13px;
			    }
			    .del_wrapper{float:right;}.content_wrapper {
			    width: 500px;
			    margin-right: auto;
			    margin-left: auto;
			    }
		    </style>
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
				<li><a href="Exodus_LH_MasterSearches.php" class="button" id="searchForResidents">Search for a Resident</a></li>
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
            <h5 class="subheader">Welcome to the Lazarus House home page of Exodus. This is your database access to all resident information. From this page you will be able to access everything you need concerning the information of residents of Lazarus House. 
            	If this is your first time using the application, please see the tutorial for help.</h5>
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

            <h3 id="searchResidentBar"> Search For A Resident of Lazarus House</h3>
 
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
              <p>View Current Lazarus House Residents</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="NewMemberModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/addUserIcon.png"></a>
            <div id="addResident" class="panel">
              <p>Add A Lazarus House Resident</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img id="editResidentProfile" src="img/editIcon.png" >
            <div class="panel">
              <p>Edit A Lazarus House Resident's Profile</p>
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
            <h4>View Current Lazarus House Residents</h4>
            <p>View all current residents of Lazarus House.</p>
        </li>
        <li data-id="addResident" data-class="custom so-awesome" data-options="tip_location: top" data-text="Next">
            <h4>Add a Lazarus House Resident</h4>
            <p>Create a profile for a new Lazarus House resident</p>
        </li>
        <li data-id="editResidentProfile" data-class="custom so-awesome" data-text="Next">
            <h4>Edit a Lazarus House Resident's Profile</h4>
            <p>Edit the profile of an existing Lazarus House resident</p>
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
            <h4>Search for a Lazarus House Resident</h4>
            <p>Search for a Lazarus House resident using different search criteria</p>
        </li>
    </ol>
	
	
	
	<!--  This is the Modal for adding generic information to residents profile	-->
	<?php 
			include('includes/newMemberModalLH1.php');
		?>
		
	<!--  This is the Modal for adding Children to residents profile	-->
	<?php 
			include('includes/newMemberModalLH2.php');
		?>
		
	<!--  This is the Modal for adding Agency Assist to residents profile	-->
	<?php 
			include('includes/newMemberModalLH3.php');
		?>
		
	<!--  This is the Modal for adding Medical to residents profile	-->
	<?php 
			include('includes/newMemberModalLH4.php');
		?>
		
	<!--  This is the Modal for adding Employment to residents profile	-->
	<?php 
			include('includes/newMemberModalLH5.php');
		?>
		
	<!--  This is the Modal for adding Criminal to residents profile	-->
	<?php 
			include('includes/newMemberModalLH6.php');
		?>
		
	<!--  This is the Modal for adding Vehichle Info to residents profile	-->
	<?php 
			include('includes/newMemberModalLH7.php');
		?>
		
	<!--  This is the Modal for adding Education Info to residents profile	-->
	<?php 
			include('includes/newMemberModalLH8.php');
		?>
		
	<!--  This is the Modal for adding Education Info to residents profile	-->
	<?php 
			include('includes/newMemberModalLH9.php');
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
