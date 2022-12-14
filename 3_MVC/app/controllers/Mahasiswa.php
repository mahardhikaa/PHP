<?php

class Mahasiswa extends Controller {
    public function index(){
        $data['judul'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getAllMhs();
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }

    public function detail($id){
        $data['judul'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->getMhsById($id);
        $this->view("templates/header", $data);
        $this->view("mahasiswa/detail", $data);
        $this->view("templates/footer");
    }

    public function tambah(){
        if($this->model("Mahasiswa_model")->tambahDataMhs($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header("Location:" . BASEURL . "/mahasiswa");
            exit;
        }
        else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header("Location:" . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function hapus($id){
        if($this->model("Mahasiswa_model")->hapusDataMhs($id) > 0){
            Flasher::setFlash('Berhasil', 'Dihapus', 'success');
            header("Location:" . BASEURL . "/mahasiswa");
            exit;
        }
        else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header("Location:" . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function getUbah(){
        echo json_encode($this->model("Mahasiswa_model")->getMhsByID($_POST['id']));
    }

    public function ubah(){
        if($this->model("Mahasiswa_model")->ubahDataMhs($_POST) > 0){
            Flasher::setFlash('Berhasil', 'Diubah', 'success');
            header("Location:" . BASEURL . "/mahasiswa");
            exit;
        }
        else {
            Flasher::setFlash('Gagal', 'Diubah', 'danger');
            header("Location:" . BASEURL . "/mahasiswa");
            exit;
        }
    }

    public function cari(){
        $data['judul'] = 'Mahasiswa';
        $data['mahasiswa'] = $this->model('Mahasiswa_model')->cariDataMhs();
        $this->view("templates/header", $data);
        $this->view("mahasiswa/index", $data);
        $this->view("templates/footer");
    }
}

?>