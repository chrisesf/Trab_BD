<?php

include('../connect.php');

$cliente = $_POST['cliente'];
$manga = $_POST['manga'];

$sql = "INSERT INTO cliente_manga(cliente, manga) values ('$cliente', '$manga')";

if (mysqli_query($con, $sql)){
    echo "Cadastrado";
} else {
    echo "ERRO";
}
header('Location: ../table.php');


?>