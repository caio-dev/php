<?php

class Pessoa {

	public $nome = "Caio Cesar";
	protected $idade = 21;
	private $senha = "123456";


	public function verDados(){

		echo $this->nome."<br/>";
		echo $this->idade."<br/>";
		echo $this->senha."<br/>";

	}
}

class Programador extends Pessoa{

	// A classe programador extende tudo da classe pessoa, exceto oque for privado




}

// Instanciando a classe programador que é extendida de pessoa
$objeto = new Programador();
/*
echo $objeto->nome."<br>";
// Idade e senha são protefidos, por isso não são visualizados fora da classe
echo $objeto->idade."<br>";
echo $objeto->senha."<br>";
*/

$objeto->verDados(); // Aqui os aributos são exibidos pois estão vindo do metodo dentro da classe








?>