<?php 

require_once("config.php");

/* $sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios); */

//Um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("Jo");
//echo json_encode($search);

//Carrega um usuario usando login e a senha
//$usuario = new Usuario();
//$usuario->login("Jose", "1234567890");
//echo $usuario;

//Criando novo usuario
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;

//Update de usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "000999");
//echo $usuario

//Deletar usuario
$usuario = new Usuario();

$usuario->loadById(7);
$usuario->delete();
echo $usuario;

 ?>