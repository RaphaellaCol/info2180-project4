<?php

$host="localhost";
$username="cheapo_mail";
$database="cheapomail";
$password="";

$connect= mysqli_connect($host, $username, $database, $password)
or die (mysqli_error($connect));


?>