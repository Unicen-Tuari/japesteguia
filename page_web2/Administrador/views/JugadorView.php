<?php

require('View.php');	

class JugadorView extends View	{

	// function set_jugadores($arr_jugadores){
	// //"personas" se tranforma en $personas en el foreach en from,dentro de personas.tpl
	// 	$this->smarty->assign("jugador", $jugador);
	// }

	function show_image($img_j){
		$this->smarty->assign("img", $img_j);
	}
	function show_personal_information($i_p_j){
		$this->smarty->assign("ipj", $i_p_j);
	}
	function show_videos($vid_j){
		$this->smarty->assign("videos", $vid_j);
	}

	function render_modal(){
		$this->smarty->display('modal.tpl');
	}
	
}


?>