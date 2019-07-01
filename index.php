<?php

$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

// Chaining-style
//require Router::load('routes.php')->direct($uri);

$router = Router::load('routes.php');
$requested_uri = $router->direct($uri);
require $requested_uri;