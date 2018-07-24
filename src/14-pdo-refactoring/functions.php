<?php

/**
 * Prepare a SQL query. Best pratice
 */
function fetchAllTasks($pdo)
{
	// Builds up and executes a query.
	$statement = $pdo->prepare('select * from todos');

	/**
	 * @deprecated [do not use this one bellow]
	 */
	//mysql_connect();

	$statement->execute();

	// You can override how we fetch these results, with: 'fetchAll(PDO::FETCH+OBJ)' or, if you make a 'Task' class, with a 'fetchAll(PDO::FETCH_CLASS, 'Task')'.
	// In this case, you'll get an associative array.
	return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}

/**
 * @function Sends the dd (Dump and Die) reusable function
 */
function dd($val) {
	echo '<pre>';

	var_dump($val);

	echo '</pre>';
}
