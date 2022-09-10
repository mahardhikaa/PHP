<?php

class About {
    public function index($nama="Hafizd", $pekerjaan="IT") {
        echo "Halo, Nama saya adalah $nama dan pekerjaan saya adalah $pekerjaan";
    }

    public function page($nilai1=0, $nilai2=0) {
        echo "Nilai pertama saya adalah $nilai1, dan nilai kedua adalah $nilai2";
    }
}

?>