<?php

class Inicio extends Modulos
{
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data["user"] = R::getAll('select * from user');
		$this->load_view("header");
		$this->load_view("inicio/listar",$data);
		$this->load_view("footer");
	}
}


/* End of file inicio.php */
/* Location: .//var/www/ELMIO/modulo/inicio.php */