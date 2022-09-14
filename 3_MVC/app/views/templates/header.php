<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $data['judul']?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">Home</a>
        <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Mahasiswa</a>
        <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
      </div>
    </div>
  </div>
</nav>
    