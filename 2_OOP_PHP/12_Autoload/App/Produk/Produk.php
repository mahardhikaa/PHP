<?php

abstract class Produk {
    //Property
    protected $judul,
           $penulis,
           $tahun,
           $harga,
           $diskon = 0;

    //Magic Method
    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
        $this->harga = $harga;
    }

    //Method
    abstract public function getInfo();

    //GETTER
    public function getHarga() {
        return $this->harga;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function getHargaDiskon() {
        return $this->harga - ($this->harga * ($this->diskon/100));
    }

    public function getJudul() {
        return $this->judul;
    }

    //SETTER
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
}

?>