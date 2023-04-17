<?php

namespace core;
include_once 'class.dbManager.php';

class menuManager
{
    private $main_menu;
    private $admin_menu;
    private $conn;

    public function __construct(){
        $this->conn = new dbManager();

        //Setting the main menu
        $result = $this->conn->getConn()->query("SELECT * FROM menuAssociations WHERE menuID = 1");
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $this->main_menu[] = $row;
            }
        }

        //Setting the admin menu
        $result = $this->conn->getConn()->query("SELECT * FROM menuAssociations WHERE menuID = 2");
        if($result->num_rows >0){
            while($row = $result->fetch_assoc()){
                $this->admin_menu[] = $row;
            }
        }
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

    public function addPageToMenu($visible_name, $url, $menuType){
        if($menuType == 'main')
            return $this->conn->getConn()->query("INSERT INTO menuAssociations (visible_name, menuID, url) VALUES (".$visible_name.", 1,".$url);
        else if ($menuType == 'admin')
            return $this->conn->getConn()->query("INSERT INTO menuAssociations (visible_name, menuID, url) VALUES (".$visible_name.", 2,".$url);
        else
            return false;
    }

}