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

<div class="content" id="panel8">
	
	<?php
	
		$ResidentId = $_GET['id'];
		include_once("includes/connect_ExodusDB.inc");

		$result = mysql_query("SELECT * FROM `education` WHERE `ResidentID`='$ResidentId'");
			
		while($row = mysql_fetch_array($result)) 
		{
			$edMax = $row['EducationMax'];
	     	$furtherEd = $row['FurtherEd'];
			$furtherPlans = $row['FurtherPlans'];
		}
	?>
	
	<h2>Education Information</h2>
	
	<form method="POST" action="includes/educationUpdate.php">
		<div class="row">
			<div class="large-8 columns"> 
				<label>Resident's highest achieved degree: <input type="text" id="residentDegree"  name="residentDegree_Education" value="<?=$edMax;?>" /> </label> 
			</div> 
		</div>
		<div class="row">
			<div class="large-10 columns"> 
			
			<?php
					$quesVal1 = "Y";
					$quesVal2 = "N";
			?>
					<label>Does the resident have plans to further their education?</label> 
							<input type="radio" name="continueEdYN_Education" value="Y" id="continueEdYN" <?php if ( $furtherEd == $quesVal1){echo ' checked="checked"';}?> />
								<label for="continueEdY">Yes</label> 
							<input type="radio" name="continueEdYN_Education" value="N" id="continueEdYN" <?php if ( $furtherEd == $quesVal2){echo ' checked="checked"';}?> />
								<label for="continueEdN">No</label> 	
			</div> 
		</div>
		<div class="row"> 
			<div class="large-12 columns"> 
				<label>If yes, what are the plans for further education? <input type="text" id="futureEdu" name="futureEdu_Education" value="<?=$furtherPlans;?>"/> </label> 
			</div> 
		</div> 
		<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
		<input type="submit" class="small button" value="Save Information"/>
	</form>
	
</div>