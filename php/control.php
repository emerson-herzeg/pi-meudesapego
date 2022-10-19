<?php

Class Control{

    private $conexao;
	

	public function __construct($conexao) {
        $this->conexao = $conexao; 
	}
    
    public function consEstado($conexao, $est) {
        $query = "select estado from estado where estado = '{$est}'";
        /*$stmt = $this->conexao->prepare($query);//preparação da query evitando SQL inject*/
        echo '<pre>';
		print_r($query);
		echo '</pre>';

		echo '<pre>';
		print_r($this->conexao);
		echo '</pre>';




        return($this->conexao->exec($query));


        
    }



}




?>