
<?php

echo'

	<div id="ModalSearchByEmployment" class="reveal-modal" data-reveal>
		<h2>Search Resident(s) By Employment </h2>
		<p>**At least one field is required to be completed in order to search for a resident.</p>
		<form>
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Company Name: <input type="text" placeholder="Company Name" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>Manager\'s Name: <input type="text" placeholder="Manager\'s Name" /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Manager\'s Phone Number:<input type="text" placeholder="xxx-xxx-xxxx" /> </label> 
					</div>
			</div> 
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Hours From: <input type="text" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>Hours to: <input type="text"  /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Income:<input type="text" /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Rate of Pay:<input type="text" /> </label> 
					</div>
					<div class="large-4 columns"> 
							<label>Currently employed:</label> 
									<input type="radio" name="agreement" value="Yes" id="Yes">
										<label for="Yes">Yes</label> 
									<input type="radio" name="agreement" value="No" id="No">
										<label for="No">No</label> 	
					</div> 
				</div> 

			<div class="right">
				<p><a href="#" data-reveal-id="SearchResultsByEmployment" class="button">Search</a></p>
			</div>
			<a class="close-reveal-modal">&#215;</a>
	</form>
</div>
			
'?>