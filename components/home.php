<?php
include 'components/header.php';
$request = $_SERVER['REQUEST_URI'];

$param = explode('?', $request);

switch ($param[0]) {
    case '/':
    case '':
        include_once 'views/home.php';
        break;
    case '/about':
        include_once 'views/about.php';
        break;
}
include_once 'components/footer.php';
