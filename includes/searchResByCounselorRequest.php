<!-- This php include file injects a modal to search the DB for a resident by who may have requested to meet with a counselor-->
<?php

echo'
		<div id="ModalSearchByRequest" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Counselor Requests</h2>
			<hr/>
			<!-- Start form for resident  who requested to meet with a counselor-->
			<form>
				<p>*Required</p>
					<div class="row">
						<div class="large-10 columns"> 
								<label>* Did the resident request to meet with a counselor?</label> 
										<input type="radio" name="requestCounselor" value="Yes" id="Yes">
											<label for="Yes">Yes</label> 
										<input type="radio" name="requestCounselor" value="No" id="No">
											<label for="No">No</label> 	
							</div> 
					</div>
					<div class="row">
						<div class="large-6 columns"> 
							<label>Name of Counselor: <input type="text" id="counselorName"  /> </label> 
						</div> 
					</div>
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByCounselorRequest" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>