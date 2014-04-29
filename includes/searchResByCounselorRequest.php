<!-- This php include file injects a modal to search the DB for a resident by who may have requested to meet with a counselor-->

		<div id="ModalSearchByRequest" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Counselor Requests</h2>
			<hr/>
			<!-- Start form for resident  who requested to meet with a counselor-->
			<form action="./includes/selectAndViewByResCounselorRequest.php"  method="post">
				<p>*Required</p>
					<div class="row">
						<div class="large-10 columns"> 
								<label>* Did the resident request to meet with a counselor?</label> 
										<input type="radio" name="requestCounselor" value="Yes" id="requestYes">
											<label for="requestYes">Yes</label> 
										<input type="radio" name="requestCounselor" value="No" id="requestNo">
											<label for="requestNo">No</label> 	
							</div> 
					</div>
					<div class="row">
						<div class="large-6 columns"> 
							<label>* Name of Counselor Requested: <input type="text" id="counselorName" name="counselorName"  /> </label> 
						</div> 
					</div>
						<!-- Submit the data to a query for searching for resident by counselor request -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
