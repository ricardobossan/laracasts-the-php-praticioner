<?php

/**
 * @file A controller is an entry point for a route
 */

$tasks = $database->selectAll('todos');

require 'views/index.view.php';