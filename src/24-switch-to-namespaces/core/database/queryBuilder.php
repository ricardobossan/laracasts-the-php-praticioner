<?php

/**
 * @file Creates the QueryBuilder class, which is responsible for building queries for the database
 */

/**
 * Prepare a SQL query. Best pratice.
 * @class
 */
class QueryBuilder
{
	protected $pdo;

	// Constructor functions provide the class it's dependencies ($pdo).
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll ($table)
	{
		// Builds up and executes a query.
		$statement = $this->pdo->prepare("select * from {$table}");

		// Executes de PDOStatemente (prepared statement)
		$statement->execute();

		// You can override how we fetch these results, with: 'fetchAll(PDO::FETCH+OBJ)' or, if you make a 'Task' class, with a 'fetchAll(PDO::FETCH_CLASS, 'Task')'.
		// In this case, you'll get an associative array.
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}

	// insert into names (name) values (:name)
	//The collon is to protect against sql injection
	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' .implode(', :', array_keys($parameters))
		);

		try {
		$statement = $this->pdo->prepare($sql);

		$statement->execute($parameters);
		} catch (Exception $e) {
			die('Whoops, something went wong');
		}
	}
}