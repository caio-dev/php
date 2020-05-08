<?php

class Endereco {

	private $logradouro;
	private $bairro;
	private $cidade;


	public function __construct($a, $b, $c){

		$this->logradouro 	= $a;
		$this->bairro 		= $b;
		$this->cidade 		= $c;

	}

	public function __destruct(){

		//var_dump("DESTRUIR");

	}

	public function __toString(){

		return $this->logradouro. ", " .$this->bairro. ", ". $this->cidade;
	}




}


$lugar = new Endereco("Rua Terra Nova", "Paratibe", "Paulista");

//var_dump($lugar);

//unset($lugar);

echo $lugar;







?>