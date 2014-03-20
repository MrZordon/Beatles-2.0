<html>

<head>

	<link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
   
</head>


<body>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation/foundation.js"></script>
    <script src="js/foundation/foundation.tab.js"></script>



    <script>
    $(document).foundation();
  
    </script>

  <!-- Header and Nav -->
  <div class="row">
    <div class="large-3 columns">
      <h1><img src="http://placehold.it/400x100&text=Logo"></h1>
    </div>
   
    <div class="large-9 columns">
        <ul class="right button-group">
        <li><a href="index2.php" class="button">Lazarus House Page</a></li>
        <li><a href="#" class="button">Link 2</a></li>
        <li><a href="#" class="button">Link 3</a></li>
        <li><a href="#" class="button">Link 4</a></li>
        </ul>
    </div>
  </div>
 
    <!-- End Header and Nav -->
   
	<div class="row">
	
	<h2> Edit Resident Info </h2>
	<p> Editing Resident Info is done here.  Click the tab of the specific data you want to edit. Click Save and the Information will be updated.
		
	<h3 id="horizontal-tabs">Resident Information</h3>

	<dl class="radius tabs" data-tab>
		<dd class="active"><a href="#panel1">Generic Data</a></dd>
		<dd><a href="#panel2">Children</a></dd>
		<dd><a href="#panel3">Membership</a></dd>
		<dd><a href="#panel4">Medical</a></dd>
		<dd><a href="#panel5">Employment</a></dd>
		<dd><a href="#panel6">Incarcerations</a></dd>
		<dd><a href="#panel7">Vehicle</a></dd>
	</dl>
	<div class="tabs-content">
		<div class="content active" id="panel1">
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
			
			<a href="#" class="small button" >Save Information</a>
                
		</form>
		</div>
		<div class="content" id="panel2">
			<p>Second panel content goes here. Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="content" id="panel3">
			<p>Third panel content goes here. Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="content" id="panel4">
			<p>Fourth panel content goes here. Panel 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="content" id="panel5">
			<p>Fourth panel content goes here. Panel 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="content" id="panel6">
			<p>Fourth panel content goes here. Panel 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="content" id="panel7">
			<p>Fourth panel content goes here. Panel 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
	</div>

	
	</div>

	<script> $(document).foundation({ tab: { callback : function (tab) { console.log(tab); } } }); </script>
    <!-- Footer -->
 
    <footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>All Rights Reserved Lazarus House.</p>
        </div>
        <div class="large-6 columns">
         
        </div>
      </div>
    </div>
  </footer>
 

   
</body>


</html>
