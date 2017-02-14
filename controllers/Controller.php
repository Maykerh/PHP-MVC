<?php

class Controller{

	public function __construct(){

		//conexão com o banco
	}

	public function loadView($viewName, $viewData = array()){

		
		extract($viewData);


		require_once('/views/'.$viewName.'.php');
	}

	public function loadTemplate($viewName, $viewData = array()){

		//Inserir código para pegar dados exclusivos do template.
error_log(print_r($viewData,true));
		require_once('/views/template.php');

		//Chamar a função loadView dentro do template utilizando os mesmos parametros recebidos, para chamar um view.
	}

}