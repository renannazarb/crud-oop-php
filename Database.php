<?php

class Database {

    private $conn;

    function __construct() {
        $this->conn = new mysqli('localhost', 'root', '', 'crud_php_oop');
    }

    function getKoneksi() {
        return $this->conn;
    }

    function __destruct() {
        $this->conn->close();
    }

}