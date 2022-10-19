<?php
require "control.php";
class DoadorService {

	private $conexao;
	private $doador;

	public function __construct(ConexaoPDO $conexao, Doador $doador) {
		$this->conexao = $conexao->conectar();
		$this->doador = $doador;
		/*echo '<pre>';
		print_r($doador);
		echo '</pre>';*/

		$this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$this->conexao->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER);
		$this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

	}

	public function inserir() { 
		try {
			/*-------------Verificão do estado-------------------------------------------------------*/
			$query = "select * from estado where estado = '{$this->doador->estado}'";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(!$itens){
				$query = 'insert into estado (estado) values (:estado);';
				$stmt = $this->conexao->prepare($query);//preparação da query evitando SQL inject
				$stmt->bindValue(':estado', $this->doador->__get('estado'));
				$stmt->execute();
				$estadoatual = $stmt->fetchColumn(0);
			}else{
				$estadoatual = current($itens[0]);
			}
			/*-----------------Verificação da cidade--------------------------------------------------*/
			$query = "select * from cidade where cidade = '{$this->doador->cidade}'";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(!$itens){
			$query = "insert into cidade (cidade, idestado) values (:cidade, '{$estadoatual}');";
			$stmt = $this->conexao->prepare($query); 
			$stmt->bindValue(':cidade', $this->doador->__get('cidade'));
			$stmt->execute();
			$cidadeatual = $stmt->fetchColumn(0);
			}else{
				$cidadeatual = current($itens[0]);
			}
			/*-----------------Verificação da bairro--------------------------------------------------*/
			$query = "select * from bairro where bairro = '{$this->doador->bairro}'";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(!$itens){
			$query = "insert into bairro (bairro, idcidade, idestado) values (:bairro,'{$cidadeatual}','{$estadoatual}');";
			$stmt = $this->conexao->prepare($query); 
			$stmt->bindValue(':bairro', $this->doador->__get('bairro'));
			$stmt->execute();
			$bairroatual = $stmt->fetchColumn(0);
			}else{
				$bairroatual = current($itens[0]);
			}
			/*-----------------Verificação da rua--------------------------------------------------*/
			$query = "select * from rua where rua = '{$this->doador->rua}'";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(!$itens){
				$query = "insert into rua (rua, cep, idbairro, idcidade, idestado) values (:rua, :cep, '{$bairroatual}','{$cidadeatual}','{$estadoatual}');";
				$stmt = $this->conexao->prepare($query); 
				$stmt->bindValue(':rua', $this->doador->__get('rua'));
				$stmt->bindValue(':cep', $this->doador->__get('cep'));
				$stmt->execute();
				$ruaatual = $stmt->fetchColumn(0);
			}else{
				$ruaatual = current($itens[0]);
			}

			/*-----------------Cadastro do endreco--------------------------------------------------*/
			$query = "select * from endereco where numero = '{$this->doador->numero}' and idrua = '{$ruaatual}' and idbairro = '{$bairroatual}' and idcidade = '{$cidadeatual}' and idestado = '{$estadoatual}'";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			$itens = $stmt->fetchAll(PDO::FETCH_ASSOC);
			if(!$itens){
				$query = "insert into endereco (numero, complemento, idrua, idbairro, idcidade, idestado) values (:numero, :complemento, '{$ruaatual}', '{$bairroatual}', '{$cidadeatual}', '{$estadoatual}');";
				$stmt = $this->conexao->prepare($query); 
				$stmt->bindValue(':numero', $this->doador->__get('numero'));
				$stmt->bindValue(':complemento', $this->doador->__get('complemento'));
				$stmt->execute();
				$enderecoatual = $stmt->fetchColumn(0);
			}else{
				$enderecoatual = current($itens[0]);
			}


			$query = "insert into doador (nome_completo, dt_nasc, email, senha, idendereco) values (:nome_completo, :dt_nasc, :email, :senha,'{$enderecoatual}');";
			$stmt = $this->conexao->prepare($query); 
			$stmt->bindValue(':nome_completo', $this->doador->__get('nome_completo'));
			$stmt->bindValue(':dt_nasc', $this->doador->__get('dt_nasc'));
			$stmt->bindValue(':email', $this->doador->__get('email'));
			$stmt->bindValue(':senha', md5($this->doador->__get('senha')));
			$stmt->execute();


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessage().'</p>';
		}
	
	}

}
?>
