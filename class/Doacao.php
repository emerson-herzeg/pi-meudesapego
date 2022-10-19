<?php  
/** 
 * Classe com os atributos de Doacao
 */
class Doacao{
	private $iddoacao; //Quando um atributo é público, pode-se acessá-lo de qualquer lugar
	private $titulo;
	private $descricao; //Só posso acessar e modificar esse atributo, aqui dentro da classe Doacao. Isso evita que esse atributo seja acessado diretamente, fora da classe
	private $foto;
	private $status;
	private $dt_doacao;
	private $iddoador;
	private $categoria;
	private $ong;

	/*O método construct, serve para tornar os parâmetro para ele passados, obrigatórios. Ou seja, só vai salvar os dados do meu formulário, se conter esses parâmetros que nele se encontram.
	Doador, Categoria e ONG são passados de maneira diferente, pois são um objeto da Classe Doador, Categoria e ONG (respectivamente), então preciso instanciá-lo para passar como parâmetro.
	*/
	/*Aguardar as outras classes ficarem prontas para adcioná-las da menira correta: Doador $doador, Categoria $categoria, Ong $ong*/
	function __construct($titulo, $descricao, $foto, $status, $dt_doacao, $iddoador, Categoria $categoria, $ong){
		$this->titulo = $titulo;
		$this->descricao = $descricao;
		$this->foto = $foto;
		$this->status = $status;
		$this->dt_doacao = $dt_doacao;
		$this->iddoador = $iddoador;
		$this->categoria = $categoria;
		$this->ong = $ong;
	}

	/*Como os meus atributos são private, são acessados somente daqui de dentro da classe Doacao, desse modo, daria erro se eu quisesse acessar fora daqui. Para que não ocorra esse erro, e meus atributos consigam ser acessados de outros locais, porém ainda protegidos de eventuais acessos diretos, é preciso criar um método que acesse os atributos e retorne o valor, permitindo que outras classes tenham o valor desses atributos. No caso, seriam os sequintes métodos:*/
	public function getId()
	{
		return $this->iddoacao;
	}

	public function setId($iddoacao)
	{
		$this->iddoacao = $iddoacao;
	}

	public function getTitulo(){
		return $this->titulo;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function getFoto()
	{
		return $this->foto;
	}

	public function getStatus()
	{
		return $this->status;
	}

	public function getDtDoacao()
	{
		return $this->dt_doacao;
	}

	public function getDoador()
	{
		return $this->iddoador;
	}

	public function getCategoria()
	{
		return $this->categoria;
	}

	public function getOng()
	{
		return $this->ong;
	}
}

?>