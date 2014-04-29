<!-- This php include file injects a modal to search the DB for a resident by their vehicle information-->

		<div id="ModalSearchByVehicle" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Vehicle Information</h2>
			<hr/>
			<!-- Start form for vehicle info -->
			<form action="./includes/selectAndViewResByVehicle.php"  method="post">
				<p>* Required.</p>
				
					<div class="row">
								<div class="large-4 columns"> 
									<label>Name on Registration: <input type="text" id="registrationName" name="registrationName"  /> </label> 
								</div> 
								<div class="large-4 columns"> 
									<label>License Number: <input type="text" id="licenseNum" name="licenseNum" /> </label> 
								</div> 
								<div class="large-4 columns"> 
										<label>State: <input type="text" id="state" name="state" /> </label> 
								</div>
						</div>
						<div class="row">
								<div class="large-3 columns"> 
									<label>Make: <input type="text" id="make" name="make" /> </label> 
								</div> 
								<div class="large-3 columns"> 
									<label>Color: <input type="text" id="color" name="color" /> </label>  
								</div> 
								<div class="large-3 columns"> 
									<label>Model: <input type="text" id="model" name="model" /> </label> 
								</div> 
								<div class="large-3 columns"> 
									<label>OLN: <input type="text" id="oln" name="oln" placeholder="SXXXXXXXX" /> </label> 
								</div> 
						</div>
						<!-- Submit the data to a query for searching for resident by vehicle information -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
