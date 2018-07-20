<?php

$task = [
	'title' => 'Learn PHP, for job interview at Brasil Game Show',
	'assigned_to' => 'Ricardo',
	'due' => 'ASAP',
	'completed' => false // if you used the string 'false', it would be a `truthy` value, and wouldn't serve the key/values point here
];

require 'index.view.php';

// To stop reading code
// unecessary at this point, but I'm saving it here so I remember learning it
die();