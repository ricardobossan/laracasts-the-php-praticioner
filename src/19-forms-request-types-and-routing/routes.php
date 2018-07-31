<?php

/**
 * @file Sets routes.
 * @desc A controller, in many ways, is an entrey point for a route. Entering one of the keys in the array will trigger the respective controller, defined in the value.
 * @instance
 */
$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');