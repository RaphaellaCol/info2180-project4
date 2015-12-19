<?php
 session_start();
 date_default_timezone_set('America/Bogota');
 $id = $_GET['q'];
 
 $query = "SELECT * FROM message WHERE id = '". $id ."'";
 
include('connect.php');
 
$result = mysqli_query($connect, $query);
$obj = mysqli_fetch_object($result); // get the single row.
$my_id = $_SESSION['id'];

$query2 = "SELECT * FROM message_read WHERE message_id = '". $obj->id ."' AND reader_id = '". $my_id. "'";
$result2 = mysqli_query($connect, $query2);
$obj2 = mysqli_fetch_object($result2); // get the single row.
$my_id = $_SESSION['id'];
 
if($result2->num_rows == 0){
  $query3 = "INSERT INTO message_read (id,message_id,reader_id,date) VALUES (NULL,'".$obj->id ."','". $my_id. "','".date("F j, Y, g:i a")."')";
   $result3 = mysqli_query($connect, $query3);
 }
 
mysqli_close($connect); //close the connection

?>

<!DOCTYPE HTML>
<html>
 
<head>
 <meta http-equiv="content-type" content="text/html; charset=UTF-8">
 <link rel="stylesheet" type="text/css" href="cheapomail.css">
<title>Messages</title> 
</head>

<body>
<div id='logout'><a href='screen.php' style='text-decoration: none'>Back to Main</a></div> 
<div id='msg2'> 
 <div>
  <h2>Sender ID:
  <?php
  echo $obj->user_id;
  ?>
  </h2>
 </div><br/>

 <div>
  <h2>Subject:
  <?php
   echo $obj->subject;
   ?>
   </h2>
 </div><br/>
 
 <div>
  <h2>Body:</h2>
  <p><?php
   print $obj->body
	  ?></p>
 </div><br/>
 </div> 
</body>
</html>