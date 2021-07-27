<?php
require_once("config.php");

//CARREGA UM USUARIO
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//CARREGA UMA LISTA
//$lista = Usuario::getList();
//echo json_encode($lista);

//INSERIR UM NOVO USUARIO
//$teste = new Usuario();
//$teste->setNome("joao");
//$teste->setSobrenome("Kussner");
//$te=$teste->insert();
//echo $te;


//ALTERAR USUARIO
//$usuario = new Usuario();
//$usuario->loadById(4);
//$usuario->update("luan", "Guilherme");
//echo $usuario;


//DELETAR UM USUARIO

$usuario = new Usuario();

$usuario->loadById(19);

$usuario->delete();

echo $usuario;