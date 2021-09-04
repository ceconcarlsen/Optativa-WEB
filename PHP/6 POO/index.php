<?php

#Classe
class Filme{
    #Atributos (var para declará-los)
    var $titulo;
    var $ano_lancamento;

    #Construtor
    function __construct($titulo, $ano_lancamento){
        $this->titulo = $titulo;
        $this->ano_lancamento = $ano_lancamento;
    }
    
    #Setters e Getters
    function setTitulo($titulo){
        $this->titulo = $titulo; 
    }
    function setAno_lancamento($ano_lancamento){
        $this->ano_lancamento = $ano_lancamento;
    }
    function getTitulo(){
        return $this->titulo;
    }
    function getAno_lancamenti(){
        return $this->ano_lancamento;   
     }

    #Método
    function describe(){
        return "<br> <strong>Filme</strong>: " .$this->titulo. "<br>".
                "<strong>Ano de lançamento</strong>: " .$this->ano_lancamento."<br>";
    }
}

    /*Instanciação sem construtor
    $vingadores = new Filme;
    $toystory = new Filme;

    $vingadores->setTitulo("Vingadores");
    $vingadores->setAno_lancamento(2018);

    $toystory->setTitulo("Toy Story");
    $toystory->setAno_lancamento(2003);
    */

    #Instanciação com construtor
    $vingadores = new Filme("Vingadores", 2018);
    $toystory = new Filme("Toy Story", 2003);

    echo $vingadores->describe();
    echo $toystory->describe();


class Curta extends Filme {
	var $categoria;

	function __contruct($titulo, $ano_lancamento, $categoria) {
		Filme::Filme($titulo, $ano_lancamento);	 #construtor da classe Filme
		$this->categoria = $categoria;
	}
	function setCategoria($categoria) {
		$this->categoria = $categoria;
	}
	function getCategoria() {
		return $this->categoria;
     }
	function describe() { #método sobrescrito
		return "Curta: ".$this->titulo.", <br/>".
				"Ano de Lançamento: ".$this->ano_lancamento."<br/>";
	}
}

class Pessoa {
    private $especie = "Homo Sapiens"; #uma pessoa sempre será homo sapiens (invisível para outras classes)
    
    protected $nome;
    protected $idade;

    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function getNome() {
        return $this->nome;
    }
   // protected function computeSalary(); #classe abstrata, que será especializada em um possível extends
}

#Interface
interface CheckParameters {
    public function hasValidParameters($params);
}

class ActionCheckCPF implements CheckParameters{

    /*
    public callService(){
        //method body
        echo "hi";
    }
    */

    function hasValidParameters($params){
        $cpf = $params[0];
        return "oi";
    }
}

?>



