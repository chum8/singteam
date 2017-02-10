<?php
	class dbTasks {
	private $dbInstance, $dbHost, $dbPort, $dbName, $dbUser, $dbPass;
	function __construct()	{
	}
	function createTable () {
		$args = func_get_args();
		if (func_num_args() < 2) {
			return $this->makeMessage("Could not create table.  Function use: createTable(describeNewTable as boolean, tableName as string, fields[1], [2], etc...)");
		}
		else {
			$extras = "";
			$describeNewTable = $args[0];
			$tableName = $args[1];
			$newQuery = "CREATE TABLE " . $tableName . "(";
			$i = 1;
			while ($i < func_num_args()) {
				$i++;
				if ($i == func_num_args() - 1) {
					$newQuery .= $args[$i] . ")" . $extras;
					break;
				}
				else {
					$newQuery .= $args[$i] . ", ";
				}
			}
			if (!$this->dbInstance->query($newQuery)) {
				return $this->makeMessage("Could not execute query __ ", $newQuery, " __ because", $this->dbInstance->error);
			}
			else {
				if ($describeNewTable) {
					//echo $this->dbInstance->query("DESCRIBE " . $tableName);
					return $this->makeMessage("Database description is currently not implemented.  Successfully executed query", $newQuery);
				}
				else return $this->makeMessage("Successfully executed query", $newQuery);
			}
		}
	}
	function connect () {
		$this->dbHost = "127.0.0.1";
		$this->dbPort = 3306;
		$this->dbSocket = "";
		$this->dbName = "douglas6_stadoug";
		$this->dbUser = "douglas6_dsinger";
		$this->dbPass = "Ll!ONgFoR272";
		if (!$this->dbInstance = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName, $this->dbPort, $this->dbSocket)) {
			return $this->makeMessage("Could not connect to database because", $this->dbInstance->connect_error); }
		else {
			return $this->makeMessage("Successfully connected to database", $this->dbName); }
	}
	function generate() {
		$this->dbHost = "127.0.0.1";
		$this->dbName = "douglas6_stadoug";
		$this->dbUser = "douglas6_dsinger";
		$this->dbPass = "Ll!ONgFoR272";
		if (!$this->dbInstance = new mysqli($this->dbHost, $this->dbUser, $this->dbPass)) {
			return $this->makeMessage("Could not connect to database", $this->dbName, "because", mysqli_connect_error); 
		}
		else {
			if (!$this->dbInstance->query("CREATE DATABASE " . $this->dbName)) {
				return $this->makeMessage("Could not create DATABASE", $this->dbName, "because", $this->dbInstance->error);
			}
			else
			{
				return $this->makeMessage("Successfully created database", $this->dbName);
			}
		}
	}
	function makeMessage() //This function keeps message formatting consistent.
	{
		$args = func_get_args();
		$i = 0;
		$message = "";
		$endPunctuation = "!<br/><br/>";
		while ($i < func_num_args()) {
			$message .= $args[$i];
			if ($i == func_num_args() - 1) {
				$message .= $endPunctuation;
			}
			else {
				$message .= " ";
			}
			$i++;
		}
		return $message;
	}
	function slay() //deletes the database.  Careful!
	{
		if (!$this->dbInstance->query("DROP DATABASE " . $this->dbName)) {
			return $this->makeMessage("Could not slay DATABASE", $this->dbName, "because", $this->dbInstance->error);
		}
		else {
			return $this->makeMessage("Successfully slew (deleted) DATABASE", $this->dbName);
		}
	}
	function routineQuery($q) {
		if (!$this->dbInstance->query($q)) {
			return $this->makeMessage("Could not execute query", $q, "because", $this->dbInstance->error);
		}
		else {
			return $this->makeMessage("Successfully executed query", $q);
		}
	}
}
?>
