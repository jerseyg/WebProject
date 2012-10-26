<?php 
require_once('PhpConsole.php');
PhpConsole::start();

require 'connect.php';
require 'salt.php';

$salt = createSalt();

if (isset($_POST['firstName'])) {
	$firstName = $_POST['firstName'];
}
if (isset($_POST['lastName'])) {
	$lastName = $_POST['lastName'];
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
}

if (isset($_POST['inputPassword'])) {
	$hashed = hashbrowns($password, $salt);
	$password = $_POST['inputPassword'];
}

//prepare our query.
$query = $db->prepare("INSERT INTO accounts (first_name, last_name, username, password, salt) VALUES (:first, :last, :email, :password, :salt)");
//let PDO bind the username into the query, and prevent any SQL injection attempts.
$query->bindParam(':first', $firstName);
$query->bindParam(':last', $lastName);
$query->bindParam(':email', $email);
$query->bindParam(':password', $hashed);
$query->bindParam(':salt', $salt);
//execute the query
$query->execute();


?>