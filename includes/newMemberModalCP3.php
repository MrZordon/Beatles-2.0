<div id="NewMemberModalCP3" class="reveal-modal" data-reveal>
		<h2>Domestic Violence History</h2>
	

			<div class="row">

				<div class="large-3 columns"> 
					<label>Have you been a victim of Domestic Violence:</label> 
					<input type="radio" name="violenceYN_Domestic" value="Yes" id="violenceYNDomestic">
						<label for="yes1">Yes</label> 
					<input type="radio" name="violenceYN_Domestic" value="No" id="violenceYNDomestic">
						<label for="no1">No</label> 	
				</div>

				<div class="large-3 columns"> 
					<label>If so, do you have a safety plan:</label> 
					<input type="radio" name="safetyYN_Domestic" value="Yes" id="safetyYNDomestic">
						<label for="yes2">Yes</label> 
					<input type="radio" name="safetyYN_Domestic" value="No" id="safetyYNDomestic">
						<label for="no2">No</label> 	
				</div>

				<div class="large-6 columns"> 
					<label>If so, is there a restraining order:</label> 
					<input type="radio" name="restrainingOrderYN_Domestic" value="Yes" id="restrainingOrderYNDomestic">
						<label for="yes3">Yes</label> 
					<input type="radio" name="restrainingOrderYN_Domestic" value="No" id="restrainingOrderYNDomestic">
						<label for="no3">No</label> 	
				</div>

			</div>

			<div class="row">
				<div class="large-12 columns">
					<label>Name of Perpetrator:<input type="text" name="perpName_Domestic" id="perpNameDomestic" placeholder="Full Name" /> </label> 
				</div>
			</div>
			
			<div class="row">		
				<div class="large-12 columns">
					<label>Tell Us about your Family: <textarea name="familyDetails_Domestic" id="familyDetailsDomestic" placeholder="Tell Us about your Family"> </textarea> </label> 
				</div>
			</div>
			<div class="row">		
				<div class="large-12 columns">
					<label>How did you become homeless?: <textarea name="homelessDetails_Domestic" id="homelessDetailsDomestic" placeholder="How did you become homeless?"> </textarea> </label> 
				</div>
			</div>
			<div class="row">		
				<div class="large-12 columns">
					<label>Describe your housing history: <textarea name="housingDetails_Domestic" id="housingDetailsDomestic" placeholder="Describe your housing history"> </textarea> </label> 
				</div>
			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Have you ever lived on your own?</label> 
					<input type="radio" name="livedAloneYN_Domestic" value="Yes" id="livedAloneYNDomestic">
						<label for="livedY">Yes</label> 
					<input type="radio" name="livedAloneYN_Domestic" value="No" id="livedAloneYNDomestic">
						<label for="livedN">No</label> 	
				</div>
				<div class="large-4 columns"> 
					<label>Were you responsible for rent?</label> 
					<input type="radio" name="rentYN_Domestic" value="Yes" id="rentYNDomestic">
						<label for="rentY">Yes</label> 
					<input type="radio" name="rentYN_Domestic" value="No" id="rentYNDomestic">
						<label for="rentN">No</label> 	
				</div>
				<div class="large-4 columns">
					
				</div>
			</div>
			
			<div class="row">		
				<div class="large-12 columns">
					<label>What would your landlord say about your ability to abide by a lease?<textarea name="landlordComments_Domestic" id="landlordCommentsDomestic" placeholder="Comments"> </textarea> </label> 
				</div>
			</div>
			
		<div class="row">
			<div class="large-3 columns">				
				<button id="DomesticSubmit" onclick="toggle_visibility('hideShow3');">Save Information</button>	
				<p><button href="#" data-reveal-id="NewMemberModalCP4" class="secondary button" id="hideShow3"  style="display:none;">Next</buttonW></p>
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
