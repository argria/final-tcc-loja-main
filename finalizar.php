<?php
session_start();
if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}
function limparCarrinho()
{
    unset($_SESSION['carrinho']);
}
?>

<?php
include "config.php";
include("protect.php");

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

//adicionar produto
if (isset($_GET['acao'])) {
    //adicionar carrinho
    if ($_GET['acao'] == 'add') {
        $id = intval($_GET['id']); //intval() verifica se o número vindo é um inteiro
        if (!isset($_SESSION['carrinho'][$id])) {
            $_SESSION['carrinho'][$id] = 1;
        } else {
            $_SESSION['carrinho'][$id]++;
        }
    }
    //remover produto
    if ($_GET['acao'] == 'del') {
        $id = intval($_GET['id']); //intval() verifica se o número vindo é um inteiro
        if (isset($_SESSION['carrinho'][$id])) {
            unset($_SESSION['carrinho'][$id]);
        }
    }

    //atualizar carrinho
    if ($_GET['acao'] == 'up') {
        if (is_array($_POST['prod'])) {
            foreach ($_POST['prod'] as $id => $qtd) {
                //intval() verifica se o número vindo é um inteiro
                //trim() remove o caracter indicado
                $id = intval(trim($id, "'"));
                $qtd = intval($qtd);
                if (!empty($qtd) || $qtd <> 0) {
                    $_SESSION['carrinho'][intval($id)] = $qtd;
                } else {
                    unset($_SESSION['carrinho'][$id]);
                }
            }
        }
    }
}


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
                <h4 class="card-title">Recibo do Pedido</h4>
            </div>
        </div>

        <form action="carrinho.php?acao=up" method="post">
            <table class="table table-strip">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço</th>
                        <th>Subtotal</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        if (count($_SESSION['carrinho']) == 0) {
                        ?>
                    <tr>
                        <td colspan="5">
                            <div class="alert alert-warning">
                                Nenhum produto no carrinho.
                            </div>
                        </td>
                    </tr>
                    <?php
                        } else {
                            require_once('config.php');
                            $total = 0;
                            //var_dump($_SESSION['carrinho']);
                            $sqlitensvenda = ""; 
                            foreach ($_SESSION['carrinho'] as $id => $qtd) {
                                $sql        = "SELECT * FROM tbproduto WHERE idproduto = $id";
                                //echo $sql;
                                $dados      = pg_query($conexao, $sql);
                                $produto    = pg_fetch_assoc($dados);
                                $nome       = $produto['nomeproduto'];
                                $preco      = $produto['precoproduto'];
                                //$preco      = number_format($produto['precoproduto'], 2, ',', '.');
                                $sub        = $produto['precoproduto'];
                                //$sub        = number_format($produto['precoproduto'] * $qtd, 2, ',', '.');
                                $total      += floatval(str_replace('.', '', $sub));
                                $sqlitensvenda .= "INSERT INTO itensvenda(idproduto, qtd, idvenda) VALUES ('$id','$qtd', XIDVENDAX);";
                    ?>
                        <tr>
                            <td><?php echo $nome; ?></td>
                            <td>
                                <input type="text" size="3" name="prod['<?php echo $id; ?>']" value="<?php echo $qtd; ?>">

                            </td>
                            <td style="text-align: right;"><?php echo $preco; ?></td>
                            <td style="text-align: right;"><?php echo $sub; ?></td>

                        </tr>


                    <?php
                            }
                            if (!is_null($_SESSION["emailLogin"])){

                                //insert aqui:
                                $sql = ("INSERT INTO venda(valor, emailLogin) VALUES ('$total','".$_SESSION["emailLogin"]."') RETURNING id");              
                                $result = pg_query($conexao, $sql);
                                $vresult = pg_fetch_row($result);
                                $insert_id = $vresult[0];
                                //echo($insert_id);
                                $sqlitensvenda = str_ireplace("XIDVENDAX", $insert_id, $sqlitensvenda);
                                //echo($sqlitensvenda);
                                $result = pg_query($conexao, $sqlitensvenda);
                                
                            }
                            $result = pg_query($conexao, "DELETE FROM VENDA WHERE emaillogin is null");
                            $result = pg_query($conexao, "DELETE FROM ITENSVENDA WHERE idvenda is null");

                    ?>
                    <tr>
                        <td colspan="4" style="text-align: right; font-weight: bold;">Total</td>
                        <td style="text-align: right; font-weight: bold;"><?php echo number_format($total, 2, ',', '.'); ?></td>
                    </tr>
                <?php
                            $_SESSION['total'] = $total;
                        }
                ?>
            </table>

            <a class="btn btn-info" href="paginainicial2Cli.php">Continuar Comprando</a>

        </form>

    </div>

    <?php
    require_once("config.php");
    if (isset($_SESSION['carrinho']) && isset($_SESSION['total'])) {
        if (is_numeric($_SESSION['total'])) {
            $valorVenda = $_SESSION['total'];
            $sqlInserirVenda = "INSERT INTO venda (valor) VALUES ($valorVenda)";
            $sql1 = pg_query($conexao, $sqlInserirVenda);
            foreach ($_SESSION['carrinho'] as $id => $qtd) {
                $sqlInserirItensVenda = "INSERT INTO itensvenda(idproduto, qtd) VALUES($id, $qtd)";
                $sql = pg_query($conexao, $sqlInserirItensVenda);
            }
    ?>
            <br>
            <div class="alert alert-success" role="alert">
                Venda realizada com sucesso!
            </div>
        <?php
        }
        limparCarrinho();
    } else {
        ?>
        <div class="alert alert-warning" role="alert">
            Nenhum item foi escolhido para compra!
        </div>
        <a class="btn btn-outline-dark" href="#">Voltar para Produtos</a>
    <?php
    }
    ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>


</html>