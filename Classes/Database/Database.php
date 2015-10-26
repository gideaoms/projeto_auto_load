<?php

namespace Classes\Database;

use \PDO;

class Database {

	public $conn;

	public function __construct() {
		try {
			$this->conn = new PDO('mysql:host=localhost;dbname=wbanco_rss', 'root', '');
		} catch ( PDOExection $e ) {
			echo $e->getMessage("teste de erro");
		}
		echo 'Database conectado';
	}

}

?>