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
	
	$time_input = '9:00 AM';
//---------------------------------------------------------------------------/		
	//Define test data
	 $userName = "dani"; 
	 $password  = "sweetheart";
	 $lastLoggedOn = NULL;
	 $currentlyLoggedOn  = 'Y';
	 $userType = 'CP';
	
	//Perform the insert
	include getcwd() . '../Insert/InsertUser.php';
	
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentType= "CP";
	 $active= "Y";
	 $residentID=4; 
	 $dateAdded = NULL;//date('Yw-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $firstName= "Danielle"; 
	 $middleInitial= "M";
	 $lastName= "Trudel";
	 $gender= "F";
	 $ssn= "1234568842";
	 $dob= NULL; //date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $language= "english";
	 $religion= "God";
	 $street= "27 rowley country club rd";
	 $cityTown= "Rowley";
	 $state= "MA";
	 $zip= "01969";
	 $phoneNum= "8005002000";
	 $refPerson= "Podrick";
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
	 $residentID=4;
	 $counselorRequest = "N";
	 $termAgree = "Y";
	 $signedBy = "Muddy Mud";
	 $paidRent = "Y";
	 $leaseAbility = "yup";
	 $housingGoals = "have sleep in my own bed";
	 $oweCompanies = 501;
	 $concerns ="Y";
	 $explainConcerns = "not sleeping";

	include getcwd() . '../Insert/InsertPersonalStatus.php';
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentID=4;
	 $educationMax="High";
	 $furtherEd= "Y";
	 $furtherPlans= "make $$";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertEducation.php';
	//include getcwd() . '../View/ViewEducation.php';
//---------------------------------------------------------------------------/		
	//Define test data
	 $residentID=4;
	 $coParentIssues="Nah";
	 $domViolence= "N";
	 $safetyPlan= "run";
	 $restrainingOrder= "N";
	 $perpName= "Kylie Jenner";
	 $familyInfo= "fake";
	 $homelessHistory = "what?";
	 $housingHistory = "none";
	 $independent = "Y";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertDomestic.php';
	//include getcwd() . '../View/ViewDomestic.php';
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=4;
	 $agencyName1 = "FunkyTownnnnn";
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
	 $residentID=4;
	 $docName = "Captain Jack Sparrow";
	 $street = "7 silly rd";
	 $cityTown = "Prime";
	 $state = "MO";
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
	 $residentID=4;
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
	 $residentID=4;
	 $nameOnRegistration= "Cindy Loo Who";
	 $licenseNum= "S123456789";
	 $state= "ME";
	 $make= "VW";
	 $color= "Blue";
	 $model= "Grinch";
	 $oln = "123456";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertVehicle.php';
//---------------------------------------------------------------------------/	
	/*//Define test data
	 $childFirstName1=Robert
	 $childLastName1=Resnick
	 $childGender1=M
	 $childDOB1=no
	 $childSSN1=no
	 $childCustodyIssues1=dumb
	
	 $childFirstName2=Alexander
	 $childLastName2=Feld
	 $childGender2=M
	 $childDOB2=no
	 $childSSN2=no
	 $childCustodyIssues2=stupid
	
	 $childFirstName3=Caleb
	 $childLastName3=Shapiro
	 $childGender3=M
	 $childDOB3=no
	 $childSSN3=no
	 $childCustodyIssues3= love
	
	 $childFirstName4=Amy
	 $childLastName4=Smith
	 $childGender4=F
	 $childDOB4=no
	 $childSSN4=no
	 $childCustodyIssues4= idiot
	
	 $childFirstName5= Luke
	 $childLastName5= Heffernan	
	 $childGender5=M
	 $childDOB5=no
	 $childSSN5=no
	 $childCustodyIssues5= silly
	
	 $childFirstName6= Annoying	
	 $childLastName6=Stupid
	 $childGender6=M
	 $childDOB6=no
	 $childSSN6=no
	 $childCustodyIssues6=DUmb
	
	 $childFirstName7=Potrick	
	 $childLastName7=Smokey
	 $childGender7=M
	 $childDOB7=no
	 $childSSN7=no
	 $childCustodyIssues7=drugs
	
	 $childFirstName8=Ant
	 $childLastName8=Drinkobianco
	 $childGender8=M
	 $childDOB8=no
	 $childSSN8=no
	 $childCustodyIssues8=drunk
	
	//Perform the insert
	include getcwd() . '../Insert/InsertChildren.php'; //*/
//---------------------------------------------------------------------------/	
	//Define test data
	 $residentID=4;
	 $companyName= "Sillies Inc";
		//time formattingl
		$date = DateTime::createFromFormat( 'H:i A', $time_input);
		$formatted = $date->format( 'H:i:s');
	 $hoursFrom= $formatted;
	 $hoursTo= $formatted;
	 $managerName= "Mommy and Me";
	 $managerPhoneNum= "12345678";
	 $income= "1";
	 $rateOfPay= "20";
	 $currentlyEmployed = "N";
	 $employmentGoals = "make moola";
	
	//Perform the insert
	include getcwd() . '../Insert/InsertEmployment.php';
	//include getcwd() . '../View/ViewEmployment.php';
//---------------------------------------------------------------------------/	
	//Define test data
	
	 $residentID=4;
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
