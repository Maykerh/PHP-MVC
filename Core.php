<?php
	
class Core{

	private $actualController = 'homeController';
	private $actualAction = 'index';
	private $params = array();
	
	/*
	 * Função base da estrutura MVC. Através do htaccess, qualquer caminho dentro do projeto digitado na barra de endereços, é redirecionado primeiramente para o index.php, onde é instanciada esta classe e chamado o método runApplication(), que é responsável por capturar a url, e dividir em controller, action e parâmetros.
	 */	
	public function runApplication(){
		
		$url = $_SERVER['PHP_SELF'];
		$url = explode('index.php', $url); 

		if(!empty($url)){
			
			$url = end($url); // Remove a raiz da url;

			$url = explode('/', $url);

			array_shift($url); // Remove o primeiro elemento do array que teoricamente deve ser uma barra

			if(isset($url[0]) && !empty($url[0])){

				$this->actualController = $url[0].'Controller';
				array_shift($url);
			}

			if(isset($url[0]) && !empty($url[0])){

				$this->actualAction = $url[0];
				array_shift($url);
			}

			if(count($url) > 0){ // tudo que vier após o action são parametros
				$this->params = $url;
			}
		}
		
		$controller = new $this->actualController;
		$action = $this->actualAction;
		$params = $this->params;

		call_user_func_array(array($controller, $action), $params); // Chama o método $action do objeto $controller, passando o array $params como parâmetros
	}

}