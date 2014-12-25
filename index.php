<?php

require 'boot.php';

if (isset($_GET['route'])) {
    $route = $_GET['route'];
    $routeParts = explode('/', $route);
    $controllerClassName = ucfirst($routeParts[0]) . 'Controller';
    $actionName = $routeParts[1];
} else {
    $controllerClassName = 'NewsController';
    $actionName = 'all';
}

$controller = new $controllerClassName;
$controller->action($actionName);