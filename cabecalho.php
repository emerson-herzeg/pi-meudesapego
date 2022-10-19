<?php
	require_once("controllers/logica-usuario.php");
	require_once("alertas.php");
	require_once("conecta.php");

	//Função para carregar/chamar minhas classes da pasta class/
	function carregaClasse($nomeDaClasse){
		require_once("class/".$nomeDaClasse.".php");
	}

	//Função nativa que registra a minha função acima, e a roda, chamando todas as classes.
	//Com a minha função, e essa nativa, não há necessidade de ficar chamando minhas classes em outros arquivos, já que está sendo carregadas no cabeçalho.
	spl_autoload_register("carregaClasse");

	verificaUsuario();
 ?>
<html>
 	<head>
 		<meta charset="utf-8">
 		<title>Doações</title>
 		<link rel="stylesheet" type="text/css" href="bootstrap-5.1.3-dist/css/bootstrap.css">
 		<link rel="stylesheet" type="text/css" href="css/categoria.css">
 		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
 		<style>
 			body{
 				background: url(images/fa6.png);
 				background-attachment: fixed;
 				font-family: Helvetica,Arial,sans-serif;
 			}
 		</style>

 		<!-- CSS Alto Contraste - Acessibilidade -->
   		<link rel="stylesheet" type="text/css" href="css/altoContraste.css">
 	</head>
 	<body>
		<!-- Início VLibras -->
		<?php 
		require_once("vlibras.php");
		?>
		<!-- Fim VLibras -->
 		<div class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="logado.php" class="navbar-brand">
						<img src="images/meud.png" width="50px">
					</a>
				</div>
				<div class="collapse navbar-collapse" id="navbarNav">
					<?php 
						if (recebeNivel() == 2 or recebeNivel() == 1) {
					?>
						<ul class="nav navbar-nav">
							<li><a href="doacao-formulario.php" class="nav-link">Adicionar Doação</a></li>
							<li><a href="doacao-listagem.php" class="nav-link">Doações</a></li>
							<li><a href="formulario-categoria.php" class="nav-link">Categoria</a></li>
							<li><a href="contato.php" class="nav-link">Contato</a></li>
						</ul>
					<?php
						} else {
					?>
						<ul class="nav navbar-nav">
							<li><a href="doacao-formulario.php" class="nav-link">Adicionar Doação</a></li>
							<li><a href="contato.php" class="nav-link">Contato</a></li>
						</ul>
					<?php
						}
					?>
				</div>
				<?php  
					if (usuarioEstaLogado()) {
				?>
					<a href="controllers/logout.php">Sair</a>
				<?php
					}
				?>
			</div>
		</div>
		<div style="padding-top: 1%">
			<!-- Menu de Acessibilidade -->
			<?php 
			require_once("menu-acessibilidade.php");
			?>
			<!-- Fim menu de acessibilidade -->
		</div>
		<div class="container">
			<div class="principal">
				<?php 
					mostraAlerta("success");
					mostraAlerta("danger");
				?>