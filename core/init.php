<?php 
session_start();

define('URL_BASE','http://localhost/ELMIO/');
define('ENVIRONMENT','dev');

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
    'session' => array(
        'session_name'=>'user',
        'token_name' => 'token'
    )
);

spl_autoload_register(function($class){
    if(file_exists('classes/' . $class . '.php')){
        require_once 'classes/' . $class . '.php';
    }
});
if(ENVIRONMENT=='dev'){
    ini_set('display_errors', 'On');
    error_reporting(E_ALL | E_STRICT);
}else{
    error_reporting(0);
    ini_set('log_errors',1);
    ini_set('error_log','tmp/php-error.log');
    error_log('ERRORES');
}
/**
* Conexión a la base de datos
*/
require_once "libraries/DB.php";
