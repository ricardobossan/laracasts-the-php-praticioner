  <?php

/**
 * @file A controller is an entry point for a route
 */

$users = App::get('database')->selectAll('users');

require 'views/index.view.php';