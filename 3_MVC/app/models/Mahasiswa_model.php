<?php

class Mahasiswa_model {
    private $table = 'mahasiswa',
            $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllMhs() {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultAll();
    }

    public function getMhsByID($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
}

?>