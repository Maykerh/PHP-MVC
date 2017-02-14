<?php
require_once('config.php');
require_once('Core.php');

session_start();
spl_autoload_register(function($class){

	if(strpos($class, 'Controller') != -1 && file_exists('controllers/'.$class.'.php'))
		require_once('controllers/'.$class.'.php');
	else if(file_exists('models/'.$class.'.php'))
		require_once('models/'.$class.'.php');
});

$core = new Core;
$core->runApplication();