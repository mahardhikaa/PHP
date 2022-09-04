<?php
// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';
require "function.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf(['format' => 'A4']);

$html = '<!DOCTYPE html>
<html>
<head>
    <title>Cetak</title>
    <style>
        img {
            width: 75px;
            height: 75px;
        }

        tr:nth-child(even){
            background-color: #F6F6F6;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
        </tr>';
$i=1;
foreach($mahasiswa as $mhs){
    $html .= '<tr>
                <td>' . $i . '</td>
                <td><img src="img/' . $mhs["Gambar"] . '"></td>
                <td>' . $mhs["Nama"] . '</td>
                <td>' . $mhs["NIM"] . '</td>
                <td>' . $mhs["Jurusan"] . '</td>
            </tr>';
    $i++;
}

$html .= '</table>
</body>
</html>';

// Write some HTML code:
$mpdf->WriteHTML($html);

// Output a PDF file directly to the browser
$mpdf->Output('daftar-mahasiswa.pdf', 'I');

?>