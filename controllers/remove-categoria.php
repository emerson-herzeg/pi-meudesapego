<?php 
	require_once("../cabecalho-forcontrollers.php");
	
	verificaNivelAcesso();
	
	$id = $_POST['idcategoria'];

	$categoriaDao = new CategoriaDao($conexao);

	if ($categoriaDao->deletaCategoria($id)) {
?>
		<p class="alert-success">Categoria excluida com sucesso!</p>
<?php
	} else{
		$msg = mysqli_error($conexao); //me devolve uma mensagem de erro
?>
		<p class="alert-danger">Oh-Oh! Algo deu errado! =/</p>
		<p>Erro: <?= $msg ?> </p>
<?php
	}
	
 ?>