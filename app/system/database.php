<?php

namespace System;

use PDO;

class Database
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;port=3306;dbname=fgccfl', 'root', 'root');
    }

    private function __clone()
    {
    }

    public static function connect(): Database
    {
        self::$instance = self::$instance ?? new Database();
    }

    public function open(): PDO
    {
        return $this->connection;
    }
}
