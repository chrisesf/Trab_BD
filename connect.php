<?php

$hostname = 'localhost';
$user = 'root';
$password = '';
$database = 'manga';

$con = mysqli_connect($hostname, $user, $password, $database);

if($con->connect_errno) {
    die("Falha na conexão! (" . $conn->connect_errno . ") " . $conn->connect_error);
}

?>