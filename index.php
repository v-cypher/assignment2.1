<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Assignment2.1_vk</title>
	<style>
		.container
		{
			margin-top: 10rem;

		}

		body
		{
			background-image: url(kitchen.jpg);
			
			background-size: cover;
		}

	
	</style>


</head>
<body>
	
<div class="container">
	<h1 style="margin-left: 330px;">MOOLYA FOODIES</h1>
				<form class="form-horizontal" method="post" action="form_upload.php">
		
					<div class="form-group ">
					    <label class="control-label col-sm-2" for="firstname">First Name:</label>
					    <div class="col-sm-6">
					      <input type="text" class="form-control" name="fname" 
					      id="fname" placeholder="Enter First Name">
					    </div>
					</div>

				    <div class="form-group ">
				    	<label class="control-label col-sm-2" for="lastname">Last Name:</label>
				   		<div class="col-sm-6">
				      		<input type="text" class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
				    	</div>
					</div>
				
					<div class="form-group">
					    <label class="control-label col-sm-2" for="dob">Date of Birth:</label>
					    <div class="col-sm-6">
					      <input type="date" class="form-control" name="dob"  id="dob" placeholder="Enter Date of birth">
					    </div>
					</div>

					<div class="form-group">
					    <label class="control-label col-sm-2" for="email">Moolya Email id:</label>
					    <div class="col-sm-6">
					      <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
					    </div>
					</div>

					<div class="form-group">
					
						<label class="control-label col-sm-2" for="FormControl">VEG / NON-VEG ?</label>
						<div class="col-sm-6">
					    	<select class="form-control" id="FormControl" placeholder="VEG/NON-VEG" name="type" id="type">
					      	<option>Vegetarian</option>
					      	<option>NON-Vegetarian</option>
					    	</select>
					</div>
					</div>
				     <div class="form-group ">
				    	<label class="control-label col-sm-2" for="food1">Favourite food 1:</label>
				   		<div class="col-sm-6">
				      		<input type="text" class="form-control" name="fav1" id="fav1" placeholder="Enter your Favourite food 1">
				    	</div>
					</div>

					 <div class="form-group ">
				    	<label class="control-label col-sm-2" for="food2">Favourite food 2:</label>
				   		<div class="col-sm-6">
				      		<input type="text" class="form-control" name="fav2" id="fav2" placeholder="Enter your Favourite food 2">
				    	</div>
					</div>

					 <div class="form-group ">
				    	<label class="control-label col-sm-2" for="food3">Favourite food 3:</label>
				   		<div class="col-sm-6">
				      		<input type="text" class="form-control" name="fav3" id="fav3" placeholder="Enter your Favourite food 3">
				    	</div>
					</div>

					<div class="form-group ">
				
						<label class="control-label col-sm-2" for="FormControl">How was your first meal at moolya:</label>
						<div class="col-sm-6">
					    <select class="form-control" id="FormControl" placeholder="VEG/NON-VEG" name="food" id="food">
					      <option>AMAZING</option>
					      <option>NOT THAT GOOD</option>
					      <option>NOT TASTED YET!</option>
					    </select>
					</div>
					</div>
				

					<div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary">Submit</button>
					    </div>
					  </div>
					</div>
</form> 

			
				  

</body>
</html>

