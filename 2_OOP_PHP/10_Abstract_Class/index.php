<?php

//class
class Produk {
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
    public function getProperty() {
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

    public function getInfoKomik() {
        $str = "Komik: {$this->getProperty()} ({$this->pembaca} Orang)";
        return $str;
    }
}

class Game extends Produk {
    public $pemain;

    public function __construct($judul="Tidak ada", $penulis="Tidak ada", $tahun=0, $pemain=0, $harga=0) {
        $this->pemain = $pemain;
        parent::__construct($judul, $penulis, $tahun, $harga); //Overriding
    }

    public function getInfoGame() {
        $str = "Game: {$this->getProperty()} ({$this->pemain} / Jam)";
        return $str;
    }
}

//Object
$komik = new Komik("One Piece", "Oda Sensei", 1999, 200000, 55000);
$game = new Game("Auto Chess", "Super Cell", 2014, 50, 100000);
$novel = new Produk("Bumi", "Tere Liye");
$buku = new Produk();

echo "Komik: ". $komik->getProperty();
echo "<br>";
echo "Game: " . $game->getProperty();
echo "<br>";
echo "Novel: " . $novel->getProperty();
echo "<br>";
echo "Buku: " . $buku->getProperty();

echo "<hr>";

echo $komik->getInfoKomik();
echo "<br>";
echo $game->getInfoGame();

echo "<hr>";

//Sebelum diubah
echo "<b style='color: blue'>Sebelum diubah</b><br>";
echo "<b>Komik</b><br>";
echo "Judul: " . $komik->getJudul() . "<br>";
echo "penulis: " . $komik->getPenulis() . "<br>";
echo "Harga: " . $komik->getHarga() . "<br>";
echo "Diskon: " . $komik->getDiskon() . "<br>";
echo "Harga Diskon: " . $komik->getHargaDiskon() . "<br><br>";

echo "<b>Game</b><br>";
echo "Judul: " . $game->getJudul() . "<br>";
echo "penulis: " . $game->getPenulis() . "<br>";
echo "Harga: " . $game->getHarga() . "<br>";
echo "Diskon: " . $game->getDiskon() . "<br>";
echo "Harga Diskon: " . $game->getHargaDiskon() . "<br><br>";

echo "<b style='color: blue'>Setelah diubah</b><br>";
$komik->setJudul("Naruto");
$komik->setPenulis("Masashi Kisimoto");
$komik->setDiskon(30);
echo "<b>Komik</b><br>";
echo "Judul: " . $komik->getJudul() . "<br>";
echo "penulis: " . $komik->getPenulis() . "<br>";
echo "Harga: " . $komik->getHarga() . "<br>";
echo "Diskon: " . $komik->getDiskon() . "<br>";
echo "Harga Diskon: " . $komik->getHargaDiskon() . "<br><br>";

$game->setJudul("Mobile Legend");
$game->setPenulis("Moonton");
$game->setDiskon(100);
echo "<b>Game</b><br>";
echo "Judul: " . $game->getJudul() . "<br>";
echo "penulis: " . $game->getPenulis() . "<br>";
echo "Harga: " . $game->getHarga() . "<br>";
echo "Diskon: " . $game->getDiskon() . "<br>";
echo "Harga Diskon: " . $game->getHargaDiskon() . "<br><br>";

?>