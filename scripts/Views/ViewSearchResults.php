<?php

		echo $newline . "Printing Results" . $newline;

		while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) 
		{  
			 echo $row['ResidentType'] . " || ";
			 echo $row['Active'] . " || ";
			 echo $row['ResidentID'] . " || ";
			 echo $row['FirstName'] . " || ";
			 echo $row['MiddleInitial'] . " || ";
			 echo $row['LastName'] . " || ";
			 echo $row['Gender'] . " || ";
			 echo $row['SSN'] . " || ";
			 echo $row['DOB'] . " || ";
			 echo $newline . $newline;
		}

?>
