<!-- This php include file injects a modal to search the DB for a resident by their referral information-->

		<div id="ModalSearchByReferral" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Referral Information</h2>
			<hr/>
			<!-- Start form for referral  info -->
			<form action="./includes/selectAndViewByResReferral.php"  method="post">
				<p>* Required.</p>
				
					<div class="row">
								<div class="large-4 columns"> 
									<label>* Name of Referral Person: <input type="text" id="referralName" name="referralName"  /> </label> 
								</div> 
								<div class="large-4 columns"> 
									<label>* Name of Referral Agency: <input type="text" id="referralAgency" name="referralAgency" /> </label> 
								</div> 
								<div class="large-4 columns"> 
										<label>* Referral Agency Phone Number: <input type="text" id="referralPhoneNum" name="referralPhoneNum" placeholder="XXX-XXX-XXXX"  /> </label> 
								</div>
						</div>
						<!-- Submit the data to a query for searching for resident by referral -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
