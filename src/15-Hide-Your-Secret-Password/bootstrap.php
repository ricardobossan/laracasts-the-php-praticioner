<?php

/**
 * @file Builds up our QueryBuilder
 */

require 'database/connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(
	Connection::make()
);