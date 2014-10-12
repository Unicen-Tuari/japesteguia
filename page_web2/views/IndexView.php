<?php

require('View.php');	

class IndexView extends View	{

	function set_jugadores($arr_jugadores){
	//"personas" se tranforma en $personas en el foreach en from,dentro de personas.tpl
		$this->smarty->assign("jugadores", $arr_jugadores);
	}

	// function set_materiales(){

	// }

	function render(){
		$this->smarty->display('index.tpl');
	}
	
}


?>