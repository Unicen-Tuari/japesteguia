<?php

class JugadorController{
	
	public function actionMostrarJugador($id_jugador){
		
		include "./models/modelo_jugadores.php";
		include "views/JugadorView.php";
		$jugadores=new Jugadores();
		$view = new JugadorView();
		$img_j=$jugadores->load_big_images($id_jugador);
		$i_p_j=$jugadores->load_personal_information($id_jugador);
		$vid_j=$jugadores->load_videos($id_jugador);
		// echo '<pre>';
		// print_r($i_p_j);
		// print_r($vid_j);
		// echo '</pre>';
		$view->show_image($img_j);
		$view->show_personal_information($i_p_j);
		$view->show_videos($vid_j);
		$view->render_modal();
	}	
}

?>