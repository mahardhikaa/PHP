<?php

//class
abstract class Produk {
    //Property
    private $judul,
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
    abstract public function getProperty();

    public function getInfo() {
        return "{$this->judul} | {$this->penulis}, {$this->tahun}";
    }

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

//Inheritance
class Komik extends Produk {
    public $pembaca;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pembaca=0, $harga=0) {
        $this->pembaca = $pembaca;

        parent::__construct($judul, $penulis, $tahun, $harga); //Overriding
    }

    public function getProperty() {
        $str = "Komik: {$this->getInfo()} ({$this->pembaca} Orang)";
        return $str;
    }
}

class Game extends Produk {
    public $pemain;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pemain=0, $harga=0) {
        $this->pemain = $pemain;
        parent::__construct($judul, $penulis, $tahun, $harga); //Overriding
    }

    public function getProperty() {
        $str = "Game: {$this->getInfo()} ({$this->pemain} / Jam)";
        return $str;
    }
}

class cetakProduk {
    public $daftarProduk = [];

    public function addProduk($produk) {
        $this->daftarProduk[] = $produk;
    }

    public function cetakInfo() {
        $str = "Daftar Produk: <br>";
        
        foreach($this->daftarProduk as $produk){
            $str .= "{$produk->getProperty()} <br>";
        }
        return $str;
    }
}

//Object
$komik = new Komik("One Piece", "Oda Sensei", 1999, 200000, 55000);
$game = new Game("Auto Chess", "Super Cell", 2014, 50, 100000);
// $novel = new Produk("Bumi", "Tere Liye");
// $buku = new Produk();

$cetak = new cetakProduk();
$cetak->addProduk($komik);
$cetak->addProduk($game);
echo $cetak->cetakInfo();



?>