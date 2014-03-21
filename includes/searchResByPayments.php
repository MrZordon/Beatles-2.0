<!-- This php include file injects a modal to search the DB for a resident by any overdue payments they may have-->
<?php

echo'
		<div id="ModalSearchByPayments" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Overdue Payments</h2>
			<hr/>
			<!-- Start form for resident overdue payment information -->
			<form>
				<p>*Required</p>
					<div class="row">
						<div class="large-10 columns"> 
								<label>* Does the resident have outstanding payments?</label> 
										<input type="radio" name="outstandingPayments" value="Yes" id="Yes">
											<label for="Yes">Yes</label> 
										<input type="radio" name="outstandingPayments" value="No" id="No">
											<label for="No">No</label> 	
							</div> 
					</div>
					<div class="row">
						<div class="large-5 columns"> 
							<label>Owed to whom: <input type="text" id="companiesOwed"  /> </label> 
						</div> 
						<div class="large-5 columns"> 
							<label>Amount Owed: <input type="text" id="amountOwed"  /> </label> 
						</div> 
					</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByOverduePayments" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>