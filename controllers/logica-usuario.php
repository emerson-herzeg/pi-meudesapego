<?php
	session_start();

	function usuarioEstaLogado()
	{
		//Verifico se o usuário fez login
		return isset($_SESSION["usuario_logado"]);
	}

	function verificaUsuario()
	{
		//Nesse if, verifico se o usuário tem permissão de acessar essa página
		if (!usuarioEstaLogado()) {
			$_SESSION['danger'] = "Você não tem permissão para acessar essa página!";
			header("Location: index.php");
			die();
		}
	}

	function verificaUsuarioForControllers()
	{
		//Nesse if, verifico se o usuário tem permissão de acessar essa página
		if (!usuarioEstaLogado()) {
			$_SESSION['danger'] = "Você não tem permissão para acessar essa página!";
			header("Location: ../index.php");
			die();
		}
	}

	function recebeNivel()
	{
		return $_SESSION['idnivel'];
	}

	function verificaNivelAcesso()
	{
		//Nesse if verifico se o usuário tem permissão de nível de acesso
		if (recebeNivel() <> 2 and recebeNivel() <> 1) {
			# Caso não tenha nível de acesso 1 ou 2, é redirecionado para a tela de cadastro de doacões
			$_SESSION['danger'] = "Você não tem permissão para acessar essa página!";
			header("Location: doacao-formulario.php");
			die();
		}
		
	}

	function usuario()
	{
		//Verifica usuário que está logado
		return $_SESSION['usuario_logado'];
	}

	function idUsuario(){
		return $_SESSION['iddoador'];
	}

	function criaCookie($email)
	{
		$_SESSION['usuario_logado'] = $email;
	}

	function logout()
	{
		session_destroy();
		header("Location: ../index.php");
		die();
	}
?>