<?php

class Inicio extends Modulos
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data["user"] = array( array( 'id' => 1, 'name' => 'ale', 'password' => '1234', 'email' => 'tito@pp.com' ) );
		$this->load_view("header");
		$this->load_view("inicio/listar",$data);
		$this->load_view("footer");
	}
}


/* End of file inicio.php */
/* Location: .//var/www/ELMIO/modulo/inicio.php */