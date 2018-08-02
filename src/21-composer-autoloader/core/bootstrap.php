<?php

/**
 * @file Builds up our QueryBuilder
 */

$app = [];

$app['config'] = require 'config.php';

$app['database'] = new QueryBuilder(
	Connection::make($app['config']['database'])
);