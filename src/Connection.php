<?php

namespace Test;

use Simplon\Mysql\Mysql;
use Simplon\Mysql\PDOConnector;

class Connection {

	public function conn() {
		$pdo = new PDOConnector('127.0.0.1', 'root', 'root', 'youngzsoft_test');
		$pdoConn = $pdo->connect();

		$dbConn = new Mysql($pdoConn);

		return $dbConn;
	}

}