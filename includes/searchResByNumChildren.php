<!--  This php include file injects the modal to search the DB for a resident by the number of children they have-->

<div id="ModalSearchByChildren" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Number of Children</h2>
			<hr/>
			<!-- Start form for number of children a residence has-->
			<form action="includes/selectAndViewByNumChild.php"  method="post">
				<p>* Required </p>
					<div class="row">
						<div class="large-4 columns"> 
							<label>* Number of Children: 
										<select id="numChildren" name="numChildren">
											<option value="">-- Select --</option>
											<option value="0">0</option> 
											<option value="1">1</option> 
											<option value="2">2</option> 
											<option value="3">3</option> 
											<option value="4">4</option>
											<option value="5">5</option>  
											<option value="6">6</option> 
											<option value="7">7</option> 
											<option value="8">8</option> 
										</select>
							</label>
						</div> 
					</div>
					
					<!-- Submit the data to a query for searching for resident by number of children -->
					<div class="right">
					<input type="submit" name="submit" class="button" name="Search">
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
