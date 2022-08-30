<?php
require "function.php";

if(isset($_POST["submit"])){
    $effect = add_data($_POST);

    if($effect > 0){
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                location.href='index.php';
            </script>";
    }
    else{
        echo "<script>
                alert('Data gagal ditambahkan');
            </script>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data</h1>
    <form action="" method="post">
        <table cellspacing=0 cellpadding=10 border=1>
            <tr>
                <td><label for="nama">Nama: </label></td>
                <td><input type="text" name="Nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="NIM">NIM: </label></td>
                <td><input type="text" name="NIM" id="NIM" required></td>
            </tr>
            <tr>
                <td><label for="Jurusan">Jurusan: </label></td>
                <td><input type="text" name="Jurusan" id="Jurusan" required></td>
            </tr>
            <tr>
                <td><label for="Gambar">Gambar: </label></td>
                <td><input type="text" name="Gambar" id="Gambar"></td>
            </tr>
            <tr>
                <td colspan=2>
                    <button type="submit" name="submit">Tambah</button>
                </td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">Back to list page</a></p>
</body>
</html>