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

    <title>Meu Desapego</title>
    <link rel="icon" href="logo_art/favicon.png">
    <style type="text/css">
    	#bodycard {
    		margin: 11% 6% 3%; /*topo direita/esquerda bottom*/
    	}    	
    </style>
  </head>
  <body>
    
    <header><!-- inicio Cabeçalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente">
        <div class="container">
          
          <a href="index.php" class="navbar-brand">
            <img src="images/meud.png" width="150px">
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

    <section style="margin-top: -10%"><!--home -->
      <?php
        mostraAlerta("success");
        mostraAlerta("danger");
      ?>

      <!-- INÍCIO ACESSIBILIDADE -->
      <div class="card" id="bodycard">
      	<br>
      	<h3 align="center">Recursos Disponíveis</h3>
      	<div class="card-body">
      		<!-- Início bloco 1 -->
      		<div class="d-flex justify-content-between">
      				<span class="border rounded bg-primary text-white w-25">
      					<div class="d-flex bd-highlight">
      						<div class="p-2 flex-shrink-1 bd-highlight">
      							<span class="fa fa-adjust fa-2x" aria-hidden=true></span>
      						</div>
      						<div class="p-2 w-100 bd-highlight">
      							<h5 class="card-title">Alto Contraste</h5>
      						</div>
      					</div>
      				</span>
      				<span class="border rounded bg-success text-white mx-2">
      					<div class="d-flex bd-highlight">
      						<div class="p-2 flex-shrink-1 bd-highlight">
      							<span class="fa fa-font fa-2x" aria-hidden=true></span>
      						</div>
      						<div class="p-2 w-100 bd-highlight">
      							<h5 class="card-title">Aumentar e diminuir a fonte do texto</h5>
      						</div>
      					</div>
      				</span>
      				<span class="border rounded bg-info text-white">
      					<div class="d-flex bd-highlight">
      						<div class="p-2 flex-shrink-1 bd-highlight">
      							<span class="fa fa-chevron-right fa-2x" aria-hidden=true></span>
      						</div>
      						<div class="p-2 w-100 bd-highlight">
      							<h5 class="card-title">Navegação por teclas de atalho</h5>
      						</div>
      					</div>
      				</span>
      				<span class="border rounded bg-secondary text-white mx-2">
      					<div class="d-flex bd-highlight">
      						<div class="p-2 flex-shrink-1 bd-highlight">
      							<span class="fa fa-align-left fa-2x" aria-hidden=true></span>
      						</div>
      						<div class="p-2 w-100 bd-highlight">
      							<h5 class="card-title">Descrição de imagens, links e botões</h5>
      						</div>
      					</div>
      				</span>
      		</div>
      		<!-- Fim bloco 1 -->
      		<br>
      		<hr>
      		<br>
      		<!-- Início bloco 2 -->
      		<h3 align="center" style="margin-bottom: 2%">Teclas de Atalho</h3>
  			<div class="d-flex justify-content-around border-bottom border-dark">
  				<div class="p-2 bd-highlight"><strong>Navegador</strong></div>
  				<div class="p-2 bd-highlight"><strong>Windows</strong></div>
  				<div class="p-2 bd-highlight"><strong>Mac</strong></div>
  				<div class="p-2 bd-highlight"><strong>Linux</strong></div>
  			</div>
  			<div class="d-flex justify-content-around border-bottom border-dark">
  				<div class="py-3 bd-highlight" style="margin-left: 3%"><strong>Chrome</strong></div>
  				<div class="py-3 bd-highlight" style="margin-left: 8%">[Alt] + Número</div>
  				<div class="py-3 bd-highlight">[Control] + [Alt] + Número</div>
  				<div class="py-3 bd-highlight">[Alt] + Número</div>
  			</div>
  			<div class="d-flex justify-content-around border-bottom border-dark">
  				<div class="py-3 bd-highlight" style="margin-left: 2%"><strong>Edge</strong></div>
  				<div class="py-3 bd-highlight" style="margin-left: 6%">[Alt] + Número</div>
  				<div class="py-3 bd-highlight">Não aplicável</div>
  				<div class="py-3 bd-highlight">Não aplicável</div>
  			</div>
  			<div class="d-flex justify-content-around border-bottom border-dark">
  				<div class="py-3 bd-highlight" style="margin-left: 2%"><strong>Internet Explorer</strong></div>
  				<div class="py-3 bd-highlight">[Alt] + Número</div>
  				<div class="py-3 bd-highlight">Não aplicável</div>
  				<div class="py-3 bd-highlight">Não aplicável</div>
  			</div>
  			<div class="d-flex justify-content-around border-bottom border-dark">
  				<div class="py-3 bd-highlight" style="margin-left: 5%"><strong>Firefox</strong></div>
  				<div class="py-3 bd-highlight" style="margin-left: 9%">[Alt] + [Shift] + Número</div>
  				<div class="py-3 bd-highlight">[Control] + [Alt] + Número</div>
  				<div class="py-3 bd-highlight">[Alt] + [Shift] + Número</div>
  			</div>
  			<div class="d-flex justify-content-around border-bottom border-dark">
  				<div class="py-3 bd-highlight" style="margin-left: 3%"><strong>Safari</strong></div>
  				<div class="py-3 bd-highlight" style="margin-left: 8%">[Alt] + Número</div>
  				<div class="py-3 bd-highlight">[Control] + [Alt] + Número</div>
  				<div class="py-3 bd-highlight">Não aplicável</div>
  			</div>
  			<div class="d-flex justify-content-around">
  				<div class="py-3 bd-highlight" style="margin-left: -4%"><strong>Opera</strong></div>
  				<div class="py-3 bd-highlight" style="margin-left: -6%">Opera 15 ou mais recente: [Alt] + Número. Opera 12.1 ou mais antigo: [Shift] + [Esc] + Número</div>
  			</div>
      		<!-- Fim bloco 2 -->
      		<br>
      		<hr>
      		<br>
      		<!-- Início bloco 3 -->
      		<h3 align="center" style="margin-bottom: 2%">Dicas de Navegação</h3>
      		<div class="d-flex justify-content-around">
      			<div class="container">
      				<div class="row">
      					<div class="col-md-6">
      						<div class="d-flex flex-column bd-highlight">
			      				<div class="py-4 bd-highlight border rounded bg-primary text-white">
			      					<h5 align="center">Como Aumentar e Diminuir o Texto</h5>
			      				</div>
			      				<div class="p-2 bd-highlight border border-primary rounded">
			      					<p>Além do recurso disponibilizado nesse site, é possível fazer o uso do zoom nativo do seu navegador.</p>
			      					<p>Para aumentar a fonte e ampliar o conteúdo, é só pressionar as teclas <strong>“Ctrl +”</strong>, e para diminuir, <strong>“Ctrl -”</strong>.</p>
			      					<p>Para voltar ao padrão, pressione <strong>“Ctrl 0”</strong>.</p>
			      				</div>
			      			</div>
      					</div>
      					<div class="col-md-6">
      						<div class="d-flex flex-column bd-highlight">
			      				<div class="py-4 bd-highlight border rounded bg-info text-white">
			      					<h5 align="center">Navegação por Tabulação</h5>
			      				</div>
			      				<div class="p-2 bd-highlight border border-info rounded">
			      					<p>Use a tecla <strong>Tab</strong> para navegar por elementos que recebem ação do usuário no site, tais como links e botões na ordem em que eles são apresentados na página. Para retornar,<strong>Shift + Tab</strong>.</p>
			      					<p>Para entrar no link/botão selecionado, use a tecla <strong>Enter</strong>.</p>
			      					<p>Use as setas direcionais para acessar as informações textuais.</p>
			      				</div>
			      			</div>
      					</div>
      				</div>
      			</div>
      		</div>
      		<!-- Fim bloco 3 -->
      	</div>
      </div>
      <!-- FIM ACESSIBILIDADE -->
    </section><!--/home -->

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <img src="images/meud.png" width="142">
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
