<?php

include('../connect.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];

        $sqlSelect = "SELECT *  FROM autor WHERE id = $id";

        $res = $con->query($sqlSelect);

        if($res->num_rows > 0)
        {
            $sqlDelete = "DELETE cliente_manga FROM cliente_manga 
            JOIN manga ON manga.cod = cliente_manga.manga WHERE manga.autor = $id";
            $sqlDelete2 = "DELETE FROM manga WHERE autor = $id";
            $sqlDelete3 = "DELETE FROM autor WHERE id = $id";
            $resultDelete = $con->query($sqlDelete);
            $resultDelete2 = $con->query($sqlDelete2);
            $resultDelete3 = $con->query($sqlDelete3);
        }
    }
    header('Location: ../table.php');
   
?>