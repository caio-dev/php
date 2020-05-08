<?php

// Polimorfismo é ter metodos com o mesmo nome na classe pai e classe filho que realizam coisdas diferentes

abstract class Animal {
	
	public function Falar(){
		return "Som";
	}

	public function Mover(){
		return "Anda";
	}
}

class Cachorro extends Animal{
	
	public function Falar(){
		return "Late";
	}

}

class Gato extends Animal{

	public function Falar(){
		return "Mia";
	}
}

class Passaro extends Animal{

	public function Falar(){
		return "Pia";
	}

	public function Mover(){
		return "Voa e " . parent::mover();
		// Neste caso, o retorno chama tambem o metodo "mover" da classe PAI
	}

}

$pluto = new Cachorro();
echo $pluto->Falar() . "<br>";
echo $pluto->Mover() . "<br>";


echo "----------------<br>";


$tom = new Gato();
echo $tom->Falar() . "<br>";
echo $tom->Mover() . "<br>";

echo "----------------<br>";


$piupiu = new Passaro();
echo $piupiu->Falar() . "<br>";
echo $piupiu->Mover() . "<br>";

?>