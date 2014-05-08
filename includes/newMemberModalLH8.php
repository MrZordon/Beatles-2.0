<div id="NewMemberModal8" class="reveal-modal" data-reveal>
		
		<h2>Education Information</h2>
	
					<div class="row">
						<div class="large-8 columns"> 
							<label>Resident's highest achieved degree: <input type="text" id="residentDegree"  name="residentDegree_Education"  /> </label> 
						</div> 
					</div>
					<div class="row">
						<div class="large-10 columns"> 
								<label>Does the resident have plans to further their education?</label> 
										<input type="radio" name="continueEdYN_Education" value="Yes" id="continueEdYN">
											<label for="continueEdY">Yes</label> 
										<input type="radio" name="continueEdYN_Education" value="No" id="continueEdYN">
											<label for="continueEdN">No</label> 	
							</div> 
					</div>
					<div class="row"> 
						<div class="large-12 columns"> 
							<label>If yes, what are the plans for further education? <textarea id="futureEdu" name="futureEdu_Education" placeholder="Future educational plans"></textarea> </label> 
						</div> 
					</div> 
	
		<div class="row">
				<div class="large-3 columns">
				<button id="EducationSubmit" onclick="toggle_visibility('hideShow8');">Save Information</button>	
					<p><a href="#" data-reveal-id="NewMemberModal9" id="hideShow8" class="secondary button" style="display:none;">Next</a></p>
				</div>
				<div class="large-9 columns">
						<h4>Progress</h4>
							<div class="progress large-9 round"> 
								<span class="meter" style="width: 80%"></span> 
							</div>
					</div>
			</div>
		
	  <a class="close-reveal-modal">&#215;</a>
</div>