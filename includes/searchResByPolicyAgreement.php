
<?php

echo'

<div id="ModalSearchByPolicy" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Policy Agreement</h2>
			<hr/>
			<!-- Start form for policy agreement-->
			<form>
					<p>* Required </p>
					<div class="row">
						<div class="large-6 columns"> 
							<label>* Did the resident agree to the policies for using the facility?</label> 
									<input type="radio" name="agreement" value="Yes" id="Yes">
										<label for="Yes">Yes</label> 
									<input type="radio" name="agreement" value="No" id="No">
										<label for="No">No</label> 	
						</div> 
					</div> 
					<div class="row"> 
							<div class="large-12 columns"> 
								<label>Comments: <textarea placeholder="Comments"></textarea> </label> 
							</div> 
					</div> 
					
					<!-- Submit the data to a query for searching for resident by policy agreement -->
					<div class="right">
						<p><a href="#" data-reveal-id="SearchResultsByPolicyAgreement" class="button">Search</a></p>
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
		
'?>