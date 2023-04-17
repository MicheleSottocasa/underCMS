<?php

namespace core;

class menuManager
{
     private $main_menu;
    private $admin_menu;

    public function __construct(){
        $this->main_menu = [
            [
                "page" => "Home",
                "url" => "/"
            ],
            [
                "page" => "About",
                "url" => "/about"
            ]
        ];
        $this->admin_menu = [
            [
                "page" => "admin-login",
                "url" => "/under-admin"
            ]
        ];
    }

    /**
     * @return array[]
     */
    public function getMainMenu()
    {
        return $this->main_menu;
    }

    /**
     * @return array[]
     */
    public function getAdminMenu()
    {
        return $this->admin_menu;
    }

    public function addPage($page, $url, $menuType){
        if($menuType == 'main')
            array_push($this->main_menu, ["page" => $page, "url" => $url]);
        else if ($menuType == 'admin')
            array_push($this->admin_menu, ["page" => $page, "url" => $url]);
        else
            return false;
        return true;
    }

}