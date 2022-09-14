<?php

class Mahasiswa_model {
    private $dbh,
            $stmt;

    public function __construct() {
        $dsn = 'mysql:host=localhost;dbname=phpdasar';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMhs() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>