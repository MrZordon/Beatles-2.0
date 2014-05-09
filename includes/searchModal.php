<?php
	include_once("includes/connect_ExodusDB.inc");

	$result = mysql_query("SELECT * FROM `genericinfo` WHERE `ResidentType`='LH' AND `Active`='Y'");
	$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );	
	$count = mysql_num_rows($result);
	
?>

	<div id="SearchModal" class="reveal-modal" data-reveal>
		<h2>Search Results</h2>
		<p></p>
		
		<table>
		<thead style="height:48px; overflow:auto;">
			<tr> 
				<th>First Name</th> 
				<th>Last Name</th> 
				<th>Social Security Number</th> 
				<th>Previous Street Address</th>
				<th>Previous Town</th>
				<th>Previous State</th>
				<th>Previous Zip Code</th>
				<th>Cell Phone Number</th>
				<th>Action</th>
			</tr> 
		</thead> 
		<tbody style="width:200px; overflow:auto;"> 
		
		<?php
		
			while($row = mysql_fetch_array($result)) 
		    {
		    	echo '<tr>';
				echo '<td>'.$row['FirstName'].'</td>';
				echo '<td>'.$row['LastName'].'</td>';
				echo '<td>'.$row['SSN'].'</td>';
				echo '<td>'.$row['Street'].'</td>';
				echo '<td>'.$row['CityTown'].'</td>';
				echo '<td>'.$row['State'].'</td>';
				echo '<td>'.$row['Zip'].'</td>';
				echo '<td>'.$row['PhoneNum'].'</td>';
				echo '<td><a href ="userInfoPage.php?id='.$row['ResidentID'].'">View Profile</a></td>';
				echo '</tr>';
		    }
		
		?>

				 
		</tbody> 
		</table>
		
	  <a class="close-reveal-modal">&#215;</a>
	</div>
	
