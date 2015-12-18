<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="cheapomail.css">
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
		
	$result = mysqli_query($connect, $db_query);

	$obj = mysqli_fetch_object($result); // get the single row.
	echo '<table><thead><tr><td>ID</td><td>Username</td></tr></thead>';
	while ( $row = mysqli_fetch_assoc($result) ) {
    	echo '<tr><td>'.$row['id'].'</td><td>'.$row['username'].'</td></tr>';
    	$rows[] = $row;
	}
echo '</table>';
	
		
	mysqli_close($connect);	//close the connection

if ($_SESSION['username']=='admin'){
	echo "<div id='create_user_btn' > <a href='signup.php' style='text-decoration: none'>Create User</a></div>";
}
	
?>
		</div>
		<div id="msg">
		
		<div id="messages">
			<h2>Recent Messages</h2>
			<hr/>
<?php
include('connect.php');
	$db_query = "SELECT id, subject, body FROM message";
		
	$result = mysqli_query($connect, $db_query);

	$obj = mysqli_fetch_object($result); // get the single row.

	mysqli_close($connect);	//close the connection		
?>
		</div>
			
			
		<?php
			include("compose.php");
		?>
		
		</div>
	</body>	
</html>