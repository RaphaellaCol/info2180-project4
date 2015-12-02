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
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Cheapomail</title>	
</head>
<body>
<h1>Cheapomail Sign Up</h1>	
<hr/>
<form action='screen.php' method='post'>
Username:<br>
	<input type="text" name="username"><br><br>
First Name: <br>
	<input type="text" name="firstname"><br><br>
Last Name: <br>
	<input type="text" name="lastname"><br><br>
Password:<br>
	<input type="password" name="password"><br><br>
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