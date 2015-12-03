<?php
	$pw = $_POST['password'];
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
	$username = $_POST('username');
}
else{
	$error +=1;
}

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
<form action='screen.php' method='post'>
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