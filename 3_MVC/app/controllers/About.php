<?php

class About extends Controller {
    public function index($nama="Hafizd", $pekerjaan="IT", $umur=23) {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function page($nilai1=0, $nilai2=0) {
        $data['judul'] = 'Pages';
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}

?>