<?php

// Criando conexão com o banco, informando endereço/ip, usuário, senha, nome do banco
$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
	// Exibindo erro caso aconteça falha na conexão
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
// As interrogações serão substituidas pelos valores

$stmt->bind_param("ss", $login, $pass);
// O metodo bind_param espera como primeiro parametro os tipos de dados das interrogações
// Colocamos "s" por passar string

$login = "user";
$pass = "123456";

$stmt->execute();




?>