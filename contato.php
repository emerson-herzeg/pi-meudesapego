<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <!-- CSS Alto Contraste - Acessibilidade -->
    <link rel="stylesheet" type="text/css" href="css/altoContraste.css">

    <title>Meu Desapego</title>
    <link rel="icon" href="images/logofav.png">
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

    <div  style="margin-top: -10%"> <!-- ######################### Espaçador ########################## -->
      <p class="hidden"></p>
    </div>
 

    <section id="servicos" class="caixa">
      <div class="container">
                  <h2>Contato</h2>

                  <p>Para mais informações sobre nossa ONG, entre em contato através das redes sociais:
                    <ul style="list-style-type:none;">
                      <li><i class="bi bi-facebook"></i> <a href="https://www.facebook.com/tg417/"> Facebook</a></li>
                      <li><i class="bi bi-instagram"></i> <a href="https://www.instagram.com/tg_4.17/"> Instagram</a></li>
                      <li><i class="bi bi-envelope"></i> <a href="mailto:associacaotg4.17@gmail.com">associacaotg4.17@gmail.com</a></li>
                      <li><i class="bi bi-telephone-fill"></i> <a href="tel:+5511996204330"> (11)99620-4330</a></li> </p>

                  



                  <img src="images/call.jpg" style="max-width:100%;height:auto;">
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

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>