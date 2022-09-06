<?php

//class
class Produk {
    //Property
    public $judul,
           $penulis,
           $tahun; //Bisa digunakan dimana saja
    
    private $harga; //hanya bisa digunakan oleh kelas Produk

    protected $diskon; //Bisa digunakan oleh parent dan child

    //Magic Method
    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
        $this->harga = $harga;
    }

    //Method
    public function getProperty() {
        return "$this->judul, $this->penulis, $this->tahun";
    }

    public function getHarga() {
        return $this->harga;
    }
}

//Object type
class infoProduk {
    public function cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->penulis}, {$produk->tahun})";
        return $str;
    }
}

//Inheritance
class Komik extends Produk {
    public $pembaca;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pembaca=0, $harga=0) {
        $this->pembaca = $pembaca;

        parent::__construct($judul, $penulis, $tahun, $harga); //Overriding
    }

    public function getInfoKomik() {
        $str = "Komik: {$this->judul} | {$this->penulis}, {$this->tahun} ({$this->pembaca} Orang)";
        return $str;
    }

    public function setDiskon($diskon) {
        $harga = $this->getHarga() - ($this->getHarga() * ($diskon/100));

        return $harga;
    }
}

class Game extends Produk {
    public $pemain;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pemain=0) {
        $this->pemain = $pemain;
        parent::__construct($judul, $penulis, $tahun); //Overriding
    }

    public function getInfoGame() {
        $str = "Komik: {$this->judul} | {$this->penulis}, {$this->tahun} ({$this->pemain} / Jam)";
        return $str;
    }
}

//Object
$komik = new Komik("One Piece", "Masashi Kishimoto", 1999, 200000, 55000);
$game = new Game("Auto Chess", "Super Cell", 2014, 50);
$novel = new Produk("Bumi", "Tere Liye");
$buku = new Produk();

$cetakInfoProduk = new infoProduk(); //Ambil info produk dengan class produk

echo "Komik: ". $komik->getProperty();
echo "<br>";
echo "Game: " . $game->getProperty();
echo "<br>";
echo "Novel: " . $novel->getProperty();
echo "<br>";
echo "Buku: " . $buku->getProperty();

echo "<br>";
echo "<br>";

//Cetak class dengan class
echo $cetakInfoProduk->cetak($komik);
echo "<br>";
echo $cetakInfoProduk->cetak($game);
echo "<br>";
echo $cetakInfoProduk->cetak($novel);
echo "<br>";
echo $cetakInfoProduk->cetak($buku);

echo "<br>";
echo "<br>";

//Cetak class inheritance
echo $komik->getInfoKomik();
echo "<br>";
echo $game->getInfoGame();

$diskon = 50;
echo "<hr>";
echo "Harga Komik: " . $komik->getHarga();
echo "<br>Diskon: " . $diskon . "<br>";
echo "Harga Diskon: " . $komik->setDiskon($diskon);

?>