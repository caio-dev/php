<?php

// Criando conexão com o banco, informando endereço/ip, usuário, senha, nome do banco
$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
	// Exibindo erro caso aconteça falha na conexão
	echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios");
// Enviando comando para o banco de dados e armazendando o resultado


while ($row = $result->fetch_array()) {
	// Varrendo linhas do resultado e armazenando em $row, enquanto houver dados
	var_dump($row);
}

echo "---------------------------------------------------------<br>";

/*
$data = array();

while ($row = $result->fetch_array()) {
	// Jogando dados do banco em um JSON
	array_push($data, $row);
}

echo json_encode($data);
*/


?>