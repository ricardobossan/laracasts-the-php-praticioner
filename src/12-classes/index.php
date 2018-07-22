<?php

/**
 * @file Todo Application
 */

/**
 * @class todo
 */
 class Task {

 	public function __construct($descrption)

 	{

 		//automatically triggered on instantiation
 		$this->description = $description;
 	}

 }

 $task = new task('Go to the store');

 require 'index.view.php';