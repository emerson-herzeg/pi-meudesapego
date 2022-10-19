<?php
	require_once("../conecta.php");

	function buscaUsuario($conexao, $email, $senha)
	{
		$senhaMd5 = md5($senha); //transformo o que foi digitado em MD5
		$email = mysqli_real_escape_string($conexao, $email); //Com essa função eu 'escapo' o meu endereço de e-mail, evitando assim, que um hacker digite um sql injection no meu input de e-mail, e consiga logar no sistema
		$query = "select * from doador where email = '{$email}' and senha = '{$senhaMd5}'";
		$resultado = mysqli_query($conexao, $query);

		$usuario_buscado = mysqli_fetch_assoc($resultado);

		$_SESSION['idnivel'] = $usuario_buscado['idnivel'];
		$_SESSION['iddoador'] = $usuario_buscado['iddoador'];
		
		return $usuario_buscado;
	}
?>