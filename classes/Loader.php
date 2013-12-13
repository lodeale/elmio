<?php

/**
* Loader para la carga los modulos y vistas
*/
class Loader
{

	static public function load_modulo($modulo)
    {
        if ($modulo) {
            set_include_path(Config::get('path/modulos'));
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

        $views = explode(",", $view);

        if (sizeof($views) > 0):
            foreach ($views as $v) {
                require_once Config::get('path/view') . $v . '.php';
            }
        else:
            require_once Config::get('path/view') . $view . '.php';
        endif;
    } 
}
