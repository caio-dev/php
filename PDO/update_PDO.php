<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
// statement  = declaração

$login = "Caio";
$password="08041999";
$id = 1;



$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();






?>