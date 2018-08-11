<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdoposts';

// Set DSN
$dsn = 'mysql:host='. $host .';dbname='. $dbname;

// Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);

# PDO QUERY

$stmt = $pdo->query('SELECT * FROM posts');

// [PDO:FETCH_ASSOC](http://php.net/manual/en/pdostatement.fetch.php)
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $row['title'] . '<br>';
}