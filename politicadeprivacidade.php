<?php
include("protect.php");
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Informações | Tribus</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    h3,
    h2,
    h1,
    h4,
    h5,
    h6 {
      padding: 20px;
    }

    .imgpc {
      padding: 20px;
    }
  </style>
</head>

<body style="background-color: rgb(255, 255, 255);">

  <nav class="navbar navbar-expand-lg bg-black text-white">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="imagens/tribus.jpg" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="index.php">Home</a>
          </li>
          <!-- Dropdown -->

        </ul>
        <!-- Pesquisar -->

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-light" type="submit" style="text-align: center;"><i
              class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
        </form>
        <br><br>
        <a>ㅤ<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-person-fill" viewBox="0 0 16 16">
          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
      </svg> Seja bem vindo, <?php echo $_SESSION["nome"];?>!ㅤ <a href="sair.php"> Deseja sair?</a>
      </div>
  </nav>
  <p>
    <b>
      <h3>INFORMAÇÕES</h3>
    </b>
  </p>
  <p>
    <b>
      <h6 id="comocomprar">COMO COMPRAR</h6>
    </b>
  </p>

  <!-- Section: Text -->

  <section style="font-family: Arial, Helvetica, sans-serif;  font-size: 3px;" class="mb-4">
    <img class="imgpc" src="imagens/fotocomputador.jpg" alt="fotocomputador" width="1350" height="600"
      class="d-inline-block align-text-top">
    <p>
    <h6>Para comprar em nossa loja é muito fácil, siga os passos abaixo:</h6>
    </p>
    <h6><b>1)</b> Basta navegar na página inicial onde encontrará diversos produtos, para encontarar um produto
      especifico
      pesquise na barra de pesquisa. Ao enontrar o produto desejado clique sobre o ícone Ver Produto para mais
      detalhes. Se deseja realizar a compra, adcione o tamanho e a cor do item e em seguida clique sobre o ícone
      adcionar ao carrinho, se não deseja clique sobre o ícone voltar.</h6>
    <h6><b>2)</b> Adcionando ao carrinho selecione a quantidade do produto desejada e logo em seguida basta clicar sobre
      o
      ícone Finalizar Compra que você estará concluindo sua compra. Continue navegando em nosso site até escolher
      todos os produtos que você deseja adquirir. </h6>
    <h6><b>3)</b> Se for cadastrado entre com o seu email e senha. Caso não for cadastrado, cadastre-se rapidamente
      clicando
      no link de Cadastro.</h6>
    <h6><b>4)</b> Envio</h6>
    <h6><b>5)</b> Será gerado um boleto para fazer o pagamento do produto.</h6>
    <h6><b>6)</b> Notificações via e-mail</h6>
    <br>
    <p>
      <b>
        <h6 id="pagamentoeenvio">PAGAMENTO E ENVIO</h6>
      </b>
    </p>
    <h6>Para efetuar o pagamento iremos gerar um boleto para o cliente.</h6>
    <br>
    <p>
      <b>
        <h6 id="seguranca"> SEGURANÇA</h6>
      </b>
    </p>
    <br>
    <h6>Nós da Tribus prezamos pela qualidade e satisfação de nossos clientes. Para que seja mantida a credibilidade
      junto aos seus consumidores, a equipe empenhada em entregar uma negociação eficaz, ágil e principalmente
      satisfatória para os mesmos criou-se uma política de troca.
      <br>
      <p>
        <b>
          <h6>CONSIDERAÇÕES GERAIS</h6>
        </b>
      </p>
      <h6>As ocorrências que envolvem trocas devem SEMPRE ser comunicadas através do e-mail no campo de CONTACT no site.
        O produto trocado sem comunicação, será reenviado sem consulta prévia. Ao efetuar o processo de troca o cliente
        deverá no verso da nota fiscal a ser trocada, informar o nome de quem está devolvendo, CPF e a data em que a
        troca foi realizada.</h6>
      <br>
      <p>
        <b>
          <h6>FUNCIONAMENTO DA TROCA</h6>
        </b>
      </p>
      <h6>Se ao receber o produto, você resolver troca-lo, deverá fazê-lo em até sete dias corridos, a contar da data de
        recebimento. Observando as seguintes condições:</h6>
      <h6>O produto não poderá ter indícios de uso.</h6>
      <h6>O produto deverá ser encaminhado preferencialmente na embalagem original, acompanhado de nota fiscal,
        etiquetas e todos os seus acessórios.</h6>
      <h6>Ao efetuar o processo de devolução o cliente deverá no verso da nota fiscal a ser devolvida, informar o
        motivo, o nome de quem está devolvendo, CPF e a data da devolução.</h6>
      <br>
      <p>
        <b>
          <h6>PRODUTO COM DEFEITO</h6>
        </b>
      </p>
      <h6>Se ao receber o produto, você identificar qualquer defeito comunique imediatamente nosso Serviço de
        Atendimento ao Consumidor, através do nosso site no campo CONTACT, para orientação dos procedimentos a serem
        adotados. Para efetuar a troca ou devolução do produto com defeito, deverão ser observadas as seguintes
        condições:</h6>
      <h6>O produto não poderá ter indícios de uso.</h6>
      <h6>O produto deverá ser encaminhado preferencialmente na embalagem original, sem violação, acompanhado de nota
        fiscal, etiquetas e todos os seus acessórios.</h6>
      <h6>Ao efetuar o processo de devolução/troca o cliente deverá no verso da nota fiscal a ser devolvida/trocada,
        informar o nome de quem está devolvendo, CPF e a data da devolução.</h6>
      <br>
      <p>
        <b>
          <h6>TROCA DE PRODUTO</h6>
        </b>
      </p>
      <h6>A troca poderá ser efetuada por produtos de mesma referência (modelo) nos casos de erro de tamanho e cor no
        momento do envio do pedido. O prazo para solicitação de troca do produto é de sete (7) dias corridos após o
        recebimento, a contar da data de recebimento, e deverá ser efetuado através de nosso Serviço de Atendimento ao
        Consumidor através do nosso site no campo CONTACT.</h6>

  </section>
  <!-- Section: Text -->



  <!-- Footer -->
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Social media -->
      <section class="mb-4">

        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1"
          href="https://api.whatsapp.com/send/?phone=5531982267813&text&type=phone_number&app_absent=0"
          title="Whatsapp Mega" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg></a>

        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/lojatribusob/"
          title="Instagram" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path
              d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
          </svg></a>

        <a class="btn btn-outline-light btn-floating m-1"
          href="https://api.whatsapp.com/send/?phone=5531987543791&text&type=phone_number&app_absent=0"
          title="Whatsapp Kelly" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
            fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
            <path
              d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
          </svg></a>




      </section>

      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">INSTITUCIONAL</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="quemsomos.php" class="text-white">Quem Somos</a>
              </li>
              <li>
                <a href="tbcriarlogin.php" class="text-white">Cadastre-se</a>
              </li>
              <li>
                <a href="politicadeprivacidade.php" class="text-white">Política de Privacidade</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
            <h5 class="text-uppercase">SUPORTE</h5>

            <ul class="list-unstyled mb-0">
              <li>
                <a href="#comocomprar" class="text-white">Como Comprar</a>
              </li>
              <li>
                <a href="#pagamentoeenvio" class="text-white">Pagamento e Envio</a>
              </li>
              <li>
                <a href="#seguranca" class="text-white">Segurança</a>
              </li>
            </ul>
          </div>
          <!--Grid column-->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h5 class="text-uppercase fw-bold mb-4">CONTACT</h5>
            <p><i class="fas fa-home me-3"></i> Ouro Branco, MG</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +55 31 98226-7813</p>
            <p><i class="fas fa-phone me-3"></i> +55 31 98754-3791</p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

  </footer>
  <!-- Footer -->

</body>

</html>