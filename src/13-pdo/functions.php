<?php


/**
 * trow exception if an error occurs. It usually is automatically done behind the scenes by the CMS or a framework, but it's still valueble to underestand the basic process.
 */
function connectToDb()
{
	try {
		/**
		 * @desc Instance of the 'Php Data Objects' - PDO class. Offers and interface to connects to your databases
		 * @instance
		 * @arg {string} DSN - Connection string. Declares what kind of database are you using (SQLite, mySQL, etc.).
		 */
		return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
	} catch (PDOException $e) {
		// $e is an object, and getMessage() is one of it's methods. It displays what happned.
		die($e->getMessage());
	}
}

/**
 * Prepare a SQL query. Best pratice
 */
function fetchAllTasks($pdo)
{
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
