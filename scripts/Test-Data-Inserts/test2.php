<?php
	//Start our session
	session_start();
	
	//Passing around session data for DB connect
	$_SESSION['user'] = 'root';
	$_SESSION['password'] = "";

	//string variable
	$newLine = "<br>";
	$newline = "<br>";
	
	//Open the connection
	include 'OpenConnection.php';

	//PDO Parameter Constants
	$string = 2;
	$int = 1;
	$null =  0;
	
	$time_input = '1:00 PM';
//---------------------------------------------------------------------------/		
	//Define test data
	 $userName = "hovie"; 
	 $password  = "hov";
	 $lastLoggedOn = NULL;
	 $currentlyLoggedOn  = 'Y';
	 $userType = 'LH';
	
	//Perform the insert
	include getcwd() . '../Insert/InsertUser.php';
	
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentType= "LH";
	 $active= "Y";
	 $residentID= 2; 
	 $dateAdded = NULL;//date('Yw-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $firstName= "John"; 
	 $middleInitial= "X";
	 $lastName= "Ashe";
	 $gender= "M";
	 $ssn= "777885555";
	 $dob= NULL; //date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $language= "EN";
	 $religion= "Muslim";
	 $street= "78 Nope Street";
	 $cityTown= "Andover";
	 $state= "MA";
	 $zip= "01845";
	 $phoneNum= "9996662233";
	 $refPerson= "Steve Jobs";
	 $refAgency="End up?"; 
	 $refPhone= "5555556666";
	 $nextKin = "Moe Joe";
	 $kinship = "Mom";
	 $kinStreet = "32 Pleasant Ave";
	 $kinCityTown = "Jamestown";
	 $kinState = "NY";
	 $kinZip = "12300";
	 $kinPhone = "7994441212";
							
	//Perform the insert
	include getcwd() . '../Insert/InsertGeneric.php';
//---------------------------------------------------------------------------/
	 $residentID=2; 
	 $counselorRequest = "Y";
	 $termAgree = "Y";
	 $signedBy = "Judge Judy";
	 $paidRent = "N";
	 $leaseAbility = "Possibly";
	 $housingGoals = "Do some stuff with RDJ";
	 $oweCompanies = 1000;
	 $concerns ="N";
	 $explainConcerns = "";

	include getcwd() . '../Insert/InsertPersonalStatus.php';
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentID=2; 
	 $educationMax="Middle School";
	 $furtherEd= "Y";
	 $furtherPlans= "College";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertEducation.php';
	//include getcwd() . '../View/ViewEducation.php';
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentID=2; 
	 $coParentIssues="He doesn't care";
	 $domViolence= "N";
	 $safetyPlan= "";
	 $restrainingOrder= "Y";
	 $perpName= "James Dean";
	 $familyInfo= "I did stuff to my husband";
	 $homelessHistory = "Not cool - don't ask";
	 $housingHistory = "Boxes";
	 $independent = "N";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertDomestic.php';
	//include getcwd() . '../View/ViewDomestic.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=2;
	 $agencyName1 = "Stuff Happens";
	 $amount1 = 100;
	 $agencyName2 = "Matthews Band";
	 $amount2 = 300;
	 $totalIncome = 50;
	 $rateOfPay = 7;
	 $workerName = "Mike Hunt";
	 $workerCity = "North-Shore";
	 $workerPhone = "9993224545";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertMembership.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=2;
	 $docName = "Lecture";
	 $street = "87 Super Drive";
	 $cityTown = "Plymouth";
	 $state = "NC";
	 $zip = "78912";
	 $phone = "1110006666";
	 $medication = "Y";
	 $med1 = "Adderol";
	 $dose1 = "3 mg";
		//time formattingl
		$date = DateTime::createFromFormat( 'H:i A', $time_input);
		$formatted = $date->format( 'H:i:s');
	 $when1 = $formatted;
	 $med2 = "Midol";
	 $dose2 = "12 mg";
	 $when2 = $formatted;
	 $allergies = "N";
	 $seizures = "Y";
	 $epilepsy = "Y";
	 $mentalHealthClient = "Y";
	 $mentalHealthDoc =  "Jim Johnsonstein";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertMedical.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=2; 
	 $incarcerated="Y";
	 $incarcerationLoc="Africa";
	 $incarceratedStartDate=NULL;//date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $incarceratedEndDate=NULL;//date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $incarcerationCharges= "stealing";
	 $institutionalized= "Y";
	 $nameOfInstitution= "LoopyVille";
	 $instituteStartDate= NULL;
	 $instituteReleaseDate= NULL;
	 $reasonForInstitutionalization = "";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertIncarceration.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=2; 
	 $nameOnRegistration= "Frank Aztec";
	 $licenseNum= "S12398745";
	 $state= "CA";
	 $make= "Toyota";
	 $color= "Red";
	 $model= "Rav-4";
	 $oln = "Hilow";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertVehicle.php';
//---------------------------------------------------------------------------/	
	/*//Define test data
	 $childFirstName1=
	 $childLastName1=
	 $childGender1=
	 $childDOB1=
	 $childSSN1=
	 $childCustodyIssues1=
	
	 $childFirstName2=
	 $childLastName2=
	 $childGender2=
	 $childDOB2=
	 $childSSN2=
	 $childCustodyIssues2=
	
	 $childFirstName3=
	 $childLastName3=
	 $childGender3=
	 $childDOB3=
	 $childSSN3=
	 $childCustodyIssues3=
	
	 $childFirstName4=
	 $childLastName4=
	 $childGender4=
	 $childDOB4=
	 $childSSN4=
	 $childCustodyIssues4=
	
	 $childFirstName5=
	 $childLastName5=
	 $childGender5=
	 $childDOB5=
	 $childSSN5=
	 $childCustodyIssues5=
	
	 $childFirstName6=
	 $childLastName6=
	 $childGender6=
	 $childDOB6=
	 $childSSN6=
	 $childCustodyIssues6=
	
	 $childFirstName7=
	 $childLastName7=
	 $childGender7=
	 $childDOB7=
	 $childSSN7=
	 $childCustodyIssues7=
	
	 $childFirstName8=
	 $childLastName8=
	 $childGender8=
	 $childDOB8=
	 $childSSN8=
	 $childCustodyIssues8=
	
	//Perform the insert
	include getcwd() . '../Insert/InsertChildren.php'; //*/
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=2;
	 $companyName= "Tired Inc";
		//time formattingl
		$date = DateTime::createFromFormat( 'H:i A', $time_input);
		$formatted = $date->format( 'H:i:s');
	 $hoursFrom= $formatted;
	 $hoursTo= $formatted;
	 $managerName= "Looney Moons";
	 $managerPhoneNum= "7898882222";
	 $income= "300";
	 $rateOfPay= "45";
	 $currentlyEmployed = "Y";
	 $employmentGoals = "Work the corner";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertEmployment.php';
	//include getcwd() . '../View/ViewEmployment.php';
//---------------------------------------------------------------------------/	
	//Define test data
	
	 $residentID=2;
	 $currentBalance= 455;
	 $withdrawOrDeposit= "D";
	 $previousBalance= 12;
	 $amount= 5;
	 $approvedBy = "hov";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertMoneyTracker.php';
//---------------------------------------------------------------------------/*/	
	
	//Close the connection
	include 'CloseConnection.php';
?>
