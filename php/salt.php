<?php

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


?>
