<?php

ini_set('display_errors', '1');
set_include_path(__DIR__);

require_once 'core/class.pageManager.php';
require_once 'core/class.frontendDependencies.php';

// Dependencies
$dep = new \core\frontendDependencies();

$p = new \core\pageManager();
$pages = $p->getPages();
$adminPages = $p->getAdminPages();
$request = $_SERVER['REQUEST_URI'];
//echo '<pre>';
//print_r($pages);
//echo '</pre>';

$param = explode('?', $request);

if(isset($pages)) {
    foreach ($pages as $page) {
        if ($param[0] == $page['url'] || $param[0] == "") {
            require __DIR__ . '/components/home.php';
            exit;
        }
    }
}
if(isset($adminPages)){
    foreach ($adminPages as $page){
        if($param[0] == $page['url'] || $param[0] == "") {
            require __DIR__ . '/components/admin/home.php';
            exit;
        }
    }
}

switch ($param[0]){
    case '/under-admin':
        require 'views/admin/login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/errors/404.php';
}
