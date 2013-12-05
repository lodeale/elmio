<?php

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


    static public function load_view($view = null, $data = null)
    {
        if(!empty($data)):
            foreach($data as $key => $row):
                $$key = $row;
            endforeach;
        endif;

        if ($view):
            require_once TEMPLATE . $view . '.php';
        endif;
    } 
}