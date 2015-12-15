<?php
	include("connect.php");

	$value = 0;
	if (isset($_POST['username'])){
	$username = $_POST['username'];	
		$value = $value + 1;
	}

	if (isset($_POST['password'])){
	$password = $_POST['password'];	
				$value = $value + 2;
	}
	if ((isset($_POST['password'])) && (isset($_POST['username']))){
		$db_query = "SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'";


	$result = mysqli_query($connect, $db_query);

	$obj = mysqli_fetch_object($result); // get the single row.
		if ($result->num_rows == 1){
			header('Location: screen.php');
			//PUT SESSION AND STORE USERNAME
		}

		mysqli_close($connect);	//close the connection

	}


?>



<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Cheapomail</title>	
	<link rel="stylesheet" type="text/css" href="cheapomail.css">
</head>
	
<body>
<h1>Cheapomail Login</h1>	
<hr/>
	
<form action='login.php' method='post'>
	<div class="login">
	<label for="username">Username:</label>	
	<input name="username"
		   id= "username"			   
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
		
</body>

</html>