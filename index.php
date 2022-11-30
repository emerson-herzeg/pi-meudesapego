<?php
  require_once("controllers/logica-usuario.php");
  require_once("alertas.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- CSS Alto Contraste - Acessibilidade -->
    <link rel="stylesheet" type="text/css" href="css/altoContraste.css">

    <!-- Esconder a imagem em dispositivos com menores resoluções -->
    <style>
        @media screen and (max-width: 999px){
            .hide-on-mobile {
                display: none;
            }
        }
    </style>

    <title>Meu Desapego</title>
    <link rel="icon" href="logo_art/favicon.png">
  </head>
  <body>

    <header><!-- inicio Cabeçalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <div class="container">

          <a href="index.php" class="navbar-brand">
            <img src="images/meud.png" width="100px">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <i class="fas fa-bars text-white"></i>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="sobre.php" class="nav-link">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a href="contato.php" class="nav-link">Contato</a>
              </li>


              <li class="nav-item divisor"></li>

              <li class="nav-item">
                <a href="cad_doador.php" class="nav-link">Inscrever-se</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="nav-link">Entrar</a>
              </li>
            </ul>
          </div>

        </div>
      </nav>
    </header><!--/fim Cabecalho -->
    <div style="margin-top: 10.3%">
      <!-- Menu de Acessibilidade -->
      <?php
        require_once("menu-acessibilidade.php");
      ?>
      <!-- Fim menu de acessibilidade -->
    </div>

    <section id="home" class="d-flex" style="margin-top: -10%"><!--home -->
      <?php
        mostraAlerta("success");
        mostraAlerta("danger");
      ?>
      <div class="container align-self-center"><!--container -->
          <div class="col-md-12 capa">
            <section id="recursos" class="caixa">
                <div class="row">
                  <div class="col-md-12">
                    <h2>Você está a poucos passos para ajudar diversas famílias</h2>
                    <h3>Um pequeno gesto pode mudar vidas</h3>
                    <h3>Doe móveis, eletrodomésticos em bom estado
                    </h3>
                  </div>
                </div>
            </section>
          </div>
      </div><!--/container -->
    </section><!--/home -->

    <section id="servicos" class="caixa">
      <div class="container">
          <div class="row">
            <div class="col-sm-9">
              <h2>Como ajudar?</h2>

              <p>Caso tenha interesse em doar, basta clicar em <a href="cad_doador.html">Inscrever-se</a>.</p>
              <p>Após fazer o cadastro, será redirecionado para o formulário de doação, após preencher o formulário, entraremos em contato para maiores informações!</p>

              <div class="row">
                <div class="col-8 col-sm-6">
                  <h3>O que eu posso doar?</h3>
                  <p>Roupas, móveis em bom estado, brinquedos, eletrodomésticos e muito mais.</p>
                  <p>A coleta é feita por nossa equipe na data agendada. Entramos em contato para informar sobre a proximidade e imprevistos.</p>

                  <h3>O que é feito com minha doação?</h3>
                  <p>Todas as doações são enviadas para famílias necessitadas, caso tenha interesse em saber o processo de sua doação, entre em contato com nossa equipe para mais informações</p>
                </div>
                <div class="col-4 col-sm-6 hide-on-mobile">
                  <img src="images/fa4.png" style="max-width:400%;height:auto;">
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="images/meud.png" width="100">
          </div>
          <div class="col-md-2">
            <h4>ONG</h4>
            <ul class="navbar-nav">
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="contato.php">Contato</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>
                <a href=""><img src="images/facebook.png"></a>
              </li>
              <li>
                <a href=""><img src="images/instagram.png"></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Início VLibras -->
      <?php
        require_once("vlibras.php");
      ?>
    <!-- Fim VLibras -->

    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
