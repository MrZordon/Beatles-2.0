<?php

	// Inialize session
	session_start();

	// Check, if username session is NOT set then this page will jump to login page
	if (!isset($_SESSION['userName'])) 
	{
		header('Location: index.php');
	}
	
    $now = time(); // checking the time now when home page starts
    if($now > $_SESSION['expire'])
    {
        session_destroy();
        header('Location: includes/Exodus_logout.php');
    }

?>
<html>
	<!-- Include header file -->
	<?php
		include('../includes/header.php');
		include('../includes/connect_ExodusDB.inc');
?>
	<body>

    	<script src="../js/vendor/jquery.js"></script>
    	<script src="../js/foundation/foundation.js"></script>
    	<script src="../js/foundation/foundation.joyride.js"></script>
		<script src="../js/foundation/foundation.reveal.js"></script>
		
  		<!-- Header and Nav with logo included -->
  		 <div class="row">
					<div class="large-3 columns">
					 	 <h1><img src="../img/LHM_logo.png"></h1>
					</div>

				<!-- Header and Nav -->
				<div class="large-11 columns">
					<ul class="right button-group">
						<li><p class="button">Current User: <?php echo $_SESSION['userName']; ?></p></li>
						<li><a href="../Exodus_Admin_home.php" class="button" id="home">Home</a></li>
						<li><a href="../Exodus_SA_MasterSearches.php" class="button" id="searchForResidents">Search for a Resident</a></li>
					</ul>
				 </div>

      <div class="row">
 			<div class="large-12 columns">
 				<div class="radius panel">
 				
 			<table style="width:80%;">  
			<thead style="width:80%; overflow:auto;" > 
				<tr> 
					<th align= "left">ResidentID</th> 
					<th align= "left">First Name</th> 
					<th align= "left">Middle Initial</th> 
					<th align= "left">Last Name</th>
					<th align= "left">Resident Type</th>
					<th align= "left">Action</th>
				</tr> 
			</thead> 
				<tbody style="width:80%; overflow:auto;"> 
				
						<?php	
						
							$agreement=$_POST['agreement'];
							
					//if any fields are empty, redirect back to master search page and do not execute the insert
					 if ( empty($agreement)) 
					{
						echo '<script>alert("Please complete all required fields to search.\n");</script>';
						echo '<META HTTP-EQUIV="Refresh" Content="0; URL=javascript:history.go(-1)">'; 
					}
					 else 
					 {
							//real escape the credentials
							$agreement = mysql_real_escape_string($agreement);
						
								$query = mysql_query("SELECT ResidentID, FirstName, MiddleInitial, LastName, ResidentType FROM  WHERE ='$agreement';");
								if (mysql_num_rows($query) < 1) 
								{
									echo '<script>alert("No residents match your search.\nPlease try different search criteria.");</script>';
						   			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=javascript:history.go(-1)">';  
								} 
								else 
								{
									while ($row = mysql_fetch_array($query)) 
									{
										echo '<tr>';
										echo "<td>$row[ResidentID]</td>";
										echo "<td>$row[FirstName]</td>";
										echo "<td>$row[MiddleInitial]</td>";
										echo "<td>$row[LastName]</td>";
										echo "<td>$row[ResidentType]</td>";
										echo "<td> <a href='#'>View Profile</a> </td>";
										echo "</tr>";
									}
								}
							}
						?>
						</tbody>
					</table>
 				</div>
 				</div>		      	
      	</div>
 
         <!--  Incude footer -->
		<?php
			include ('../includes/footer.php')
		?>

	</body>
</html>
