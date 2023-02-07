<?php 
include "config.php";
include("protect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Carrinho de compras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <h4 class="card-title">Meus Pedidos</h4>
                <h6 class="card-title">Aqui você pode conferir os seus pedidos feitos anteriormente!</h6>
            </div>
        </div>

        <form action="carrinho.php?acao=up" method="post">
            <table class="table table-strip">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        if (is_null($_SESSION['emailLogin'])) {
                        ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-warning">
                               Você precisa estar logado!
                            </div>
                            </td>
                    </tr>
                    <?php
                        } else {
                            require_once('config.php');
                           
                            $sql = "SELECT * FROM venda WHERE emaillogin LIKE '".$_SESSION['emailLogin']."'";

                            $resultvenda = pg_query($conexao, $sql);
                            while ($row = pg_fetch_row($resultvenda)) {
                                $sql        = "SELECT * FROM itensvenda INNER JOIN tbproduto ON itensvenda.idproduto::int = tbproduto.idproduto::int WHERE itensvenda.idvenda=".$row[1];
                                $dados      = pg_query($conexao, $sql);
                                $produto    = pg_fetch_assoc($dados);
                                $nome       = $produto['nomeproduto'];
                                $preco      = $produto['precoproduto'];
                                $qtd      = $produto['qtd'];
                    ?>
                        <tr>
                            <!-- td><?php /*echo $id;*/ ?></td -->
                            <td><?php echo $nome; ?></td>
                            <td>
                                <?php echo $qtd; ?>

                            </td>
                            <td style="text-align: right;"><?php echo $preco; ?></td>
                            <!-- td style="text-align: right;"><?php /*echo $sub;*/ ?></td -->
                            <!-- td><a class="btn btn-danger" href="?acao=del&id=<?php /* echo $id; */ ?>">Remover</a></td -->

                        </tr>


                    <?php
                            }

                    ?>
                    <tr>
                        
                        <td style="text-align: right; font-weight: bold;"><?php /*echo number_format($total, 2, ',', '.'); */ ?></td>
                    </tr>
                <?php
                           // $_SESSION['total'] = $total;
                        }
                ?>
            </table>

            <a class="btn btn-info" href="index.php">Voltar para a Página Inicial</a>

        </form>

    </div>

</body>

</html>