<html>
	<head>
		<link rel="stylesheet" href="css/foundation.css" />
		<script src="js/vendor/modernizr.js"></script>
	</head>

	<body>

    	<script src="js/vendor/jquery.js"></script>
    	<script src="js/foundation/foundation.js"></script>
    	<script src="js/foundation/foundation.joyride.js"></script>
		<script src="js/foundation/foundation.reveal.js"></script>
		
    	<script>
    		$(document).foundation();
    	</script>

  		<!-- Header and Nav -->
    	<div class="large-11 columns">
			<ul class="right button-group">
				<li><a href="Exodus_MasterSearches.html" class="button" id="searchForResidents">Search for a Resident</a></li>
				<li><a href="#" class="button" id="link2">Link 2</a></li>
				<li><a href="#" class="button" id="link3">Link 3</a></li>
				<li><a href="#" class="button" id="link4">Link 4</a></li>
			</ul>
 		 </div>
    <!-- End Header and Nav -->
   
      <div class="row">
      <!--  Lazarus House logo on the left-->
          <div class="large-6 columns">
				<img src="img/LazarusHouseLogoBig.jpg"><br>
          </div>
 
          <div class="large-6 columns">
 
           	 	<h3 class="show-for-small">Lazarus House Ministries, Inc. <hr/></h3>
 
            <div class="panel">
              <h4 class="hide-for-small">Lazarus House Ministries, Inc. <hr/></h4>
            <h5 class="subheader">Welcome to the home page of Exodus. This is your database access to all resident information. From this page you will be able to access everything you need concerning the information of residents of Lazarus House
            and Capernaum Place. If this is your first time using the application, please see the tutorial for help.</h5>
            </div>
 
          <div class="row">
              <div class="large-6 small-6 columns">
                <div class="panel">
                  <h5>Tutorial</h5>
                <h6 class="subheader">How to use the Exodus application.</h6>
               
                <a href="#" class="small button" onclick="$(document).foundation().foundation('joyride', 'start');" >Tutorial</a>
                </div>
              </div>
 
              <div class="large-6 small-6 columns">
                <div class="panel">
                  <h5>Log Out</h5>
                <h6 class="subheader">Log out of Exodus application.</h6>
                <a href="Index.html" class="small button" id="logOut">Log Out</a>
                </div>
              </div>
          </div>
 
          </div>
 
        </div>
 
      <!-- End Header Content -->
 
 
      <!-- Search Bar to search for residents in the Database by name -->

        <div class="row">
 
          <div class="large-12 columns">
            <div class="radius panel">

            <h3 id="searchResidentBar"> Search For A Resident of Lazarus House or Capernaum Place</h3>
 
            <form>
              <div class="row collapse">
 
                <div class="large-10 small-8 columns">
                  <input type="text" placeholder="Enter the Name of a Resident"/>
                </div>
 
                <div class="large-2 small-3 columns">
                  <a href="#" data-reveal-id="SecondModal1" onclick="$(document).foundation().foundation('reveal', 'start');" class="postfix button expand">Search</a>
                </div>
 
              </div>
            </form>
 
          </div>
          </div>
 
        </div>
 
      <!-- End Search Bar -->
 
 
      <!-- Thumbnails -->
		<div class="reveal-modal-bg" style="display: none"></div>
 
        <div class="row">
            <div class="large-12 show-for-small columns">
          <h3>Header</h3><hr>
        </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="CurrentResidentsModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/homeIcon.png"></a>
            <div class="panel" id="viewCurrentResidents">
              <p>View Current Residents</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" data-reveal-id="NewMemberModal1" onclick="$(document).foundation().foundation('reveal', 'start');"><img src="img/addUserIcon.png"></a>
            <div id="addResident" class="panel">
              <p>Add A Resident</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <img id="editResidentProfile" src="img/editIcon.png" >
            <div class="panel">
              <p>Edit A Resident's Profile</p>
            </div>
          </div>
 
          <div class="large-3 small-6 columns">
            <a href="#" id="backUpDB"><img src="img/downloadIcon.png"></a>
            <div class="panel">
              <p>Backup Database</p>
            </div>
          </div>
 
        </div>
 
      <!-- End Thumbnails -->
 
	<script>
	$(document).foundation().foundation('reveal', 'start');
	</script>
   <!-- Joyride Code -->
    <ol class="joyride-list" data-joyride>
        <li data-id="searchResidentBar" data-text="Next" data-options="tip_location: top">
            <p>You can search for a member by name using this search function.</p>
        </li>
        <li data-id="viewCurrentResidents" data-class="custom so-awesome" data-text="Next">
            <h4>View Current Residents</h4>
            <p>View all current residents of both Lazarus House & Capernaum Place.</p>
        </li>
        <li data-id="addResident" data-class="custom so-awesome" data-options="tip_location: top data-text="Next">
            <h4>Add a Resident</h4>
            <p>Create a profile for a new resident</p>
        </li>
        <li data-id="editResidentProfile" data-class="custom so-awesome" data-text="Next">
            <h4>Edit a Resident's Profile</h4>
            <p>Edit the profile of an existing resident</p>
        </li>
        <li data-id="backUpDB" data-class="custom so-awesome" data-options="tip_location: top data-text="Next">
            <h4>Backup Database</h4>
            <p>Download a zip file of the entire database for backup</p>
        </li>
        <li data-id="logOut" data-class="custom so-awesome" data-text="Next">
            <h4>Logout</h4>
            <p>Logout of the Exodus application</p>
        </li>
        <li data-id="searchForResidents" data-class="custom so-awesome" data-text="Next">
            <h4>Search for a Resident</h4>
            <p>Search for a resident using different search criteria</p>
        </li>
        <li data-id="link2" data-class="custom so-awesome" data-text="Next">
            <h4>Link2</h4>
            <p>Link2</p>
        </li>
        <li data-id="link3" data-class="custom so-awesome" data-text="Next">
            <h4>Link3</h4>
            <p>Link3</p>
        </li>
        <li data-id="link4" data-class="custom so-awesome" data-text="End">
            <h4>Link4</h4>
            <p>Link4</p>
        </li>

    </ol>

	
	<!-- Reveal Modals begin -->
	
	<div id="NewMemberModal1" class="reveal-modal" data-reveal>
		<h2>Generic Information</h2>
		<p></p>
		<form>
			
			<div class="row"> 
				<div class="large-4 columns"> 
					<label>First Name <input type="text" placeholder="First Name" /> </label> 
				</div> 
				
				<div class="large-4 columns"> 
				<label>Last Name <input type="text" placeholder="Last Name" /> </label> 
				</div>
				
				<div class="large-4 columns"> 
				<label>Middle Initial<input type="text" placeholder="Middle Initial" /> </label> 
				</div>
				
			</div> 
			
			<div class="row"> 
				<div class="large-4 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-4 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-4 columns"> 
				<label>Date Of Birth</label> 
					<div class="large-4 columns"> 
					<select>
						<option>Month</option>
						<option value="January">January</option> 
						<option value="February">February</option> 
						<option value="March">March</option> 
						<option value="April">April</option>
						<option value="May">May</option> 
						<option value="June">June</option> 
						<option value="July">July</option> 
						<option value="August">August</option> 
						<option value="September">September</option> 
						<option value="October">October</option> 
						<option value="November">November</option> 
						<option value="December">December</option> 
					</select>
					</div>
					<div class="large-4 columns"> 
					<select>
						<option>Day</option>
						<option value="01">01</option> 
						<option value="02">02</option> 
						<option value="03">03</option> 
						<option value="04">04</option>
						<option value="05">05</option> 
						<option value="06">06</option> 
						<option value="07">07</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">22</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					</div>
					<div class="large-4 columns"> 
					<select>
						<option>Year</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						<option value="1979">1979</option>
						<option value="1978">1978</option>
						<option value="1977">1977</option>
						<option value="1976">1976</option>
						<option value="1975">1975</option>
						<option value="1974">1974</option>
						<option value="1973">1973</option>
						<option value="1972">1972</option>
						<option value="1971">1971</option>
						<option value="1970">1970</option>
						<option value="1969">1969</option>
						<option value="1968">1968</option>
						<option value="1967">1967</option>
						<option value="1966">1966</option>
						<option value="1965">1965</option>
						<option value="1964">1964</option>
						<option value="1963">1963</option>
						<option value="1962">1962</option>
						<option value="1961">1961</option>
						<option value="1960">1960</option>
						<option value="1959">1959</option>
						<option value="1958">1958</option>
						<option value="1957">1957</option>
						<option value="1956">1956</option>
						<option value="1955">1955</option>
						<option value="1954">1954</option>
						<option value="1953">1953</option>
						<option value="1952">1952</option>
						<option value="1951">1951</option>
						<option value="1950">1950</option>
						<option value="1949">1949</option>
						<option value="1948">1948</option>
						<option value="1947">1947</option>
						<option value="1946">1946</option>
						<option value="1945">1945</option>
						<option value="1944">1944</option>
						<option value="1943">1943</option>
						<option value="1942">1942</option>
						<option value="1941">1941</option>
						<option value="1940">1940</option>
						<option value="1939">1939</option>
						<option value="1938">1938</option>
						<option value="1937">1937</option>
						<option value="1936">1936</option>
						<option value="1935">1935</option>
						<option value="1934">1934</option>
						<option value="1933">1933</option>
						<option value="1932">1932</option>
						<option value="1931">1931</option>
						<option value="1930">1930</option>
						<option value="1929">1929</option>
						<option value="1928">1928</option>
						<option value="1927">1927</option>
						<option value="1926">1926</option>
						<option value="1925">1925</option>
						<option value="1924">1924</option>
						<option value="1923">1923</option>
						<option value="1922">1922</option>
						<option value="1921">1921</option>
						<option value="1920">1920</option>
						<option value="1919">1919</option>
						<option value="1918">1918</option>
						<option value="1917">1917</option>
						<option value="1916">1916</option>
						<option value="1915">1915</option>
						<option value="1914">1914</option>
						<option value="1913">1913</option>
						<option value="1912">1912</option>
						<option value="1911">1911</option>
						<option value="1910">1910</option>
						<option value="1909">1909</option>
						<option value="1908">1908</option>
						<option value="1907">1907</option>
						<option value="1906">1906</option>
						<option value="1905">1905</option>
						<option value="1904">1904</option>
						<option value="1903">1903</option>
						<option value="1902">1902</option>
						<option value="1901">1901</option>
						<option value="1900">1900</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="row"> 
				
				<div class="large-4 columns"> 
					<label>Cell Phone<input type="text" placeholder="Cell Phone" /> </label> 
				</div> 

				<div class="large-4 columns"> 
					<label>Religion
					<select> 
						<option value="Christianity">Christianity</option> 
						<option value="Judaism">Judaism</option> 
						<option value="Buddhism">Buddhism</option> 
						<option value="Hinduism">Hinduism</option>
						<option value="Islamic">Islamic</option> 
						<option value="Other">Other</option> 
					</select> 
					</label> 
				</div>
				
				<div class="large-4 columns"> 
					
				</div> 
			</div> 
			
			<h2>Previous Address Info</h2>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Street Address <input type="text" placeholder="Previous Street Address" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>City <input type="text" placeholder="City" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
					<label>State<input type="text" placeholder="State" /> </label> 
				</div>

			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Zip Code <input type="text" placeholder="Zip Code" /> </label> 
				</div> 
			</div>
			
			<h2>Referral Info</h2>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Referral Person <input type="text" placeholder="Referral Person" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>Referral Agency <input type="text" placeholder="Referral Agency" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
				</div>

			</div>
			<h2>Next of Kin</h2>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Name<input type="text" placeholder="Name" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>Relationship <input type="text" placeholder="Relationship" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
					<label>Phone Number<input type="text" placeholder="Phone Number" /> </label> 
				</div>
			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Street Address <input type="text" placeholder="Previous Street Address" /> </label> 
				</div> 
					
				<div class="large-4 columns"> 
					<label>City <input type="text" placeholder="City" /> </label> 
				</div>
					
				<div class="large-4 columns"> 
					<label>State<input type="text" placeholder="State" /> </label> 
				</div>
			</div>
			
			<div class="row">
				<div class="large-4 columns"> 
					<label>Zip Code <input type="text" placeholder="Zip Code" /> </label> 
				</div>
			</div>
				
			
			<div class="row"> 
				<div class="large-12 columns"> 
					<label>Comments <textarea placeholder="Comments"></textarea> </label> 
				</div> 
			</div> 
		</form>
	  
	  <p><a href="#" data-reveal-id="NewMemberModal2" class="secondary button">Next</a></p>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	
	
	<div id="NewMemberModal2" class="reveal-modal" data-reveal>
		<h2>Children</h2>
		<form>
	  
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="large-3 columns">
					<label>Full Name<input type="text" placeholder="Zip Code" /> </label> 
				</div>

				<div class="large-3 columns"> 
					<label>Gender</label> 
					<input type="radio" name="gender" value="Male" id="Male">
						<label for="Male">Male</label> 
					<input type="radio" name="gender" value="Female" id="Female">
						<label for="Female">Female</label> 	
				</div> 
				
				<div class="large-3 columns"> 
					<label>Social Security Number <input type="text" placeholder="Social Security Number" /> </label> 
				</div>
				
				<div class="large-3 columns"> 
					<div class="row">
						<label>Date Of Birth</label> 
						<div class="large-4 columns"> 
							<select>
							<option>Month</option>
							<option value="January">January</option> 
							<option value="February">February</option> 
							<option value="March">March</option> 
							<option value="April">April</option>
							<option value="May">May</option> 
							<option value="June">June</option> 
							<option value="July">July</option> 
							<option value="August">August</option> 
							<option value="September">September</option> 
							<option value="October">October</option> 
							<option value="November">November</option> 
							<option value="December">December</option> 
							</select>
						</div>
						<div class="large-4 columns">						
							<select>
								<option>Day</option>
								<option value="01">01</option> 
								<option value="02">02</option> 
								<option value="03">03</option> 
								<option value="04">04</option>
								<option value="05">05</option> 
								<option value="06">06</option> 
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">22</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
						</div>
						<div class="large-4 columns"> 
							<select>
								<option>Year</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1990">1990</option>
								<option value="1989">1989</option>
								<option value="1988">1988</option>
								<option value="1987">1987</option>
								<option value="1986">1986</option>
								<option value="1985">1985</option>
								<option value="1984">1984</option>
								<option value="1983">1983</option>
								<option value="1982">1982</option>
								<option value="1981">1981</option>
								<option value="1980">1980</option>
								<option value="1979">1979</option>
								<option value="1978">1978</option>
								<option value="1977">1977</option>
								<option value="1976">1976</option>
								<option value="1975">1975</option>
								<option value="1974">1974</option>
								<option value="1973">1973</option>
								<option value="1972">1972</option>
								<option value="1971">1971</option>
								<option value="1970">1970</option>
								<option value="1969">1969</option>
								<option value="1968">1968</option>
								<option value="1967">1967</option>
								<option value="1966">1966</option>
								<option value="1965">1965</option>
								<option value="1964">1964</option>
								<option value="1963">1963</option>
								<option value="1962">1962</option>
								<option value="1961">1961</option>
								<option value="1960">1960</option>
								<option value="1959">1959</option>
								<option value="1958">1958</option>
								<option value="1957">1957</option>
								<option value="1956">1956</option>
								<option value="1955">1955</option>
								<option value="1954">1954</option>
								<option value="1953">1953</option>
								<option value="1952">1952</option>
								<option value="1951">1951</option>
								<option value="1950">1950</option>
								<option value="1949">1949</option>
								<option value="1948">1948</option>
								<option value="1947">1947</option>
								<option value="1946">1946</option>
								<option value="1945">1945</option>
								<option value="1944">1944</option>
								<option value="1943">1943</option>
								<option value="1942">1942</option>
								<option value="1941">1941</option>
								<option value="1940">1940</option>
								<option value="1939">1939</option>
								<option value="1938">1938</option>
								<option value="1937">1937</option>
								<option value="1936">1936</option>
								<option value="1935">1935</option>
								<option value="1934">1934</option>
								<option value="1933">1933</option>
								<option value="1932">1932</option>
								<option value="1931">1931</option>
								<option value="1930">1930</option>
								<option value="1929">1929</option>
								<option value="1928">1928</option>
								<option value="1927">1927</option>
								<option value="1926">1926</option>
								<option value="1925">1925</option>
								<option value="1924">1924</option>
								<option value="1923">1923</option>
								<option value="1922">1922</option>
								<option value="1921">1921</option>
								<option value="1920">1920</option>
								<option value="1919">1919</option>
								<option value="1918">1918</option>
								<option value="1917">1917</option>
								<option value="1916">1916</option>
								<option value="1915">1915</option>
								<option value="1914">1914</option>
								<option value="1913">1913</option>
								<option value="1912">1912</option>
								<option value="1911">1911</option>
								<option value="1910">1910</option>
								<option value="1909">1909</option>
								<option value="1908">1908</option>
								<option value="1907">1907</option>
								<option value="1906">1906</option>
								<option value="1905">1905</option>
								<option value="1904">1904</option>
								<option value="1903">1903</option>
								<option value="1902">1902</option>
								<option value="1901">1901</option>
								<option value="1900">1900</option>
							</select>
						</div>
					</div>
				</div>
			</div>
		</form>
		<p><a href="#" data-reveal-id="NewMemberModal3" class="secondary button">Next</a></p>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	<div id="NewMemberModal3" class="reveal-modal" data-reveal>
		<h2>Children</h2>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	
	
	
	<!--  This is the Modal for search for members
	-->
	<div id="SecondModal1" class="reveal-modal" data-reveal>
		<h2>Search Results</h2>
		<p></p>
		<table> 
			<thead style="height:48px; overflow:auto;"> 
			<tr> 
			<th>First Name</th> 
			<th>Last Name</th> 
			<th>Social Security Number</th> 
			<th>Date of Birth</th>
			<th>Previous Street Address</th>
			<th>Previous Town</th>
			<th>Previous State</th>
			<th>Previous Zip Code</th>
			<th>Cell Phone Number</th>
			<th>Action</th>
			</tr> 
			</thead> 
			<tbody style="width:200px; overflow:auto;"> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>					
				</tr> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr>
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr> 
			</tbody> 
		</table>
	  <a class="close-reveal-modal">&#215;</a>
	</div>

	<div id="CurrentResidentsModal1" class="reveal-modal" data-reveal>
		<h2>Current Residents</h2>
		<p></p>
		<table> 
			<thead style="height:48px; overflow:auto;"> 
			<tr> 
			<th>First Name</th> 
			<th>Last Name</th> 
			<th>Social Security Number</th> 
			<th>Date of Birth</th>
			<th>Previous Street Address</th>
			<th>Previous Town</th>
			<th>Previous State</th>
			<th>Previous Zip Code</th>
			<th>Cell Phone Number</th>
			<th>Action</th>
			</tr> 
			</thead> 
			<tbody style="width:200px; overflow:auto;"> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>					
				</tr> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr>
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr> 
				<tr> 
					<td>Aaron</td> 
					<td>Diagram</td> 
					<td>000-00-6666</td> 
					<td>00/00/0000</td> 
					<td>1 StreetName Avenue</td> 
					<td>Merrimack.</td> 
					<td>MA</td> 
					<td>01931</td>
					<td>1-555-555-5555</td>
					<td><a href="#">View Profile</a></td>
				</tr> 
			</tbody> 
		</table>
	  <a class="close-reveal-modal">&#215;</a>
	</div>
 
    <!-- Footer -->
 
    <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>Lazarus House Ministries, Inc. &copy; All Rights Reserved</p>
        </div>
        <div class="large-6 columns">
         
        </div>
      </div>
    </div>
  </footer>
 

   
</body>


</html>
