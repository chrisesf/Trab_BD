<?php

include('../connect.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $sqlUpdate = "UPDATE autor SET nome = '$nome', cpf= $cpf WHERE id = '$id'";

    $res = $con->query($sqlUpdate);
}

header('Location: ../table.php');

?>