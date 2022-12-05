<?php

include('../connect.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM cliente WHERE id = $id";

        $res = $con->query($sqlSelect);

        if($res->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente_manga WHERE cliente = $id";
            $sqlDelete2 = "DELETE FROM cliente WHERE id = $id";
            $resultDelete = $con->query($sqlDelete);
            $resultDelete2 = $con->query($sqlDelete2);
        }
    }
    header('Location: ../table.php');
   
?>