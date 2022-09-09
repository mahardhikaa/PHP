<?php

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

?>