<?php

class Doador {
	private $iddoador; /*vem da BD doador*/
    private $nome_completo; /*grava em doador*/
    private $dt_nasc; /*grava em doador*/
	private $email; /*grava em doador*/
	private $senha; /*grava em doador*/
	private $cep; /*grava em rua*/
	private $rua; /*grava em rua*/
	private $numero; /*grava em endereco*/
	private $complemento; /*grava em endereco*/
	private $estado; /*grava em estado*/
	private $cidade; /*grava em cidade*/
	private $bairro; /*grava em bairro*/
	
	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}






}

?>