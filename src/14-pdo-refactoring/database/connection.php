<?php

/**
 * @file THis file will be home the Connection class and for anything related to connecting to my database.
 * @todo see if I can use jsdocs for php files.
 */

/**
 * Connects my database.
 * @class
 */
class Connection
{
	/**
	 * The `static` keyword makes this method global, so I can call it without having to instantiate it; i.e., it adds this method to the global object, allowing it to be called globally, the same way instantiation would as in
	 *
	 * ```
	 * $connection = new Connection;
	 * $connection->make();
	 * ```
	 *
	 * but without actually instantiating it
	 *
	 * @function
	 */
	public static function make()
	{
		/**
		 * trow exception if an error occurs. It usually is automatically done behind the scenes by the CMS or a framework, but it's still valueble to underestand the basic process.
		 */
		try {
			/**
			 * Instance of the 'Php Data Objects' - PDO class. Offers and interface to connects to your databases
			 * @instance
			 * @arg {string} DSN - Connection string. Declares what kind of database are you using (SQLite, mySQL, etc.).
			 */
			return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', '');
		} catch (PDOException $e) {
			// $e is an object, and getMessage() is one of it's methods. It displays what happned.
			die($e->getMessage());
		}
	}
}