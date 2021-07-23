<?php
require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM agenda.cargo");

echo json_encode($usuarios);