<?php
if(isset($adminPages)) {
    session_start();
    if(!isset($_SESSION['name'])){
        header('Location: /under-admin');
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
    <?php
        include 'components/admin/header.php';

        //getting page data if it's present in db
        foreach ($adminPages as $page)
            if ($param[0] == $page['url'] || $param[0] == "")
                $currentPage = $page;

        if(isset($currentPage)):
            if(isset($currentPage['dedicate_css']))
                echo '<style>'.$currentPage['dedicate_css'].'</style>';
                ?>
            <title><?php echo $currentPage['name']?> | Sottocasa Michele</title>
        <?php endif; ?>
        </head>
        <body>

                <?php

                require_once 'core/class.menuManager.php';
                $menu_manager = new \core\menuManager();
                $admin_menu = $menu_manager->getAdminMenu();

                echo $page["content"];
            ?>
        </body>
    </html>
    <?php
} else {
    http_response_code(404);
    require '/errors/404.php';
}