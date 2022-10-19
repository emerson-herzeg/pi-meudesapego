<?php 
	require_once("../cabecalho-forcontrollers.php");
	
	verificaNivelAcesso();

	$nome = $_POST["nome"];

	$categoria = new Categoria($nome);
	$categoriaDao = new CategoriaDao($conexao);

	if ($categoriaDao->insereCategoria($categoria)) {
?>
		<p class="alert-success">Categoria adicionada com sucesso!</p>
<?php
	}else{
		$msg = mysqli_error($conexao);
?>
		<p class="alert-danger">Algo deu de errado!</p>
		<p>Erro: <?= $msg ?></p>
<?php
	}

	mysqli_close($conexao);
 ?>