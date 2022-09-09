<?php

class Game extends Produk implements infoProduk {
    public $pemain;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pemain=0, $harga=0) {
        $this->pemain = $pemain;
        parent::__construct($judul, $penulis, $tahun, $harga); //Overriding
    }

    public function getInfo() {
        return "{$this->judul} | {$this->penulis}, {$this->tahun}";
    }

    public function getProperty() {
        $str = "Game: {$this->getInfo()} ({$this->pemain} / Jam)";
        return $str;
    }
}

?>