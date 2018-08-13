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

		# PREPARED STATEMENTS (prepare & execute)

		// UNSAFE
 		// $sql = "SELECT * FROM posts WHERE author = '$author'";

 		// FETCH MULTIPLE POSTS

 		// User Input
 		$author = 'Brad';
 		$is_published = true;
 		$id = 1;

/*
 		// Positional Params
 		$sql = 'SELECT * FROM posts WHERE author = ?';
 		$stmt = $pdo->prepare($sql);
 		$stmt->execute([$author]);
 		// No need to pass a parameter inside fetch, because the pdo fetch mode is already set it's default to object, above.
 		$posts = $stmt->fetchAll();
*/

/*
 		// Named Params
 		$sql = 'SELECT * FROM posts WHERE author = :author && is_published = :is_published';
 		$stmt = $pdo->prepare($sql);
 		$stmt->execute(['author' => $author, 'is_published' => $is_published]);
 		// No need to pass a parameter inside fetch, because the pdo fetch mode is already set it's default to object, above.
 		$posts = $stmt->fetchAll();
*/
/*
 		//var_dump($posts);
		foreach($posts as $post){
			echo $post->title . "<br>";
		}
*/

		// FETCH SINGLE POST

 		$sql = 'SELECT * FROM posts WHERE id = :id';
 		$stmt = $pdo->prepare($sql);
 		$stmt->execute(['id' => $id]);
 		// No need to pass a parameter inside fetch, because the pdo fetch mode is already set it's default to object, above.
 		$post = $stmt->fetch();

 		echo $post->body;