<?php

/**
 * @class
 */
class Router

{
	protected $routes = [];

	/**
	 * Loads the routes file. It's a global method, with no need for instantiating, because it is static.
	 * @function load
	 * @memberof Router
	 * @static
	 * */
	public static function load($file)
	{
		$router = new static;

		require $file;

		return $router;
	}

	public function define ($routes)
	{
		$this->routes = $routes;
	}

	public function direct($uri)
	{
		if(array_key_exists($uri, $this->routes)) {
			return $this->routes[$uri];
		}

		throw new Exception('No route defined for this URI.');
	}
}