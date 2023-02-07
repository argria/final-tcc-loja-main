<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
        //print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
        //print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de Nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
        //print_r('Cidade: ' . $_POST['cidade']);
        //print_r('<br>');
        //print_r('Estado: ' . $_POST['estado']);
        //print_r('<br>');
        //print_r('Endereço: ' . $_POST['endereco']);

    if($_POST) {
        $senhaLogin = $_POST['senhaLogin'];
        $confirmasenhaLogin  = $_POST['confirmasenhaLogin'];
        if ($senhaLogin == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        } else if ($senhaLogin == $confirmasenhaLogin) {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais!</span>";
        } else {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";
    }

    include_once('config.php');
        
        $nomeLogin = $_POST['nomeLogin'];
        $emailLogin = $_POST['emailLogin'];
        $senhaLogin = $_POST['senhaLogin'];
        $confirmasenhaLogin = $_POST['confirmasenhaLogin'];

        $result = pg_query($conexao, "INSERT INTO tbcriarlogin(nomeLogin,emailLogin,senhaLogin,confirmasenhaLogin) 
        VALUES ('$nomeLogin','$emailLogin','$senhaLogin','$confirmasenhaLogin')");
        header ("location: paginainicial2Cli.php");
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
        width: 50%;
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
        <form action="tbcriarlogin.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeLogin" id="nomeLogin" class="inputUser" required>
                    <label for="nomeLogin" class="labelInput">Nome</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="text" name="emailLogin" id="emailLogin" class="inputUser" required>
                    <label for="emailLogin" class="labelInput">E-mail</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="password" name="senhaLogin" id="senhaLogin" class="inputUser" required>
                    <label for="senhaLogin" class="labelInput">Senha</label>
                </div>

                <br><br>

                <div class="inputBox">
                    <input type="password" name="confirmasenhaLogin" id="confirmasenhaLogin" class="inputUser" required>
                    <label for="confirmasenhaLogin" class="labelInput">Confirmar Senha</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit">
                <br>
                

            </fieldset>
        </form>
    </div>
</body>

</html>