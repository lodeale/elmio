<?php 
	/**
	* Carga la ruta del sistema
	*/
	define("URL_BASE","http://127.0.0.1/ELMIO/");

	/**
	* Carga los datos para la base de datos
	*/
	define("HOST","127.0.0.1");
	define("USER","root");
	define("PASS","");
	define("DB_NAME","name_db");
	define("DB_ENGINE","mysql");
	

	/**
	* Rutas del Config, Modulos, View, Libreria
	*/
	//Config
	define('CONFIG', dirname(__FILE__) . "/.." . '/config/');

	//Library
	define('LIBRARIES', dirname(__FILE__) . "/.." . '/libraries/');

	//Modulo
	define('MODULO', dirname(__FILE__) . "/.." . '/modulo/');

	//View
	define("TEMPLATE", dirname(__FILE__) . "/.." .'/view/');
