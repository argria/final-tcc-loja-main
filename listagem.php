<html>

<head>
    <title>Exemplo PHP</title>
    <script type="text/javascript">
        function apagar(id, nm, sn) {
            if (window.confirm("Deseja realmente apagar este registro:\n" + nm + " " +
                    sn)) {
                window.location = 'excluir.php?idProduto=' + id;
            }
        }
    </script>
</head>

<body>
    <fieldset>
        <legend>Menu</legend>
        <a href="paginainicial2Cli.html">Página Inicial</a><br>
        <a href="tbproduto.php">Cadastrar Produto</a><br>
        <a href="listagem.php">Listar</a><br><br>
    </fieldset>

    <fieldset>
        <legend>Lista de produtos cadastrados</legend>
        <?php
        include 'config.php';
        $sql = "SELECT * FROM tbproduto";
        $result = $conexao->query($sql);
        if ($result->num_rows > 0) {
            // Exibindo cada linha retornada com a consulta
        ?>
            <table border: 1>
                <tr>
                    <th>Nome</th>
                    <th>Código</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php
                while ($exibir = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $exibir["nomeProduto"] ?> </td>
                        <td><?php echo $exibir["idProduto"] ?> </td>
                        <td><?php echo $exibir["precoProduto"] ?> </td>
                        <td><?php echo $exibir["qtdeProduto"] ?> </td>
                        <td><a href="tbproduto.php?idProduto=<?php echo
                                                            $exibir["idPessoa"] ?>">Editar</a></td>
                        <td><a href="#" 
                        
                <?php
                }
                ?>
        <?php
        } else {
            echo "Nenhum registro encontrado.";
        }
        $conexao->close();
        ?>
    </fieldset>
</body>

</html>