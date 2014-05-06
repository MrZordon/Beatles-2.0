<?php
	//include getcwd() . '/../OpenConnection.php';
	include getcwd() . '/MasterSearch.php';
	
	$title = "By Incarceration";

	$incarcerated="Y";
	 $incarcerationLoc="Prison";
	 $incarceratedStartDate=NULL;//date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $incarceratedEndDate=NULL;//date('Y-m-d', strtotime(str_replace('-', '/', $dateAdded)));
	 $incarcerationCharges= "eating meat";
	 $institutionalized= "N";
	 $nameOfInstitution= "";
	 $instituteStartDate= NULL;
	 $instituteReleaseDate= NULL;
	
	$whereClause = "JOIN Incarceration ON GenericInfo.ResidentID = Incarceration.ResidentID
								WHERE 
								Incarceration.Incarcerated = :incarcerated AND 
								Incarceration.IncarcerationLoc = :incarcerationLoc AND 
								Incarceration.IncarcerationCharges = :incarcerationCharges AND 
								Incarceration.IncarceratedStartDate = :incarceratedStartDate AND 
								Incarceration.IncarceratedEndDate = :incarceratedEndDate AND 
								Incarceration.Institutionalized = :institutionalized AND 
								Incarceration.NameOfInstitution = :nameOfInstitution AND 
								Incarceration.ReasonForInstitutionalization = :reasonForInstitutionalization AND 
								Incarceration.InstituteStartDate = :instituteStartDate AND 
								Incarceration.InstituteReleaseDate = :instituteReleaseDate " ;
	
	$fullQuery = $searchQuery . $whereClause;
	
	include getcwd() . "/UserTypeSearchConstraint.php";
	
	//Bind the statement parameters
	//an int is a 1, string 2
	if ( !$stmt->bindValue ( ':incarcerated', $incarcerated, 2 ) )
	{
		echo "Binding incarcerated failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':incarcerationLoc', $incarcerationLoc, 2 ) )
	{
		echo "Binding incarcerationLoc failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':incarcerationCharges', $incarcerationCharges, 2 ) )
	{
		echo "Binding incarcerationCharges failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':incarceratedStartDate', $incarceratedStartDate, 2 ) )
	{
		echo "Binding incarceratedStartDate failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':incarceratedEndDate', $incarceratedEndDate, 2 ) )
	{
		echo "Binding incarceratedEndDate failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':institutionalized', $institutionalized, 2 ) )
	{
		echo "Binding institutionalized failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':nameOfInstitution', $nameOfInstitution, 2 ) )
	{
		echo "Binding nameOfInstitution failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':reasonForInstitutionalization', $reasonForInstitutionalization, 2 ) )
	{
		echo "Binding reasonForInstitutionalization failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':instituteStartDate', $instituteStartDate, 2 ) )
	{
		echo "Binding instituteStartDate failed." . $newline;
	}
	if ( !$stmt->bindValue ( ':instituteReleaseDate', $instituteReleaseDate, 2 ) )
	{
		echo "Binding instituteReleaseDate failed." . $newline;
	}
	
	//Execute the search
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "Executing Search: " . $title . "Failed!" . $newline . 
				$exception->getMessage() . $newline;
	}
	
	include getcwd() . '/../View/ViewSearchResults.php';
	
	include getcwd() . '/../CloseConnection.php';
?>
