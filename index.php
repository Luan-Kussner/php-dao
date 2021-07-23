<?php
require_once("config.php");

//CARREGA UM USUARIO
//$root = new Usuario();
//$root->loadById(2);
//echo $root;

//CARREGA UMA LISTA
$lista = Usuario::getList();
echo json_encode($lista);
