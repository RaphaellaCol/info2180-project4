<?php

$host="localhost";
$username="mailapp";
$database="cheapomail";
$password="root";

$connect=mysqli_connect($host, $username, $database, $password)
or die(mysqli_error($connect));


?>