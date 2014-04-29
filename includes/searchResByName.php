<!-- This php include file injects the modal to search the DB for a resident by their name information -->

	 <div id="ModalSearchByName" class="reveal-modal" data-reveal>
		<h2>Search Resident(s) By Name</h2>
		<hr/>
		<!-- Start form for first name, middle initial, or last name-->
		<form action="./includes/selectAndViewByResName.php"  method="post">
			<p>* Required</p>
					<div class="row"> 
							<div class="large-4 columns"> 
								<label>* First Name: <input type="text" id="firstName" name="firstName" placeholder="First Name" /> </label> 
							</div> 
							<div class="large-4 columns"> 
								<label>* Middle Initial:<input type="text" id="middleInitial" name="middleInitial" placeholder="Middle Initial" /> </label> 
							</div>
							<div class="large-4 columns"> 
								<label>* Last Name: <input type="text" id="lastName" name="lastName" placeholder="Last Name" /> </label> 
							</div>
					</div> 
					
					<!-- Submit the data to a query for searching for resident by name -->
					<div class="right">
						<input type="submit" name="submit" class="button" name="Search">
					</div>
	  				<a class="close-reveal-modal">&#215;</a>
		</form>
		
	</div>	
