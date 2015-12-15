<?php
	//GET SESSION USERNAME
	session_start();
	$_SESSION['username']= $username;
	echo "Session variables are set.";

//if (isset($_POST['username'])){
//	$username = $_POST['username'];	
//}
//if (isset($_POST['firstname'])){
//	$fname = $_POST['firstname'];	
//}
//if (isset($_POST['lastname'])){
//	$lname = $_POST['lastname'];	
//}
//if (isset($_POST['password'])){
//	$password = $_POST['password'];	
//}
//
//
//echo $username . "<br/>";
//echo $fname . "<br/>";
//echo $lname . "<br/>";	
//echo $password . "<br/>";
//
//include("connect.php"); //insert data from connect.php
//
//$db_query = "INSERT INTO users (id, username, firstname, lastname, password)" . "VALUES (NULL, '$username', '$fname', '$lname', '$password')";
//	
//$result = mysqli_query($connect, $db_query) or die (mysqli_error($connect));
//
//if ($result==1){
//	echo "You have been added";
//}
//else{
//	echo "Sorry, an error has ocurred";
//}
//		
//mysqli_close($connect);	//close the connection
//	

	$pw = isset($_POST['password']);
	$error=0;

if (isset($_POST['firstname'])&& !empty($_POST['firstname']))
{
	$firstname = $_POST('firstname');
}
else{
	$error +=1;
}
if (isset($_POST['lastname'])&& !empty($_POST['lastname']))
{
	$lastname = $_POST('lastname');
}
else{
	$error +=1;
}

if(isset($_POST['password']) && !empty($_POST['password']) && (preg_match('^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$^',$pw) == 1))
{
	$password = $_POST('password');
}
else{
	$error+=1;
	}
if (isset($_POST['username'])&& !empty($_POST['username']))
{
	$uname = $_POST('username');
}
else{
	$error +=1;
}
include("connect.php");

?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Cheapomail</title>	
	<link rel="stylesheet" type="text/css" href="cheapomail.css">
</head>
	
<body>
<h1>Cheapomail Sign Up</h1>	
<hr/><br>
<form action='screen.php' method='POST'>
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
<?php
	if ($error > 0){
			print 'error';
		}
?>
<br>
<input type="submit" value="Login">	
</form>	
		
</body>

</html>