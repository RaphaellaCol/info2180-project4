<?php

$username = $_POST['username'];	
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];	
$password = $_POST['password'];

echo $username . "<br/>";
echo $firstname . "<br/>";
echo $lastname . "<br/>";	
echo $password . "<br/>";

include("connect.php"); //insert data from connect.php

$db_query = "INSERT INTO users (id, username, firstname, lastname, password)" . "VALUES (NULL, '$username', '$firstname', '$lastname', '$password')";
	
$result = mysqli_query($connect, $db_query) or die (mysqli_error($connect));

if ($result==1){
	echo "You have been added";
}
else{
	echo "Sorry, an error has ocurred";
}
		
mysqli_close($connect);	//close the connection
	
?>

<html>
<h2>Recent Messages</h2>
	<hr/>
	<a href ="compose.php">Compose New Message</a>
<form> 
<input type="submit" value="Login">
</form>

</html>