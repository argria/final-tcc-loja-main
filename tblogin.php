<?php
 if(!isset($_SESSION)){
    session_start();
}
    if(isset($_POST['submit']))
    {
    require_once('config.php');
        $usuario = $_POST["emailLogin"];
        $senha = $_POST["senhaLogin"];

        $sql = "SELECT * 
                FROM tbcriarlogin
                where emailLogin = '$usuario' and
                senhaLogin = '$senha' ";

        //echo $sql;

        $resultado = pg_query($conexao, $sql);

        if (pg_num_rows($resultado)){
            $dados_usuario = pg_fetch_assoc($resultado);
            $_SESSION["nomeLogin"] = $usuario;
            $_SESSION["nome"]=$dados_usuario['nomelogin'];
            $_SESSION["emailLogin"] = $usuario; 
            header("Location: index.php");
        }else{
            ?>
            <script>alert("Email ou senha errados, tente novamente!")</script>
            <script>window.history.back();</script>    
            <?php    
        }
        
         
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: linear-gradient(90deg, rgb(255, 136, 0), rgb(131, 4, 4));
    }

    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: black;
        padding: 15px;
        border-radius: 15px;
        width: 28%;
        color: black;
    }

    fieldset {
        border: 3px solid red;
    }

    legend {
        border: 1px solid red;
        padding: 10px;
        text-align: center;
        background-image: linear-gradient(45deg, orange, red);
        border-radius: 8px;
        color: white;
    }

    .inputBox {
        position: relative;
        color: black;
    }

    .inputUser {
        border: none;
        background-color: whitesmoke;
        border-radius: 5px;
        border-bottom: 1px solid whitesmoke;
        outline: none;
        color: black;
        font-size: 15px;
        width: 100%;
    }

    .labelInput {
        position: relative;
        top: 5px;
        left: 0px;
        color: white;
    }

    #submit {
        background-image: linear-gradient(45deg, orange, red);
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;
    }    

    #submit2 {
        background-image: linear-gradient(45deg, orange, red);
        width: 100%;
        border: none;
        padding: 15px;
        color: white;
        font-size: 15px;
        cursor: pointer;
        border-radius: 10px;    
    }
    </style>
</head>

<body>
    <!--<a href="home.php">Voltar</a>-->
    <div class="box">
        <form action="tblogin.php" method="POST">
            <fieldset>
                <legend><b>Login</b></legend>
                <br>

                <div class="inputBox">
                    <input type="text" name="emailLogin" id="emailLogin" class="inputUser" placeholder="Informe o email" required>
                    <label for="emailLogin" class="labelInput">E-mail</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="password" name="senhaLogin" id="senhaLogin" class="inputUser" placeholder="Informe a senha" required>
                    <label for="senhaLogin" class="labelInput">Senha</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit">
                <br><br>
                <input type="reset" name="reset" value="Cancelar" id="submit2">

            </fieldset>
        </form>
    </div>
</body>

</html>