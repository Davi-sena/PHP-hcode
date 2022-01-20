<?php

//Função para incluir um arquivo ao instanciar a classe
spl_autoload_register(function ($class_name) {

    $filename ="Class".DIRECTORY_SEPARATOR. $class_name . ".php";

    if (file_exists(($filename))) {

        require_once($filename);
    }
});
