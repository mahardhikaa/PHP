<?php
define('NAMA', 'HAFIZD MAHARDHIKA'); //tidak bisa diubah dan ditaruh dalam kelas

class Constanta {
    const index = 10; //Bisa digunakan di dalam kelas atau di luar
}

class Coba {
    const kelas = __CLASS__; //Ambil kelas apa
}

function Test() {
    return __FUNCTION__;
}

echo "define: " . NAMA;
echo "<br>";
echo "const: " . Constanta::index;
echo "<hr>";

echo "ada di kelas: " . Coba::kelas;
echo "<br>";
echo "ada di fungsi: " . Test();
echo "<hr>";

echo "Kode di baris: " . __LINE__;
echo "<br>";
echo "File ada di: " . __FILE__;
?>