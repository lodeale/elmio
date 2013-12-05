<?php
	require_once 'config/config.php';
	require_once 'config/loader.php';
	require_once 'config/route.php';
	require_once 'config/modulos.php';

	
	$route = new Route();

	/**
	* Conexión a la base de datos con ORM
	*/
	require_once LIBRARIES . "/rb.php";
	R::setup(DB_ENGINE . ':host=' . HOST . ";dbname=" . DB_NAME, USER, PASS);
	

	$route->add('/', "Inicio");
	$route->add('/nosotros', 'About');
	$route->add('/contacto', function(){
		/**
		* Se puede utilizar con Funciones
		*/
		echo "contacto@elmio.com.ar";
	});

	$route->init();
?>