<?php

include "./models/modelo_jugadores.php";
include "views/JugadorView.php";

class JugadorController{
	
	public function actionMostrarJugadorViejo($id_jugador){
		
		// include "./models/modelo_jugadores.php";
		// include "views/JugadorView.php";
		$jugadores=new Jugadores();
		$view = new JugadorView();
		$img_j=$jugadores->load_big_images($id_jugador);
		$i_p_j=$jugadores->load_personal_information($id_jugador);
		$vid_j=$jugadores->load_videos($id_jugador);
		// echo '<pre>';
		
		// print_r($vid_j);
		// echo '</pre>';
		$view->show_image($img_j);
		$view->show_personal_information($i_p_j);
		$view->show_videos($vid_j);
		$view->render_modal();
	}	

	//nuevos

	public function actionMostrarJugador($nac){
		$jugadores=new Jugadores();
		$view = new JugadorView();
		$arr_aux=array();
		//nuevo: $id_material por $nac
		// $usuario=substr($_SESSION['user'], 0, 9);
		// $view->set_usuario($usuario);
		// seteo nac en vista
		$view->set_nac_jugador($nac);
		if($nac=='mundiales'){
			//$jug tiene la descripcion completa para todos los id jugadores 
			//excepto los videos q estan en $arr_videos
			$arr_jug=$jugadores->load_jugadores('Mundial');
			// echo '<pre>';
			// print_r($arr_jug);
			// echo'<pre>';
			//$arr_videos tiene todos los videos para cada id_jugador
			foreach ($arr_jug as $key => $arr) {
					$arr_aux=$jugadores->load_videos($arr['id_jugador']);
					$arr_videos[$arr['id_jugador']]=$arr_aux;
				}
			
			echo '<pre>';
			print_r($arr_videos);
			echo'<pre>';
			$view->set_jugadores($arr_jug);
			$view->set_videos($arr_videos);
			$view->render_modal();
		}else{
			$mat=$materiales->load_maderas();
			foreach ($mat as $key => $arr2) {
					$arr_aux[$arr2['distribuidor']][]=$arr2;
				}
			$view->show_material($arr_aux);
			$view->render_modal_maderas();
		}
	}	

	public function actionEditarMaterial(){
		
		$material=new Materiales();
		$view = new MaterialView();
		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		$mat=$_POST['id_mat'];
		$m = explode("&", $mat);
        // $m[0]=id_materiales(0 o 1) y $m[1]=id_material
        // seteo id material en la vista correspondiente
        $view->set_material($m[0]);
        if($m[0]==0){
        	$ml=$material->load_goma($m[1]);
        	$view->render_form_goma($ml);
        }else{
        	// otro material=madera
        	$ml=$material->load_madera($m[1]);
        	$view->render_form_madera($ml);
        }
	}	

	public function actionActualizarMaterial(){
		
		$material=new Materiales();
		$view = new MaterialView();
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		$mat=$_POST;
        // id_mat y id=id_goma
        if($_POST['id_mat']==0){
        	$id=$mat['id'];
        	$id_mat=$mat['id_mat'];
        	$distribuidor=$mat['distribuidor'];
        	$nombre=$mat['nombre'];
        	$esponja=$mat['esponja'];
        	$dureza=$mat['dureza'];
        	$tipo_juego=$mat['tipo_juego'];
        	$velocidad=$mat['velocidad'];
        	$efecto=$mat['efecto'];

        	$mg=$material->actualizar_goma($id,$distribuidor,$nombre,$esponja,$dureza,
        	$tipo_juego,$velocidad,$efecto);
   			// echo '<pre>';
			// print_r($ml);
			// echo '</pre>';
        	$this->actionMostrarMaterial($id_mat);
        }else{
        	// otro material
        	     
        	$id=$mat['id'];
        	$id_mat=$mat['id_mat'];
        	$distribuidor=$mat['distribuidor'];
        	$nombre=$mat['nombre'];
      		$mango=$mat['mango'];
        	$peso=$mat['peso'];
        	$tipo_juego=$mat['tipo_juego'];
        	
        	$mg=$material->actualizar_madera($id,$distribuidor,$nombre,$mango,$peso,
        		$tipo_juego);
  
        	$this->actionMostrarMaterial($id_mat);
        }	
	}
}

?>