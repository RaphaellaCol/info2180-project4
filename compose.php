<!DOCTYPE HTML>
<html>
	
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="cheapomail.css">
<title>Compose Message</title>	
</head>

<body>
	<h1 class=compose>Compose Message</h1>
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
	<label for="recipients">Recipients:</label><br>
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