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
	
}


?>