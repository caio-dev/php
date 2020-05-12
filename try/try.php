<?php

try {
	
	throw new Exception("Houve um erro!", 400);	


} catch (Exception $e) {
	
	echo json_encode(array(
		// Esses métodos são da classe exception
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"file"=>$e->getFile(),
		"code"=>$e->getCode()
	));
}







?>