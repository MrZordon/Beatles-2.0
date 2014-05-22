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

<div class="content active" id="panel1">

<?php
		
		$ResidentId = $_GET['id'];
		include_once("includes/connect_ExodusDB.inc");

		$result = mysql_query("SELECT * FROM `genericInfo` WHERE `ResidentID`='$ResidentId'");
			
		while($row = mysql_fetch_array($result)) 
		{
			$firstName = $row['FirstName'];
	     	$middleName = $row['MiddleInitial'];
			$lastName = $row['LastName'];
			$gender = $row['Gender'];
			$ssn = $row['SSN'];
			$cellPhone = $row['PhoneNum'];
			$religion = $row['Religion'];
			$residentType = $row['ResidentType'];
			$streetAddress = $row['Street'];
			$cityAddress = $row['CityTown'];
			$stateAddress = $row['State'];
			$zipAddress = $row['Zip'];
			$referralName = $row['RefPerson'];
			$referralAgency = $row['RefAgency'];
			$referralPhone = $row['RefPhone'];
			$nameKin = $row['NextKin'];
			$relationshipKin = $row['Kinship'];
			$phoneNumKin = $row['KinPhone'];
			$streetKin = $row['KinStreet'];
			$cityKin = $row['KinCityTown'];
			$stateKin = $row['KinState'];
			$zipKin = $row['KinZip'];
			$comments = $row['Comments'];
			$language = $row['Language'];
			$currentResident = $row['Active'];
		}	
