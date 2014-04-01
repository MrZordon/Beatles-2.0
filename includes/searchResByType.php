<!-- This php include file injects the modal to search the DB for a resident by their residence type (either Lazarus House or Capernaum Place) -->

<div id="ModalSearchByType" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Residency Type</h2>
			<hr/>
			<!-- Start form for residency type-->
			<form>
					<p>* Required </p>
					<div class="row">
						<div class="large-4 columns"> 
							<label>*Select a Resident type:</label> 
										<select>
											<option>-- Select --</option>
											<option value="Lazarus House">Lazarus House</option> 
											<option value="Capernaum Place">Capernaum Place</option> 
										</select>
						</div> 
					</div>
					
					<!-- Submit the data to a query for searching for resident by resident type -->
					<div class="right">
						<p><a href="#" data-reveal-id="searchResultsByResidencyType" class="button">Search</a></p>
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
