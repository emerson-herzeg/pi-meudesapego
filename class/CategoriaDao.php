<?php 
/**
 * DAO - Data Access Object
É uma classe criada para encapsular o trabalho de funções que acessam o banco de dados, como insert, update, delete, search e read.
 */
class CategoriaDao
{
	private $conexao;
	
	function __construct($conexao)
	{
		$this->conexao = $conexao;
	}

	function insereCategoria($categoria)
	{
		$query = "insert into categoria (nome) values ('{$categoria->getNome()}')";
		return mysqli_query($this->conexao, $query);
	}

	function listaCategorias()
	{
		$categorias = array();

		$resultado = mysqli_query($this->conexao, "select * from categoria");

		while ($categoria_array = mysqli_fetch_assoc($resultado)) {
			$categoria = new Categoria('');

			$categoria->setId($categoria_array['idcategoria']);
			$categoria->setNome($categoria_array['nome']);

			array_push($categorias, $categoria); //coloco a lista de categorias dentro do meu array $categorias.
		}

		return $categorias;
	}

	function deletaCategoria($idcategoria)
	{
		$query = "delete from categoria where idcategoria = {$idcategoria}";
		return mysqli_query($this->conexao, $query);
	}

	/* Função usada para buscar a categoria específica, para enviar para a a view de alteração */
	function buscaCategoria($idcategoria)
	{
		$query = "select * from categoria where idcategoria = {$idcategoria}";
		$resultado = mysqli_query($this->conexao, $query);
		$categoria_buscada = mysqli_fetch_assoc($resultado);

		$nome = $categoria_buscada['nome'];

		$categoria = new Categoria($nome);
		$categoria->setId($categoria_buscada['idcategoria']);

		return $categoria;
	}

	function alteraCategoria($categoria)
	{
		$query = "update categoria set nome = '{$categoria->getNome()}' where idcategoria = {$categoria->getId()}";
		return mysqli_query($this->conexao, $query);
	}
}
 ?>