<?php 
/**
 * Classe Categoria
 */
class Categoria
{
	private $idcategoria;
	private $nome;
	
	function __construct($nome)
	{
		$this->nome = $nome;
	}

	public function getId()
	{
		return $this->idcategoria;
	}
	public function setId($idcategoria)
	{
		$this->idcategoria = $idcategoria;
	}

	public function getNome()
	{
		return $this->nome;
	}
	public function setNome($nome)
	{
		$this->nome = $nome;
	}
}
 ?>