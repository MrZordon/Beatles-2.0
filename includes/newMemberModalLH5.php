
	
	<div id="NewMemberModal5" class="reveal-modal" data-reveal>
		
		<h2>Employment</h2>
		<div class="row"> 
				<div class="large-4 columns"> 
									<label>Currently employed?</label> 
											<input type="radio" name="current_Employment" value="Y" id="currentEmployment">
												<label for="agreementY">Yes</label> 
											<input type="radio" name="current_Employment" value="N" id="currentEmployment">
												<label for="agreementN">No</label> 	
				</div> 
		</div>
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Company Name: <input type="text" name="companyName_Employment" id="companyNameEmployment"  placeholder="Company Name" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>Manager's Name: <input type="text"  name="managerName_Employment" id="managerNameEmployment" placeholder="Manager's Name" /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Manager's Phone Number:<input type="text" name="managerPhoneNum_Employment" id="managerPhoneNumEmployment"  placeholder="xxx-xxx-xxxx" /> </label> 
					</div>
			</div> 
			<div class="row"> 
					<div class="large-4 columns"> 
						<label>Hours From: <input type="text" id="hoursFromEmployment" name="hoursFrom_Employment" /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>Hours To: <input type="text" id="hoursToEmployment"  name="hoursTo_Employment"  /> </label> 
					</div>
					<div class="large-4 columns"> 
						<label>Rate of Pay:<input type="text" id="rateOfPayEmployment" name="rateOfPay_Employment" /> </label> 
					</div>
				</div> 
				<div class="row"> 
					<div class="large-4 columns"> 
						<label>Income:<input type="text" id="incomeEmployment" name="income_Employment" /> </label> 
					</div>
				</div>
				
				<div class="row"> 
					<div class="large-12 columns"> 
						<label>Employment Goals: <textarea name="goals_Employment" id="goalsEmployment" placeholder="Goals"></textarea> </label> 
					</div> 
				</div>
			
		
		<div class="row">
			<div class="large-3 columns"> 
				<button id="EmploymentSubmit" onclick="toggle_visibility('hideShow5');">Save Information</button>	
				<p><a href="#" data-reveal-id="NewMemberModal6" id="hideShow5" class="secondary button"style="display:none;">Next</a></p>
			</div>
			<div class="large-9 columns">
				
				<h4>Progress</h4>
				<div class="progress large-9 round"> 
					<span class="meter" style="width: 50%"></span> 
				</div>
			</div>
		</div>
		
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	

	
