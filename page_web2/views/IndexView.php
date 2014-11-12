<?php

require('View.php');	

class IndexView extends View	{

	function set_jugadores($arr_jugadores){
	//"personas" se tranforma en $personas en el foreach en from,dentro de personas.tpl
		$this->smarty->assign("jugadores", $arr_jugadores);
	}

	function set_usuario($usuario){
	//"personas" se tranforma en $personas en el foreach en from,dentro de personas.tpl
		$this->smarty->assign("usuario", $usuario);
	}
	
	function render(){
		$this->smarty->display('index.tpl');
	}
	
}


?>