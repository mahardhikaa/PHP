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
        button {
            height: 35px;
            margin-top: 25px;
            border: 1px solid rgb(0,0,0);
            padding: 0 15px;
            background-color: rgb(0, 200, 0);
            border-radius: 6px;
        }
        button:hover{
            background-color: rgb(0, 150, 0);
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
        <?php $nomor = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><img src="img/<?= $mhs["Gambar"]?>.png"></td>
            <td><?= $mhs["Nama"] ?></td>
            <td><?= $mhs["NIM"] ?></td>
            <td><?= $mhs["Jurusan"] ?></td>
            <td>
                <a href="update.php?id=<?= $mhs['id'] ?>">edit</a>
                <a href="delete.php?id=<?= $mhs['id'] ?>" onclick=" return confirm('ingin hapus data?');">delete</a>
            </td>
        </tr>
        <?php $nomor++ ?>
        <?php endforeach ?>
    </table>
    <button type="button" onclick="location.href='add.php'">Tambah Data</button>
</body>
</html>