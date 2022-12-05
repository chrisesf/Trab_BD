<?php

include('../connect.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $autor = $_POST['autor'];

    $sqlUpdate = "UPDATE manga SET nome = '$nome', autor= $autor WHERE cod = '$id'";

    $res = $con->query($sqlUpdate);
}

header('Location: ../table.php');

?>