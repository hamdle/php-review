<?php

App::get('database')->insert('todos', [
    'description' => $_POST['name']
]);