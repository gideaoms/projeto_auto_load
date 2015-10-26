<?php

function __autoload( $class ) {
	$class =  WWW_ROOT . DS . str_replace("\\", DS, $class) . ".php";
	if ( ! file_exists($class)) {
		throw new Exception("file path '{$class}' not found.");		
	}
	require( $class );
}

/*
 * spl_autoload_unregister('nome_do_metodo');
 * 
 */
?>