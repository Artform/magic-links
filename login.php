<?php 
require("_session.php");

// Validate the key
// Check DB for the key
if ($g['key'] == 'efbd2f0a2d709efcad4695058e03bb56') {
	// Setup the session
	$_SESSION['user'] = "email@domain.com";
	$_SESSION['key'] = '123';
	// Redirect to the test
	header("Location: test.php");
} else {
	header("Location: index.php?error=badkey");
}





