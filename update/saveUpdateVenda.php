<?php

include('../connect.php');

if(isset($_POST['update'])){
    $id1 = $_POST['id1'];
    $id2 = $_POST['id2'];
    $cliente = $_POST['cliente'];
    $manga = $_POST['manga'];

    print_r($id1);
    print_r($id2);

    $sqlUpdate = "UPDATE cliente_manga SET cliente = '$cliente', manga= $manga WHERE cliente = $id1 AND manga = $id2";

    $res = $con->query($sqlUpdate);
}

header('Location: ../table.php');

?>