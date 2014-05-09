<?php
		include_once("connect_ExodusDB.inc");
		
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