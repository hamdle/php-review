<?php

require 'core/bootstrap.php';

//die(var_dump($app['config']));

require Router::load('routes.php')->direct(Request::uri());