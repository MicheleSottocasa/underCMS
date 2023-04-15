<?php

ini_set('display_errors', '1');
set_include_path(__DIR__);

require_once 'core/class.pagesToLoad.php';

$p = new \core\pagesToLoad();
$pages = $p->getPages();
$adminPages = $p->getAdminPages();
$request = $_SERVER['REQUEST_URI'];

$param = explode('?', $request);

if(isset($pages))
    foreach ($pages as $page) {
        $page = '/' . $page;
        if($param[0] == $page || $param[0] == "") {
                require __DIR__ . '/components/home.php';
                exit;
        }
    }
if(isset($adminPages))
    foreach ($adminPages as $page){
        $page = '/' . $page;
        if($param[0] == $page || $param[0] == "") {
                require __DIR__ . '/components/adminHome.php';
                exit;
            }
    }

http_response_code(404);
require __DIR__ . '/errors/404.php';
