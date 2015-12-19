<?php

$password = '';
$username = '';
$fname = '';
$lname = '';	

if (isset($_POST['username'])){
	$username = $_POST['username'];	
}
if (isset($_POST['firstname'])){
	$fname = $_POST['firstname'];	
}
if (isset($_POST['lastname'])){
	$lname = $_POST['lastname'];	
}
if (isset($_POST['password']) && !empty($_POST['password']) && (preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$^',$_POST['password']) == 1)){
	$password = $_POST['password'];	
}

if ($password != '' && $username != '' && $fname != '' && $lname != ''){
	
include("connect.php"); //insert data from connect.php

//insert user information into database	
$db_query = "INSERT INTO users (id, username, firstname, lastname, password)" . "VALUES (NULL, '$username', '$fname', '$lname', '$password')";
	
$result = mysqli_query($connect, $db_query) or die (mysqli_error($connect));

if ($result==1){
	echo "You have been added";
	header('Location: screen.php');
}
else{
	echo "Sorry, an error has ocurred";
}
		
mysqli_close($connect);	//close the connection
	


}
else{
	
	echo "<p style=\"{color:#ff4444;}\">Errors in form</p>";
	
}

?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Cheapomail</title>	
	<link rel="stylesheet" type="text/css" href="cheapomail.css">
</head>
	
<body>
	<div id ="msg">
<h1>Cheapomail Sign Up</h1>	
<hr/><br>
<form action='signup.php' method='POST'>
	<div class="login">
	<label for="username">Username:</label>	
	<input name="username"
		   id= "username"			   
	   	   type="text"/>	
	</div>
<br>	
	<div class="login">
	<label for="firstname">First Name:</label>
	<input name="firstname"
		   id= "firstname"			   
	   	   type="text"/>	
	</div>	
<br>
	<div class="login">
	<label for="lastname">Last Name:</label>
	<input name="lastname"
		   id= "lastname"			   
	   	   type="text"/>	
	</div>	
<br>
	<div class="login">
	<label for="password">Password:</label>
	<input name="password"
		   id= "password"			   
	   	   type="password"/>	
	</div>	

<br>
<input type="submit" value="Login">	
</form>	
</div>		
</body>

</html>