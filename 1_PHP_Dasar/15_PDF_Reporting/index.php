<?php
//Cek apakah sudah login
session_start();
if(!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

require "function.php";

$totalMahasiswa = query("SELECT * FROM mahasiswa");
$dataPerHalaman = 3;
$jumlahData = count($totalMahasiswa);
$jumlahHalaman = ceil($jumlahData/$dataPerHalaman);
$halamanAktif = (isset($_GET["hal"])) ? $_GET['hal'] : 1;

$awalData = ($dataPerHalaman * $halamanAktif) - $dataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $dataPerHalaman");

if(isset($_POST['clear_search'])){
    setcookie('search', '', time()-3600, '/');
    header('location: index.php');
}

if(isset($_POST["submit_search"])){
    setcookie('search', $_POST['search'], 0, '/');
    header('location: index.php');
}

if(isset($_COOKIE['search'])){
    $keyword = $_COOKIE['search'];
    $totalMahasiswa = query("SELECT * FROM mahasiswa
                            WHERE nama LIKE '%$keyword%' OR
                            NIM LIKE '%$keyword%' OR
                            Jurusan LIKE '%$keyword%'");
    $jumlahData = count($totalMahasiswa);
    $mahasiswa = search($_COOKIE, $awalData, $dataPerHalaman);
    $jumlahHalaman = ceil($jumlahData/$dataPerHalaman);

    $clear = true;
}

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

        #search, #search_clear {
            height: 25px;
            margin-bottom: 30px;
        }

        #logout {
            background-color: rgb(150, 0, 0);
            color: white;
            margin-top: 0;
        }

        #logout:hover {
            background-color: rgb(100, 0, 0);
        }

        a{
            color: blue;
            font-size: 24px;
            margin-right: 12px;
        }
        
        a:visited{
            color: blue;
        }

        .pagination {
            text-decoration: none;
            font-weight: 800;
            display: inline;
            font-size: 24px;
            margin-right: 12px;
        }

        .update {
            margin-right: 0;
        }

        #search_clear {
            display: none;
        }

        @media print {
            button, .formSearch, .aksi {
                display: none;
            }
        }

        #print {
            margin: 0;
            background-color: rgb(0,0,170);
            color: white;
        }
        
        #print:hover {
            background-color: rgb(0,0, 100);
        }
    </style>
    <script src="js/jQuery.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <button type="submit" onclick="location.href='logout.php'" id="logout">LOGOUT</button>
    <button type="submit" onclick="window.open('print.php', '_blank')" id="print" target="_blank">Cetak</button>

    <form action="" method="post" class="formSearch">
        <?php if(isset($clear)) : ?>
            <input type="text" value="<?= $_COOKIE['search'] ?>" name="search" size="50" autocomplete="off">
        <?php else : ?>
            <input type="text" placeholder="masukkan kata kunci.." name="search" size="50" autocomplete="off" id="keyword">
        <?php endif ?>
        <button type="submit" name="submit_search" id="search">Cari</button>
        <button type="submit" name="clear_search" id="search_clear">X</button>
    </form>

<div id="container">
    <?php if($halamanAktif>1) : ?>
        <a href="?hal=<?= $halamanAktif-1 ?>">&lt;</a>
    <?php endif ?>

    <?php for($i=1; $i<=$jumlahHalaman; $i++) : ?>
        <?php if($i==$halamanAktif) : ?>
            <p class="pagination"><?= $i ?></p>
        <?php else : ?>
            <?php if($i==1) : ?>
                <a href="index.php"><?= $i ?></a>
            <?php else : ?>
                <a href="?hal=<?= $i; ?>"><?= $i ?></a>
            <?php endif ?>
        <?php endif ?>
    <?php endfor ?>

    <?php if($halamanAktif<$jumlahHalaman) : ?>
        <a href="?hal=<?= $halamanAktif+1 ?>">&gt;</a>
    <?php endif ?>

    <table border=1 cellspacing=0 cellpadding=10>
        <tr>
            <th>No.</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th class="aksi">Aksi</th>
        </tr>
        <?php $nomor = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><img src="img/<?= $mhs['Gambar']?>"></td>
            <td><?= $mhs["Nama"] ?></td>
            <td><?= $mhs["NIM"] ?></td>
            <td><?= $mhs["Jurusan"] ?></td>
            <td class="aksi">
                <a href="update.php?id=<?= $mhs['id'] ?>" class="update">edit</a>
                <a href="delete.php?id=<?= $mhs['id'] ?>" onclick=" return confirm('ingin hapus data?');"  class="update">delete</a>
            </td>
        </tr>
        <?php $nomor++ ?>
        <?php endforeach ?>
    </table>
</div>
    <button type="button" onclick="location.href='add.php'">Tambah Data</button>
</body>
</html>