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

<div class="content" id="panel7">
	
	<h2>Vehicle Information</h2>
	
	<?php
	
		$ResidentId = $_GET['id'];
		include_once("includes/connect_ExodusDB.inc");
	
		$result = mysql_query("SELECT * FROM `vehicle` WHERE `ResidentID`='$ResidentId'");
			
		while($row = mysql_fetch_array($result)) 
		{
			$registrationNameVehichle = $row['NameOnRegistration'];
	     	$licenseNumVehichle = $row['LicenseNum'];
			$stateVehichle = $row['State'];
			$makeVehichle = $row['Make'];
			$colorVehichle	 = $row['Color'];
			$modelVehichle = $row['Model'];
			$oln = $row['OLN'];
		
		}	
	?>
	
	<form method="POST" action="includes/vehicleUpdate.php">
			<div class="row">
					<div class="large-4 columns"> 
						<label>Name on Registration: <input type="text" id="registrationNameVehichle" name="registrationName_Vehichle" value="<?=$registrationNameVehichle;?>"  /> </label> 
					</div> 
					<div class="large-4 columns"> 
						<label>License Number: <input type="text" id="licenseNumVehichle" name="licenseNum_Vehichle"  value="<?=$licenseNumVehichle;?>"/> </label> 
					</div> 
					<div class="large-4 columns"> 
							<label>State: <input type="text" id="stateVehichle"  name="state_Vehichle" value="<?=$stateVehichle;?>"/> </label> 
					</div>
			</div>
			<div class="row">
					<div class="large-3 columns"> 
						<label>Make: <input type="text" id="makeVehichle" name="make_Vehichle" value="<?=$makeVehichle;?>"/> </label> 
					</div> 
					<div class="large-3 columns"> 
						<label>Color: <input type="text" id="colorVehichle"  name="color_Vehichle" value="<?=$colorVehichle;?>"/> </label> 
					</div> 
					<div class="large-3 columns"> 
						<label>Model: <input type="text" id="modelVehichle"  name="model_Vehichle" value="<?=$modelVehichle;?>"/> </label> 
					</div> 
					<div class="large-3 columns"> 
						<label>OLN: <input type="text" id="oln"  name="oln_Vehichle" value="<?=$oln;?>"/> </label> 
					</div> 
			</div>
			
			<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
			<input type="submit" class="small button" value="Save Information"/>

	</form>
</div>