?>
	<h2>Generic Information</h2>
	
	<form method="POST" action="includes/genericInfoUpdate.php">
	<div class="row"> 
		<div class="large-4 columns"> 
			<label>First Name: <input type="text" name="first_NameGeneric" id="firstNameGeneric" value="<?=$firstName;?>" /> </label> 
		</div> 
		<div class="large-4 columns"> 
			<label>Middle Initial:<input type="text" name="middleInitial_Generic" id="middleInitialGeneric" value="<?=$middleName;?>" /> </label> 
		</div>
		<div class="large-4 columns"> 
			<label>Last Name: <input type="text" name="last_NameGeneric" id="lastNameGeneric" value="<?=$lastName;?>" /> </label> 
		</div>
		<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
	</div>
	<div class="row"> 
	
		
		<div class="large-4 columns"> 
			<label>Social Security Number:<input type="text"  name="ssn_Generic" id="ssnGeneric" value="<?=$ssn;?>" /> </label> 
		</div>
		
		<div class="large-8 columns"> 
		</div>
	</div>
	
	<div class="row"> 
		<div class="large-4 columns"> 
			<label>Cell Phone:<input type="text" name="cellPhone_Generic" id="cellPhoneGeneric" value="<?=$cellPhone;?>" /> </label> 
		</div> 

		<?php
				$religionVal1 = "Christianity";
				$religionVal2 = "Judaism";
				$religionVal3 = "Buddhism";
				$religionVal4 = "Hinduism";
				$religionVal5 = "Islamic";
				$religionVal6 = "Other";
				$religionVal7 = "-- Select --";
	
		?>
		<div class="large-4 columns"> 
			<label>Religion:
			<select name="religion_Generic" id="religionGeneric"> 
				<option value="-- Select --" <?php if ($religion == $religionVal7){echo'selected="selected"';}?>>-- Select --</option>
				<option value="Christianity" <?php if ($religion == $religionVal1){echo'selected="selected"';}?>>Christianity</option> 
				<option value="Judaism" <?php if ($religion == $religionVal2){echo'selected="selected"';}?>>Judaism</option> 
				<option value="Buddhism" <?php if ($religion == $religionVal3){echo'selected="selected"';}?>>Buddhism</option> 
				<option value="Hinduism" <?php if ($religion == $religionVal4){echo'selected="selected"';}?>>Hinduism</option>
				<option value="Islamic" <?php if ($religion == $religionVal5){echo'selected="selected"';}?>>Islamic</option> 
				<option value="Other" <?php if ($religion == $religionVal6){echo'selected="selected"';}?>>Other</option> 
			</select> 
			</label> 
		</div>
		
		<div class="large-4 columns"> 
			<label>Select a Resident Type:</label> 
				<select>
					<option name="residentType_Generic" id="residentTypeGeneric" value="LH">Lazarus House</option> 
				</select>
		</div> 
	</div> 
	
	<!-- Previously Lived Address Info -->
	<h2>Previous Address Info</h2>	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Street Address: <input type="text" name="streetAddress_Generic" id="streetAddressGeneric"  value="<?=$streetAddress;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			<label>City: <input type="text" name="townAddress_Generic" id="townAddressGeneric"  value="<?=$cityAddress;?>" /> </label> 
		</div>
			
		<div class="large-4 columns"> 
			<label>State:<input type="text" name="stateAddress_Generic" id="stateAddressGeneric"  value="<?=$stateAddress;?>" /> </label> 
		</div>

	</div>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Zip Code: <input type="text" name="zipAddress_Generic" id="zipAddressGeneric"  value="<?=$zipAddress;?>" /> </label> 
		</div> 
	</div>
	
	<!-- Referral Information -->
	<h2>Referral Info</h2>
	<div class="row">
		<div class="large-4 columns"> 
			<label>Name of Referral Person: <input type="text" name="referralName_Generic" id="referralNameGeneric" value="<?=$referralName;?>"  /> </label> 
		</div> 
		<div class="large-4 columns"> 
			<label>Name of Referral Agency: <input type="text" name="referralAgency_Generic" id="referralAgencyGeneric"  value="<?=$referralAgency;?>"/> </label> 
		</div> 
		<div class="large-4 columns"> 
				<label>Referral Agency Phone Number: <input type="text" name="referralPhoneNum_Generic" id="referralPhoneNumGeneric"  value="<?=$referralPhone;?>"  /> </label> 
		</div>
	</div>

	<!-- Next of Kin -->
	<h2>Next of Kin</h2>
	<div class="row">
		<div class="large-4 columns"> 
			<label>Full Name:<input type="text" name="nameKin_Generic" id="nameKinGeneric" value="<?=$nameKin;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			<label>Relationship: <input type="text" name="relationship_Generic" id="relationshipGeneric" value="<?=$relationshipKin;?>" /> </label> 
		</div>
			
		<div class="large-4 columns"> 
			<label>Phone Number:<input type="text" name="phoneNumKin_Generic" id="phoneNumKinGeneric" value="<?=$phoneNumKin;?>" /> </label> 
		</div>
	</div>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Street Address: <input type="text" name="streetAddressKin_Generic" id="streetAddressKinGeneric" value="<?=$streetKin;?>" /> </label> 
		</div> 
			
		<div class="large-4 columns"> 
			<label>City: <input type="text" name="cityKin_Generic" id="cityKinGeneric" value="<?=$cityKin;?>" /> </label> 
		</div>
			
		<div class="large-4 columns"> 
			<label>State:<input type="text" name="stateKin_Generic" id="stateKinGeneric" value="<?=$stateKin;?>" /> </label> 
		</div>
	</div>
	
	<div class="row">
		<div class="large-4 columns"> 
			<label>Zip Code: <input type="text" name="zipKin_Generic" id="zipKinGeneric" value="<?=$zipKin;?>" /> </label> 
		</div>
		
		<?php
				$currentVal1 = "Y";
				$currentVal2 = "N";
				$currentVal3 = "-- Select --";
	
		?>
		<div class="large-4 columns"> 
			<label>Current Resident:
				<select name="currentResident_Generic" id="currentResidentGeneric"> 
					<option value="-- Select --" <?php if ($currentResident == $currentVal1){echo'selected="selected"';}?>>-- Select --</option>
					<option value="Y" <?php if ($currentResident == $currentVal1){echo'selected="selected"';}?>>Yes</option> 
					<option value="N" <?php if ($currentResident == $currentVal2){echo'selected="selected"';}?>>No</option> 
				</select> 
			</label>
		</div>
		
		<?php
				$languageVal1 = "English";
				$languageVal2 = "Spanish";
				$languageVal3 = "French";
				$languageVal4 = "Portuguese";
				$languageVal5 = "Chineese";
				$languageVal6 = "Other";
				$languageVal7 = "-- Select --";
	
		?>
		<div class="large-4 columns"> 
			<label>Language:
				<select name="language_Generic" id="languageGeneric"> 
					<option value="-- Select --" <?php if ($language == $languageVal7){echo'selected="selected"';}?>>-- Select --</option>
					<option value="English" <?php if ($language == $languageVal1){echo'selected="selected"';}?>>English</option> 
					<option value="Spanish" <?php if ($language == $languageVal2){echo'selected="selected"';}?>>Spanish</option> 
					<option value="French" <?php if ($language == $languageVal3){echo'selected="selected"';}?>>French</option> 
					<option value="Portuguese" <?php if ($language == $languageVal4){echo'selected="selected"';}?>>Portuguese</option>
					<option value="Chineese <?php if ($language == $languageVal5){echo'selected="selected"';}?>">Chineese</option> 
					<option value="Other" <?php if ($language == $languageVal6){echo'selected="selected"';}?>>Other</option> 
				</select> 
			</label> 
		</div>
	</div>
		
	
	<div class="row"> 
		<div class="large-12 columns"> 
			<label>Comments: <input type="text" name="comments_Generic" id="commentsGeneric" value="<?=$comments;?>" /> </label> 
		</div> 
	</div> 
	
	 <input type="submit" class="small button" value="Save Information"/>
        
</form>

</div>