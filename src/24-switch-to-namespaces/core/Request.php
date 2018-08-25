<?php

namespace App\Core;

/**
 * Creates the Request class
 * @class
 */
class Request
{
	/**
	 * @function Uri
	 * @ memberof Request
	 * @static
	 */
	public static function uri()
	{
		return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
	}

	public static function method()
	{
		return $_SERVER['REQUEST_METHOD'];
	}

}