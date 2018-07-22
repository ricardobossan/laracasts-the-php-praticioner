<?php

/**
 * @file Todo Application
 */

require 'functions.php';

/**
 * @class todo
 */
 class Task {

 	/* switch these variables ($description and $completedto protected, at more high level*/
 	public $description;

 	public $completed = false;

 	public function __construct($description)

 	{
 		//automatically triggered on instantiation
 		$this->description = $description;
 	}

 	public function isComplete() {
 		return $this->completed;
 	}

 	public function complete() {
 		return $this->completed = true;
 	}
	/*
 	public function describe() { // for use at more high level
 		return $this->description;
 	}
	*/
 }

/*$task = new task('Go to the store'); // a new task object
*/

/* or create an array and iterate over it at the index.view.php file */
$tasks = [
	new task('Go to the store'),
	new task('Finish my screencast'),
	new task('Clean my room')
];

$tasks[2]->complete();

/*dd($tasks);
*/
 require 'index.view.php';