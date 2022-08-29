<?php
require "function.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP & MySQL</title>
    <style>
        img {
            width: 75px;
            height: 75px;
        }
        table {
            text-align: center;
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
            <th>Aksi</th>
        </tr>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $mhs["id"] ?></td>
            <td><img src="img/<?= $mhs["Gambar"]?>.png"></td>
            <td><?= $mhs["Nama"] ?></td>
            <td><?= $mhs["NIM"] ?></td>
            <td><?= $mhs["Jurusan"] ?></td>
            <td>
                <a href="">edit</a>
                <a href="">delete</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>