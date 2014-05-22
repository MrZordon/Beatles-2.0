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

<div class="content" id="panel4">

	<?php
		
		$ResidentId = $_GET['id'];
		include_once("includes/connect_ExodusDB.inc");

		$result = mysql_query("SELECT * FROM `Medical` WHERE `ResidentID`='$ResidentId'");
			
		while($row = mysql_fetch_array($result)) 
		{
			$docName = $row['DocName'];
	     	$docStreet = $row['Street'];
			$docCityTown = $row['CityTown'];
			$docState = $row['State'];
			$docZip	 = $row['Zip'];
			$docPhone = $row['Phone'];
			$docMedication = $row['Medication'];
			$docMed1 = $row['Med1'];
			$docDose1 = $row['Dose1'];
			$docWhen1 = $row['When1'];
			$docMed2 = $row['Med2'];
			$docDose2 = $row['Dose2'];
			$docWhen2 = $row['When2'];
			$docAllergies = $row['Allergies'];
			$docSeizures = $row['Seizures'];
			$docEpilepsy = $row['Epilepsy'];
			$docMental = $row['MentalHealthClient'];
			$docMentalHealthDoc = $row['MentalHealthDoc'];
		}	
	?>

	<h2>Medical Information</h2>
	
	<form method="POST" action="includes/medicalUpdate.php">
	<div class="row">
		<div class="large-9 columns">
			<label>Doctor's Full Name:<input type="text" name="docName_Medical" id="docNameMedical" value="<?=$docName;?>" /> </label> 
		</div>

		<div class="large-3 columns"> 
			<label>Phone Number:<input type="text" name="docPhoneNum_Medical" id="docPhoneNumMedical" value="<?=$docPhone;?>" /></label> 
		</div> 
		
	</div>
		
	<div class="row">
		<div class="large-4 columns"> 
			<label>Street Address: <input type="text" name="docStreetAddress_Medical" id="docStreetAddressMedical" value="<?=$docStreet;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			<label>City: <input type="text" name="docCity_Medical" id="docCityMedical" value="<?=$docCityTown;?>" /> </label> 
		</div>
			
		<div class="large-4 columns"> 
			<label>State:<input type="text" name="docState_Medical" id="docStateMedical" value="<?=$docState;?>"/> </label> 
		</div>

	</div>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Zip Code:<input type="text" name="docZip_Medical" id="docZipMedical" value="<?=$docZip;?>" /> </label> 
		</div> 
	</div>
	
	<?php
					$medicationVal1 = "Y";
					$medicationVal2 = "N";
	?>
	
	<div class="row">
		<div class="large-3 columns"> 
			<label>Are you on Medication?</label> 
				<select name="medsYN_Medical' id="medsYNMedical" >
					<option>-- Select --</option>
					<option value="Y" <?php if ($docMedication == $medicationVal1){echo'selected="selected"';}?>>Yes</option> 
					<option value="N" <?php if ($docMedication == $medicationVal2){echo'selected="selected"';}?>>No</option> 
				</select>
		</div> 
	</div>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Medication Name:<input type="text" name="medsName1_Medical" id="medsName1Medical" value="<?=$docMed1;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			<label>Dosage:<input type="text" name="medsDosage1_Medical" id="medsDosage1Medical" value="<?=$docDose1;?>" /> </label> 
		</div>
			
		<div class="large-4 columns"> 
			<label>When:<input type="text" name="medsWhen1_Medical" id="medsWhen1Medical" value="<?=$docWhen1;?>" /> </label> 
		</div>			
	</div>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Medication Name:<input type="text" name="medsName2_Medical" id="medsName2Medical"  value="<?=$docMed2;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			<label>Dosage:<input type="text" name="medsDosage2_Medical" id="medsDosage2Medical" value="<?=$docDose2;?>" /> </label> 
		</div>
			
		<div class="large-4 columns"> 
			<label>When:<input type="text" name="medsWhen2_Medical" id="medsWhen2Medical" value="<?=$docWhen2;?>" /> </label> 
		</div>			
	</div>
	
	<?php
					$allergyVal1 = "Y";
					$allergyVal2 = "N";
	?>
	
	<div class="row">
		<div class="large-3 columns"> 
			<label>Do you have any Allergies?</label> 
				<select name="allergiesYN_Medical" id="allergiesYNMedical">
					<option>-- Select --</option>
					<option value="Y" <?php if ($docAllergies == $allergyVal1){echo'selected="selected"';}?>>Yes</option> 
					<option value="N" <?php if ($docAllergies == $allergyVal2){echo'selected="selected"';}?>>No</option> 
				</select>
		</div>
		<div class="large-9 columns">
		</div>
	</div>
	
	<?php
					$seizuresVal1 = "Y";
					$seizuresVal2 = "N";
	?>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Seizers of Epilepsy?</label> 
				<select name="seizersYN_Medical" id="seizersYNMedical" >
					<option>-- Select --</option>
					<option value="Y" <?php if ($docSeizures == $seizuresVal1){echo'selected="selected"';}?>>Yes</option> 
					<option value="N" <?php if ($docSeizures == $seizuresVal2){echo'selected="selected"';}?>>No</option> 
				</select>
		</div>
		
		
		<?php
					$mentalVal1 = "Y";
					$mentalVal2 = "N";
		?>
		
		<div class="large-4 columns"> 
			<label>Client of DMH?</label> 
				<select name="clientYN_Medical" id="clientYNMedical" >
					<option>-- Select --</option>
					<option value="Y" <?php if ($docMental == $mentalVal1){echo'selected="selected"';}?>>Yes</option> 
					<option value="N" <?php if ($docMental == $mentalVal2){echo'selected="selected"';}?>>No</option> 
				</select>
		</div>
		<div class="large-4 columns"> 
		</div>
	</div>
	
	<div class="row">
	
		<div class="large-4 columns"> 
			<label>DMH Worker's Full Name:<input type="text" name="dmhName_Medical" id="dmhNameMedical"  value="<?=$docMentalHealthDoc;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			
		</div>
		<div class="large-4 columns"> 
		</div>

	</div>
	
	<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
	<input type="submit" class="small button" value="Save Information"/>
    
	</form>

	
</div>