<?php 
header('content-type: text/json');
require 'connect.php';

if(!isset($_POST['email'])){
    exit;
}


$email = $_POST['email'];

//prepare our query.
$query = $db->prepare("SELECT * FROM accounts WHERE email = :email");
//let PDO bind the username into the query, and prevent any SQL injection attempts.
$query->bindParam(':email', $email);
//execute the query
$query->execute();
	


//Checks if Email already Exists in the database

echo json_encode(array('exists' => $query->rowCount() > 0));	


?>
