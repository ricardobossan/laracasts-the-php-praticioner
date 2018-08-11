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

* [Create a Database][17]
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

		* **Set DSN (Data Source Name)**: String that has an associated data structure to describe a connection to a data source.
Describes the driver, type of database (MySql), the host, database name

			* ``$dsn = 'mysql:host='. $host .';dbname='. $dbname;``

		* **Create a PDO instance**

			* ``$pdo = new PDO($dsn, $user, $password);``

		* **PDO QUERY**

			```
			$stmt = $pdo->query('SELECT * FROM posts');

			<!-- [PDO:FETCH_ASSOC](http://php.net/manual/en/pdostatement.fetch.php) -->
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
				echo $row['title'] . '<br>';
			}
			```




### [][#]

* ****
### [][#]

* ****
### [][#]

* ****
### [][#]

* ****

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
[18]: