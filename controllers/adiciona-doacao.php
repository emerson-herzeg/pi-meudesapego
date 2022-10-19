<?php 
	require_once("../cabecalho-forcontrollers.php");
		
	$categoria = new Categoria('');
	$categoria->setId($_POST["idcategoria"]);
	
	$titulo = $_POST["titulo"];
	$descricao = $_POST["descricao"];
	$foto = $_FILES["foto"];
	$status = "Disponível"; //O Status inicial é o "Disponível"
	$dt_doacao = ''; //Função de data agora
	$doador = $_POST["iddoador"]; //Pegar o id de quem está logado no momento
	$ong = 1; //Fixar por enquanto o id da ONG

	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		//Tamanho máximo do arquivo em bytes
		$tamanho = 2000000;
		$tamanhoMB = $tamanho/1000000;
		$error = array();

		//Verifica se o arquivo é uma imagem
		if (!preg_match("/^image\/(pjpeg|jpeg|png)$/", $foto["type"])) {
			$error[1] = "Isso não é uma imagem.";
		}

		//Pega as dimensões da imagem
		$dimensoes = getimagesize($foto["tmp_name"]);

		//Verifica se o tamanho da imagem é maior que o tamanho permitido
		if ($foto["size"] > $tamanho) {
			$error[4] = "A imagem deve ter no máximo ".$tamanhoMB."MB";
		}

		//Caso não haja erros
		if (count($error) == 0) {
			//Pega a extensão da imagem
			preg_match("/\.(png|jpg|jpeg){1}$/i", $foto["name"], $ext);

			//Gera um nome único para a imagem
			$nome_imagem = md5(uniqid(time())) . "." . $ext[1];

			//Caminho onde ficará a imagem
			$caminho_imagem = "../uploads/" . $nome_imagem;

			//Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
		}
	}

	$doacao = new Doacao($titulo, $descricao, $nome_imagem, $status, $dt_doacao, $doador, $categoria, $ong);

	$doacaoDao = new DoacaoDao($conexao);

	//Alertas
	if ($doacaoDao->insereDoacao($doacao)) {
?>
		<p class="alert-success">Doação adicionada com sucesso!</p>
<?php
	}else{
		$msg = mysqli_error($conexao);
?>
		<p class="alert-danger">Algo deu errado!</p>
		<p>Erro: <?= $msg ?></p>
<?php
	}

	mysqli_close($conexao);

	require_once("../rodape.php");
 ?>