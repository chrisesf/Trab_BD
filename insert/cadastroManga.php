<?php

include('../connect.php');

$nome = $_POST['nome'];
$autor = $_POST['autor'];

$sql = "INSERT INTO manga(nome, autor) values ('$nome', '$autor')";

if (mysqli_query($con, $sql)){
    echo "Cadastrado";
} else {
    echo "ERRO";
}
header('Location: ../table.php');


?>