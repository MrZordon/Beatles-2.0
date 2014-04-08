<!-- This php include file injects a modal to search the DB for a resident by their living status (either current or former resident) -->

		<div id="ModalSearchByStatus" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Status</h2>
			<hr/>
			<!-- Start form for resident residency status information -->
			<form>
				<p>*Required</p>
					<div class="row">
						<div class="large-10 columns"> 
								<label>* Is the resident currently living in a facility supervised by Lazarus House Ministries?</label> 
										<input type="radio" name="currentResYN" value="Yes" id="currentResYes">
											<label for="currentResYes">Yes</label> 
										<input type="radio" name="currentResYN" value="No" id="currentResNo">
											<label for="currentResNo">No</label> 	
							</div> 
					</div>
					<div class="row">
						<div class="large-4 columns"> 
							<label>*Select a facility:</label> 
										<select name="facilityNameLH">
											<option>-- Select --</option>
											<option value="Lazarus House">Lazarus House</option> 
										</select>
						</div> 
					</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByStatus" name="submit" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
