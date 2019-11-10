<?php

/**
 * @file Entry point for the page.
 */

require 'vendor/autoload.php';

$database = require 'core/bootstrap.php';

use App\Core\{Router, Request};

Router::load('app/routes.php')

	->direct(Request::uri(), Request::method());