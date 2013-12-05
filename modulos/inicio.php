<?php

class Inicio extends Loader
{

    public function index(){
		$data["user"] = array( array( 'id' => 1, 'name' => 'ale', 'password' => '1234', 'email' => 'tito@pp.com' ) );
        self::load_view("header");
        self::load_view("inicio/listar",$data);
        self::load_view("footer");
    }


    public function bar($foo = null ){
        echo $foo;
        echo "<br />";
        echo "<a href='" . URL_BASE . "inicio'>Inicio</a>";
    }
}


/* End of file inicio.php */
/* Location: .//var/www/ELMIO/modulo/inicio.php */
