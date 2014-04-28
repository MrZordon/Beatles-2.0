<html>
	<!-- Include header file -->
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		    
		   
		    <script type="text/javascript">
				$(document).ready(function() 			
				{
					alert("ready");
		    		//##### Add record when Add Record Button is click #########
		    		$("#FormSubmit").click(function (e) 
		    		{
		    			e.preventDefault();
					    if($("#content_Text").val()==='')
					    {
					    	alert("Please enter some text!");
					    	return false;
					    }
					    var myData = {	first_NameGeneric: $("#firstNameGeneric").val(),
					    				middleInitial_Generic: $("#middleInitialGeneric").val(),
					    				last_NameGeneric: $("#lastNameGeneric").val(),
					    				gender_Generic: $("#genderGeneric").val(),
					    				ssn_Generic: $("#ssnGeneric").val(),
					    				cellPhone_Generic: $("#cellPhoneGeneric").val(),
					    				religion_Generic: $("#religionGeneric").val(),
					    				residentType_Generic: $("#residentTypeGeneric").val(),
					    				streetAddress_Generic: $("#streetAddressGeneric").val(),
					    				townAddress_Generic: $("#townAddressGeneric").val(),
					    				stateAddress_Generic: $("#stateAddressGeneric").val(),
					    				zipAddress_Generic: $("#zipAddressGeneric").val(),
					    				referralName_Generic: $("#referralNameGeneric").val(),
					    				referralAgency_Generic: $("#referralAgencyGeneric").val(),
					    				referralPhoneNum_Generic: $("#referralPhoneNumGeneric").val(),
					    				nameKin_Generic: $("#nameKinGeneric").val(),
					    				relationship_Generic: $("#relationshipGeneric").val(),
					    				phoneNumKin_Generic: $("#phoneNumKinGeneric").val(),
					    				streetAddressKin_Generic: $("#streetAddressKinGeneric").val(),
					    				cityKin_Generic: $("#cityKinGeneric").val(),
					    				stateKin_Generic: $("#stateKinGeneric").val(),
					    				zipKin_Generic: $("#zipKinGeneric").val(),
					    				comments_Generic: $("#commentsGeneric").val()}; //build a post data structure
				    
				    	jQuery.ajax(
				    	{
				    			type: "POST", // Post / Get method
				    			url: "response.php", //Where form data is sent on submission
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
			
			<!-- <script src="js/vendor/jquery.js"></script> -->
			<script src="js/foundation/foundation.js"></script>
			<!-- <script src="js/foundation/foundation.joyride.js"></script> -->
			<script src="js/foundation/foundation.reveal.js"></script>
			
		</head>
		<body>
			
			<!-- Header and Nav -->
    		<div class="large-11 columns">
				<ul class="right button-group">
					<li><p class="button">Current User: <?php echo $_SESSION['userName']; ?></p></li>
					<li><a href="Exodus_LH_MasterSearches.php" class="button" id="searchForResidents">Search for a Resident</a></li>
					<li><a href="#" class="button" id="link3">Link 3</a></li>
					<li><a href="#" class="button" id="link4">Link 4</a></li>
				</ul>
 		 	</div>
    		<!-- End Header and Nav -->
    		
    		<div class="row">
      			
      			<!--  Lazarus House logo on the left-->
          		<div class="large-6 columns">
					<img src="img/LazarusHouseLogoBig.jpg"><br>
          		</div>
 
 				<!-- Lazarus House Information on the Right -->
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
 
          		</div> <!-- End of Lazarus House Information on the Right -->
 
        	</div> <!-- End of Top Portion of Page -->
        	
        	
        	<!-- Search Bar to search for residents in the Database by name -->
        	<div class="row">
 
          		<div class="large-12 columns">
          			
          			<!-- Create the Panel Around the Search Box -->
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
      			
      			
				<div class="reveal-modal-bg" style="display: none"></div>
 
 				<!-- Thumbnails -->
    			<div class="row">
        			<div class="large-12 show-for-small columns">
      					<h3>Header</h3><hr>
    				</div>
 
 						<!-- Current Residents -->
      				<div class="large-3 small-6 columns">
		            	<a href="#" data-reveal-id="CurrentResidentsModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/homeIcon.png"></a>
		            	<div class="panel" id="viewCurrentResidents">
          					<p>View Current Lazarus House Residents</p>
        				</div>
      				</div>
 
						<!-- New Member -->
      				<div class="large-3 small-6 columns">
        				<a href="#" data-reveal-id="NewMemberModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/addUserIcon.png"></a>
        				<div id="addResident" class="panel">
          					<p>Add A Lazarus House Resident</p>
        				</div>
      				</div>
 
 						<!-- Edit Resident -->
      				<div class="large-3 small-6 columns">
        				<img id="editResidentProfile" src="img/editIcon.png" >
        				<div class="panel">
          					<p>Edit A Lazarus House Resident's Profile</p>
        				</div>
      				</div>
 
 						<!-- Database Back up -->
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
		
		<!-- Some Modals that will be used -->
		<?php
			include ('includes/newMemberModalLH1(2).php');
		?>
			
		</body>
		
	</html>