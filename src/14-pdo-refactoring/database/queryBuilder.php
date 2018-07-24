<?php

class QueryBuilder ()
{
	public function selectAll ($Table)
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
}

}