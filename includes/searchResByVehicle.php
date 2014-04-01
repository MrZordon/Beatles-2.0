<!-- This php include file injects a modal to search the DB for a resident by their vehicle information-->

		<div id="ModalSearchByVehicle" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Vehicle Information</h2>
			<hr/>
			<!-- Start form for vehicle info -->
			<form>
				<p>**At least one field is required to be completed in order to search for a resident.</p>
				
					<div class="row">
								<div class="large-4 columns"> 
									<label>Name on Registration: <input type="text" id="registrationName"  /> </label> 
								</div> 
								<div class="large-4 columns"> 
									<label>License Number: <input type="text" id="licenseNum" /> </label> 
								</div> 
								<div class="large-4 columns"> 
										<label>State: <input type="text" id="state" /> </label> 
								</div>
						</div>
						<div class="row">
								<div class="large-3 columns"> 
									<label>Make: <input type="text" id="make" /> </label> 
								</div> 
								<div class="large-3 columns"> 
									<label>Color: <input type="text" id="color"/> </label> 
								</div> 
								<div class="large-3 columns"> 
									<label>Model: <input type="text" id="model"/> </label> 
								</div> 
								<div class="large-3 columns"> 
									<label>OLN: <input type="text" id="oln" placeholder="SXXXXXXXX" /> </label> 
								</div> 
						</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByVehicle" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
