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

<div class="content" id="panel6">
	
	<?php
	
	$ResidentId = $_GET['id'];
	include_once("includes/connect_ExodusDB.inc");

	$result = mysql_query("SELECT * FROM `incarcerations` WHERE `ResidentID`='$ResidentId'");
		
	while($row = mysql_fetch_array($result)) 
	{
		$incarcerationLoc = $row['IncarcerationLoc'];
     	$startDate = $row['IncarceratedStartDate'];
		$endDate = $row['IncarceratedEndDate'];
		$charges = $row['IncarcerationCharges'];
		$instituationName	 = $row['NameOfInstitution'];
		$startDate2 = $row['InstituteStartDate'];
		$endDate2 = $row['InstituteEndDate'];
		$reason = $row['ReasonForInstitutionalization'];
		$incarcerated = $row['Incarcerated'];
		$institutionalized = $row['Institutionalized'];
	}	
	?>
	
	<h2> Incarcerations</h2>
		<form method="POST" action="includes/incarcerationsUpdate.php">
			<!-- Incarceration information-->
			<div class="row">
				<?php
					$jailVal1 = "Y";
					$jailVal2 = "N";
				?>
				
				<div class=large-6 columns">
					<label>Has the resident ever been incarcerated?</label> 
							<input type="radio" name="incarceration_YN" value="Y" id="incarcerationYN" <?php if ($incarcerated == $jailVal1){echo'checked="checked"';}?>>
					<label for="incarcerationY">Yes</label> 
							<input type="radio" name="incarceration_YN" value="N" id="incarcerationYN" <?php if ($incarcerated == $jailVal2){echo'checked="checked"';}?>>
					<label for="incarcerationN">No</label> 
				</div>
			</div>
			<div class="row">
				<div class="large-5 columns"> 
					<label>Incarceration Location: <input type="text" id="incarcerationLoc" name="incarceration_Loc"  value="<?=$incarcerationLoc;?>" /> </label> 
				</div> 
				<div class="large-5 columns"> 
					<label>Incarceration Charges: <input type="text" id="incarcerationCharges"  name="incarceration_Charges" value="<?=$charges;?>" /> </label> 
				</div> 
			</div>
			<div class="row">
					<div class="large-5 columns"> 
						<label>Incarceration Start Date: <input type="text" id="incarcerationStart" name="incarceration_Start" value="<?=$startDate;?>"  /> </label> 
					</div> 
					<div class="large-5 columns"> 
						<label>Incarceration End Date: <input type="text" id="incarcerationEnd" name="incarceration_End"  value="<?=$endDate;?>" /> </label> 
					</div> 
			</div>
				
			<div class="row"> 
				<div class="large-12 columns"> 
						<label>Incarceration Reason: <input type="text" name="incarceration_Reason" id="incarcerationReason" value="<?=$companyName;?>" /></label> 
				</div> 
			</div>
			<h2> Institutionalizations</h2>
				<!-- Institutionalized information-->
			<div class="row">
				<div class=large-6 columns">
					
					<?php
						$instVal1 = "Y";
						$instVal2 = "N";
					?>
				
					
					<label>Has the resident ever been institutionalized?</label> 
							<input type="radio" name="institutionalized_YN" value="Yes" id="institutionalizedYN" <?php if ($institutionalized == $instVal1){echo'checked="checked"';}?>>
					<label for="institutionalizedYN">Yes</label> 
							<input type="radio" name="institutionalized_YN" value="No" id="institutionalizedYN" <?php if ($institutionalized == $instVal2){echo'checked="checked"';}?> >
					<label for="institutionalizedN">No</label> 
				</div>
			</div>
			<div class="row">
				<div class="large-5 columns"> 
					<label>Name of Institution: <input type="text" id="institutionName"  name="institution_Name" value="<?=$instituationName;?>"  /> </label> 
				</div> 
				<div class="large-5 columns"> 
				</div> 
			</div>
			<div class="row">
					<div class="large-5 columns"> 
						<label>Institution Start Date: <input type="text" id="institutionStart" name="institution_Start" value="<?=$startDate2;?>"  /> </label> 
					</div> 
					<div class="large-5 columns"> 
						<label>Institution Release Date: <input type="text" id="institutionEnd"  name="institution_End"  value="<?=$endDate2;?>" /> </label> 
					</div> 
			</div>
				
			<div class="row"> 
				<div class="large-12 columns"> 
					<label>Institutionalized Reason: <input type="text" name="institution_Reason" id="institutionReason" value="<?=$reason;?>" /></label> 
				</div> 
			</div> 
			
			<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
			<input type="submit" class="small button" value="Save Information"/>
		
		</form>
			
</div>