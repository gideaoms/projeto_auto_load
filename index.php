<?php

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
//define('DS', "/");

require 'autoload.php';

use Classes\Database\Database;
try{
	$db = new Database();
}catch(Exception $e){
	echo 'erro: ' . $e->getMessage();
}
/*
use Classes\Foo;
use Classes\Bar;

$foo = new Foo();
try{
	$bar = new Bar();
} catch (Exception $e) {
	echo 'deu erro: ' . $e->getMessage();
}*/

?>