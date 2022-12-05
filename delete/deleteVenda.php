<?php

include('../connect.php');

    if(!empty($_GET['cliente'] & $_GET['manga']))
    {
        $cliente = $_GET['cliente'];
        $manga = $_GET['manga'];

        $sqlSelect = "SELECT * FROM cliente_manga WHERE cliente = $cliente AND manga = $manga";

        $res = $con->query($sqlSelect);

        if($res->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente_manga WHERE cliente = $cliente AND manga = $manga";
            $resultDelete = $con->query($sqlDelete);
        }
    }
    header('Location: ../table.php');
   
?>