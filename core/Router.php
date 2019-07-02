<?php

class Router {
    public $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public static function load($route_file) {
        $router = new self; // or $router = new static;
        require $route_file;
        return $router;
    }

    public function direct($uri, $requestType) {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            return $this->routes[$requestType][$uri];
        }

        throw new Exception('No route defined for this URI');
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }
}