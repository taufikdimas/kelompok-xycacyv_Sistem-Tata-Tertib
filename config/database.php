<?php
class Database{
    private $dsn = "sqlsrv:server=PARTICLE\SQLEXPRESS;database=tatibv4";
    public $conn;

    public function getConneection(){
        $this->conn = null;
        try {
            $this->conn = new PDO($this->dsn);
        } catch (PDOException $e) {
            throw new PDOException("Connection failed: " . $e->getMessage());
        }
        return $this->conn;
    }
}
?>