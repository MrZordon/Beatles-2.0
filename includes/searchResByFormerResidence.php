<!-- This php include file injects a modal to search the DB for a resident by their former residence information-->

		<div id="ModalSearchByResidence" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Previous Address</h2>
			<hr/>
			<!-- Start form for street address, city, state, and zip code -->
			<form action="./includes/selectAndViewResByFormerRes.php"  method="post">
				<p>* Required.</p>
					<div class="row">
						<div class="large-4 columns"> 
							<label>* Street Address: <input type="text" id="streetAddress" name="streetAddress" placeholder="Street Address" /> </label> 
						</div> 
						<div class="large-4 columns"> 
							<label>* City: <input type="text" id="city"  name="city" placeholder="City" /> </label> 
						</div>
						<div class="large-4 columns"> 
							<label>* State: <input type="text" id="state" name="state" placeholder="State" /> </label> 
						</div>
					</div>
					<div class="row">
						<div class="large-4 columns"> 
							<label>* Zip Code: <input type="text" id="zipCode" name="zipCode" placeholder="XXXXX" /> </label> 
						</div> 
					</div>
						<!-- Submit the data to a query for searching for resident by former residence -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
