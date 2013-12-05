<?php
	require_once 'config/config.php';
	require_once 'config/loader.php';
	require_once 'config/route.php';
	
	/**
	* Conexión a la base de datos con ORM
	*/
	require_once LIBRARIES . "/rb.php";
	R::setup(DB_ENGINE . ':host=' . HOST . ";dbname=" . DB_NAME, USER, PASS);

    try{    
        $route = new Route();
        $route->init();
    }catch(Exception $e){
        echo $e->getmessage();
    }
?>
