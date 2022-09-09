<?php

class Komik extends Produk implements infoProduk {
    public $pembaca;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pembaca=0, $harga=0) {
        $this->pembaca = $pembaca;

        parent::__construct($judul, $penulis, $tahun, $harga); //Overriding
    }

    public function getInfo() {
        return "{$this->judul} | {$this->penulis}, {$this->tahun}";
    }

    public function getProperty() {
        $str = "Komik: {$this->getInfo()} ({$this->pembaca} Orang)";
        return $str;
    }
}

?>