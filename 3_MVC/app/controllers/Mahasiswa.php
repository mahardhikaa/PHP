<?php

class Mahasiswa extends Controller {
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }
}

?>