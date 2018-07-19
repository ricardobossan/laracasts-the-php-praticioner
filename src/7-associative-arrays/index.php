<?php

$person = [
	'age' => 31,
	'hair' => 'brown',
	'career' => 'web developer'
];

$person['name'] = 'Jeffrey';

echo '<pre>';

var_dump($person);

echo '</pre>';

require 'index.view.php';

die();