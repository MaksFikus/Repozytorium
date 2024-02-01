<?php

require_once 'Products.php';
class Database
{
    private $host;
    private $user;
    private $password;
    private $dbname;
    private $connection;


    public function __construct($host, $user, $password, $dbname  )
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Błąd połączenia: " . $this->conn->connect_error);
        }
    }


    public function getAllData($table): array
    {
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();

    }

    public function getByPrimaryKey($table, $primaryKey, $value): array
    {
        $sql = "SELECT * FROM $table WHERE $primaryKey = '$value'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();

    }

    public function getByUniqueIndex($table, $uniqueIndex, $value): array {
        $sql = "SELECT * FROM $table WHERE $uniqueIndex = '$value'";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }


}