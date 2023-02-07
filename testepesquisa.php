<?php
include_once("config.php");
$pesquisar=$_POST['pesquisar'];
$SQL= "SELECT * from tbproduto where lower(nomeproduto) LIKE lower('%$pesquisar%') LIMIT 10";
//$SQL= "SELECT * from tbproduto ";
//echo $SQL;
$result_produtos= pg_query($conexao, $SQL);
?>
<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />

</head>

<body style="background-color: rgb(255, 255, 255);">

    <nav class="navbar navbar-expand-lg bg-black text-white">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="imagens/tribus.jpg" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
    while($rows_produtos = pg_fetch_array($result_produtos)){
    ?>
            <div class="col mb-5">
                <div class="card h-100" style="height: 40rem; width: 15rem">
                    <!-- Product image-->
                    <img class="card-img-top" src="<?php echo $rows_produtos['imgproduto']; ?>" alt="roupa" />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?php echo $rows_produtos['nomeproduto']; ?></h5>


                            <!-- Product price-->
                            <?php echo $rows_produtos['precoproduto']; ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" data-bs-toggle="modal"
                                    data-bs-target="#<?php $nomeproduto= str_replace(' ', '', $exibir['nomeproduto']); echo $nomeproduto;?>">Ver
                                    Produto</a>
                              </div>
                        </div>
                    </div>
                </div>

            <!-- Modal -->
            <div class="modal fade" id="<?php echo $nomeproduto; ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?php echo $exibir['nomeproduto']; ?></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!--Slide Modal-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $exibir['imgproduto']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $exibir['imgproduto']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?php echo $exibir['imgproduto']; ?>" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <!--Slide Modal Fim-->
                        <!--Rodapé Modal-->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                            <a href="carrinho.php?acao=add&id=<?php echo  $exibir['idproduto']?>"
                                class="btn btn-primary"><button type="button" class="btn btn-primary">Adicionar ao
                                    Carrinho</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    }
    ?>
        </div>
    </div>
</body>

</html>