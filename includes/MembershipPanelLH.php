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

<div class="content" id="panel3">

	<?php
		
		$ResidentId = $_GET['id'];
		include_once("includes/connect_ExodusDB.inc");

		$result = mysql_query("SELECT * FROM `Membership` WHERE `ResidentID`='$ResidentId'");
			
		while($row = mysql_fetch_array($result)) 
		{
			$agencyName1 = $row['AgencyName1'];
	     	$amount1 = $row['Amount1'];
			$agencyName2 = $row['AgencyName2'];
			$amount2 = $row['Amount2'];
			$totalIncome = $row['TotalIncome'];
			$rateOfPay = $row['RateOfPay'];
			$workerName = $row['WorkerName'];
			$workerCity = $row['WorkerCity'];
			$workerPhone = $row['WorkerPhone'];
		}	
?>
	
	<h2>Agency Assistance Information</h2>
		<form method="POST" action="includes/agencyUpdate.php">
		<div class="row">
			<div class="large-9 columns">
				<label>Name of Agency:<input type="text" name="agency_Name" id="agencyName" value="<?=$agencyName1;?>" /> </label> 
			</div>

			<div class="large-3 columns"> 
				<label>Monthly Dollar Amount:<input type="text" name="agency_monthlyAmount" id="agencymonthlyAmount" value="<?=$amount1;?>" /></label> 
			</div> 
			
		</div>
		
		<div class="row">
			<div class="large-9 columns">
				<label>Name of Agency:<input type="text"  name="agency_Name2" id="agencyName2" value="<?=$agencyName2;?>" </label> 
			</div>

			<div class="large-3 columns"> 
				<label>Monthly Dollar Amount:<input type="text" name="agency_monthlyAmount2" id="agencymonthlyAmount2" value="<?=$amount2;?>" /></label> 
			</div> 
			
		</div>
		
		<div class="row">
			<div class="large-9 columns">
				<label>Total Amount of Income:<input type="text" name="agency_totalIncome" id="agencytotalIncome" value="<?=$totalIncome;?>" /> </label> 
			</div>
	
			<?php
				$rateOfPay1 = "-- Select --";
				$rateOfPay2 = "Weekly";
				$rateOfPay3 = "Bi-Monthly";
				$rateOfPay4 = "Monthly";
			?>

			<div class="large-3 columns"> 
				<label>Rate of Pay:</label> 
					<select name="agency_rateOfPay" id="agencyrateOfPay" >
						<option  <?php if ($rateOfPay == $rateOfPay1){echo'selected="selected"';}?>>-- Select --</option>
						<option value="Weekly" <?php if ($rateOfPay == $rateOfPay2){echo'selected="selected"';}?>>Weekly</option> 
						<option value="Bi-Monthly" <?php if ($rateOfPay == $rateOfPay3){echo'selected="selected"';}?>>Bi-Monthly</option> 
						<option value="Monthly" <?php if ($rateOfPay == $rateOfPay4){echo'selected="selected"';}?>>Monthly</option> 
					</select>
			</div> 	
		</div>
		
		<div class="row">
			<div class="large-4 columns">
				<label>Welfare Worker's Full Name:<input type="text" name="agency_workerName" id="agencyworkerName" value="<?=$workerName;?>" /> </label> 
			</div>

			<div class="large-4 columns"> 
				<label>City:<input type="text" name="agency_workerCity" id="agencyworkerCity" value="<?=$workerCity;?>" /></label> 
			</div> 
			
			<div class="large-4 columns"> 
				<label>Phone Number:<input type="text" name="agency_workerPhoneNum" id="agencyworkerPhoneNum" value="<?=$workerPhone;?>" /></label> 
			</div> 
			
		</div>
		<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
		<input type="submit" class="small button" value="Save Information"/>
        
		</form>

</div>