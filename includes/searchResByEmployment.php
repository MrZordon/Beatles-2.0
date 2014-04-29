<!-- This php include file injects the modal to search the DB for residents by their employment information-->

	<div id="ModalSearchByEmployment" class="reveal-modal" data-reveal>
		<h2>Search Resident(s) By Employment </h2>
		<p>* Required.</p>
		<form action="./includes/selectAndViewResByEmployment.php"  method="post">
		<div class="row"> 
				<div class="large-10 columns"> 
							<label>* Currently employed?</label> 
							<input type="radio" name="employed" value="Yes" id="employemntYes">
									<label for="employemntYes">Yes</label> 
							<input type="radio" name="employed" value="No" id="employemntNo">
									<label for="employemntNo">No</label> 
				</div> 
		</div>
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>* Company Name: <input type="text" id="companyName" name="companyName" placeholder="Company Name" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>* Manager's Name: <input type="text" id="managerName" name="managerName" placeholder="Manager's Name" /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>* Manager's Phone Number:<input type="text" id="managerPhoneNum" name="managerPhoneNum" placeholder="xxx-xxx-xxxx" /> </label> 
					</div>
			</div> 
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>* Hours From: <input type="text" id="hoursFrom" name="hoursFrom" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>* Hours To: <input type="text" id="hoursTo"  name="hoursTo" /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>* Rate of Pay:<input type="text" id="rateOfPay" name="rateOfPay" /> </label> 
					</div>
				</div> 
				<div class="row"> 
					<div class="large-4 columns"> 
							<label>* Income:<input type="text" id="income" name="income" /> </label> 
						</div>
					</div>

			<!-- Submit the data to a query for searching for resident by employment -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
			<a class="close-reveal-modal">&#215;</a>
	</form>
</div>
