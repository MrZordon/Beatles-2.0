<!-- This php include file injects a modal to search the DB for a resident by their education-->

		<div id="ModalSearchByEducation" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Education</h2>
			<hr/>
			<!-- Start form for resident educational information -->
			<form action="./includes/selectAndViewByResEdu.php"  method="post">
				<p>*Required</p>
					<div class="row">
						<div class="large-8 columns"> 
							<label>* Resident's highest achieved degree: <input type="text" id="residentDegree" name="residentDegree"  /> </label> 
						</div> 
					</div>
					<div class="row">
						<div class="large-10 columns"> 
								<label>* Does the resident have plans to further their education?</label> 
										<input type="radio" name="continueEd" value="Yes" id="eduYes">
											<label for="eduYes">Yes</label> 
										<input type="radio" name="continueEd" value="No" id="eduNo">
											<label for="eduNo">No</label> 	
							</div> 
					</div>
						<!-- Submit the data to a query for searching for resident by education -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
