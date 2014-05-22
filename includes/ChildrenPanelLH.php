<?php
		/* Panel Include Page
		 * 
		 * The panels are all members of the userInfo page, essentially a
		 * residents profile page.  Each Panel contains resident data to 
		 * that resident.  A user of the system can change the data on the
		 * resident profile page within a panel and hit save.  This save 
		 * will call an update script that will update the given information.
		 * 
		 * A few things to note, we must keep passing the resident ID in the
		 * URL to keep track of what resident's information is being displayed.
		 * This is a simple get command, we then need to connect to the database
		 * and do a select * on the table relative to which panel we are in.
		 * 
		 * We will always pass the resident ID in a hidden field no matter which
		 * panel we are in to the appropriate update script.
		 * 
		 * TODOS - Add Error Checking, Test for all Values, Organize into a
		 * 		   separate Updates Folder.
		 */

?>

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