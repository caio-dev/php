<?php

class Pessoa {

	public $nome;	// atributo

	// metodo
	public function falar(){

		// $this - referencia atributos dentro do proprio metodo
		return "Meu nome é, ".$this->nome; 

	}

}

// Instanciando a classe // criando objeto
$caio = new Pessoa();
// Atribuindo valor ao atributo nome
$caio->nome = "Caio Cesar";
echo $caio->falar();

//var_dump($caio);



?>