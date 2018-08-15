# [PDO Crash Course (PHP) - Traversy Media][1]

### Contact:

[Twitter][2]
[Facebook][3]
[Instagram][4]
[Discord Chat][5]
[Linkedin][6]
[Github][7]
[Webhosting][8]

### [Code for this class][9]

### [What Is PDO][10]

* PHP Data Objects (PHP Extension)
* Lean & consistent way to access the database
* Works with multiple databases
* Data access layer
* Object Oriented

### [Some Benefits of PDO][11]

* **Multiple Databases**
* **Security / Prepared Statements**: prevent database from SQL Injection.
	* **Prepared Statement**: Is a precompiled SQL statement that separates the instruction from the SQL statement from the data.Thus, the data that come in from an user is treated as just data. So it can't be interpreted as a SQL instraction.
* **Usability**: Helper Functions, that can automate function operations.
* **Reusability**: Has an uniffied API, to access multiple databases.
* **Excellent Error Handling**:exceptions.

### [MAIN PDO Classes][12]

* **PDO**: Represents a connection between PHP & DB. It's where we plug in the DSN.
* **PDOStatement**: Rpresents a prepared statement and, after executed, an associated result.
* **PDOException**: Represents errors raised by PDO.

### [Supported Databases][13]

* **MySQL**
* **PostgreSQL**
* **MS SQL Server**
* **Oracle**
* **FireBird**
* **Sybase**
* **IBM**
* **Informiix**
* **SQLite**
* **FreeTDS**
* **4D**
* **Cubrid**

### [Let's Get Started][14]

