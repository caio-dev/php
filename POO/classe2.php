<?php

class Carro{

	private $modelo;
	private $motor;
	private $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float{
		return $this->motor;
		// Manipulei o tipo do retorno para float
	}

	public function setMotor($motor){
		$this->motor = $motor;
	}

	public function getAno():int{
		return $this->ano;
		// Manipulei o tipo do retorno para int
	}

	public function setAno($ano){
		$this->ano = $ano;
	}

	// Trazendo todas as informações em um único método
	public function exibir(){
		return array(
			"modelo"	=>$this->getModelo(),
			"motor"		=>$this->getMotor(),
			"ano"		=>$this->getAno()
		);
	}

}

$gol = new carro(); // INstanciando a classe
$gol->setModelo("Gol GT");
$gol->setMotor("1.6");
$gol->setAno("2020");
// Setando os dados para cada atributo


print_r($gol->exibir()); // Exibindo os dados através do array, do metodo exibir
echo "<br>";
var_dump($gol->exibir()); // Checando os tipos de dados



?>