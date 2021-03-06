
	
	<div id="NewMemberModal4" class="reveal-modal" data-reveal>
		
		<h2>Medical Information</h2>
			<div class="row">
				<div class="large-9 columns">
					<label>Doctor's Full Name:<input type="text" name="docName_Medical" id="docNameMedical" placeholder="Doctor's Full Name" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Phone Number:<input type="text" name="docPhoneNum_Medical" id="docPhoneNumMedical" placeholder="XXX-XXX-XXXX" /></label> 
				</div> 
				
			</div>
				
			<div class="row">
				<div class="large-4 columns"> 
					<label>Street Address: <input type="text" name="docStreetAddress_Medical" id="docStreetAddressMedical" placeholder="Street Address" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>City: <input type="text" name="docCity_Medical" id="docCityMedical" placeholder="City" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
					<label>State:<input type="text" name="docState_Medical" id="docStateMedical" placeholder="State" /> </label> 
				</div>

			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Zip Code:<input type="text" name="docZip_Medical" id="docZipMedical" placeholder="XXXXX" /> </label> 
				</div> 
			</div>
			
			<div class="row">
				<div class="large-3 columns"> 
					<label>Are you on Medication?</label> 
						<select name="medsYN_Medical' id="medsYNMedical">
							<option>-- Select --</option>
							<option value="Yes">Yes</option> 
							<option value="No">No</option> 
						</select>
				</div> 
			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Medication Name:<input type="text" name="medsName1_Medical" id="medsName1Medical" placeholder="Medication Name" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>Dosage:<input type="text" name="medsDosage1_Medical" id="medsDosage1Medical" placeholder="Dosage" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
					<label>When:<input type="text" name="medsWhen1_Medical" id="medsWhen1Medical" placeholder="When" /> </label> 
				</div>			
			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Medication Name:<input type="text" name="medsName2_Medical" id="medsName2Medical"  placeholder="Medication Name" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>Dosage:<input type="text" name="medsDosage2_Medical" id="medsDosage2Medical" placeholder="Dosage" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
					<label>When:<input type="text" name="medsWhen2_Medical" id="medsWhen2Medical" placeholder="When" /> </label> 
				</div>			
			</div>
			
			<div class="row">
				<div class="large-3 columns"> 
					<label>Do you have any Allergies?</label> 
						<select name="allergiesYN_Medical" id="allergiesYNMedical">
							<option>-- Select --</option>
							<option value="Yes">Yes</option> 
							<option value="No">No</option> 
						</select>
				</div>
				<div class="large-9 columns">
				      <label>If yes, what?</label>
				      <textarea id="ifYes_Medical" name="ifYesMedical" placeholder="notes"></textarea>
				</div>
			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Seizers of Epilepsy?</label> 
						<select name="seizersYN_Medical" id="seizersYNMedical" >
							<option>-- Select --</option>
							<option value="Yes">Yes</option> 
							<option value="No">No</option> 
						</select>
				</div>
				<div class="large-4 columns"> 
					<label>Client of DMH?</label> 
						<select name="clientYN_Medical" id="clientYNMedical" >
							<option>-- Select --</option>
							<option value="Yes">Yes</option> 
							<option value="No">No</option> 
						</select>
				</div>
				<div class="large-4 columns"> 
				</div>
			</div>
			
			<div class="row">
			
				<div class="large-4 columns"> 
					<label>DMH Worker's Full Name:<input type="text" name="dmhName_Medical" id="dmhNameMedical"  placeholder="DMH Worker Name" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					
				</div>
				<div class="large-4 columns"> 
				</div>

			</div>
		
		<div class="row">
			<div class="large-3 columns">
				<button id="MedicalSubmit" onclick="toggle_visibility('hideShow4');">Save Information</button>	 
				<p><button href="#" data-reveal-id="NewMemberModal5" id="hideShow4" class="secondary button" style="display:none;">Next</button></p>
			</div>
			<div class="large-9 columns">
				
				<h4>Progress</h4>
				<div class="progress large-9 round"> 
					<span class="meter" style="width: 40%"></span> 
				</div>
			</div>
		</div>
		
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	

	
