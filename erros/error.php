<?php

function error_handler($code, $message, $file, $line){
	// Função que vai passar os parâmetros dos erros

	echo json_encode(array(
		"code"		=>$code,
		"message"	=>$message,
		"file"		=>$file,
		"line"		=>$line
	));
}

set_error_handler("error_handler");
// chamando função do erro

echo 100/0;
// provocando erro








?>