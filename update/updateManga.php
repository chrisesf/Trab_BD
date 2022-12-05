<?php

include('../connect.php');

if(!empty($_GET['cod'])) {

    $cod = $_GET['cod'];

    $select = "SELECT * FROM manga WHERE cod = $cod";
    
    $res = $con->query($select);

    if($res->num_rows > 0){
        while($autor_data = mysqli_fetch_assoc($res)) {
            $nome = $autor_data['nome'];
            $cod = $autor_data['cod'];
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
    <form action="saveUpdateManga.php" method="POST">
        <label for="">Nome: </label>
        <input type="text" name="nome" value="<?php echo $nome ?>">
    
        <br><br>

        <?php
            $sql = "SELECT * FROM autor";
            $res = $con->query($sql);

        echo '<label for="">AUTOR: </label>'; 
        echo '<select name="autor">';
        while($user_data = mysqli_fetch_assoc($res)){
            echo '<option name="autor">'.$user_data['id'].'</option>';
        }   
        echo '</select>';
        ?>

        <input type="hidden" name='id' value="<?php echo $cod ?>">

        <br>
        <button name="update">Update</button>
    </form>
    <a href="../table.php">voltar</a>
</body>
</html>