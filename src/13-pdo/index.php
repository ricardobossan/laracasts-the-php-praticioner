<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

dd($tasks);

require 'index.view.php';
