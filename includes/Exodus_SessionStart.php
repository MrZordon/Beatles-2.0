<!--  Exodus_SessionStar.php - This file starts a session and checks to see if the supplied userName is set or not.
		If the sessios is not set or a cookie does not exist, then this pahe will jump back to the login page.
		This prevents malicious users from editing the URL and accessing the application without a verified login 
-->
<?php
		// Check, if username session is NOT set or cookie does not exist then this page will jump to Exodus login page
		if (!isset($_SESSION['userName']) || !isset($_COOKIE['user'])) 
		{
			header("Location: ../index.php");
		}
?>