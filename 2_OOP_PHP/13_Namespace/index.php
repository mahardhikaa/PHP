<?php

require_once 'App/init.php';

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