<?php include("connect.php"); ?>

<?php
session_start(); #start the session

session_unset(); #removes all variables in session

session_destroy(); #destroys session

if (!isset($_SESSION['username'])){
	echo "Logout Successful! <br />";
	header('Location: login.php');
}
else{
	echo "Logout Failed!<br />";
}


?>