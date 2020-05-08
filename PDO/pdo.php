<?php
// PDO = php data object

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "" );
// Abrindo conexão com o banco
// tipo de banco / Nome do banco / Host / User / Senha

$stmt = $conn->prepare("SELECT * FROM tb_usuarios");

$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// fetchAll já separa as linhas dos resultados


foreach ($result as $row) {
	
	foreach ($row as $key => $value) {
		
		echo "<strong>" . $key . ": </strong>" . $value . "<br>";
	}

	echo "-------------------------------------------<br>";

}




?>