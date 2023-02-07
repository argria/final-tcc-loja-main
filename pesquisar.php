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
</div> </nav>
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
                        data-bs-target="#<?php $nomeproduto= str_replace(' ', '', $rows_produtos['nomeproduto']); echo $nomeproduto;?>">Ver
                        Produto</a></div>
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
