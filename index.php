<?php
	require_once 'config/config.php';
	require_once 'config/route.php';

	
	$route = new Route();

	/*
	* Conexion a la base de datos
	* Descomentar la lineas sin asteriscos
	* en caso que quiera usarlo.
	*
	require_once "config/db.php";
	if(empty($DB)):
		$DB = db::getInstance();
	endif;
	*/

	require_once TEMPLATE . 'header.php';

	$route->add('/', "Inicio");
	$route->add('/nosotros', 'About');
	$route->add('/contacto', function(){
		echo "Estoy en contacto llamame a 12343423";
	});

	$route->submit();

	require_once TEMPLATE . 'footer.php'
?>