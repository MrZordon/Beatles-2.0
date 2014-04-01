<!-- This php include file injects the modal to search the DB for a resident by their name information -->
<<<<<<< HEAD:includes/searchResByName.php
<<<<<<< HEAD:includes/searchResByName.php
<<<<<<< HEAD:includes/searchResByName.php
=======

>>>>>>> FETCH_HEAD:includes/searchResByName.php
=======

>>>>>>> FETCH_HEAD:includes/searchResByName.php
=======

>>>>>>> FETCH_HEAD:includes/searchResByName.php

	 <div id="ModalSearchByName" class="reveal-modal" data-reveal>
		<h2>Search Resident(s) By Name</h2>
		<hr/>
		<!-- Start form for first name, middle initial, or last name-->
		<form>
			<p>**At least one field is required to be completed in order to search for a resident.</p>
					<div class="row"> 
							<div class="large-4 columns"> 
								<label>First Name: <input type="text" id=firstName placeholder="First Name" /> </label> 
							</div> 
							<div class="large-4 columns"> 
								<label>Middle Initial:<input type="text" id=middleInitial placeholder="Middle Initial" /> </label> 
							</div>
							<div class="large-4 columns"> 
								<label>Last Name: <input type="text" id=lastName placeholder="Last Name" /> </label> 
							</div>
					</div> 
					
					<!-- Submit the data to a query for searching for resident by name -->
					<div class="right">
						<p><a href="#" data-reveal-id="SearchResultsByName" class="button">Search</a></p>
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
		</form>
	</div>	
