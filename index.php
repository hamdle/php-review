<?php


$query = require 'bootstrap.php';

require 'Task.php';

$task_arr = $query->selectAll('todos');

$tasks = array_map(function ($task) {
    $t = new Task();
    $t->description = $task->description;
    $t->completed = (bool)$task->completed;
    return $t;
}, $task_arr);

die(var_dump($tasks));