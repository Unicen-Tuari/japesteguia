<?php

require('View.php');	

class MaterialView extends View	{

	function show_material($mat){
		$this->smarty->assign("materiales", $mat);
	}

	function render_modal_gomas(){
		$this->smarty->display('modal_gomas.tpl');
	}
	function render_modal_maderas(){
		$this->smarty->display('modal_maderas.tpl');
	}

	function set_usuario($usuario){
		$this->smarty->assign("usuario", $usuario);
	}

	function set_material($id_mat){
		$this->smarty->assign("id_mat", $id_mat);
	}

	

	function render_form_goma($desc_goma){
		$this->smarty->assign("desc_goma", $desc_goma);
		$this->smarty->display('form_goma.tpl');
	}
	function render_form_madera($desc_madera){
		$this->smarty->assign("desc_madera", $desc_madera);
		$this->smarty->display('form_madera.tpl');
	}
	// function render_modal_maderas(){
	// 	$this->smarty->display('modal_maderas.tpl');
	// }
	function render_form_goma_vacio(){
		$this->smarty->display('form_goma_vacia.tpl');
	}

	function render_form_madera_vacio(){
		$this->smarty->display('form_madera_vacia.tpl');
	}

	
}


?>