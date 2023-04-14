<?php
ini_set('display_errors', '1');
set_include_path(__DIR__);

$request = $_SERVER['REQUEST_URI'];

$param = explode('?', $request);

switch ($param[0]) {
    case '/':
    case '/about':
    case '':
        require __DIR__ . '/components/home.php';
        break;
    case '/under-admin':
        require __DIR__ . '/pages/admin/login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/errors/404.php';
        break;
}
