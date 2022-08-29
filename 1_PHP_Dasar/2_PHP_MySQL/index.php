<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

$db = mysqli_query($conn, "SELECT * FROM mahasiswa");

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
        <?php while($result = mysqli_fetch_assoc($db)) : ?>
        <tr>
            <td><?= $result["id"] ?></td>
            <td><img src="img/<?= $result["Gambar"]?>.png"></td>
            <td><?= $result["Nama"] ?></td>
            <td><?= $result["NIM"] ?></td>
            <td><?= $result["Jurusan"] ?></td>
            <td>
                <a href="">edit</a>
                <a href="">delete</a>
            </td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>