<?php

include "./models/modelo_materiales.php";
include "views/MaterialView.php";
// $materiales=new Materiales();
// $view = new MaterialView();

class MaterialController{

	

	// $materiales=new Materiales();
	// $view = new MaterialView();

	public function actionMostrarMaterial($id_material){
		
		// include "./models/modelo_materiales.php";
		// include "views/MaterialView.php";
		$materiales=new Materiales();
		$view = new MaterialView();
		$arr_aux=array();

		$usuario=substr($_SESSION['user'], 0, 9);
			$view->set_usuario($usuario);

		if($id_material==0){
			$mat=$materiales->load_gomas();
			// echo '<pre>';
			// print_r($mat);
			// echo '<pre>';

			foreach ($mat as $key => $arr2) {
					$arr_aux[$arr2['distribuidor']][]=$arr2;
				}
			$view->set_material($id_material);
			// echo '<pre>';
			// print_r($arr_aux);
			// echo '<pre>';
			$view->show_material($arr_aux);
			$view->render_modal_gomas();
		}else{
			$mat=$materiales->load_maderas();
			foreach ($mat as $key => $arr2) {
					$arr_aux[$arr2['distribuidor']][]=$arr2;
				}
			$view->show_material($arr_aux);
			$view->render_modal_maderas();
		}
		// echo '<pre>';
		// print_r($mat);
		// echo '</pre>';
	}	

	public function actionEditarMaterial(){
		
		// include "./models/modelo_materiales.php";
		// include "views/MaterialView.php";
		$material=new Materiales();
		$view = new MaterialView();
		

		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		$mat=$_POST['id_mat'];

		$m = explode("&", $mat);
		// echo '<pre>';
		// print_r($mat);
		// echo '</pre>';
		// $view->render_form_goma($ml);
        // id_mat y id_goma
        if($m[0]==0){
        	$ml=$material->load_goma($m[1]);
   //      	echo '<pre>';
			// print_r($ml);
			// echo '</pre>';
			$view->set_material($m[0]);
        	$view->render_form_goma($ml);


        }else{
        	// otro material
        }

		
	}	

	public function actionActualizarMaterial(){
		
		// include "./models/modelo_materiales.php";
		// include "views/MaterialView.php";
		$material=new Materiales();
		$view = new MaterialView();
		

		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		// $mat=$_GET['id_mat'];
		// print_r($_GET);
		$mat=$_POST;
		// $m = explode("&", $mat);
		// echo '<pre>';
		// print_r($mat);
		// echo '</pre>';
		// $view->render_form_goma($ml);
        // id_mat y id_goma
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
   //      	echo '<pre>';
			// print_r($ml);
			// echo '</pre>';
        	$this->actionMostrarMaterial($id_mat);
        	


        }else{
        	// otro material
        }

		



		
	}
	public function actionEliminarMaterial(){
		
		// include "./models/modelo_materiales.php";
		// include "views/MaterialView.php";
		$material=new Materiales();
		$view = new MaterialView();
		

		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		// $mat=$_GET['id_mat'];
		// print_r($_GET);
		$mat=$_POST['id_mat'];
		$m = explode("&", $mat);
		// echo '<pre>';
		// print_r($mat);
		// echo '</pre>';
		// $view->render_form_goma($ml);
        // id_mat y id_goma
        if($_POST['id_mat']==0){
        	// $id=$m[1];
        	

        	$eg=$material->eliminar_goma($m[1]);
   //      	echo '<pre>';
			// print_r($ml);
			// echo '</pre>';
        	$this->actionMostrarMaterial($m[0]);
        	


        }else{
        	// otro material
        }
    }

}

?>