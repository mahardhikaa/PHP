<?php 
session_start();
require '../function.php';

$keyword = $_GET['key'];
$key['search'] = $keyword;

$totalMahasiswa = query("SELECT * FROM mahasiswa
                            WHERE nama LIKE '%$keyword%' OR
                            NIM LIKE '%$keyword%' OR
                            Jurusan LIKE '%$keyword%'");
$dataPerHalaman = 2;
$jumlahData = count($totalMahasiswa);
$jumlahHalaman = ceil($jumlahData/$dataPerHalaman);
$halamanAktif = (isset($_GET["hal"])) ? $_GET['hal'] : 1;

$awalData = ($dataPerHalaman * $halamanAktif) - $dataPerHalaman;
$mahasiswa = search($key, $awalData, $dataPerHalaman);

setcookie('search', $keyword, 0, '/');
?>

<div>  
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
            <th>Aksi</th>
        </tr>
        <?php $nomor = 1; ?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            <td><?= $nomor ?></td>
            <td><img src="img/<?= $mhs['Gambar']?>"></td>
            <td><?= $mhs["Nama"] ?></td>
            <td><?= $mhs["NIM"] ?></td>
            <td><?= $mhs["Jurusan"] ?></td>
            <td>
                <a href="update.php?id=<?= $mhs['id'] ?>" class="update">edit</a>
                <a href="delete.php?id=<?= $mhs['id'] ?>" onclick=" return confirm('ingin hapus data?');"  class="update">delete</a>
            </td>
        </tr>
        <?php $nomor++ ?>
        <?php endforeach ?>
    </table>
</div>