<?php include("connect.php"); ?>

<?php
session_start(); #start the session

session_unset(); #removes all variables in session

session_destroy(); #destroys session

if (!$_SESSION['username']){
	echo "Logout Successful! <br />";
}
else{
	echo "Logout Failed!<br />"
}


?>