<?php
	//Shut it down! -- only if using mysqli
		//mysql_close($con);
	
	
	$con = null;
	
	//Destroys Session Variables
	session_unset();
	
	//End the session..although I don't think this does jack.
	session_destroy();
?>
