<?php 
header('content-type: text/json');

if(!isset($_POST['email']))
    exit;

$email = $_POST['email'];
//initialize our PDO class. You will need to replace your database credentials respectively
$db = new PDO('mysql:host=localhost;dbname=serverside','serveruser','gorgonzola7!',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//prepare our query.
$query = $db->prepare("SELECT * FROM accounts WHERE email = :email");
//let PDO bind the username into the query, and prevent any SQL injection attempts.
$query->bindParam(':email', $email);
//execute the query
$query->execute();
	


//Checks if Email already Exists in the database

echo json_encode(array('exists' => $query->rowCount() > 0));	


?>
