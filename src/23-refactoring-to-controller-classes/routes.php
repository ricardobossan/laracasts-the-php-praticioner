<?php

/**
 * @file Sets routes.
 * @desc A controller, in many ways, is an entrey point for a route. Entering one of the keys in the array will trigger the respective controller, defined in the value.
 * @instance
 */
$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');