* **Install PHP**:
	* [XAMPP Apache + mARIAdb + PHP + Perl][15]: Gives you a complete local enviroment within Apache Server. Cross platform.
	* or MAMP
	* [Check your php.ini file and uncomment the database your using, in the list, by removing the semicolon (;) in front of it's name][16]

### [Create a Database][17]

* Open the shell, executing as admin, and:
	* **Connect to MySQL**: ``mysql -u <user> -p <password>`` _(I connected to the root user, so I didn't have to define a password)_
	* **Create a Database**: ``create database <db_name>;`` _(db_name: pdoposts)_
	* **Create a table**: ``create table <table_name> (id integer PRIMARY KEY AUTO_INCREMENT, title VARCHAR (255), body TEXT, author VARCHAR (255), is_published BOOLEAN DEFAULT true, created_at DATETIME DEFAULT CURRENT_TIMESTAMP);`` _(table_name: posts)_

* Open the `index.php` file:
	* **Set the Variables**:

		```
		<?php
		$host = 'localhost';
		$user = 'root';
		$password = '';
		$dbname = 'pdoposts';
		```

### [Set DSN (Data Source Name)][18]

* **DSN**: String that has an associated data structure to describe a connection to a data source. Describes the driver, type of database (MySql), the host, database name

	``$dsn = 'mysql:host='. $host .';dbname='. $dbname;``

### [Create a PDO instance][19]

``$pdo = new PDO($dsn, $user, $password);``

### [PDO QUERY][20]

```
$stmt = $pdo->query('SELECT * FROM posts');
// [PDO:FETCH_ASSOC](http://php.net/manual/en/pdostatement.fetch.php)
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	echo $row['title'] . '<br>';
}
```

* Insert data into database table, in shell:

	```
	// https://dev.mysql.com/doc/refman/8.0/en/insert.html
	insert into posts (title, body, author, is_published, created_at) values("Post One", "This is post One", "Brad", 1, CURRENT_TIMESTAMP), ("Post Two", "This is post Two", "John", 1, CURRENT_TIMESTAMP);
	```

* Methods for fetching according to the data type (_Associative Array_, _Object_ and _Default: Object_)

	* To fetch as an associative array data type: [PDO:FETCH_ASSOC](http://php.net/manual/en/pdostatement.fetch.php)

	```
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		echo $row['title'] . '<br>';
	}
	```

	* To fetch as an object data type: [PDO:FETCH_OBJ](http://php.net/manual/en/pdostatement.fetch.php)

	```
	while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
		echo $row->title . '<br>';
	}
	```

	* To fetch the default data type (object):

	```
	while($row = $stmt->fetch()){
		echo $row->title . '<br>';
	}
	```

### [**PREPARED STATEMENT** (Prepare & Execute)](https://youtu.be/kEW6f7Pilc4?t=1189)

#### [PDO::Prepare][27] - Prepares a statement for execution and returns a statement object. Prepares an SQL statement to be executed by the PDOStatement::execute() method.

#### [PDOStatement::execute][28] - Executes a prepared statement. Either **an array of input-only parameter values has to be passed**, or a PDOStatement::bindParam() and/or PDOStatement::bindValue() has to be called to bind either variables or values (respectively) to the parameter markers.

* **UNSAFE**: This makes the database vulnerable because, as there's no separation between the _`instructions`_ and the _`actual data`_. Data can be inserted directly into the database, through a `<form>`, for example.

	```
	// `$sql` will hold instructions
	$sql = "SELECT * FROM posts WHERE author = '$author'";
	```

* **FETCH MULTIPLE POSTS**

	* Configure PDO

		* Set [default fetch][30] results to return an [anonymous object][31]
			```
			// Set default fetch mode for pdo: PDO::FETCH_OBJ
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			```

		* [Disable emulation][30]
			```
			// Disables emulation
			$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			```

	* Set variable

		```
		// User Input
		$author = 'John';
		```

	* **Positional Params (_`?`_)**: Each _`?`_ should be placed in order, according to the arguments passed in, and vice-versa.

		```
		// `$sql` will hold the instructions:
		$sql = 'SELECT * FROM posts WHERE author = ?';
		$stmt = $pdo->prepare($sql);
		$stmt->execute([$author]); // here, the named parameters are set, to receive the database arguments
		$posts = $stmt->fetchAll();
		```

	* **Named Params (_`:named_param`_)**

		```
		// `$sql` will hold the instructions:
		$sql = 'SELECT * FROM posts WHERE author = :author';
		$stmt = $pdo->prepare($sql);
		$stmt->execute(['author' => $author, 'is_published' => $is_published]); // here, the named parameters are set, to receive the database arguments
		$posts = $stmt->fetchAll();
		```

	* Output results:

		```
		//var_dump($posts);
		foreach($posts as $post){
			echo $post->title . "<br>";
		}
		```

* [**FETCH SINGLE POST**][21]

	```
	// `$sql` will hold the instructions:
	$sql = 'SELECT * FROM posts WHERE id = :id';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['id' => $id]);
	$post = $stmt->fetch();
	// Output:
	echo $post->body;
 	```

### [GET ROW COUNT][22]

```
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author = ?');
$stmt->execute([$author]);
// Method for an executed pdo instance..
$postCount = $stmt->rowCount();
// Output:
echo $postCount;
```
### [INSERT DATA][23]

```
$title = 'Post Five';
$body = 'This is post five';
$author = 'Kevin';
// `$sql` will hold the instructions:
$sql = 'INSERT INTO posts(title, body, author) VALUES(:title, :body, :author)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['title' => $title, 'body' => $body, 'author' => $author]);
// Output:
echo 'Post Added';
```

### [UPDATE DATA][24]

```
$id = 1;
$body = 'This is the updated post';
// `$sql` will hold the instructions:
$sql = 'UPDATE posts SET body = :body WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['body' => $body, 'id' => $id]);
// Output:
echo 'Post Updated';
```

### [DELETE DATA][25]

```
$id = 3;

// `$sql` will hold the instructions:
$sql = 'DELETE FROM posts WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $id]);
// Output:
echo 'Post Deleted';
```

### [SEARCH DATA][26]

```
$search = "%f%";
$sql = 'SELECT * FROM posts WHERE title LIKE ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$search]);
$posts = $stmt->fetchAll();

foreach($posts as $post){
	echo $post->title . '<br>';
}
```

### [LIMIT RESULTS][29]

* Configure PDO to only emulate on fail, with [PDO::ATTR_EMULATE_PREPARES][30] set to false .
```
// Disables emulation:
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
```

### Reference:

[1]:https://www.youtube.com/watch?v=kEW6f7Pilc4
[2]:https://twitter.com/traversymedia
[3]:https://www.facebook.com/traversymedia
[4]:https://www.instagram.com/traversymedia/
[5]:https://discordapp.com/invite/traversymedia
[6]:https://linkedin.com/in/bradtraversy
[7]:https://github.com/bradtraversy
[8]:https://www.inmotionhosting.com/?irgwc=1&clickid=Tyzz9Z0NjQgwWQnxsKVn30V-UkjXc3TOZQQ6yw0&affiliates=396530
[9]:https://gist.github.com/bradtraversy/147443539b7e1afafa17e6392f072720
[10]:https://youtu.be/kEW6f7Pilc4?t=81
[11]:https://youtu.be/kEW6f7Pilc4?t=156
[12]:https://youtu.be/kEW6f7Pilc4?t=293
[13]:https://youtu.be/kEW6f7Pilc4?t=326
[14]:https://youtu.be/kEW6f7Pilc4?t=339
[15]:https://youtu.be/kEW6f7Pilc4?t=345
[16]:https://youtu.be/kEW6f7Pilc4?t=412
[17]:https://youtu.be/kEW6f7Pilc4?t=483
[18]:https://youtu.be/kEW6f7Pilc4?t=705
[19]:https://youtu.be/kEW6f7Pilc4?t=785
[20]:https://youtu.be/kEW6f7Pilc4?t=817
[21]:https://youtu.be/kEW6f7Pilc4?t=1718
[22]:https://youtu.be/kEW6f7Pilc4?t=1878
[23]:https://youtu.be/kEW6f7Pilc4?t=1980
[24]:https://youtu.be/kEW6f7Pilc4?t=2160
[25]:https://youtu.be/kEW6f7Pilc4?t=2280
[26]:https://youtu.be/kEW6f7Pilc4?t=2307
[27]:http://php.net/manual/en/pdo.prepare.php
[28]:http://php.net/manual/en/pdostatement.execute.php
[29]:https://youtu.be/kEW6f7Pilc4?t=2490
[30]:http://php.net/manual/en/pdo.setattribute.php
[31]:http://php.net/manual/en/pdostatement.fetch.php
[32]:
[33]:
[34]:
[35]:
[36]:
[37]:
[38]:
[39]:
[40]:
[41]:
[42]:
[43]:
[44]:
[45]:
[46]:
[47]:
[48]:
[49]:
[50]: