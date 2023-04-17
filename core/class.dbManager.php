<?php

namespace core;
include_once 'class.loadEnv.php';
class dbManager
{
    private $conn;

    public function __construct()
    {
        (new LoadEnv(substr(__DIR__, 0, -4).".env"))->load();
        $this->conn = mysqli_connect(getenv('HOST'), getenv('USERNAME'), getenv('PASSWORD'), getenv('DBNAME'));
    }

    /**
     * @return false|mysqli
     */
    public function getConn()
    {
        return $this->conn;
    }
}