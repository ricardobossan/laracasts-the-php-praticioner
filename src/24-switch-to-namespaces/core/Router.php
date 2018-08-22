<?php

/**
 * @class
 */
class Router

{
	public $routes = [
	'GET' => [],
	'POST' => []
];

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

	public function get($uri, $controller)
	{
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller)
	{
		$this->routes['POST'][$uri] = $controller;
	}

	/**
	 * @function If the given URI is registered for a GET request: 1) parse it; 2) new up the controller; 3) Call the method. All dynamically
	 */
	public function direct($uri, $requestType)
	{
		if(array_key_exists($uri, $this->routes[$requestType])){
	 		return $this->callAction(
	 			...explode('@', $this->routes[$requestType][$uri])
	 		);
		}

		throw new Exception('No route defined for this URI.');
	}

	protected function callAction($controller, $action)
	{
		$controller = new $controller;
		if (! method_exists($controller, $action)) {
			throw new Exception(
				"{$controller} does not respond to the {$action} action."
			);
		}

		return (new $controller)->$action();
	}
}