<?php
	error_reporting(E_ERROR | E_WARNING);
	//error_reporting( E_WARNING);
	require_once 'define.php';

	function __autoload($clasName){
		require_once LIBRARY_PATH . "{$clasName}.php";
	}
	
	$bootstrap = new Bootstrap();
	$bootstrap->init();