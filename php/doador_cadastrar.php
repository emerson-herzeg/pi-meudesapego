<?php
	require "doador.model.php";
	require "doador.service.php";
	require "Connection.php";

    
	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir' ) {
		 $doador = new Doador();
		 $doador->__set('nome_completo', $_POST['nomecompleto']);
		 $doador->__set('dt_nasc', $_POST['datanasc']);
		 $doador->__set('email', $_POST['email']);
		 $doador->__set('idendereco', $_POST['rua']);

		$conexao = new ConexaoPDO();

		 $doadorService = new DoadorService($conexao, $doador);
		 $doadorService->inserir();

		//header('Location: nova Doador.php?inclusao=1');
	}
	/*
	else if($acao == 'recuperar') {
		
		 Doador = new Doador();
		$conexao = new ConexaoPDO();

		 DoadorService = new DoadorService($conexao,  Doador);
		 Doadors =  DoadorService->recuperar();
	
	else if($acao == 'atualizar') {

		 Doador = new Doador();
		 Doador->__set('id', $_POST['id'])
			->__set( Doador', $_POST[ Doador']);

		$conexao = new ConexaoPDO();

		 DoadorService = new DoadorService($conexao, $doador);
		if( DoadorService->atualizar()) {
			
			if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
				header('location: ../index.php');	
			} else {
				//header('location: todas Doadors.php');
			}
		}


	} else if($acao == 'remover') {

		 Doador = new Doador();
		 Doador->__set('id', $_GET['id']);

		$conexao = new ConexaoPDO();

		 DoadorService = new DoadorService($conexao, $doador);
		 DoadorService->remover();

		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: index.php');	
		} else {
			header('location: todas Doadors.php');

		}

	}
*/
?>