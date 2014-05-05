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
	
	$time_input = '11:00 AM';
//---------------------------------------------------------------------------/		
	//Define test data
	 $userName = "tibbs"; 
	 $password  = "aaron12";
	 $lastLoggedOn = NULL;
	 $currentlyLoggedOn  = 'Y';
	 $userType = 'A';
	
	//Perform the insert
	include getcwd() . '../Insert/InsertUser.php';
	
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentType= "CP";
	 $active= "Y";
	 $residentID= 1; 
	 $dateAdded = NULL;//date('Yw-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $firstName= "MooMoo"; 
	 $middleInitial= "K";
	 $lastName= "Cow";
	 $gender= "M";
	 $ssn= "1234568842";
	 $dob= NULL; //date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $language= "AM";
	 $religion= "God";
	 $street= "12 Fairy Lane";
	 $cityTown= "Christmas";
	 $state= "MA";
	 $zip= "00000";
	 $phoneNum= "8005002000";
	 $refPerson= "Python Mo";
	 $refAgency="We Care"; 
	 $refPhone= "4565455896";
	 $nextKin = "Jon Lavoie";
	 $kinship = "dad";
	 $kinStreet = "3 Pleasant Ave";
	 $kinCityTown = "Charlestown";
	 $kinState = "WA";
	 $kinZip = "47896";
	 $kinPhone = "7992225555";
							
	//Perform the insert
	include getcwd() . '../Insert/InsertGeneric.php';
//---------------------------------------------------------------------------/
	 $residentID=1;
	 $counselorRequest = "N";
	 $termAgree = "Y";
	 $signedBy = "Muddy Mud";
	 $paidRent = "Y";
	 $leaseAbility = "Maybe";
	 $housingGoals = "sleep in my own bed";
	 $oweCompanies = 500;
	 $concerns ="Y";
	 $explainConcerns = "you not being cool";

	include getcwd() . '../Insert/InsertPersonalStatus.php';
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentID=1;
	 $educationMax="High";
	 $furtherEd= "Y";
	 $furtherPlans= "make money";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertEducation.php';
	//include getcwd() . '../View/ViewEducation.php';
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentID=1;
	 $coParentIssues="I can't even";
	 $domViolence= "Y";
	 $safetyPlan= "Eat cake";
	 $restrainingOrder= "N";
	 $perpName= "KellyAnne";
	 $familyInfo= "My kids eat a lot.";
	 $homelessHistory = "i like eggs";
	 $housingHistory = "egg house";
	 $independent = "Y";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertDomestic.php';
	//include getcwd() . '../View/ViewDomestic.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID = 1;
	 $agencyName1 = "Funny Cares";
	 $amount1 = 299;
	 $agencyName2 = "No Cares";
	 $amount2 = 1;
	 $totalIncome = 100;
	 $rateOfPay = 12;
	 $workerName = "Sally Rivers";
	 $workerCity = "Andover";
	 $workerPhone = "188-wah";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertMembership.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID = 1;
	 $docName = "Hannibal";
	 $street = "7 Megatron Road";
	 $cityTown = "Optimus";
	 $state = "VA";
	 $zip = "45678";
	 $phone = "2227778888";
	 $medication = "Y";
	 $med1 = "Advil";
	 $dose1 = "400 pills";
		//time formattingl
		$date = DateTime::createFromFormat( 'H:i A', $time_input);
		$formatted = $date->format( 'H:i:s');
	 $when1 = $formatted;
	 $med2 = "";
	 $dose2 = "";
	 $when2 = "";
	 $allergies = "Y";
	 $seizures = "N";
	 $epilepsy = "N";
	 $mentalHealthClient = "Y";
	 $mentalHealthDoc =  "Jimmy";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertMedical.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=1;
	 $incarcerated="Y";
	 $incarcerationLoc="Prison";
	 $incarceratedStartDate=NULL;//date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $incarceratedEndDate=NULL;//date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $incarcerationCharges= "eating meat";
	 $institutionalized= "N";
	 $nameOfInstitution= "";
	 $instituteStartDate= NULL;
	 $instituteReleaseDate= NULL;
	 $reasonForInstitutionalization = "";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertIncarceration.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=1;
	 $nameOnRegistration= "Lucy Loo";
	 $licenseNum= "S123456789";
	 $state= "GA";
	 $make= "VW";
	 $color= "Blue";
	 $model= "Rabbit";
	 $oln = "123456";
	
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
	 $residentID= 1;
	 $companyName= "Tired Inc";
		//time formattingl
		$date = DateTime::createFromFormat( 'H:i A', $time_input);
		$formatted = $date->format( 'H:i:s');
	 $hoursFrom= $formatted;
	 $hoursTo= $formatted;
	 $managerName= "Meowth Face";
	 $managerPhoneNum= "12345678";
	 $income= "100";
	 $rateOfPay= "20";
	 $currentlyEmployed = "N";
	 $employmentGoals = "make money";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertEmployment.php';
	//include getcwd() . '../View/ViewEmployment.php';
//---------------------------------------------------------------------------/	
	//Define test data
	
	 $residentID = 1;
	 $currentBalance= 100;
	 $withdrawOrDeposit= "W";
	 $previousBalance= 200;
	 $amount= 10;
	 $approvedBy = "hov";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertMoneyTracker.php';
//---------------------------------------------------------------------------/*/	
	
	//Close the connection
	include 'CloseConnection.php';
?>
