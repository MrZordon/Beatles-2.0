	<div id="NewMemberModalCP4" class="reveal-modal" data-reveal>
		
		<h2>Employment</h2>
	
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Currently employed?</label> 
								<input type="radio" name="agreementYN_Employment" value='Y' id="agreementYNEmployment">
									<label for="agreementY">Yes</label> 
								<input type="radio" name="agreementYN_Employment" value='N' id="agreementYNEmployment">
									<label for="agreementN">No</label> 	
					</div> 
			</div>
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Company Name: <input type="text" id="companyNameEmployment" name="companyName_Employment" placeholder="Company Name" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>Manager's Name: <input type="text" id="managerNameEmployment" name="managerName_Employment" placeholder="Manager's Name" /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Manager's Phone Number:<input type="text" id="managerPhoneNumEmployment" name="managerPhoneNum_Employment" placeholder="xxx-xxx-xxxx" /> </label> 
					</div>
			</div> 
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Hours From: <input type="text" name="hoursFrom_Employment" id="hoursFromEmployment" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>Hours To: <input type="text"  name="hoursTo_Employment" id="hoursToEmployment"  /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Rate of Pay:<input type="text" name="rateOfPay_Employment" id="rateOfPayEmployment" /> </label> 
					</div>
				</div> 
				<div class="row"> 
					<div class="large-4 columns"> 
							<label>Income:<input type="text" name="income_Employment" id="incomeEmployment" /> </label> 
						</div>
					</div>
		
		<div class="row">
			<div class="large-3 columns">				
				<button id="EmploymentSubmit" onclick="toggle_visibility('hideShow4');">Save Information</button>	
				<p><button href="#" data-reveal-id="NewMemberModalCP5" class="secondary button" id="hideShow4"  style="display:none;">Next</buttonW></p>
			</div>
			<div class="large-9 columns">
				<h4>Progress</h4>
				<div class="progress large-9 round"> 
					<span class="meter" style="width: 20%"></span> 
				</div>
			</div>
		</div>
		
	  <a class="close-reveal-modal">&#215;</a>
	</div>
