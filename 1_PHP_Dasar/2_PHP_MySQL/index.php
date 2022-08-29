<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
var_dump($conn);
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
        <tr>
            <td>1</td>
            <td><img src="img/gambar1.png"></td>
            <td>Hafizd Mahardhika</td>
            <td>185090800111010</td>
            <td>Fisika</td>
            <td>
                <a href="">edit</a>
                <a href="">delete</a>
            </td>
        </tr>
    </table>
</body>
</html>