<?php

class Model {
    protected $db;

    public function __construct() {
        $config = require "../app/config/database.php";
        $this->db = new PDO(
            "mysql:host={$config['host']};dbname={$config['dbname']}",
            $config['user'],
            $config['pass']
        );
    }
}
