<!-- This php include file injects a modal to search the DB for a resident by their referral information-->
<?php

echo'
		<div id="ModalSearchByReferral" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Referral Information</h2>
			<hr/>
			<!-- Start form for referral  info -->
			<form>
				<p>**At least one field is required to be completed in order to search for a resident.</p>
				
					<div class="row">
								<div class="large-4 columns"> 
									<label>Name on Referral Person: <input type="text" id="referralName"  /> </label> 
								</div> 
								<div class="large-4 columns"> 
									<label>Name of Referral Agency: <input type="text" id="referralAgency" /> </label> 
								</div> 
								<div class="large-4 columns"> 
										<label>Referral Agency Phone Number: <input type="text" id="referralPhoneNum" placeholder="XXX-XXX-XXXX"  /> </label> 
								</div>
						</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByReferral" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>