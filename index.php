<?php

require 'functions.php';
require 'Task.php';

$pdo = getDatabase();

$task_arr = fetchAllTasks($pdo);

$task_arr[0]->complete();

var_dump($task_arr);