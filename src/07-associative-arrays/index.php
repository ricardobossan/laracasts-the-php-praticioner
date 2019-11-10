<?php

$person = [
	'age' => 31,
	'hair' => 'brown',
	'career' => 'web developer'
];

// `$variable['key'] = 'value'; appends a value to an array.
$person['name'] = 'Jeffrey';

// `unset()` Removes a value from the array.
unset($person['age']);

// `<pre>`, as in _preserve the format_.
echo '<pre>';

// `var_dump()` dumps the `value` for **anything**, literally.
var_dump($person);

echo '</pre>';

require 'index.view.php';

// `die()` stops whatever comes afterwards.
die();
