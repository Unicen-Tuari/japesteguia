<?php 
include_once("view.php");


class ErrorView extends View
{

	function show_error($mensaje){

		
		$this->smarty->assign("error_login",$mensaje);	
		$this->smarty->display('error_login.tpl');
	


	}

}



?>