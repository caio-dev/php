<?php

$name = "images";


if (!is_dir($name)) {
	// A exclamação no inicio refere a uma negação.
	mkdir($name);
	// Maje diretorio - criando diretorio
	echo "Diretório $name criado com sucesso!";
} else {

	echo "O diretório $name já existe!<br>";
	rmdir($name);
	echo "O diretório foi removido";

}

?>