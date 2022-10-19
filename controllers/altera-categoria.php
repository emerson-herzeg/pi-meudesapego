<?php 
	require_once("../cabecalho-forcontrollers.php");
	
	verificaNivelAcesso();
	
	$nome = $_POST["nome"];

	$categoria = new Categoria($nome);
	$categoria->setId($_POST["idcategoria"]);

	$categoriaDao = new CategoriaDao($conexao);

	if ($categoriaDao->alteraCategoria($categoria)) {
?>
		<p class="alert-success">Categoria alterada com sucesso!</p>
<?php
	} else {
		$msg = mysqli_error($conexao); //me devolve uma mensagem de erro
?>
		<p class="alert-danger">Oh-Oh! Algo deu errado! =/</p>
		<p>Erro: <?= $msg ?> </p>
<?php
	}
	
?>