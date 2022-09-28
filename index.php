<?php 
require("_session.php");

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Magic Links</title>
</head>
<body>
	<h1>Magic Links Example</h1>
	<form action="index.php?do=login" method="post">
		<p>Please enter an authorized email address:</p>
		<input type="email" name="user" placeholder="email@domain.com">
		<input type="submit" value="Request Link">
	</form>
	<?php 
	// Test the login and redirect
	if ($do == 'login' && $p['user']) {
		// Check if the email is valid
		if ($p['user'] == 'email@domain.com') {
			echo "Making link";
			$ip = $_SERVER['REMOTE_ADDR'];
			$s = randomizer();
			// For testing, using fixed value
			$link = makeMagic($p['user'],"127.0.0.1","123");
		}
		// Generate a link and email to user
	}


	if ($link) {
		$link = "./login.php?key=$link";
		echo "<a href='$link'>$link</a>";
	}

	preout($p,"POST");
	?>
</body>
</html>