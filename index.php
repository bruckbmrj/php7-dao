<?php 

require_once ("config.php");

//Carrega um usuario
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("root","!@#$");

//echo $usuario;

/*Criando um novo usuario (insert)
$aluno = new Usuario("aluno","@lun0");

$aluno->insert();

echo $aluno;
*/

//Alterar um usuario
/*$usuario = new Usuario();

$usuario->loadbyId(7);

$usuario->update("professor", "!@#$%&");

echo $usuario; */

//deletando um usuario
$usuario = new Usuario();

$usuario->loadbyId(8);

$usuario->delete();

echo $usuario;


/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

 ?>