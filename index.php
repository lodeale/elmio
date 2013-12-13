<?php 
    require_once 'core/init.php';

    R::setup(Config::get('mysql/engine') . ':host=' . Config::get('mysql/host') . ";dbname=" . Config::get('mysql/db'), Config::get('mysql/user'), Config::get('mysql/password'));

    try{    
        $route = new Route();
        $route->init();
    }catch(Exception $e){
        echo $e->getmessage();
    }
?>
