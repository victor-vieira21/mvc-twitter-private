<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=sql212.epizy.com;dbname=epiz_29841526_twitter;charset=utf8",
				"epiz_29841526",
				"bmRCWBKsTI" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>