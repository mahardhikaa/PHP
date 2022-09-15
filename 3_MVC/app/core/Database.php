<?php

class Database {
    private $db_host = DB_HOST,
            $db_user = DB_USER,
            $db_pass = DB_PASS,
            $db_name = DB_NAME;
    
    private $dbh,
            $stmt;
            
    public function __construct() {
        $dsn = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;
     
        $opt = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->db_user, $this->db_pass, $opt);
        } catch (PDOException $e) {
                die($e->getMessage());
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int($value) :
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function exe() {
        $this->stmt->execute();
    }

    public function resultAll() {
        $this->exe();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>