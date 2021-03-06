<?php

	//Start our session
	session_start();

	//Passing around session data for DB connect
	$_SESSION['user'] = 'root';
	$_SESSION['password'] = "";

	//Open the connection
	include 'OpenConnection.php';

	//include 'DropDB.php';

	//Tables to be made
	$createTable = "CREATE TABLE";

	$userTable = "Users (
							UserName NVARCHAR(25),
							Password NVARCHAR(20),
							LastLoggedOn DATE,
							CurrentlyLoggedOn ENUM ('Y', 'N'),
							UserType CHAR (2), 
							PRIMARY KEY (UserName)
							)";

	$genericTable = "GenericInfo (
							ResidentType CHAR(2) NOT NULL,
							Active ENUM ('Y', 'N') NOT NULL,
							ResidentID	BIGINT NOT NULL AUTO_INCREMENT,
							DateAdded	DATE NOT NULL,
							FirstName	NVARCHAR(20) NOT NULL,
							MiddleInitial	CHAR(1) NOT NULL,
							LastName	NVARCHAR(30) NOT NULL,
							Gender ENUM ('M', 'F') NOT NULL,
							SSN	NVARCHAR(11) NOT NULL,
							DOB	NVARCHAR(20) NOT NULL,
							Language	NVARCHAR(25),
							Religion	NVARCHAR(25),
							Street	NVARCHAR(30),
							CityTown	NVARCHAR(26),
							State	NVARCHAR(2),
							Zip	NVARCHAR(10),
							PhoneNum	NVARCHAR(12),
							RefPerson	NVARCHAR(50),
							RefAgency	NVARCHAR(25),
							RefPhone	NVARCHAR(12),
							NextKin	NVARCHAR(50),
							Kinship	NVARCHAR(10),
							KinStreet	NVARCHAR(30),
							KinCityTown	NVARCHAR(26),
							KinState	NVARCHAR(2),
							KinZip	NVARCHAR(10),
							KinPhone	NVARCHAR(12),
							Comments NVARCHAR(255),
							PRIMARY KEY (ResidentID) 
							)";

	$personalStatus = "PersonalStatus (
							ResidentID BIGINT,
							CounselorRequest	ENUM ('Y', 'N'),
							TermAgree	ENUM ('Y', 'N'),
							SignedBy	NVARCHAR(50),
							HousingGoals	NVARCHAR(255),
							OverDue ENUM ('Y', 'N'),
							OweCompanies	INT,
							Concerns ENUM ('Y', 'N'),
							ExplainConcerns NVARCHAR(255) CHECK (Concerns = 'Y'),
							FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
							)";

	$educationTable = "Education (
									ResidentID	BIGINT,
									EducationMax	NVARCHAR(30),
									FurtherEd ENUM ('Y', 'N'),
									FurtherPlans	NVARCHAR(255) CHECK (FurtherEd ='Y'),
									FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
									)";

	$domesticTable = "DomesticInfo (
									ResidentID	BIGINT,
									CoParentIssues	NVARCHAR(255),
									DomViolence	ENUM ('Y', 'N'),
									SafetyPlan	NVARCHAR(255),
									RestrainingOrder ENUM ('Y', 'N'),
									PerpName	NVARCHAR(50),
									FamilyInfo	NVARCHAR(255),
									HomelessHistory	NVARCHAR(255),
									HousingHistory	NVARCHAR(255),
									Independent ENUM ('Y', 'N'),
									PaidRent	ENUM ('Y', 'N'),
									LeaseAbility	NVARCHAR(140),
									FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
									)";

	$membershipTable = "Membership (
										ResidentID	BIGINT,
										AgencyName1	NVARCHAR(25),
										Amount1	INT,
										AgencyName2	NVARCHAR(25),
										Amount2	INT,
										TotalIncome	INT,
										RateOfPay	INT,
										WorkerName	NVARCHAR(50),
										WorkerCity	NVARCHAR(20),
										WorkerPhone	NVARCHAR(12),
										FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
										)";

	$medicalTable = "Medical (
								ResidentID	BIGINT,
								DocName	NVARCHAR(50),
								Street	NVARCHAR(20),
								CityTown	NVARCHAR(20),
								State	NVARCHAR(2),
								Zip	NVARCHAR(10),
								Phone	NVARCHAR(12),
								Medication	ENUM ('Y', 'N'),
								Med1	NVARCHAR(20) CHECK (Medication = 'Y'),
								Dose1	NVARCHAR(10) CHECK (Medication = 'Y'),
								When1	NVARCHAR(10) CHECK (Medication = 'Y'),
								Med2	NVARCHAR(20) CHECK (Medication = 'Y'),
								Dose2	NVARCHAR(10) CHECK (Medication = 'Y'),
								When2	NVARCHAR(10) CHECK (Medication = 'Y'),
								Allergies	NVARCHAR(50),
								Seizures	ENUM ('Y', 'N'),
								Epilepsy	ENUM ('Y', 'N'),
								MentalHealthClient	ENUM ('Y', 'N'),
								MentalHealthDoc	NVARCHAR(50) CHECK (MentalHealthClient = 'Y'),
								FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
								)";

	$incarcerationTable = "Incarceration (
										ResidentID	BIGINT,
										Incarcerated	ENUM ('Y', 'N'),
										IncarcerationLoc	NVARCHAR(50),
										IncarceratedStartDate	NVARCHAR(10),
										IncarceratedEndDate	NVARCHAR(10),
										IncarcerationCharges	NVARCHAR(80),
										Institutionalized	ENUM ('Y', 'N'),
										NameOfInstitution	NVARCHAR(50),
										InstituteStartDate	NVARCHAR(10),
										InstituteReleaseDate	NVARCHAR(10),
										ReasonForInstitutionalization	NVARCHAR(80),
										FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
										)";

	$vehicleTable = "Vehicle (
								ResidentID	BIGINT,
								NameOnRegistration	NVARCHAR(50),
								LicenseNum	NVARCHAR(15),
								State	NVARCHAR(5),
								Make	NVARCHAR(25),
								Color	NVARCHAR(25),
								Model	NVARCHAR(25),
								OLN	NVARCHAR(20),
								FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
								)";

	$childrenTable = "Children (
								ResidentID	BIGINT,
								NumChildren INT,
								ChildFullName1	NVARCHAR(75),
								ChildGender1	NVARCHAR(10),
								ChildDOB1	NVARCHAR(10),
								ChildSSN1	NVARCHAR(10),
								ChildCustodyIssues1	NVARCHAR(150),
								
								ChildFullName2	NVARCHAR(75),
								ChildGender2	NVARCHAR(10),
								ChildDOB2	NVARCHAR(10),
								ChildSSN2	NVARCHAR(10),
								ChildCustodyIssues2	NVARCHAR(150),
								
								ChildFullName3	NVARCHAR(75),
								ChildGender3	NVARCHAR(10),
								ChildDOB3	NVARCHAR(10),
								ChildSSN3	NVARCHAR(10),
								ChildCustodyIssues3	NVARCHAR(150),
								
								ChildFullName4	NVARCHAR(75),
								ChildGender4	NVARCHAR(10),
								ChildDOB4	NVARCHAR(10),
								ChildSSN4	NVARCHAR(10),
								ChildCustodyIssues4	NVARCHAR(150),
								
								ChildFullName5	NVARCHAR(75),
								ChildGender5	NVARCHAR(10),
								ChildDOB5	NVARCHAR(10),
								ChildSSN5	NVARCHAR(10),
								ChildCustodyIssues5	NVARCHAR(150),
								
								ChildFullName6	NVARCHAR(75),
								ChildGender6	NVARCHAR(10),
								ChildDOB6	NVARCHAR(10),
								ChildSSN6	NVARCHAR(10),
								ChildCustodyIssues6	NVARCHAR(150),
								
								ChildFullName7	NVARCHAR(75),
								ChildGender7	NVARCHAR(10),
								ChildDOB7	NVARCHAR(10),
								ChildSSN7	NVARCHAR(10),
								ChildCustodyIssues7	NVARCHAR(150),
								
								ChildFullName8	NVARCHAR(75),
								ChildGender8	NVARCHAR(10),
								ChildDOB8	NVARCHAR(10),
								ChildSSN8	NVARCHAR(10),
								ChildCustodyIssues8	NVARCHAR(150),
								FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
								)";

	$employmentTable = "Employment (
										ResidentID	BIGINT,
										CompanyName	NVARCHAR(100),
										HoursFrom	NVARCHAR(10),
										HoursTo	NVARCHAR(10),
										ManagerName	NVARCHAR(50),
										ManagerPhoneNum	NVARCHAR(10),
										Income	NVARCHAR(10),
										RateOfPay	NVARCHAR(10),
										CurrentlyEmployed	ENUM ('Y', 'N'),
										EmploymentGoals	NVARCHAR(250),
										FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
										)";

	$moneyTrackerTable = "MoneyTracker(
											ResidentID	BIGINT,
											CurrentBalance	NVARCHAR(10),
											WithdrawOrDeposit	NVARCHAR(10),
											PreviousBalance	NVARCHAR(10),
											Amount	NVARCHAR(10),
											ApprovedBy	NVARCHAR(50),
											FOREIGN KEY (ResidentID) REFERENCES GenericInfo (ResidentID)
											)";

	//Strings
	$newLine = "<br>";

	//Create User Table
	if ( mysql_query(" ". $createTable . " ". $userTable) )
	{
		
	}
	else
	{
		echo "Failed to create User Table." . $newLine;
		echo " ". $createTable . " ". $userTable;
	}

	//Create Generic Table
	if ( mysql_query("". $createTable. " ".$genericTable."") )
	{
		echo "Failed to create Generic Table." . $newLine;
	}

	//Create User Table
	if ( !$con->query( $createTable. " ".$personalStatus) )
	{
		echo "Failed to create Personal Status Table." . $newLine;
	}

	//Create Education Table
	if ( !$con->query( $createTable. " ".$educationTable) )
	{
		echo "Failed to create Education Table." . $newLine;
	}

	//Create Domestic Info Table
	if ( !$con->query( $createTable. " ".$domesticTable) )
	{
		echo "Failed to create Domestic Info Table." . $newLine;
	}

	//Create Membership Table
	if ( !$con->query( $createTable. " ".$membershipTable) )
	{
		echo "Failed to create Membership Table." . $newLine;
	}

	//Create Medical Table
	if ( !$con->query( $createTable. " ".$medicalTable) )
	{
		echo "Failed to create Medical Table." . $newLine;
	}

	//Create Incarceration Table
	if ( !$con->query( $createTable. " ".$incarcerationTable) )
	{
		echo "Failed to create Incarceration Table." . $newLine;
	}

	//Create Vehicle Table
	if ( !$con->query( $createTable. " ".$vehicleTable) )
	{
		echo "Failed to create Vehicle Table." . $newLine;
	}

	//Create Children Table
	if ( !$con->query( $createTable. " ".$childrenTable) )
	{
		echo "Failed to create Children Table." . $newLine;
	}

	//Create  Employment Table
	if ( !$con->query( $createTable. " ".$employmentTable) )
	{
		echo "Failed to create Employment Table." . $newLine;
	}

	//Create Resident Money Tracker Table
	if ( !$con->query( $createTable. " ".$moneyTrackerTable) )
	{
		echo "Failed to create MoneyTracker Table." . $newLine;
	}

	//Restrict the ENUM inputs to those specfied here
	$restrictDatabase = "SET @@global.sql_mode = 'STRICT_ALL_TABLES' ";

	if ( !$con->query ( $restrictDatabase) )
	{
		echo "Restriction Failed!" . $newLine;
	}


	//Drop Database Option
	//include 'DropDB.php';

	//Close the connection to the DB
	include 'CloseConnection.php';

	 $completeLink = '<a href="http://localhost/phpmyadmin">Complete</a>';

	 echo $newLine . $completeLink;
?>
