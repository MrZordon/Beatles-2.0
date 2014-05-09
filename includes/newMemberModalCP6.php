	<div id="NewMemberModalCP6" class="reveal-modal" data-reveal>
		
		<h2> Incarcerations</h2>
						<!-- Incarceration information-->
					<div class="row">
						<div class=large-6 columns">
							<label>Has the resident ever been incarcerated?</label> 
									<input type="radio" name="incarceration_YN" value="Yes" id="incarcerationYN">
										<label for="incarcerationY">Yes</label> 
									<input type="radio" name="incarceration_YN" value="No" id="incarcerationYN">
										<label for="incarcerationN">No</label> 
							</div>
					</div>
					<div class="row">
								<div class="large-5 columns"> 
									<label>Incarceration Location: <input type="text" id="incarcerationLoc" name="incarceration_Loc"  /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Incarceration Charges: <input type="text" id="incarcerationCharges" name="incarceration_Charges" /> </label> 
								</div> 
						</div>
						<div class="row">
								<div class="large-5 columns"> 
									<label>Incarceration Start Date: <input type="text" id="incarcerationStart" name="incarceration_Start" placeholder="mm/dd/yyyy" /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Incarceration End Date: <input type="text" id="incarcerationEnd" name="incarceration_End"  placeholder="mm/dd/yyyy"/> </label> 
								</div> 
						</div>
						<h2> Institutionalizations</h2>
						<!-- Institutionalized information-->
					<div class="row">
						<div class=large-6 columns">
							<label>Has the resident ever been institutionalized?</label> 
									<input type="radio" name="institutionalized_YN" value="Yes" id="institutionalizedYN">
										<label for="institutionalizedY">Yes</label> 
									<input type="radio" name="institutionalized_YN" value="No" id="institutionalizedYN">
										<label for="institutionalizedN">No</label> 
							</div>
					</div>
					<div class="row">
								<div class="large-5 columns"> 
									<label>Name of Institution: <input type="text" id="institutionName" name="institution_Name"  /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Reasons for Institutionalization: <input type="text" id="institutionReason" name="institution_Reason" /> </label> 
								</div> 
						</div>
						<div class="row">
								<div class="large-5 columns"> 
									<label>Institution Start Date: <input type="text" id="institutionStart" name="institution_Start" placeholder="mm/dd/yyyy" /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Institution Release Date: <input type="text" id="institutionEnd" name="institution_End"  placeholder="mm/dd/yyyy"/> </label> 
								</div> 
						</div>
		
		<div class="row">
			<div class="large-3 columns">				
				<button id="IncarcerationSubmit" onclick="toggle_visibility('hideShow6);">Save Information</button>	
				<p><button href="#" class="close-reveal-modal">Finish</buttonW></p>
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
	

	
