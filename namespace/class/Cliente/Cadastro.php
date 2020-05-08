<?php

namespace Cliente;

class Cadastro extends \Cadastro {

	public function registrarVenda(){

		echo "Foi registrado um cadastro para o Cliente: " . $this->getNome();
	}
}














?>