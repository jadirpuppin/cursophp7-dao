<?php

require_once("config.php");

// CArrega um usuário
// $root = new Usuario();
// $root->loadById(3);
// echo $root;

// Carrega uma lista de usuários
// $lista = Usuario::getList();
// echo json_encode($lista);

// CArrega lista de usuario buscado pelo login
// $search = Usuario::search("ja");
// echo json_encode($search);

// Carrega usuario autenticado
// $usuario = new Usuario();
// $usuario->login("jadir", "1234567");
// echo $usuario;

//Criando novo usuario
// $aluno = new Usuario("aluno2", "aluno2");
// // $aluno->setDesLogin("aluno");
// // $aluno->setDesSenha("@lun0");
// $aluno->insert();
// echo $aluno

// Atualizando usuario
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("professor", "123456");
echo $usuario;

?>