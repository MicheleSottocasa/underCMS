<?php
if(isset($pages)){?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
    <?php
    foreach ($pages as $page){
        if($param[0] == $page['url'] || $param[0] == "") {
            include 'components/header.php';

            if(isset($page['dedicate_css']))
                echo '<style>'.$page['dedicate_css'].'</style>';
    ?>
        <title><?php echo $page['name']?> | Sottocasa Michele</title>
        </head>
        <body>

            <?php

            require_once 'core/class.menuManager.php';
            $menu_manager = new \core\menuManager();
            $main_menu = $menu_manager->getMainMenu();
            $admin_menu = $menu_manager->getAdminMenu();

            include 'components/main-menu.php';

            $param = explode('?', $request);

            echo $page["content"];
            break;
        }
    }
    include_once 'components/footer.php'; ?>
        </body>
    </html>
<?php
} else {
    http_response_code(404);
    require '../errors/404.php';
}