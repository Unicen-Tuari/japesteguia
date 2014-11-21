<?php 
include_once("view.php");


class ErrorView extends View
{

	function show_error(){

		$mensaje="Error,verifique que los datos ingresados sean los correctos!";
		$this->smarty->assign("error_login",$mensaje);	
		$this->smarty->display('error_login.tpl');
	


	}

}



?>