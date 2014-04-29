<!-- This php include file injects the modal to search the DB for a resident by their residence type (either Lazarus House or Capernaum Place) -->

<div id="ModalSearchByTypeCP" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Residency Type</h2>
			<hr/>
			<!-- Start form for residency type-->
			<form action="./includes/selectAndViewResByType.php"  method="post">
					<p>* Required </p>
					<div class="row">
						<div class="large-4 columns"> 
							<label>*Select a Resident type:
										<select name="resType">
											<option value="">-- Select --</option>
											<option value="CP">Capernaum Place</option> 
										</select>
							</label> 
						</div> 
					</div>
					
					<!-- Submit the data to a query for searching for resident by resident type -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
