<?php

require_once("config.php");

// $usu = new Usuario();
// $usu->loadByCpf(1);
// echo $usu."<br>";

$animal = new Animal();
$animal->loadByChip(1);
echo $animal;
?>