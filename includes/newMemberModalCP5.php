<div id="NewMemberModalCP5" class="reveal-modal" data-reveal>
		
		<h2>Education Information</h2>
		
					<div class="row">
						<div class="large-8 columns"> 
							<label>Resident's highest achieved degree: <input type="text" id="residentDegreeEducation" name="residentDegree_Education"  /> </label> 
						</div> 
					</div>
					<div class="row">
						<div class="large-10 columns"> 
								<label>Does the resident have plans to further their education?</label> 
										<input type="radio" name="continueEd_Education" value='Y' id="continueEdEducation">
											<label for="continueEdY">Yes</label> 
										<input type="radio" name="continueEd_Education" value='N' id="continueEdEducation">
											<label for="continueEdN">No</label> 	
							</div> 
					</div>
					<div class="row"> 
						<div class="large-12 columns"> 
							<label>If yes, what are the plans for further education? <textarea name="futurePlans_Education" id="futurePlansEducation" placeholder="Future educational plans"></textarea> </label> 
						</div> 
					</div> 
		
		
		<div class="row">
			<div class="large-3 columns">				
				<button id="EducationSubmit" onclick="toggle_visibility('hideShow5');">Save Information</button>	
				<p><button href="#" data-reveal-id="NewMemberModalCP6" class="secondary button" id="hideShow5"  style="display:none;">Next</buttonW></p>
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
