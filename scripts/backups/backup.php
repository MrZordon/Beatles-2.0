
<?php
		$username = "root";
		$password = "";
		$db = "exodus";	
		
		$backup_file = $db . "_NEWbackup_" . date("Y-m-d") . '.sql';
		$filename = "../Exodus/Backups/" . $backup_file;
		
		//exec ("mysqldump -u ".$username." -p".$password." ".$db." > ".$filename);
		
		exec ("mysqldump -u ".$username." ".$db." > ".$filename);
		
		echo "Backup done <br>";
?>
