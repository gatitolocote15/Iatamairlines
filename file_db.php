<?php

class Database
{
    private static $db;
    private $connection;

    private function __construct()
    {
        $config = self::getConfig();
        $host = $config['database']['host'];
        $database = $config['database']['data'];
        $username = $config['database']['user'];
        $password = $config['database']['pass'];
        $this->connection = mysqli_connect($host, $username, $password, $database);
        if (!$this->connection) {
            die('Connection failed: ' . mysqli_connect_error());
        }
    }
    static function getConfig()
    {
        return require_once($_SERVER['DOCUMENT_ROOT'] . '/_sapolio/config/config.php');
    }

    function __destruct()
    {
        $this->connection->close();
    }

    public static function getConnection()
    {
        if (self::$db == null) {
            self::$db = new Database();
        }
        return self::$db->connection;
    }
}
