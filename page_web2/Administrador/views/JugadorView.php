<?php

require('View.php');	

class JugadorView extends View	{

	// function set_jugadores($arr_jugadores){
	// //"personas" se tranforma en $personas en el foreach en from,dentro de personas.tpl
	// 	$this->smarty->assign("jugador", $jugador);
	// }


	function set_jugadores($jugadores){
		$this->smarty->assign("jugadores",$jugadores);
	}
	
	function set_nac_jugador($nac){
		$this->smarty->assign("nac", $nac);
	}
	

	function set_usuario($usuario){
		$this->smarty->assign("usuario", $usuario);
	}

	function set_image($img_j){
		$this->smarty->assign("img", $img_j);

	}
	function set_img_grande($img_g){
		$this->smarty->assign("img_g", $img_g);
	}
	function set_personal_information($i_p_j){
		$this->smarty->assign("ipj", $i_p_j);
	}
	function set_videos($arr_videos){
		$this->smarty->assign("videos",$arr_videos);
	}
	

	function render_form_jugador_vacio(){
		$this->smarty->display('form_jugador_vacio.tpl');
	}

	function render_form_jugador_semi_vacio(){
		$this->smarty->display('form_jugador_semi_vacio.tpl');
	}

	function render_modal(){
		$this->smarty->display('modal - copia.tpl');
	}


	
	
}


?>