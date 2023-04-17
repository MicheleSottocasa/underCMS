<?php
if(isset($adminPages))
    foreach ($adminPages as $page) {
        $pageUrl = '/' . $page['url'];
        if($param[0] == $pageUrl || $param[0] == "") {
                require $page["local-path"];
                exit;
        }
    }