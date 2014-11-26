<?php

class MaterialController{
	
	public function actionMostrarMaterial($id_material){
		
		include "./models/modelo_materiales.php";
		include "views/MaterialView.php";
		$materiales=new Materiales();
		$view = new MaterialView();
		$arr_aux=array();
		
		if($id_material==0){
			$mat=$materiales->load_gomas();
			foreach ($mat as $key => $arr2) {
					$arr_aux[$arr2['distribuidor']][]=$arr2;
				}
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
}

?>