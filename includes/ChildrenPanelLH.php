<div class="content" id="panel2">

<?php
		$ResidentId = $_GET['id'];
		include_once("includes/connect_ExodusDB.inc");

		$result = mysql_query("SELECT * FROM `children` WHERE `ResidentID`='$ResidentId'");		
		
		echo '<h2>Children</h2>';
?>
		<form method="POST" action="includes/childrenUpdate.php">
<?php
		while($row = mysql_fetch_array($result)) 
		{
						
			$numChildren = $row['NumChildren'];

			for($i = 1; $i < $numChildren +1; $i++)
			{
				echo '<label>Full Name:</label><input type="text" name="child_Name'.$i.'" id="childName'.$i.'" value= "'.$row['ChildFullName'.$i.''].' "></input>';
				echo '<label>Gender:</label>';
				echo '<input type="radio" name="child_Gender'.$i.'" value="Male" id="childGender'.$i.'"';
				
				$genderVal1 = "Male";
				$genderVal2 = "Female";
				
				$genderCur = $row['ChildGender'.$i.''];
				if ( $genderCur == $genderVal1)
				{
					echo ' checked="checked"';
					echo ' >';
				}
				 
				echo '<label for="Male">Male</label> ';
				echo '<input type="radio" name="child_Gender'.$i.'" value="Female" id="childGender'.$i.'"';
				
				if ( $genderCur == $genderVal2)
				{
					echo ' checked="checked"';
					echo ' >';
				} 
				echo '<label for="Female">Female</label> ';	
	
				echo '<label>Social Security Number: </label>';
				echo '<input type="text" name="child_SSN'.$i.'" id="childSSN'.$i.'" value= "'.$row['ChildSSN'.$i.''].' "></input>';
				
				echo '<input type="text" name="child_Custody'.$i.'" id="childCustody'.$i.'" value= "'.$row['ChildCustodyIssues'.$i.''].' "></input>';
				
			}
			
		}	
?>
	<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
	<input type="hidden" name="numChildren" value="<?=$numChildren?>">
	<input type="submit" class="small button" value="Save Information"/>
      
	</form>
</div>