<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cheapomail.css">
		<script type="text/javascript" src="main.js"></script>
	</head>
	<body>
		<h1> Welcome
		<?php
		echo $_SESSION['username'] . "!";
         ?>
		</h1>
		
<div id="users">
	<h2>Users</h2>
	<hr/>
	
<?php
    include('connect.php');
	$db_query = "SELECT * FROM users";
	$result = mysqli_query($connect, $db_query)or die (mysqli_error($connect));
	
	//store id and username in a table
	echo '<table><thead><tr><td>ID</td><td>Username</td></tr></thead>';
	while ( $row = mysqli_fetch_assoc($result) ) {
    	echo '<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td></tr>';
    	$rows[] = $row;
	}
echo '</table>';
		
mysqli_close($connect);	//close the connection

//button for admin to create user
if ($_SESSION['username']=='admin'){
	echo "<div id='create_user_btn'><a href='signup.php' style='text-decoration: none'>Create User</a></div>";
}	
?>
</div>
		<?php echo "<div id='logout'><a href='logout.php' style='text-decoration: none'>Logout</a></div>"; 
		?>

<div id="msg">
		
	<div id="messages">	
	<h2>Recent Messages</h2>
	<hr/>
	*Click to view message*	
<?php
	include('connect.php');
	$dbq = "SELECT id, subject, body, user_id FROM message WHERE recipient_ids LIKE '%|".$_SESSION['id']."|%' ORDER BY id DESC LIMIT 10";
 $result = mysqli_query($connect, $dbq);
 $dbq2 = "SELECT message_id FROM message_read WHERE reader_id = '".$_SESSION['id']."'";
 $result = mysqli_query($connect, $dbq);
 $result2 = mysqli_query($connect, $dbq2);
  $read = Array();
 while ( $row2 = mysqli_fetch_assoc($result2) ) {
  array_push($read,$row2['message_id']);
 }

 print '<table id="messagest"><thead><tr><td>ID</td><td>Subject</td><td>Body</td><td>Sender ID</td></tr></thead><tbody>';
 while ( $row = mysqli_fetch_assoc($result) ) {
  if( in_array($row['id'], $read)){
     print '<tr><td>'.$row['id'].'</td><td>'.$row['subject'].'</td><td class="bodylist" ><p>'.$row['body'].'</p></td><td>'.$row['user_id'].'</td></tr>';
  $row[] = $row;
  } else {
   print '<tr class="notread"><td>'.$row['id'].'</td><td>'.$row['subject'].'</td><td class="bodylist"><p>'.$row['body'].'</p></td><td>'.$row['user_id'].'</td></tr>';
  }
 }
echo '</tbody></table>';
	mysqli_close($connect);	//close the connection		
?>
	</div>
				
	<?php
		include("compose.php");
		
	?>
		
</div>
</body>	
</html>