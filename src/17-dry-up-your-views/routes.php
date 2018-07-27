<?php

/**
 * @file Sets routes.
 * @desc A controller, in many ways, is an entrey point for a route.
 * @instance
 */
$router->define([
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about/culture' => 'controllers/about-culture.php',
	'contact' => 'controllers/contact.php'
]);