<?php
  $conn = mysqli_connect("sql6.freesqldatabase.com", "sql6428361", "UKk9GFjWFE" , "sql6428361") or die(mysqli_error($conn));
  $select_query = "SELECT DISTINCT First_Name, Last_Name , DOB , Email ,Type , Fav1 , Fav2 , Fav3, Food FROM interns";
  $select_query_result = mysqli_query($conn, $select_query) or die(mysqli_error($conn));
  
	?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Foody Interns List</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
		<div class="container">
			<h3>Great! you are registered now in our list</h3>
			<h5>Check your name at the bottom of the list</h5>
			<button type="button" class="btn btn-primary"><a href="invite.html" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color:white;">GET TICKET</a></button>
			<?php while ($row = mysqli_fetch_array($select_query_result)) {  ?> 
					<div class="row">
						<div class="col-lg-12"><h2>Intern</h2></div>
					</div>
				
					<div class="row">
						<div class="col-xs-2">Name</div>
						<div class="col-xs-10"><?php echo $row['First_Name']; ?></div>	
					</div>

					<div class="row">
						<div class="col-xs-2">Last_Name</div>
						<div class="col-xs-10"><?php echo $row['Last_Name']; ?></div>	
					</div>

					<div class="row">
						<div class="col-xs-2">Date of Birth</div>
						<div class="col-xs-10"><?php echo $row['DOB']; ?></div>	
					</div>

					<div class="row">
						<div class="col-xs-2">Email</div>
						<div class="col-xs-10"><?php echo $row['Email']; ?></div>	
					</div>

					<div class="row">
						<div class="col-xs-2">VEG / NON-VEG</div>
						<div class="col-xs-10"><?php echo $row['Type']; ?></div>	
					</div>
					<div class="row">
						<div class="col-xs-2">Favourite food 1</div>
						<div class="col-xs-10"><?php echo $row['Fav1']; ?></div>	
					</div>
					<div class="row">
						<div class="col-xs-2">Favourite food 2</div>
						<div class="col-xs-10"><?php echo $row['Fav2']; ?></div>	
					</div>
					<div class="row">
						<div class="col-xs-2">Favourite food 3</div>
						<div class="col-xs-10"><?php echo $row['Fav3']; ?></div>	
					</div>
					<div class="row">
						<div class="col-xs-2">your first meal at moolya:</div>
						<div class="col-xs-10"><?php echo $row['Food']; ?></div>	
					</div>
		<?php  } ?>
		<hr/>
		</div>

</body>
</html>
