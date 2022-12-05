<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Cadastrar Autor</h2>
    <form action="insert/cadastroAutor.php" method="POST">
        <label for="">Nome: </label>
        <input type="text" name="nome">

        <br><br>

        <label for="">CPF: </label>
        <input type="text" name="cpf" placeholder="insira seu CPF (somente números)" pattern="[0-9]{11}">

        <br>

        <button>Cadastrar</button>
    </form>

    <br>

    <h2>Cadastrar Cliente</h2>
    <form action="insert/cadastroCliente.php" method="POST">
        <label for="">Nome: </label>
        <input type="text" name="nome">
    
        <br><br>
    
        <label for="">CPF: </label>
        <input type="text" name="cpf" placeholder="insira seu CPF (somente números)" pattern="[0-9]{11}">
    
        <br>
    
        <button>Cadastrar</button>
    </form>

    <br>
    

    <h2>Cadastrar Mangá</h2>
    <form action="insert/cadastroManga.php" method="POST">
        <label for="">Nome: </label>
        <input type="text" name="nome">
    
        <br><br>

        <?php
            include_once "connect.php";
            $sql = "SELECT * FROM autor";
            $res = $con->query($sql);

        echo '<label for="">Autor: </label>'; 
        echo '<select name="autor">';
        while($user_data = mysqli_fetch_assoc($res)){
            echo '<option name="autor">'.$user_data['id'].'</option>';
        }   
        echo '</select>';
        ?>
        <br>
        <button>Cadastrar</button>
    </form>

    <br>
    

    <h2>Vender Mangá</h2>
    <form action="insert/cadastroVenda.php" method="POST">
       <?php
            include_once "connect.php";
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
            include_once "connect.php";
            $sql = "SELECT * FROM manga";
            $res = $con->query($sql);

        echo '<label for="">Mangá: </label>'; 
        echo '<select name="manga">';
        while($user_data = mysqli_fetch_assoc($res)){
            echo '<option name="manga">'.$user_data['cod'].'</option>';
        }   
        echo '</select>';
        ?>
        <br>
        <button>Cadastrar</button>
    </form>
</body>
</html>