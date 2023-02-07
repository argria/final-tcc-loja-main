<?php
include("protect.php");
if(!isset($_SESSION)){
    session_start();
}
    if(isset($_POST['submit']))
    {
        require_once('config.php');
        $nomeCategoria = $_POST['nomeCategoria'];
        $idCategoria = $_POST['idCategoria'];
        $sql = "INSERT INTO tbcategoria(nomecategoria,idcategoria) VALUES ('$nomeCategoria','$idCategoria');";
        $result = pg_query($conexao, $sql);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(90deg, rgb(255, 136, 0), rgb(131, 4, 4));
        }

        .box{
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

        fieldset{
            border: 3px solid red;
        }

        legend{
            border: 1px solid red;
            padding: 10px;
            text-align: center;
            background-image: linear-gradient(45deg, orange, red);
            border-radius: 8px;
            color: white;
        }

        .inputBox{
            position: relative;
            color: black;
        }

        .inputUser{
            border: none;
            background-color: whitesmoke;
            border-radius: 5px;
            border-bottom: 1px solid whitesmoke;
            outline: none;
            color: black;
            font-size: 15px;
            width: 100%;
        }

        .labelInput{
            position: relative;
            top: 5px;
            left: 0px;
            color: white;
        }

        #submit{
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
        <form action="tbcategoria.php" method= "POST">
            <fieldset>
                <legend><b>Categorias</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nomeCategoria" id="nomeCategoria" class="inputUser" required>
                    <label for="nomeCategoria" class="labelInput">Nome</label>
                </div>
                
                <br><br>

                <div class="inputBox">
                    <input type="text" name="idCategoria" id="idCategoria" class="inputUser" required>
                    <label for="idCategoria" class="labelInput">Código</label>
                </div>

                <br><br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>