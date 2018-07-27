<?php

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
		return trim($_SERVER['REQUEST_URI'], '/');
	}
}