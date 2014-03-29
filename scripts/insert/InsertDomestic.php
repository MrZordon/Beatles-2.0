<?php
	
	//Tables to be made
	$insert = "INSERT INTO ";
	
	$domesticTable = "DomesticInfo (
									ResidentID,
									CoParentIssues,
									DomViolence,
									SafetyPlan,
									RestrainingOrder,
									PerpName,
									FamilyInfo,
									HomelessHistory,
									HousingHistory,
									Independent
									)  VALUES (
									:residentID, 
									:coParentIssues ,
									:domViolence ,
									:safetyPlan ,
									:restrainingOrder ,
									:perpName ,
									:familyInfo ,
									:homelessHistory ,
									:housingHistory ,
									:independent
									)";
	
	//Prepare the statement
	if ( ! $stmt = $con->prepare ( $insert . $domesticTable ) )
	{
		echo "Prepare domestic failed";
	}
	
	//Bind the statement parameters
	if ( !$stmt->bindValue ( ':residentID', $residentID, $int) )
	{
		echo "Binding residentID failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':coParentIssues', $coParentIssues, $string) )
	{
		echo "Binding coParentIssues failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':domViolence', $domViolence, $string) )
	{
		echo "Binding domViolence failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':safetyPlan', $safetyPlan, $string) )
	{
		echo "Binding safetyPlan failed";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':restrainingOrder', $restrainingOrder, $string) )
	{
		echo "Binding restrainingOrder failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':perpName', $perpName, $string) )
	{
		echo "Binding perpName failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':familyInfo', $familyInfo, $string) )
	{
		echo "Binding familyInfo failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':homelessHistory', $homelessHistory, $string) )
	{
		echo "Binding homelessHistory failed.";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':housingHistory', $housingHistory, $string) )
	{
		echo "Binding housingHistory failed";
	}
	//--------------------------------------------------------------------------------------------------------------------------/
	if ( !$stmt->bindValue ( ':independent', $independent, $string) )
	{
		echo "Binding independent failed.";
	}
	
	//Execute the insert
	try
	{
		$stmt->execute();
	} 
	catch (PDOException $exception)
	{
		echo "Insertion into Users failed. " . $exception->getMessage();
	}						
?>
