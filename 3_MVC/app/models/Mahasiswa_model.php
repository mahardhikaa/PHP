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

    public function tambahDataMhs($data) {
        $query = "INSERT INTO mahasiswa
                    VALUES 
                    ('', :Nama, :NIM, :Jurusan, '')";
        
        $this->db->query($query);
        $this->db->bind('Nama', $data['Nama']);
        $this->db->bind('NIM', $data['NIM']);
        $this->db->bind('Jurusan', $data['Jurusan']);
        $this->db->exe();

        return $this->db->rowCount();
    }

    public function hapusDataMhs($id) {
        $query = "DELETE FROM mahasiswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->exe();

        return $this->db->rowCount();
    }
}

?>