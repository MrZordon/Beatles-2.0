<?php
    //include db configuration file
    include_once("connect_ExodusDB.inc");
	session_start();
    
	// The reason for the cascading ifs is to see how many variables
	// we have to add to the database.  No need to add more than necessary
    if(isset($_POST["child_Name1"]) && strlen($_POST["child_Name1"])>0)
    {
    	$childName1 = filter_var($_POST["child_Name1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
     	$childGender1 = filter_var($_POST["child_Gender1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childSSN1 = filter_var($_POST["child_SSN1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childMonth1 = filter_var($_POST["child_Month1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childDay1 = filter_var($_POST["child_Day1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childYear1 = filter_var($_POST["child_Year1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$childCustody1 = filter_var($_POST["child_Custody1"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$counter++;
		$child_DOB1 = $childYear1 + '-' + $childMonth1 + '-' + $childDay1;

			if(isset($_POST["child_Name2"]) && strlen($_POST["child_Name2"])>0)
			{
				$childName2 = filter_var($_POST["child_Name2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		     	$childGender2 = filter_var($_POST["child_Gender2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childSSN2 = filter_var($_POST["child_SSN2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childMonth2 = filter_var($_POST["child_Month2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childDay2 = filter_var($_POST["child_Day2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childYear2 = filter_var($_POST["child_Year2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				$childCustody2 = filter_var($_POST["child_Custody2"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

				$child_DOB2 = $childYear2 + '-' + $childMonth2 + '-' + $childDay2;
				$counter ++;
				if(isset($_POST["child_Name3"]) && strlen($_POST["child_Name3"])>0)
    			{
    				$childName3 = filter_var($_POST["child_Name3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
			     	$childGender3 = filter_var($_POST["child_Gender3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childSSN3 = filter_var($_POST["child_SSN3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childMonth3 = filter_var($_POST["child_Month3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childDay3 = filter_var($_POST["child_Day3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childYear3 = filter_var($_POST["child_Year3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$childCustody3 = filter_var($_POST["child_Custody3"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					$child_DOB3 = $childYear3 + '-' + $childMonth3 + '-' + $childDay3;
					$counter ++;
					if(isset($_POST["child_Name4"]) && strlen($_POST["child_Name4"])>0)
    				{
    					$childName4 = filter_var($_POST["child_Name4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				     	$childGender4 = filter_var($_POST["child_Gender4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childSSN4 = filter_var($_POST["child_SSN4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childMonth4 = filter_var($_POST["child_Month4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childDay4 = filter_var($_POST["child_Day4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childYear4 = filter_var($_POST["child_Year4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$childCustody4 = filter_var($_POST["child_Custody4"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						$child_DOB4 = $childYear4 + '-' + $childMonth4 + '-' + $childDay4;
						$counter ++;
						if(isset($_POST["child_Name5"]) && strlen($_POST["child_Name5"])>0)
	    				{
	    					$childName5 = filter_var($_POST["child_Name5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
					     	$childGender5 = filter_var($_POST["child_Gender5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childSSN5 = filter_var($_POST["child_SSN5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childMonth5 = filter_var($_POST["child_Month5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childDay5 = filter_var($_POST["child_Day5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childYear5 = filter_var($_POST["child_Year5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$childCustody5 = filter_var($_POST["child_Custody5"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							$child_DOB5 = $childYear5 + '-' + $childMonth5 + '-' + $childDay5;
							$counter ++;
							if(isset($_POST["child_Name6"]) && strlen($_POST["child_Name6"])>0)
		    				{
		    					$childName6 = filter_var($_POST["child_Name6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
						     	$childGender6 = filter_var($_POST["child_Gender6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childSSN6 = filter_var($_POST["child_SSN6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childMonth6 = filter_var($_POST["child_Month6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childDay6 = filter_var($_POST["child_Day6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childYear6 = filter_var($_POST["child_Year6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$childCustody6 = filter_var($_POST["child_Custody6"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								$child_DOB6 = $childYear6 + '-' + $childMonth6 + '-' + $childDay6;
								$counter ++;
								if(isset($_POST["child_Name7"]) && strlen($_POST["child_Name7"])>0)
			    				{
			    					$childName7 = filter_var($_POST["child_Name7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
							     	$childGender7 = filter_var($_POST["child_Gender7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childSSN7 = filter_var($_POST["child_SSN7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childMonth7 = filter_var($_POST["child_Month7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childDay7 = filter_var($_POST["child_Day7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childYear7 = filter_var($_POST["child_Year7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$childCustody7 = filter_var($_POST["child_Custody7"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
									$child_DOB7 = $childYear7 + '-' + $childMonth7 + '-' + $childDay7;
									$counter ++;
									if(isset($_POST["child_Name8"]) && strlen($_POST["child_Name8"])>0)
				    				{
				    					$childName8 = filter_var($_POST["child_Name8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
								     	$childGender8 = filter_var($_POST["child_Gender8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childSSN8 = filter_var($_POST["child_SSN8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childMonth8 = filter_var($_POST["child_Month8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childDay8 = filter_var($_POST["child_Day8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childYear8 = filter_var($_POST["child_Year8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$childCustody8 = filter_var($_POST["child_Custody8"],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
										$child_DOB8 = $childYear8 + '-' + $childMonth8 + '-' + $childDay8;
										$counter ++;
				    				} // end of if child 8
				    				else
									{											
										$childName8 = null;
								     	$childGender8 = null;
										$childSSN8 = null;
										$childMonth8 = null;
										$childDay8 = null;
										$childYear8 = null;
										$childCustody8 = null;
										$child_DOB8 = null;
									}
			    				}// end of if child 7
			    				else
								{
									$childName7 = null;
							     	$childGender7 = null;
									$childSSN7 = null;
									$childMonth7 = null;
									$childDay7 = null;
									$childYear7 = null;
									$childCustody7 = null;
									$child_DOB7 = null;

									$childName8 = null;
							     	$childGender8 = null;
									$childSSN8 = null;
									$childMonth8 = null;
									$childDay8 = null;
									$childYear8 = null;
									$childCustody8 = null;
									$child_DOB8 = null;
								}
		    				} // end of if child 6
		    				else
							{																	
								$childName6 = null;
						     	$childGender6 = null;
								$childSSN6 = null;
								$childMonth6 = null;
								$childDay6 = null;
								$childYear6 = null;
								$childCustody6 = null;
								$child_DOB6 = null;

								$childName7 = null;
						     	$childGender7 = null;
								$childSSN7 = null;
								$childMonth7 = null;
								$childDay7 = null;
								$childYear7 = null;
								$childCustody7 = null;
								$child_DOB7 = null;


								$childName8 = null;
						     	$childGender8 = null;
								$childSSN8 = null;
								$childMonth8 = null;
								$childDay8 = null;
								$childYear8 = null;
								$childCustody8 = null;
								$child_DOB8 = null;
							}
	    				}// end of child 5
	    				else
						{	
							$childName5 = null;
					     	$childGender5 = null;
							$childSSN5 = null;
							$childMonth5 = null;
							$childDay5 = null;
							$childYear5 = null;
							$childCustody5 = null;
							$child_DOB5 = null;

							$childName6 = null;
					     	$childGender6 = null;
							$childSSN6 = null;
							$childMonth6 = null;
							$childDay6 = null;
							$childYear6 = null;
							$childCustody6 = null;
							$child_DOB6 = null;

							$childName7 = null;
					     	$childGender7 = null;
							$childSSN7 = null;
							$childMonth7 = null;
							$childDay7 = null;
							$childYear7 = null;
							$childCustody7 = null;
							$child_DOB7 = null;


							$childName8 = null;
					     	$childGender8 = null;
							$childSSN8 = null;
							$childMonth8 = null;
							$childDay8 = null;
							$childYear8 = null;
							$childCustody8 = null;
							$child_DOB8 = null;
						}
    				} // end of child 4
    				else
					{
						$childName4 = null;
				     	$childGender4 = null;
						$childSSN4 = null;
						$childMonth4 = null;
						$childDay4 = null;
						$childYear4 = null;
						$childCustody4 = null;
						$child_DOB4 = null;

						$childName5 = null;
				     	$childGender5 = null;
						$childSSN5 = null;
						$childMonth5 = null;
						$childDay5 = null;
						$childYear5 = null;
						$childCustody5 = null;
						$child_DOB5 = null;

						$childName6 = null;
				     	$childGender6 = null;
						$childSSN6 = null;
						$childMonth6 = null;
						$childDay6 = null;
						$childYear6 = null;
						$childCustody6 = null;
						$child_DOB6 = null;

						$childName7 = null;
				     	$childGender7 = null;
						$childSSN7 = null;
						$childMonth7 = null;
						$childDay7 = null;
						$childYear7 = null;
						$childCustody7 = null;
						$child_DOB7 = null;


						$childName8 = null;
				     	$childGender8 = null;
						$childSSN8 = null;
						$childMonth8 = null;
						$childDay8 = null;
						$childYear8 = null;
						$childCustody8 = null;
						$child_DOB8 = null;
					}
    			} // end of child 3
				else
				{
					$childName3 = null;
			     	$childGender3 = null;
					$childSSN3 = null;
					$childMonth3 = null;
					$childDay3 = null;
					$childYear3 = null;
					$childCustody3 = null;
					$child_DOB3 = null;

					$childName4 = null;
			     	$childGender4 = null;
					$childSSN4 = null;
					$childMonth4 = null;
					$childDay4 = null;
					$childYear4 = null;
					$childCustody4 = null;
					$child_DOB4 = null;

					$childName5 = null;
			     	$childGender5 = null;
					$childSSN5 = null;
					$childMonth5 = null;
					$childDay5 = null;
					$childYear5 = null;
					$childCustody5 = null;
					$child_DOB5 = null;

					$childName6 = null;
			     	$childGender6 = null;
					$childSSN6 = null;
					$childMonth6 = null;
					$childDay6 = null;
					$childYear6 = null;
					$childCustody6 = null;
					$child_DOB6 = null;

					$childName7 = null;
			     	$childGender7 = null;
					$childSSN7 = null;
					$childMonth7 = null;
					$childDay7 = null;
					$childYear7 = null;
					$childCustody7 = null;
					$child_DOB7 = null;


					$childName8 = null;
			     	$childGender8 = null;
					$childSSN8 = null;
					$childMonth8 = null;
					$childDay8 = null;
					$childYear8 = null;
					$childCustody8 = null;
					$child_DOB8 = null;
				}

			}// end of if child 2
			else
			{
				$childName2 = null;
		     	$childGender2 = null;
				$childSSN2 = null;
				$childMonth2 = null;
				$childDay2 = null;
				$childYear2 = null;
				$childCustody2 = null;

				$child_DOB2 = null;

				$childName3 = null;
		     	$childGender3 = null;
				$childSSN3 = null;
				$childMonth3 = null;
				$childDay3 = null;
				$childYear3 = null;
				$childCustody3 = null;
				$child_DOB3 = null;

				$childName4 = null;
		     	$childGender4 = null;
				$childSSN4 = null;
				$childMonth4 = null;
				$childDay4 = null;
				$childYear4 = null;
				$childCustody4 = null;
				$child_DOB4 = null;

				$childName5 = null;
		     	$childGender5 = null;
				$childSSN5 = null;
				$childMonth5 = null;
				$childDay5 = null;
				$childYear5 = null;
				$childCustody5 = null;
				$child_DOB5 = null;

				$childName6 = null;
		     	$childGender6 = null;
				$childSSN6 = null;
				$childMonth6 = null;
				$childDay6 = null;
				$childYear6 = null;
				$childCustody6 = null;
				$child_DOB6 = null;

				$childName7 = null;
		     	$childGender7 = null;
				$childSSN7 = null;
				$childMonth7 = null;
				$childDay7 = null;
				$childYear7 = null;
				$childCustody7 = null;
				$child_DOB7 = null;


				$childName8 = null;
		     	$childGender8 = null;
				$childSSN8 = null;
				$childMonth8 = null;
				$childDay8 = null;
				$childYear8 = null;
				$childCustody8 = null;
				$child_DOB8 = null;
			}

	} // end of child 1
	else
	{
		$childName1 = null;
     	$childGender1 = null;
		$childSSN1 = null;
		$childMonth1 = null;
		$childDay1 = null;
		$childYear1 = null;
		$childCustody1 = null;

		$child_DOB1 = null;

		$childName2 = null;
     	$childGender2 = null;
		$childSSN2 = null;
		$childMonth2 = null;
		$childDay2 = null;
		$childYear2 = null;
		$childCustody2 = null;

		$child_DOB2 = null;

		$childName3 = null;
     	$childGender3 = null;
		$childSSN3 = null;
		$childMonth3 = null;
		$childDay3 = null;
		$childYear3 = null;
		$childCustody3 = null;
		$child_DOB3 = null;

		$childName4 = null;
     	$childGender4 = null;
		$childSSN4 = null;
		$childMonth4 = null;
		$childDay4 = null;
		$childYear4 = null;
		$childCustody4 = null;
		$child_DOB4 = null;

		$childName5 = null;
     	$childGender5 = null;
		$childSSN5 = null;
		$childMonth5 = null;
		$childDay5 = null;
		$childYear5 = null;
		$childCustody5 = null;
		$child_DOB5 = null;

		$childName6 = null;
     	$childGender6 = null;
		$childSSN6 = null;
		$childMonth6 = null;
		$childDay6 = null;
		$childYear6 = null;
		$childCustody6 = null;
		$child_DOB6 = null;

		$childName7 = null;
     	$childGender7 = null;
		$childSSN7 = null;
		$childMonth7 = null;
		$childDay7 = null;
		$childYear7 = null;
		$childCustody7 = null;
		$child_DOB7 = null;


		$childName8 = null;
     	$childGender8 = null;
		$childSSN8 = null;
		$childMonth8 = null;
		$childDay8 = null;
		$childYear8 = null;
		$childCustody8 = null;
		$child_DOB8 = null;
	}

	$ResidentId = $_SESSION['ResidentID'];

	$query = mysql_query("SELECT ResidentID FROM `children` WHERE `ResidentID` = $ResidentId");
	if (mysql_num_rows($query) == 0) 
	{

		if(mysql_query("INSERT INTO `children`(`ResidentID`, `NumChildren`, `ChildFullName1`, `ChildGender1`, `ChildDOB1`, `ChildSSN1`, `ChildCustodyIssues1`, `ChildFullName2`, `ChildGender2`, `ChildDOB2`, `ChildSSN2`, `ChildCustodyIssues2`, `ChildFullName3`, `ChildGender3`, `ChildDOB3`, `ChildSSN3`, `ChildCustodyIssues3`, `ChildFullName4`, `ChildGender4`, `ChildDOB4`, `ChildSSN4`, `ChildCustodyIssues4`, `ChildFullName5`, `ChildGender5`, `ChildDOB5`, `ChildSSN5`, `ChildCustodyIssues5`, `ChildFullName6`, `ChildGender6`, `ChildDOB6`, `ChildSSN6`, `ChildCustodyIssues6`, `ChildFullName7`, `ChildGender7`, `ChildDOB7`, `ChildSSN7`, `ChildCustodyIssues7`, `ChildFullName8`, `ChildGender8`, `ChildDOB8`, `ChildSSN8`, `ChildCustodyIssues8`) VALUES ('$ResidentId','$counter','$childName1','$childGender1','$child_DOB1','$childSSN1','$childCustody1','$childName2','$childGender2','$child_DOB2','$childSSN2','$childCustody2','$childName3','$childGender3','$child_DOB3','$childSSN3','$childCustody3','$childName4','$childGender4','$child_DOB4','$childSSN4','$childCustody4','$childName5','$childGender5','$child_DOB5','$childSSN5','$childCustody5','$childName6','$childGender6','$child_DOB6','$childSSN6','$childCustody6','$childName7','$childGender7','$child_DOB7','$childSSN7','$childCustody7','$childName8','$childGender8','$child_DOB8','$childSSN8','$childCustody8')",$con))
	    {

	   	}
		else
		{
	  		//FUTURE: Error Checking can go here
	  		$data = "Error Inserting Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'] . "DataVars:". $ResidentId.$counter.$childName1.$childGender1.$child_DOB1.$childSSN1.$childCustody1.$childName2.$childGender2.$child_DOB2.$childSSN2.$childCustody2.$childName3.$childGender3.$child_DOB3.$childSSN3.$childCustody3.$childName4.$childGender4.$child_DOB4.$childSSN4.$childCustody4.$childName5.$childGender5.$child_DOB5.$childSSN5.$childCustody5.$childName6.$childGender6.$child_DOB6.$childSSN6.$childCustody6.$childName7.$childGender7.$child_DOB7.$childSSN7.$childCustody7.$childName8.$childGender8.$child_DOB8.$childSSN8.$childCustody8;

			file_put_contents ("test.txt" , $data );
		}

	}
	else 
	{

		if(mysql_query("UPDATE `children` SET `NumChildren`='$counter',`ChildFullName1`='$childName1',`ChildGender1`='$childGender1',`ChildDOB1`='$child_DOB1' ,`ChildSSN1`='$childSSN1',`ChildCustodyIssues1`='$childCustody1',`ChildFullName2`='$childName2',`ChildGender2`='$childGender2',`ChildDOB2`='$child_DOB2',`ChildSSN2`='$childSSN2',`ChildCustodyIssues2`='$childCustody2',`ChildFullName3`='childName3',`ChildGender3`='$childGender3',`ChildDOB3`='$child_DOB3',`ChildSSN3`='$childSSN3',`ChildCustodyIssues3`='$childCustody3',`ChildFullName4`='$childName4',`ChildGender4`='$childGender4',`ChildDOB4`='$child_DOB4',`ChildSSN4`='$childSSN4',`ChildCustodyIssues4`='$childCustody4',`ChildFullName5`='$childName5',`ChildGender5`='$childGender5',`ChildDOB5`='$child_DOB5',`ChildSSN5`='$childSSN5',`ChildCustodyIssues5`='$childCustody5',`ChildFullName6`='$childName6',`ChildGender6`='$childGender6',`ChildDOB6`='$child_DOB6',`ChildSSN6`='$childSSN6',`ChildCustodyIssues6`='$childCustody6',`ChildFullName7`='$childName7',`ChildGender7`='$childGender7',`ChildDOB7`='$child_DOB7',`ChildSSN7`='$childSSN7',`ChildCustodyIssues7`='$childCustody7',`ChildFullName8`='$childName8',`ChildGender8`='$childGender8',`ChildDOB8`='$child_DOB8',`ChildSSN8`='$childSSN8',`ChildCustodyIssues8`='$childCustody8' WHERE `ResidentID` = $ResidentId"))
		{

	    }
		else
		{
			// Future Error Logs
	  		//FUTURE: Error Checking can go here
	  		$data = "Error Updating Information: " . mysql_error() . 'ResidentID:' . $_SESSION['ResidentID'] . "DataVars:". $ResidentId.$counter.$childName1.$childGender1.$child_DOB1.$childSSN1.$childCustody1.$childName2.$childGender2.$child_DOB2.$childSSN2.$childCustody2.$childName3.$childGender3.$child_DOB3.$childSSN3.$childCustody3.$childName4.$childGender4.$child_DOB4.$childSSN4.$childCustody4.$childName5.$childGender5.$child_DOB5.$childSSN5.$childCustody5.$childName6.$childGender6.$child_DOB6.$childSSN6.$childCustody6.$childName7.$childGender7.$child_DOB7.$childSSN7.$childCustody7.$childName8.$childGender8.$child_DOB8.$childSSN8.$childCustody8;

			file_put_contents ("test.txt" , $data );
		}
	}

    
    ?>
