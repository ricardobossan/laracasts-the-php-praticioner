<?php

require 'functions.php';
require 'database/connection.php';
require 'Task.php';

$pdo = Connection::make();

$tasks = fetchAllTasks($pdo);

require 'index.view.php';
