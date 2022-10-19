<?php 
	require_once("../cabecalho-forcontrollers.php");
		
	verificaNivelAcesso();
	
	$categoria = new Categoria('');
	$categoria->setId($_POST["idcategoria"]);

	$titulo = $_POST["titulo"];
	$descricao = $_POST["descricao"];
	$foto = $_POST["foto"];
	$status = $_POST["status"];
	$dt_doacao = ''; //Função de data agora
	$iddoador = $_POST["iddoador"];
	$idong = 1; //Fixar por enquanto o id da ONG

	//var_dump($status);

	$doacao = new Doacao($titulo, $descricao, $foto, $status, $dt_doacao, $iddoador, $categoria, $idong);
	$doacao->setId($_POST['iddoacao']);

	$doacaoDao = new DoacaoDao($conexao);

	if ($doacaoDao->alteraDoacao($doacao)) {
?>
		<p class="alert-success">Doação alterada com sucesso!</p>
<?php
	} else {
		$msg = mysqli_error($conexao); //me devolve uma mensagem de erro
?>
		<p class="alert-danger">Oh-Oh! Algo deu errado! =/</p>
		<p>Erro: <?= $msg ?> </p>
<?php
	}

	require_once("../rodape.php")
?>