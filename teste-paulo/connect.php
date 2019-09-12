<?php
	$localhost = "localhost";
	$username = "root";
	$password = "";
	$dbname = "crud_paulo";

	$con = new mysqli($localhost, $username, $password, $dbname);

	if ($con->connect_error) {
		die("Falha ao Conectar: " . $con->connect_error);
	} 
?>