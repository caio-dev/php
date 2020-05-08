<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");
// statement  = declaração

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();






?>