<!-- This php include file injects a modal to search the DB for a resident by their former residence information-->
<?php

echo'
		<div id="ModalSearchByResidence" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Previous Address</h2>
			<hr/>
			<!-- Start form for street address, city, state, and zip code -->
			<form>
				<p>**At least one field is required to be completed in order to search for a resident.</p>
					<div class="row">
						<div class="large-4 columns"> 
							<label>Street Address: <input type="text" id="streetAddress" placeholder="Street Address" /> </label> 
						</div> 
						<div class="large-4 columns"> 
							<label>City: <input type="text" id="city" placeholder="City" /> </label> 
						</div>
						<div class="large-4 columns"> 
							<label>State: <input type="text" id="state" placeholder="State" /> </label> 
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns"> 
							<label>Zip Code: <input type="text" id="zipCode" placeholder="XXXXX" /> </label> 
						</div> 
					</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByResidence" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>