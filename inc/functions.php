<?php
/* MAGIC LINK TABLE
id INT autoincrement primary key
user VARCHAR(50) unique
key varchar(50)
page varchar(255)
doe TIMESTAMP

*/

// Check DB for a specific email address

// Generate a link
	// Combine email
	// Get their IP
	// Combine all with unique string and hash using MD5
// Add it to the session

// For someone with an existing session
function retrieveMagic($key,$user) {
	// check DB for $key and $user record
	if ($user == "am@artform.ca" && $key == "123") {
		// return a unique string for session
		return("43t7fguibjk23r");
	}
}

// Check the link that was clicked on
function checkMagic($magic) {
	// Search DB for the magic ingredients
	// Update the DOE (timestamp + 24h)
	if ( ($magic['user'] == 'am@artform.ca') && ($magic['key'] == '1234') ) {
		return(true);
	}

}

// Generate the link
function makeMagic($user,$ip,$s) {
	$s = md5($user.$ip.$s);
	return($s);
}

// Function to generate randomized string for the magic link
function randomizer($chars=15) {
	$usableChar = '34567898765435678910918asdfghjklzxcvbnmqwertyuiop1234567890QWERTYUIOPASDFGHJKLZXCVBNM';
	$len = strlen($usableChar);
	$linkString = '';
	for ($i=0; $i<$chars; $i++) {
		// Loop and append a random char to a string
		$linkString .= $usableChar[rand(0, $len - 1)];
	}
	return($linkString);
}

// Outputs mixed var as preformatted text for debugging
function preout($a, $text=null, $convert=1)
{
	global $debug;
	// Check if local
	$debug = 1;
	if ($debug && isset($a)) {
		echo '<div class="debug">';
		if (!empty($text)) {
			echo "<p>$text</p>";
		}
		echo "<pre>";
		if ($convert && is_array($a)) {
			$a = array_map('htmlentities', $a);
		}
		print_r($a);
		echo "</pre>";
		echo '</div>';
	}
}