<?php

namespace core;

class pagesToLoad
{
    private $pages;
    private $adminPages;

    public function __construct(){
        $this->pages = [
            [
                "local-path" => "views/home.html",
                "url" => ""
            ],
            [
                "local-path" => "views/about.html",
                "url" => "about"
            ]
        ];
        $this->adminPages = [
            [
                "url" => "dashboard",
                "local-path" => "views/admin/login.html"
            ],
            [
                "url" => "profile",
                "local-path" => "views/admin/login.html"
            ],
            [
                "url" => "under-admin",
                "local-path" => "views/admin/login.html"
            ]
        ];
    }

    /**
     * @return array
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * @return array
     */
    public function getAdminPages()
    {
        return $this->adminPages;
    }

    public function addPage(Page $page){
        array_push($this->pages, $page);
    }



}