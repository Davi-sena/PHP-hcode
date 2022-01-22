<?php

//Função para incluir um arquivo ao instanciar a classe
spl_autoload_register(function ($class_name) {

    $filename ="class".DIRECTORY_SEPARATOR. $class_name . ".php";

    if (file_exists(($filename))) {

        require_once($filename);
        
    }else{
        $filename ="class".DIRECTORY_SEPARATOR."admin".DIRECTORY_SEPARATOR. $class_name . ".php";

        if (file_exists(($filename))) {

            require_once($filename);
        }else{
            $filename ="class".DIRECTORY_SEPARATOR."client".DIRECTORY_SEPARATOR. $class_name . ".php";

            if (file_exists(($filename))) {

                require_once($filename);
            }else{
                $filename ="class".DIRECTORY_SEPARATOR."animal".DIRECTORY_SEPARATOR. $class_name . ".php";
    
                if (file_exists(($filename))) {
    
                    require_once($filename);
                }
            }
        }
    }
});

