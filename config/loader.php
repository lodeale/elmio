<?php

require_once 'config.php';

/**
* Loader para la carga los modulos
*/
class Loader
{

	static public function load_modulo($modulo)
    {
        if ($modulo) {
            set_include_path(MODULO);
            spl_autoload_extensions('.php');
            spl_autoload($modulo);
        }
    } 
}