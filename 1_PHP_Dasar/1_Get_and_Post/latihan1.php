<!--
    METODE GET REQUEST
    $_GET -> merupakan variabel get yang diambil dari url
    ? -> sebagai id atau tanda bahwa ada data yang dimasukkan ke web tersebut dan disimpan dalam variabel $_GET
    contoh:
    mahardhikaa.com/index.php?nama=hafizd&nim=185090 -> artinya masukkan nama dengan value hafid dan nim dengan value tersebut ke dalam variabel $_GET
 -->

<?php
    //Membuat data mahasiswa
    $mahasiswa = [
        [
            "nama" => "Hafizd Mahardhika",
            "NIM" => "185090800111010",
            "Jurusan" => "Fisika",
            "Gambar" => "img/gambar1.png"
        ],
        
        [
            "nama" => "Fari's Yukla",
            "NIM" => "185090500111011",
            "Jurusan" => "Statistika",
            "Gambar" => "img/gambar2.png"
        ],

        [
            "nama" => "Daud Manik",
            "NIM" => "185090800111002",
            "Jurusan" => "Instrumentasi",
            "Gambar" => "img/gambar3.png"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Request</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Metode Get Request</h1>

    <!--Membuat data langsung di cetak pada halaman ini -->
    <?php /*
    <?php foreach ($mahasiswa as $mhs): ?>
        <ul>
            <li><img src="<?= $mhs["Gambar"] ?>"></li>
            <li><?= $mhs["nama"] ?></li>
            <li><?= $mhs["NIM"] ?></li>
            <li><?= $mhs["Jurusan"] ?></li>
        </ul>
    <?php endforeach ?> */
    ?>

    <!-- Membuat metode get ditaruh pada link -->
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"] ?>&NIM=<?= $mhs["NIM"] ?>&Jurusan=<?= $mhs["Jurusan"] ?>&Gambar=<?= $mhs["Gambar"] ?>
                "><?= $mhs["nama"] ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>