<!-- This php include file injects a modal to search the DB for a resident by any overdue payments they may have-->

		<div id="ModalSearchByPayments" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Overdue Payments</h2>
			<hr/>
			<!-- Start form for resident overdue payment information -->
			<form action="./includes/selectAndViewResByPayment.php"  method="post">
				<p>*Required</p>
					<div class="row">
						<div class="large-10 columns"> 
								<label>* Does the resident have outstanding payments?</label> 
										<input type="radio" name="outstandingPayments" value="Yes" id="overdueYes">
											<label for="overdueYes">Yes</label> 
										<input type="radio" name="outstandingPayments" value="No" id="overdueNo">
											<label for="overdueNo">No</label> 	
							</div> 
					</div>
					<div class="row">
						<div class="large-5 columns"> 
							<label>* Owed to whom: <input type="text" id="companiesOwed" name="companiesOwed"  /> </label> 
						</div> 
						<div class="large-5 columns"> 
							<label>* Amount Owed: <input type="text" id="amountOwed" name="amountOwed"  /> </label> 
						</div> 
					</div>
						<!-- Submit the data to a query for searching for resident by payments -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
