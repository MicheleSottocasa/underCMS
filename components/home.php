<!DOCTYPE html>
<html lang="en">

    <head>
<?php
$request = $_SERVER['REQUEST_URI'];
$title = ucfirst(substr($request, 1));
if($title == '')
    $title = 'Home';
include 'components/header.php';?>

    </head>
    <body>

<?php
require_once 'core/class.menuManager.php';
$menu_manager = new \core\menuManager();
$main_menu = $menu_manager->getMainMenu();
$admin_menu = $menu_manager->getAdminMenu();

include 'components/main-menu.php';

$param = explode('?', $request);

if(isset($pages))
    foreach ($pages as $page) {
        $pageUrl = '/' . $page['url'];
        if($param[0] == $pageUrl || $param[0] == "") {
                require $page["local-path"];
                exit;
        }
    }
include_once 'components/footer.php'; ?>
    </body>
</html>
