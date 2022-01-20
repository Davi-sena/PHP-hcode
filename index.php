<?php

require_once("config.php");

$usu = new Usuario();
$usu->loadByCpf(1);
echo $usu;

?>