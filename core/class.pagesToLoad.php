<?php

namespace core;
require_once 'class.dbManager.php';

class pagesToLoad
{
    private $pages;
    private $adminPages;
    private $conn;

    public function __construct()
    {
        $this->conn = new dbManager();

        //Setting the pages
        $result = $this->conn->getConn()->query("SELECT * FROM pages WHERE isAdmin = 0");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->pages[] = $row;
            }
        }

        //Setting the admin pages
        $result = $this->conn->getConn()->query("SELECT * FROM pages WHERE isAdmin = 1");
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $this->adminPages[] = $row;
            }
        }
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

    public function addPage(Page $page)
    {
        array_push($this->pages, $page);
    }


}