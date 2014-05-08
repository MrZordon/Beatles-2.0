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
			<div class="large-3 columns">				
				<button id="DomesticInfo" onclick="toggle_visibility('hideShow3');">Save Information</button>	
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
