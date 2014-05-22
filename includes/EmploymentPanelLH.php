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

<div class="content" id="panel5">
	
<?php
	
	$ResidentId = $_GET['id'];
	include_once("includes/connect_ExodusDB.inc");

	$result = mysql_query("SELECT * FROM `Employment` WHERE `ResidentID`='$ResidentId'");
		
	while($row = mysql_fetch_array($result)) 
	{
		$companyName = $row['CompanyName'];
     	$hoursTo = $row['HoursTo'];
		$hoursFrom = $row['HoursFrom'];
		$managerName = $row['ManagerName'];
		$managerPhone	 = $row['ManagerPhoneNum'];
		$income = $row['Income'];
		$rateofPay = $row['RateOfPay'];
		$currentlyEmployed = $row['CurrentlyEmployed'];
		$goals = $row['EmploymentGoals'];
		
	}	
?>
	
<h2>Employment</h2>

	<form method="POST" action="includes/employmentUpdate.php">
		<div class="row"> 
			<div class="large-4 columns"> 
				
				<?php
					$employmentVal1 = "Y";
					$employmentVal2 = "N";
				?>
				
				<label>Currently employed?</label> 
				<input type="radio" name="current_Employment" value="Y" id="currentEmployment" <?php if ($currentlyEmployed == $employmentVal1){echo'checked="checked"';}?>>
				<label for="agreementY">Yes</label> 
				<input type="radio" name="current_Employment" value="N" id="currentEmployment"<?php if ($currentlyEmployed == $employmentVal2){echo'checked="checked"';}?>>
				<label for="agreementN">No</label> 	
			</div> 
		</div>
		<div class="row"> 
			<div class="large-4 columns"> 
				<label>Company Name: <input type="text" name="companyName_Employment" id="companyNameEmployment"  value="<?=$companyName;?>"  /> </label> 
			</div> 
			<div class="large-4 columns"> 
				<label>Manager's Name: <input type="text"  name="managerName_Employment" id="managerNameEmployment" value="<?=$managerName;?>"  /> </label> 
			</div>
			<div class="large-4 columns"> 
				<label>Manager's Phone Number:<input type="text" name="managerPhoneNum_Employment" id="managerPhoneNumEmployment"  value="<?=$managerPhone;?>"  /> </label> 
			</div>
		</div> 
		<div class="row"> 
				<div class="large-4 columns"> 
					<label>Hours From: <input type="text" id="hoursFromEmployment" name="hoursFrom_Employment" value="<?=$hoursFrom;?>"  /> </label> 
				</div> 
				<div class="large-4 columns"> 
					<label>Hours To: <input type="text" id="hoursToEmployment" name="hoursTo_Employment"  value="<?=$hoursTo;?>"   /> </label> 
				</div>
				<div class="large-4 columns"> 
					<label>Rate of Pay:<input type="text" id="rateOfPayEmployment" name="rateOfPay_Employment" value="<?=$rateofPay;?>"  /> </label> 
				</div>
			</div> 
			<div class="row"> 
				<div class="large-4 columns"> 
					<label>Income:<input type="text" id="incomeEmployment" name="income_Employment" value="<?=$income;?>" /></label> 
				</div>
			</div>
			
			<div class="row"> 
				<div class="large-12 columns"> 
					<label>Employment Goals: <input type="text" name="goals_Employment" id="goalsEmployment" value="<?=$goals;?>" /> </label> 
				</div> 
			</div>
			
			<input type="hidden" name="ResidentId" value="<?=$ResidentId?>">
			<input type="submit" class="small button" value="Save Information"/>
	</form>
</div>