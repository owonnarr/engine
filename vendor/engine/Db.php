<?php
namespace Engine;
class Db
{
    private static $instance = null;
    private $db;
    private function __construct()
    {
        $this->db = new mysqli('localhost', 'root', '', 'testingBD');
    }
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    private function __clone(){}
}