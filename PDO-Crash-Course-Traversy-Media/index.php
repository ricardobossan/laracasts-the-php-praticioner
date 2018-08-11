<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdoposts';

// Set DSN
$dsn = 'mysql:host='. $host .';dbname='. $dbname;

// Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);

// Set default fetch mode for pdo: PDO::FETCH_OBJ
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	# PDO QUERY

	/*
	$stmt = $pdo->query('SELECT * FROM posts');
	*/
	/*
	To fetch as an associative array data type: [PDO:FETCH_ASSOC](http://php.net/manual/en/pdostatement.fetch.php)
	*/
	/*
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo $row['title'] . '<br>';
	}
	/*
	To fetch as an object data type: [PDO:FETCH_OBJ](http://php.net/manual/en/pdostatement.fetch.php)
	*/
	/*
	while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
		echo $row->title . '<br>';
	}
	*/
	/*
	To fetch the default data type (object):
	*/
	/*
		while($row = $stmt->fetch()){
			echo $row->title . '<br>';
		}
	*/
