<?php 
$loginRequired = 1;
require("_session.php");

// Redirect if invalid
if (!checkMagic($_SESSION)) header("Location: index.php?key=invalid");
else echo "GOOD!";


/* 
1. Request to login
2. Validate their email
3. Email a unique link
4. Click on link and store in session
5. Check session to DB, redirect if invalid
*/

preout($_SESSION,"Session");