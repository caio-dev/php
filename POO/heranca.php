<?php

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;
	}

	public function setNumero(){
		$this->numero;
	}
}

class CPF extends Documento{
	
	public function validar():bool{

		$numeroCPF = $this->getNumero();

		return true;
	}

}


$doc = new CPF();

$doc-> setNumero("13354443430");

$doc->validar();








?>