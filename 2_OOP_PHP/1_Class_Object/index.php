<?php

class Produk {
    public $judul,
           $penulis,
           $tahun,
           $pembaca;
    
    public function getProperty() {
        return "$this->judul, $this->penulis, $this->tahun, $this->pembaca";
    }
}


$komik = new Produk();
$game = new Produk();
$novel = new Produk();

$komik->judul = "One Piece";
$komik->penulis = "Masashi Kishimoto";
$komik->tahun = 1999;
$komik->pembaca = 200000;

$game->judul = "Auto Chess";
$game->penulis = "Super Cell";
$game->tahun = 2014;
$game->pembaca = 1000000;

$novel->judul = "Bumi";
$novel->penulis = "Tere Liye";
$novel->tahun = 2018;
$novel->pembaca = 300000;

echo "Komik: ". $komik->getProperty();
echo "<br>";
echo "Game: " . $game->getProperty();
echo "<br>";
echo "Novel: " . $novel->getProperty();
?>