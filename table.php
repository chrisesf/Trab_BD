<?php
include "connect.php";

$sql1 = "SELECT * FROM autor";
$res1 = $con->query($sql1);

$sql2 = "SELECT * FROM cliente";
$res2 = $con->query($sql2);

$sql3 = "SELECT manga.cod, manga.nome, manga.autor, autor.nome as autor_nome FROM manga
JOIN autor ON autor.id = manga.autor";
$res3 = $con->query($sql3);

$sql4 = "SELECT cliente_manga.manga, cliente_manga.cliente, manga.nome as manga_nome, 
cliente.nome as cliente_nome FROM cliente_manga
JOIN manga ON manga.cod = cliente_manga.manga 
JOIN cliente ON cliente.id = cliente_manga.cliente";
$res4 = $con->query($sql4);
            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tables.css">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <h2>Autores</h2>
            <tr>
                <th><a href="cadastro.php">&#128195;</a></th>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($res1)) {
                    echo "<tr>";
                    echo "<td>"."</td>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['cpf']."</td>";
                    echo "<td> <a href = 'update/updateAutor.php?id=$user_data[id]'>"."&#128394"."</a></td>";
                    echo "<td> <a href = 'delete/deleteAutor.php?id=$user_data[id]''>"."&#10060"."</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <table>
        <thead>
            <h2>Clientes</h2>
            <tr>
                <th><a href="cadastro.php">&#128195;</a></th>
                <th>ID</th>
                <th>NOME</th>
                <th>CPF</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($res2)) {
                    echo "<tr>";
                    echo "<td>"."</td>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['cpf']."</td>";
                    echo "<td> <a href = 'update/updateCliente.php?id=$user_data[id]'>"."&#128394"."</a></td>";
                    echo "<td> <a href = 'delete/deleteCliente.php?id=$user_data[id]''>"."&#10060"."</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <br><br>
    <table>
        <thead>
            <h2>Mangas</h2>
            <tr>
                <th><a href="cadastro.php">&#128195;</a></th>
                <th>COD</th>
                <th>NOME</th>
                <th>AUTOR</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($res3)) {
                    echo "<tr>";
                    echo "<td>"."</td>";
                    echo "<td>".$user_data['cod']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['autor_nome']."</td>";
                    echo "<td> <a href = 'update/updateManga.php?cod=$user_data[cod]'>"."&#128394"."</a></td>";
                    echo "<td> <a href = 'delete/deleteManga.php?cod=$user_data[cod]''>"."&#10060"."</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <table>
        <thead>
            <h2>Vendas</h2>
            <tr>
                <th><a href="cadastro.php">&#128195;</a></th>
                <th>CLIENTE</th>
                <th>MANGÁ</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($res4)) {
                    echo "<tr>";
                    echo "<td>"."</td>";
                    echo "<td>".$user_data['cliente_nome']."</td>";
                    echo "<td>".$user_data['manga_nome']."</td>";
                    echo "<td> <a href = 'update/updateVenda.php?cliente=$user_data[cliente]&manga=$user_data[manga]''>"."&#128394"."</a></td>";
                    echo "<td> <a href = 'delete/deleteVenda.php?cliente=$user_data[cliente]&manga=$user_data[manga]''>"."&#10060"."</a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>