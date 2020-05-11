<?php

require_once("config.php");

/* Lista de usuarios por login

$search = Usuario::search("io");
echo json_encode($search);

*/

/* Lista completa de usuários

 $lista = Usuario::getList();
 echo json_encode($lista);

*/

/* A classe login esta dando erro
$usuario = new Usuario();
$usuario->login("Caio", "08041999");

echo $usuario;
*/

/*
echo "----------------------------<br>";

$lista = new Usuario();
$lista->loadbyId(1);
echo $lista;
*/

/*
// Cadastrar novo usuario
$aluno = new Usuario("Maria", "abcde"); $aluno->insert();
echo $aluno;
*/

/*
$atualizar = new Usuario();
$atualizar->loadbyId(1);
$atualizar->update("caio", "senhaaa");
echo $atualizar;
*/

/*
// Deletar usuário
$delete = new Usuario();
$delete->loadbyId(11);
$delete->delete();
echo $delete;
*/



?>