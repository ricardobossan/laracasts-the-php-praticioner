<?php

/**
 * @file Entry point for the page.
 */

$database = require 'core/bootstrap.php';

require Router::load('routes.php')

	->direct(Request::uri(), Request::method());