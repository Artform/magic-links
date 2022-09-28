<?php
// Error reporting controle
error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
ini_set('display_errors', 1);

// Required Files
require("inc/functions.php");
require("inc/idiorm.php");

session_start();

// Variables
$p = $_POST;
$g = $_GET;
$do = $_GET['do'];