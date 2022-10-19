<?php
	/*echo '<pre>';
	print_r($_POST);	
	echo '<pre>';*/
	require "doador.model.php";
	require "doador.service.php";
	require "Connect.php";

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;


	if($acao == 'inserir' ) {
		$doador = new Doador();
		$doador->__set('nome_completo', $_POST['nomecompleto']);
		$doador->__set('dt_nasc', $_POST['datanasc']);
		$doador->__set('email', $_POST['email']);
		$doador->__set('senha', $_POST['senha']);
		$doador->__set('cep', $_POST['cep']);
		$doador->__set('rua', $_POST['rua']);
		$doador->__set('numero', $_POST['numero']);
		$doador->__set('complemento', $_POST['complemento']);
		$doador->__set('estado', $_POST['estado']);
		$doador->__set('cidade', $_POST['cidade']);
		$doador->__set('bairro', $_POST['bairro']);

		$conexao = new ConexaoPDO();

		$doadorService = new DoadorService($conexao, $doador);
		/*$doadorService->inserirestado();*/
		if($doadorService->inserir()){
			?>
				<p class="alert-success">Doador adicionada com sucesso!</p>
			<?php
		}else{
				
			?>
			<p class="alert-danger">Algo deu errado!</p>
			
			<?php
		}


		
		/*header('Location: novo_doador.php?inclusao=1');*/
	}
?>