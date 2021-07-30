<?php
 $conn = mysqli_connect("sql6.freesqldatabase.com", "sql6428361", "UKk9GFjWFE" , "sql6428361") or die(mysqli_error($conn));
  $First_Name = $_POST['fname'];
  $Last_Name = $_POST['lname'];
  $DOB = $_POST['dob'];
  $Email = $_POST['email'];
  $Type = $_POST['type'];
  $Fav1 = $_POST['fav1'];
  $Fav2 = $_POST['fav2'];
  $Fav3 = $_POST['fav3'];
  $Food = $_POST['food'];

  $user_query = "INSERT into interns(First_Name,Last_Name,DOB,Email,Type,Fav1,Fav2,Fav3,Food) values ('$First_Name','$Last_Name','$DOB','$Email','$Type','$Fav1','$Fav2','$Fav3','$Food')" ;

  $user_query_sub = mysqli_query($conn, $user_query) or die(mysqli_error($conn));
  echo "USER ENTERED SUCCESSFULLY";
  echo "     ";
  echo "check your entry click here!!";
	?>

	<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <title>Data uploaded</title>
  </head>
  <body>
      <button style="box-sizing: 15px 15px;"><a href="http://localhost/form_database.php/" style="size: 15px 15px;"></a>Check!</button>
  </body>
  </html>
