<?php

/**
 * @file Builds up our QueryBuilder
 */

$config = require 'config.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
	Connection::make($config['database'])
);