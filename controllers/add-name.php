<?php

var_dump($_POST);
var_dump($app['database']);

$app['database']->insert('todos', [
    'description' => $_POST['name']
]);