<?php

class MaterialController{

	
	public function actionMostrarMaterial($id_material){
		
		include "./models/modelo_materiales.php";
		include "views/MaterialView.php";
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
		
		include "./models/modelo_materiales.php";
		include "views/MaterialView.php";
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
        	echo '<pre>';
			print_r($ml);
			echo '</pre>';
        	$view->render_form_goma($ml);


        }else{
        	// otro material
        }

		



		
	}	
}

?>