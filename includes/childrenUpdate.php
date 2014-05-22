<?php
		include_once("connect_ExodusDB.inc");
		
		/* Update Page
		 * 
		 * The update page is essentially where Information is passed via a
		 * POST Request in a form from one of the various information Panels.
		 * All that is done in each of these for the time being is setting up
		 * a connection to the database, retrieving the information from the
		 * POST, and then finally making an update call to the database to 
		 * change any information that is different.
		 * 
		 * The Children Update works a little differently than the rest. Here
		 * we update the information if there is a child for it.  If there are
		 * no children we update nothing.
		 * 
		 * We call numberr of children and Resident ID since they are hidden
		 * values passed.  This allows us to know how many times we need to go
		 * through the for loop.  We then construct the Update statement.
		 * 
		 * TODOS - Add Error Checking, Test for all Values, Organize into a
		 * 		   separate Updates Folder.
		 */
		
		$numChildren = $_POST["numChildren"];
		$ResidentId = $_POST["ResidentId"];
		
		$sql = "UPDATE children SET";
		
		for($i = 1; $i < $numChildren +1; $i++)
		{
			$childName = $_POST["child_Name".$i.""];
			$childGender = $_POST["child_Gender".$i.""];
			$childSSN = $_POST["child_SSN".$i.""];
			$childCustody = $_POST["child_Custody".$i.""];
			
			echo $childName;
			
			// If this is the first child we do not need a comma at the beginning
			// else we need to add a comma to the beginning
			if ( $i == 1)
			{
				$sql = $sql . "`ChildFullName".$i."`='". $childName ."', `ChildGender".$i."`='". $childGender ."', `ChildSSN".$i."`='". $childSSN . "', `ChildCustodyIssues".$i."`='".$childCustody ."'";
			}
			else 
			{
				$add = ",`ChildFullName".$i."`='". $childName ."', `ChildGender".$i."`='". $childGender ."', `ChildSSN".$i."`='". $childSSN . "', `ChildCustodyIssues".$i."`='".$childCustody ."'";
				$sql = $sql + $add;
			}
		}
		
		echo $sql;
		
		if ($numChildren < 1)
		{
			$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
		}
		
		if(mysql_query($sql . "WHERE `ResidentID`='$ResidentId'"))
	    {
	    	$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
			
	    }
		else
		{
			// FUTURE Error Checking
	  		$data = "Error Inserting Information: " . mysql_error();	
			file_put_contents ("test.txt" , $data );
			echo $sql . "WHERE `ResidentID`='$ResidentId'";
	    	$page = "../userInfoPage.php?id=".$ResidentId.'';
	    	header("Location:{$page}"); 
		}
		
		 
?>