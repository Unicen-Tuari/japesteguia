<?php

require('View.php');	

class IndexView extends View	{

	function set_jugadores($arr_jugadores){
		$this->smarty->assign("jugadores", $arr_jugadores);
	}

	function set_usuario($usuario){
		$this->smarty->assign("usuario", $usuario);
	}

	function set_error_logeo(){
		$this->smarty->assign("error_logeo", true);
	}

	function set_calendario_inicial($mes){
		$this->smarty->assign("mes", $mes);
	}
	
	function render(){
		$this->smarty->display('index.tpl');
	}
	
}


?>