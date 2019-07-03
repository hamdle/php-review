<?php

$config = require 'config.php';

App::bind('config', $config);

App::bind('database', new QueryBuilder(
    Connection::make($config['database'])
));