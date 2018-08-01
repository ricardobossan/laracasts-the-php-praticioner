<?php

/**
 * @file A controller is an entry point for a route
 */

$users = $app['database']->selectAll('users');

require 'views/index.view.php';