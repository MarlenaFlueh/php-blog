<?php

require __DIR__ . "/../init.php";

$path = $_SERVER['PATH_INFO'];

$routes = [
    '/index' => [
        'controller' => 'postsController',
        'method' => 'index'
    ],
    '/post' => [
        'controller' => 'postsController',
        'method' => 'show'
    ]
];

if (isset($routes[$path])) {
    $route = $routes[$path];
    $postsController = $container->make($route['controller']);
    $method = $route['method'];
    $postsController->$method();
}

?>

