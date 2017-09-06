<?php

namespace Engine;
use Engine\Db;
abstract class AbstractDb
{
    public $db;
    public function __construct() {
        $this->db = Db::getInstance();
    }
}