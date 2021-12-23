<?php

$request = explode('/', $_SERVER['REQUEST_URI']);

switch ($request[2]) {
    case '':
        require_once 'templates/main.php';
        break;
    case 'page-one':
        require_once 'templates/page-one.php';
        break;
    case 'page-two':
        require_once 'templates/page-two.php';
        break;
    case 'page-three':
        require_once 'templates/page-three.php';
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        require_once 'templates/404.php';
        break;
}