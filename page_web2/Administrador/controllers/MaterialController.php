<?php

include "./models/modelo_materiales.php";
include "views/MaterialView.php";
// $materiales=new Materiales();
// $view = new MaterialView();

class MaterialController{
	// $materiales=new Materiales();
	// $view = new MaterialView();

	public function actionMostrarMaterial($id_material){
		$materiales=new Materiales();
		$view = new MaterialView();
		$arr_aux=array();

		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);
		// seteo id_material en vista
		$view->set_material($id_material);
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
	public function actionEliminarMaterial(){
		
		// include "./models/modelo_materiales.php";
		// include "views/MaterialView.php";
		$material=new Materiales();
		$view = new MaterialView();
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		$mat=$_POST['id_mat'];
		$m = explode("&", $mat);
        // id_mat y id_goma
        if($_POST['id_mat']==0){
        	$eg=$material->eliminar_goma($m[1]);
        	$this->actionMostrarMaterial($m[0]);
        }else{
        	$eg=$material->eliminar_madera($m[1]);
        	$this->actionMostrarMaterial($m[0]);
        }
    }

    public function actionAgregarMaterial(){
		
		$material=new Materiales();
		$view = new MaterialView();
		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		$id_mat=$_POST['id_mat'];
		
        // seteo id material en la vista correspondiente
        $view->set_material($id_mat);
        if($id_mat==0){
        	$view->render_form_goma_vacio();
        }else{
        	// otro material=madera
        	$view->render_form_madera_vacio();
        }
	}	
	

	public function actionAgregarMaterialForm(){
		
		$material=new Materiales();
		$view = new MaterialView();
		
		$usuario=substr($_SESSION['user'], 0, 9);
		$view->set_usuario($usuario);

		$mat=$_POST;
        // id_mat 
        if($_POST['id_mat']==0){
        	$id_mat=$mat['id_mat'];
        	$distribuidor=$mat['distribuidor'];
        	$nombre=$mat['nombre'];
        	$esponja=$mat['esponja'];
        	$dureza=$mat['dureza'];
        	$tipo_juego=$mat['tipo_juego'];
        	$velocidad=$mat['velocidad'];
        	$efecto=$mat['efecto'];

        	$material->agregar_goma($distribuidor,$nombre,$esponja,$dureza,
        	$tipo_juego,$velocidad,$efecto);
   			
        	$this->actionMostrarMaterial($id_mat);
        }else{     
        	$id_mat=$mat['id_mat'];
        	$distribuidor=$mat['distribuidor'];
        	$nombre=$mat['nombre'];
      		$mango=$mat['mango'];
        	$peso=$mat['peso'];
        	$tipo_juego=$mat['tipo_juego'];
        	
        	$mg=$material->agregar_madera($distribuidor,$nombre,$mango,$peso,
        		$tipo_juego);
  
        	$this->actionMostrarMaterial($id_mat);
        }	

	}

}

?>