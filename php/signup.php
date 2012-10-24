<?php 
require 'connect.php';

function createSalt() {
	$string = md5(uniqid(rand(), true));
	return substr($string, 0, 3);
}


function hashbrowns($string) {
	$hash = hash('sha256', $string);
	$salt = createSalt();
	$rehash = hash('sha256', $salt . $hash);
	return $rehash;
}


if(isset($_POST('firstName'))){
	$firstName = mysql_real_escape_string($_POST('firstName'));
}

if(isset($_POST('lastName'))){
	$lastName = mysql_real_escape_string($_POST('lastName'));
}

if(isset($_POST('email'))){
	$email = mysql_real_escape_string($_POST('email'));
} 

if(isset($_POST('password'))){
	$password = mysql_real_escape_string($_POST('password'));
} 

//Checks if Email already Exists in the database
$checkSQL = "SELECT email FROM accounts WHERE email = '$email'; ";
$checkResults


?>