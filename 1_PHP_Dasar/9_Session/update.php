<?php
require "function.php";

$id = $_GET['id'];
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

if(isset($_POST["submit"])){
    $effect = update_data($_POST);

    if($effect > 0){
        echo "<script>
                alert('Data Berhasil Diupdate');
                location.href='index.php';
            </script>";
    }
    else{
        echo "<script>
                alert('Data gagal diupdate');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <style>
        img {
            height: 50px;
            width: 50px;
        }
    </style>
</head>
<body>
    <h1>Update data</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?= $mahasiswa['id']; ?>" name="id">
        <input type="hidden" name="gambarLama" value="<?= $mahasiswa['Gambar'] ?>">
        <table cellspacing=0 cellpadding=10 border=1>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="Nama" id="nama" value="<?= $mahasiswa['Nama']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="NIM">NIM: </label></td>
                <td><input type="text" name="NIM" id="NIM" value="<?= $mahasiswa['NIM']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="Jurusan">Jurusan: </label></td>
                <td><input type="text" name="Jurusan" id="Jurusan" value="<?= $mahasiswa['Jurusan']; ?>" required></td>
            </tr>
            <tr>
                <td><label for="Gambar">Gambar: </label></td>
                <td>
                    <img src="img/<?= $mahasiswa['Gambar'] ?>">
                    <input type="file" name="Gambar" id="Gambar">
                </td>
            </tr>
            <tr>
                <td colspan=2>
                    <button type="submit" name="submit">Update</button>
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">Back to list page</a></p>
</body>
</html>