<!-- This php include file injects the modal to search the DB for a resident by their agreement to policies set forth in Lazarus House and Capernaum Place-->

<div id="ModalSearchByPolicy" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Policy Agreement</h2>
			<hr/>
			<!-- Start form for policy agreement-->
			<form>
					<p>* Required </p>
					<div class="row">
							<div class="large-10 columns"> 
								<label>* Did the applicant agree to the policies set forth by Lazarus House Ministries to be a resident and use the facilities?</label> 
										<input type="radio" name="agreement" value="Yes" id="policyYes">
											<label for="policyYes">Yes</label> 
										<input type="radio" name="agreement" value="No" id="policyNo">
											<label for="policyNo">No</label> 	
							</div> 
					</div> 
					
					<!-- Submit the data to a query for searching for resident by policy agreement -->
					<div class="right">
						<p><a href="#" data-reveal-id="searchResultsByPolicyAgreement" name="submit" class="button">Search</a></p>
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
		