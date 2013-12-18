<?php 
    require_once 'core/init.php';

    try{    
        $route = new Route();
        $route->init();
    }catch(Exception $e){
        echo $e->getmessage();
    }
?>
