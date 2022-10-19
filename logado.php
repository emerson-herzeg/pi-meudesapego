<?php
	require_once("cabecalho.php");

	if (usuarioEstaLogado()) {
?>
		<div class="card" id="carddoacao">
			<div class="card-header">
				<p class="alert-success">Você está logado como <?= usuario(); ?></p>
			</div>
			<div class="card-body" align="center">
				<div class="container">
					<h1>Seja bem-vindo ao sistema de doações!</h1>
					<div class="card-body">
							<h3>Para doar, clique <a href="doacao-formulario.php">aqui</a>.</h3>
					</div>	
				</div>
			</div>

		</div>
<?php
	} else {
		header("Location: login.php");
	}
	
	require_once("rodape.php");
?>