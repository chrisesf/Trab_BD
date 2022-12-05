<?php

include('../connect.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

$sql = "INSERT INTO cliente(nome, cpf) values ('$nome', '$cpf')";

if (mysqli_query($con, $sql)){
    echo "Cadastrado";
} else {
    echo "ERRO";
}
header('Location: ../table.php');


?>