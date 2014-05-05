
    <?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
    
	// The reason for the cascading ifs is to see how many variables
	// we have to add to the database.  No need to add more than necessary
    if(isset($_POST["child_Name1"]) && strlen($_POST["child_Name1"])>0)
    {
    	$ssn = filter_var($_POST["ssn_Generic"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);	
    	$childName1 = filter_var($_POST["child_Name1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
     	$childGender1 = filter_var($_POST["child_Gender1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childSSN1 = filter_var($_POST["child_SSN1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childMonth1 = filter_var($_POST["child_Month1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childDay1 = filter_var($_POST["child_Day1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childYear1 = filter_var($_POST["child_Year1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
			
			if(isset($_POST["child_Name2"]) && strlen($_POST["child_Name2"])>0)
			{
				$childName2 = filter_var($_POST["child_Name2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		     	$childGender2 = filter_var($_POST["child_Gender2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childSSN2 = filter_var($_POST["child_SSN2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childMonth2 = filter_var($_POST["child_Month2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childDay2 = filter_var($_POST["child_Day2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childYear2 = filter_var($_POST["child_Year2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				
				if(isset($_POST["child_Name3"]) && strlen($_POST["child_Name3"])>0)
    			{
    				$childName3 = filter_var($_POST["child_Name3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
			     	$childGender3 = filter_var($_POST["child_Gender3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childSSN3 = filter_var($_POST["child_SSN3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childMonth3 = filter_var($_POST["child_Month3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childDay3 = filter_var($_POST["child_Day3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childYear3 = filter_var($_POST["child_Year3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					
					
					if(isset($_POST["child_Name4"]) && strlen($_POST["child_Name4"])>0)
    				{
    					$childName4 = filter_var($_POST["child_Name4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				     	$childGender4 = filter_var($_POST["child_Gender4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childSSN4 = filter_var($_POST["child_SSN4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childMonth4 = filter_var($_POST["child_Month4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childDay4 = filter_var($_POST["child_Day4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childYear4 = filter_var($_POST["child_Year4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						
						if(isset($_POST["child_Name5"]) && strlen($_POST["child_Name5"])>0)
	    				{
	    					$childName5 = filter_var($_POST["child_Name5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					     	$childGender5 = filter_var($_POST["child_Gender5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childSSN5 = filter_var($_POST["child_SSN5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childMonth5 = filter_var($_POST["child_Month5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childDay5 = filter_var($_POST["child_Day5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childYear5 = filter_var($_POST["child_Year5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							
							if(isset($_POST["child_Name6"]) && strlen($_POST["child_Name6"])>0)
		    				{
		    					$childName6 = filter_var($_POST["child_Name6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						     	$childGender6 = filter_var($_POST["child_Gender6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childSSN6 = filter_var($_POST["child_SSN6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childMonth6 = filter_var($_POST["child_Month6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childDay6 = filter_var($_POST["child_Day6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childYear6 = filter_var($_POST["child_Year6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								
								if(isset($_POST["child_Name7"]) && strlen($_POST["child_Name7"])>0)
			    				{
			    					$childName7 = filter_var($_POST["child_Name7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							     	$childGender7 = filter_var($_POST["child_Gender7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childSSN7 = filter_var($_POST["child_SSN7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childMonth7 = filter_var($_POST["child_Month7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childDay7 = filter_var($_POST["child_Day7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childYear7 = filter_var($_POST["child_Year7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									
									if(isset($_POST["child_Name8"]) && strlen($_POST["child_Name8"])>0)
				    				{
				    					$childName8 = filter_var($_POST["child_Name8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								     	$childGender8 = filter_var($_POST["child_Gender8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childSSN8 = filter_var($_POST["child_SSN8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childMonth8 = filter_var($_POST["child_Month8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childDay8 = filter_var($_POST["child_Day8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childYear8 = filter_var($_POST["child_Year8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										
				    				} // end of child 8
			    				}// end of child 7
		    				} // end of child 6
	    				}// end of child 5
    				} // end of child 4
    			} // end of child 3
				
			}// end of child 2
	
	} // end of child 1
	else
	{
		// FUTURE: Error Checking can go here
	}

	$sql="SELECT ResidentID FROM `genericinfo` WHERE `SSN` = '$ssn'";
	$result=mysql_query($sql);
	$id;

	$query = mysql_query("SELECT ResidentID FROM `genericinfo` WHERE `SSN` = '$ssn");
	if (mysql_num_rows($query) == 0) 
	{
	    // FUTURE: Error Checking can go here
	} 
	else 
	{
	    while ($row = mysql_fetch_array($query)) 
	    {
			$id = $row[ResidentID];
	    }
	}
	
	
	//if(mysql_query("INSERT INTO Children (ResidentID,ChildName1,ChildGender1,ChildDOB1,ChildSSN1,ChildCustodyIssues1,Religion,ResidentType,Street,CityTown,State,Zip,RefPerson,RefAgency,RefPhone,NextKin,Kinship,KinStreet,KinCityTown,KinState,KinPhone,KinZip,Comments,Active,Language,DateAdded,DOB) VALUES('$firstName','$middleName','$lastName','$gender','$ssn','$cellPhone','$religion','$residentType','$streetAddress','$cityAddress','$stateAddress','$zipAddress','$referralName','$referralAgency','$referralPhone','$nameKin','$relationshipKin','$streetKin','$cityKin','$stateKin','$phoneNumKin','$zipKin','$comments','$currentResident','$language','$DateAdded','$DOBGeneric')",$con))
    //{
	//   echo "insert";
   // }
	//else
	//{
  		// FUTURE: Error Checking can go here
	//}
	
	//input the sql string into a query function and save the results to a variable
	//$result=mysql_query($sql);
	
	//throw exception is the query cant run
	//if(!$result) die ('Unable to run login query:'.mysql_error());
	
	//Count the number of rows returned in the result set and save as a variable
	//$count = mysql_num_rows($result);
	
	// If there are no results with the same SSN that means we are doing an Insert
	// if there is a result with the same SSN we are going to do an update
	//if($count == 0) 
	//{
	//	if(mysql_query("INSERT INTO genericinfo (FirstName,MiddleInitial,LastName,Gender,SSN,PhoneNum,Religion,ResidentType,Street,CityTown,State,Zip,RefPerson,RefAgency,RefPhone,NextKin,Kinship,KinStreet,KinCityTown,KinState,KinPhone,KinZip,Comments,Active,Language,DateAdded,DOB) VALUES('$firstName','$middleName','$lastName','$gender','$ssn','$cellPhone','$religion','$residentType','$streetAddress','$cityAddress','$stateAddress','$zipAddress','$referralName','$referralAgency','$referralPhone','$nameKin','$relationshipKin','$streetKin','$cityKin','$stateKin','$phoneNumKin','$zipKin','$comments','$currentResident','$language','$DateAdded','$DOBGeneric')",$con))
	//    {
	//	   echo "insert";
	//    }
	//	else
	//	{
	//  		echo "Error Adding Information: " . mysql_error();	
	//	}
	//}
	//else 
	//{
		
	//	if(mysql_query("UPDATE genericinfo SET `ResidentType`='$residentType',`Active`='$currentResident',`FirstName`='$firstName',`MiddleInitial`='$middleName',`LastName`='$lastName',`Gender`='$gender',`SSN`='$ssn',`DOB`='$DOBGeneric',`Age`='NULL',`Language`='$language',`Religion`='$religion',`Street`='$streetAddress',`CityTown`='$cityAddress',`State`='$stateAddress',`Zip`='zipAddress',`PhoneNum`='$cellPhone',`RefPerson`='$referralName',`RefAgency`='$referralAgency',`RefPhone`='$referralPhone',`NextKin`='$nameKin',`Kinship`='$relationshipKin',`KinStreet`='$streetKin',`KinCityTown`='$cityKin',`KinState`='$stateKin',`KinZip`='$zipKin',`KinPhone`='$phoneNumKin',`Comments`='$comments'"))
	//    {
	//	   echo "update";
	//    }
	//	else
	//	{
	//		$data = "Error Adding Information: " . mysql_error();	
	//		file_put_contents ("test.txt" , $data );
	//  		
	//	}
	//}
	
    
    ?>