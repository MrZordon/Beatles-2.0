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
										<input type="radio" name="currentResYN" value="Yes" id="Yes">
											<label for="Yes">Yes</label> 
										<input type="radio" name="currentResYN" value="No" id="No">
											<label for="No">No</label> 	
							</div> 
					</div>
					<div class="row">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
						<div class="large-4 columns"> 
							<label>*Select a facility:</label> 
										<select>
											<option>-- Select --</option>
											<option value="Lazarus House">Lazarus House</option> 
											<option value="Capernaum Place">Capernaum Place</option> 
										</select>
						</div> 
=======
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
						<div class="large-10 columns"> 
								<label>* Select a facility: </label> 
										<input type="radio" name="facility" value="Lazarus House" id="LH">
											<label for="LH">Lazarus House</label> 
										<input type="radio" name="facility" value="Capernaum Place" id="CP">
											<label for="CP">Capernaum Place</label> 	
							</div> 
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
=======
>>>>>>> FETCH_HEAD
					</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByStatus" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
