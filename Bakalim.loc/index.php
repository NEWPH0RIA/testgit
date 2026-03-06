<?php

spl_autoload_register(function
(string $className){
    require_once __DIR__. '/' .str_replace(
        '\\', '/', $className. '.php');
});

$route = $_GET['route'] ?? '';

$pattern = '~^hello/(.*)$~';
preg_match($pattern, $route, $matches);

if(!empty($matches)){
    $controller = new src\controllers\MainController();
    $controller->sayHello($matches[1]);
    return;
};

