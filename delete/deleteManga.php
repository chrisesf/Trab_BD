<?php

include('../connect.php');

    if(!empty($_GET['cod']))
    {
        $cod = $_GET['cod'];

        $sqlSelect = "SELECT *  FROM manga WHERE cod = $cod";

        $res = $con->query($sqlSelect);

        if($res->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cliente_manga WHERE manga = $cod";
            $sqlDelete2 = "DELETE FROM manga WHERE cod = $cod";
            $resultDelete = $con->query($sqlDelete);
            $resultDelete2 = $con->query($sqlDelete2);
        }
    }
    header('Location: ../table.php');
   
?>