<?php
require_once("config.php");

//CARREGA UM USUARIO
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//CARREGA UMA LISTA
//$lista = Usuario::getList();
//echo json_encode($lista);

//inserir usuario novo

$teste = new Usuario();

$teste->setNome("Eduarda");
$teste->setSobrenome("Kussner");

$teste->insert();

echo $teste;