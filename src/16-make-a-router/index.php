<?php

/**
 * @file Entry point for the page.
 * @todo run gulp task jsdoc, on root directory of the whole project.
 */

$database = require 'core/bootstrap.php';

require Router::load('routes.php')

	->direct(Request::uri());