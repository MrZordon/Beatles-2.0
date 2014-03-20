
<?php

echo'

<div id="ModalSearchByChildren" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Number of Children</h2>
			<hr/>
			<!-- Start form for number of children a residence has-->
			<form>
				<p>* Required </p>
					<div class="row">
						<div class="large-4 columns"> 
							<label>* Number of Children:</label> 
										<select>
											<option>-- Select --</option>
											<option value="1">1</option> 
											<option value="2">2</option> 
											<option value="3">3</option> 
											<option value="4">4</option>
											<option value="5">5</option> 
											<option value="6">6</option> 
											<option value="7">7</option> 
											<option value="8">8</option> 
										</select>
						</div> 
					</div>
					
					<!-- Submit the data to a query for searching for resident by number of children -->
					<div class="right">
						<p><a href="#" data-reveal-id="SearchResultsByNumChildren" class="button">Search</a></p>
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>

'?>