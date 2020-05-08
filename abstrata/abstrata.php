<?php

// INterface faz com que o programador siga os parametros e metodos da classe "Pai"
interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}


abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){
		echo "O veículo acelerou até " . $velocidade . "KM/h<br>";
	}
	public function frenar($velocidade){
		echo "O veículo frenou até " . $velocidade . "KM/h<br>";
	}
	public function trocarMarcha($marcha){
		echo "O veículo engatou a marcha " . $marcha."<br>";
	}

}


class DelRey extends Automovel{
	
	public function empurrar(){

	}


}

$carro = new Automovel();
$carro->acelerar(100);




?>