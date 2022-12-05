<?php

include('../connect.php');

if(!empty($_GET['id'])) {

    $id = $_GET['id'];

    $select = "SELECT * FROM autor WHERE id = $id";
    
    $res = $con->query($select);

    if($res->num_rows > 0){
        while($autor_data = mysqli_fetch_assoc($res)) {
            $nome = $autor_data['nome'];
            $cpf = $autor_data['cpf'];
        }
    } else {
        header('location: table.php');
    }
}


?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="saveUpdateAutor.php" method="POST">
        <label for="">Nome: </label>
        <input type="text" name="nome" value="<?php echo $nome ?>">

        <br><br>

        <label for="">CPF: </label>
        <input pattern="[0-9]{11}" type="text" name="cpf" value="<?php echo $cpf ?> ">

        <br><br>

        <input type="hidden" name='id' value="<?php echo $id ?>">

        <button name="update">Update</button>
    </form>
    <br>
    <a href="../table.php">voltar</a>
</body>
</html>