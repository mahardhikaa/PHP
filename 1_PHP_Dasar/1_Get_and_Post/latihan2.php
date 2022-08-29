<!-- Ambil nilai dari data di latihan1.php dengan metode GET -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get Method</title>
    <style>
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <h1>Halo, Testing Get Method</h1>
    <ul>
        <li><img src="<?= $_GET["Gambar"] ?>"></li>
        <li><?= $_GET["nama"] ?></li>
        <li><?= $_GET["NIM"] ?></li>
        <li><?= $_GET["Jurusan"] ?></li>
    </ul>
    <p><a href="latihan1.php">back to list page</a></p>
</body>
</html>