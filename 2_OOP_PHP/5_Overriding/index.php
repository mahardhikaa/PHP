<?php

//class
class Produk {
    //Property
    public $judul,
           $penulis,
           $tahun;
    
    //Magic Method
    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahun = $tahun;
    }

    //Method
    public function getProperty() {
        return "$this->judul, $this->penulis, $this->tahun";
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

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pembaca=0) {
        $this->pembaca = $pembaca;

        parent::__construct($judul, $penulis, $tahun); //Overriding
    }

    public function getInfoKomik() {
        $str = "Komik: {$this->judul} | {$this->penulis}, {$this->tahun} ({$this->pembaca} Orang)";
        return $str;
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
$komik = new Komik("One Piece", "Masashi Kishimoto", 1999, 200000);
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

?>