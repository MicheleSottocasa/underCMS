<?php

namespace core;

class pagesToLoad
{
    private $pages;
    private $adminPages;

    public function __construct(){
        $this->pages = ["", "about"];
        $this->adminPages = ["dashboard", "profile", "under-admin"];
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