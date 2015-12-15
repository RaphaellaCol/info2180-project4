<?php

$host="localhost";
$user="mailapp";
$database="cheapomail";
$pword="";

$connect = mysqli_connect($host, $user, $pword, $database)
or die(mysqli_error($connect));


?>