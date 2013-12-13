<?php 
session_start();

define('URL_BASE','http://localhost/ELMIO/');

$GLOBALS['config'] = array(
    'path' => array(
        'root' => realpath(dirname(__FILE__)) . '/../',
        'default_modulo' => 'inicio',
        'modulos' => 'modulos/',
        'view' => 'view/',
        'class' => 'classes/'
    ),

    'mysql' => array(
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => '',
        'db' => 'name_db',
        'engine' => 'mysql'
    ),
    'remember' => array(),
    'session' => array()
);

spl_autoload_register(function($class){
    require_once 'classes/' . $class . '.php';
});


/**
* Conexión a la base de datos con ORM
*/
require_once "libraries/rb.php";
