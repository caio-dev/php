<?php

function trataNome ($name){

	if (!$name) {

		throw new Exception("Nome não informado!<br>", 500);
		
	}

	echo $name . "<br>";

}

try {
	
	trataNome("Caio");
	trataNome("");

} catch (Exception $e) {
	
	echo $e->getMessage();

} finally {
	// É executado sempre

	echo "Executou o try!";

}









?>