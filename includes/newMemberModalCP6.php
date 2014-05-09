	<div id="NewMemberModalCP6" class="reveal-modal" data-reveal>
		
		<h2> Incarcerations</h2>
						<!-- Incarceration information-->
					<div class="row">
						<div class=large-6 columns">
							<label>Has the resident ever been incarcerated?</label> 
									<input type="radio" name="incarcerationYN_Incarceration" value="Yes" id="incarcerationYNIncarceration">
										<label for="incarcerationY">Yes</label> 
									<input type="radio" name="incarcerationYN_Incarceration" value="No" id="incarcerationYNIncarceration">
										<label for="incarcerationN">No</label> 
							</div>
					</div>
					<div class="row">
								<div class="large-5 columns"> 
									<label>Incarceration Location: <input type="text" id="incarcerationLocIncarceration" name="incarcerationLoc_Incarceration"  /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Incarceration Charges: <input type="text" id="incarcerationChargesIncarceration" name="incarcerationCharges_Incarceration" /> </label> 
								</div> 
						</div>
						<div class="row">
								<div class="large-5 columns"> 
									<label>Incarceration Start Date: <input type="text" id="incarcerationStartIncarceration" name="incarcerationStart_Incarceration" placeholder="mm/dd/yyyy" /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Incarceration End Date: <input type="text" id="incarcerationEndIncarceration" name="incarcerationEnd_Incarceration"  placeholder="mm/dd/yyyy"/> </label> 
								</div> 
						</div>
						<h2> Institutionalizations</h2>
						<!-- Institutionalized information-->
					<div class="row">
						<div class=large-6 columns">
							<label>Has the resident ever been institutionalized?</label> 
									<input type="radio" name="institutionalizedYN_Incarceration" value="Yes" id="institutionalizedYNIncarceration">
										<label for="institutionalizedY">Yes</label> 
									<input type="radio" name="institutionalizedYN_Incarceration" value="No" id="institutionalizedYNIncarceration">
										<label for="institutionalizedN">No</label> 
							</div>
					</div>
					<div class="row">
								<div class="large-5 columns"> 
									<label>Name of Institution: <input type="text" id="institutionNameIncarceration" name="institutionName_Incarceration"  /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Reasons for Institutionalization: <input type="text" id="institutionalizationReasonsIncarceration" name="institutionalizationReasons_Incarceration" /> </label> 
								</div> 
						</div>
						<div class="row">
								<div class="large-5 columns"> 
									<label>Institution Start Date: <input type="text" id="institutionStartIncarceration" name="institutionStart_Incarceration" placeholder="mm/dd/yyyy" /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Institution Release Date: <input type="text" id="institutionEndIncarceration" name="institutionEnd_Incarceration"  placeholder="mm/dd/yyyy"/> </label> 
								</div> 
						</div>
		
		<div class="row">
			<div class="large-3 columns">				
				<button id="IncarcerationSubmit" onclick="toggle_visibility('hideShow6);">Save Information</button>	
				<p><button href="#" data-reveal-id="" class="secondary button" id="hideShow6"  style="display:none;">Submit</buttonW></p>
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
	

	
