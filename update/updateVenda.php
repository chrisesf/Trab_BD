<?php

include('../connect.php');

if(!empty($_GET['cliente'] & $_GET['manga'])) {

    $cliente = $_GET['cliente'];
    $manga = $_GET['manga'];

    $select = "SELECT * FROM cliente_manga WHERE cliente = $cliente AND manga = $manga";
    
    $res = $con->query($select);

    if($res->num_rows > 0){
        while($autor_data = mysqli_fetch_assoc($res)) {
            $cliente = $autor_data['cliente'];
            $manga = $autor_data['manga'];
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
  <form action="saveUpdateVenda.php" method="POST">
       <?php
            $sql = "SELECT * FROM cliente";
            $res = $con->query($sql);

        echo '<label for="">Cliente: </label>'; 
        echo '<select name="cliente">';
        while($user_data = mysqli_fetch_assoc($res)){
            echo '<option name="cliente">'.$user_data['id'].'</option>';
        }   
        echo '</select>';
        ?>
    
        <br><br>

        <?php
            $sql = "SELECT * FROM manga";
            $res = $con->query($sql);

        echo '<label for="">Mangá: </label>'; 
        echo '<select name="manga">';
        while($user_data = mysqli_fetch_assoc($res)){
            echo '<option name="manga">'.$user_data['cod'].'</option>';
        }   
        echo '</select>';
        ?>

        <input type="hidden" name='id1' value="<?php echo $_GET['cliente'] ?>">
        <input type="hidden" name='id2' value="<?php echo $_GET['manga'] ?>">

        <br>
        <button name="update">Update</button>
    </form>
    <br>
    <a href="../table.php">voltar</a>
</body>
</html>