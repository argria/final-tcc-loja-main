<?php
include ("config.php");

if(is_numeric($_GET["idProduto"])){
    $SQL = "DELETE FROM tbproduto WHERE idProduto = ".$_GET["idProduto"];
    if (pg_query($conexao, $SQL) === TRUE) {
        echo "<script>alert('Erro ao excluir produto!');</script>";
        echo "<script>window.location = 'index.php';</script>";
    }else{
        echo "<script>alert('Registro excluído com sucesso!');</script>";
        echo "<script>window.location = 'index.php';</script>";
    }
}
?>