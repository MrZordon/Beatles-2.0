<!-- This php include file injects a modal to search the DB for a resident by their incarcerations information-->
<?php

echo'
		<div id="ModalSearchByIncarceration" class="reveal-modal" data-reveal>
			<h2>Search Resident(s) By Incarceration / Institutionalization Information</h2>
			<hr/>
			<!-- Start form for incarceration info -->
			<form>
				<p>* Required </p>
				
						<!-- Incarceration information-->
					<div class="row">
						<div class=large-6 columns">
							<label>*Has the resident ever been incarcerated?</label> 
									<input type="radio" name="incarcerationYN" value="Yes" id="Yes">
										<label for="Yes">Yes</label> 
									<input type="radio" name="incarcerationYN" value="No" id="No">
										<label for="No">No</label> 
							</div>
					</div>
					<div class="row">
								<div class="large-5 columns"> 
									<label>Incarceration Location: <input type="text" id="incarcerationLoc"  /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Incarceration Charges: <input type="text" id="incarcerationCharges" /> </label> 
								</div> 
						</div>
						<div class="row">
								<div class="large-5 columns"> 
									<label>Incarceration Start Date: <input type="text" id="incarcerationStart" placeholder="mm/dd/yyyy" /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Incarceration End Date: <input type="text" id="incarcerationEnd"  placeholder="mm/dd/yyyy"/> </label> 
								</div> 
						</div>
						
						<!-- Institutionalized information-->
					<div class="row">
						<div class=large-6 columns">
							<label>*Has the resident ever been institutionalized?</label> 
									<input type="radio" name="institutionalizedYN" value="Yes" id="Yes">
										<label for="Yes">Yes</label> 
									<input type="radio" name="institutionalizedYN" value="No" id="No">
										<label for="No">No</label> 
							</div>
					</div>
					<div class="row">
								<div class="large-5 columns"> 
									<label>Name of Institution: <input type="text" id="institutionName"  /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Reasons for Institutionalization: <input type="text" id="institutionalizationReasons" /> </label> 
								</div> 
						</div>
						<div class="row">
								<div class="large-5 columns"> 
									<label>Institution Start Date: <input type="text" id="institutionStart" placeholder="mm/dd/yyyy" /> </label> 
								</div> 
								<div class="large-5 columns"> 
									<label>Institution Release Date: <input type="text" id="institutionEnd"  placeholder="mm/dd/yyyy"/> </label> 
								</div> 
						</div>
					
						<div class="right">
							<p><a href="#" data-reveal-id="searchResultsByIncarcerations" class="button">Search</a></p>
						</div>
						<a class="close-reveal-modal">&#215;</a>
			</form>
		</div>
'?>