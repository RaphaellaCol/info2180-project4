<?php

$body = isset($_POST['body']);
$subj = isset($_POST['subject']);
$rcp = isset($_POST['recipients']);

echo $body . "<br/>";
echo $subj . "<br/>";
echo $rcp . "<br/>";

include("connect.php"); //insert data from connect.php

$query = "INSERT INTO message (id, body, subject, recipient_ids)" . "VALUES (NULL, '$body', '$subj','$rcp')";
	
$result = mysqli_query($connect, $query) or die (mysqli_error($connect));

if ($result==1){
	echo "You have been added";
}
else{
	echo "Sorry, an error has ocurred";
}
		
mysqli_close($connect);	//close the connection


?>


<!DOCTYPE HTML>
<html>
	
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="cheapomail.css">
<title>Compose Message</title>	
</head>

<body>
	<h1 class="compose">Compose Message</h1>
	<hr/>
	<form action="screen.php" method='post'>
	<div class="message">
	<label for="subject">Subject:</label>	
	<input
	   		name="subject"
		   	id= "subject"			   
	   		type="text"/>	
	</div>	
	<br/>	
	<div class="message">
	<label for="recipients">Recipients ID:</label><br>
	<textarea
			  name="recipients"
			  id="recipients"
			  rows="4"
			  cols="50"></textarea>	  	   	
	</div>
	<br>	
	<div class="message">
	<label for="body">Body:</label>
	<br><textarea
			  name="body"
			  id="body"
			  rows="25"
			  cols="75"></textarea>	
	</div>
		
	<br>
	<input type="submit" value="Send Message">
		
	</form>
	
</body>
</html>