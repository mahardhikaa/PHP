<div class="container mt-5">
    <h3>Detail Mahasiswa</h3>
    <div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $data['mahasiswa']['Nama']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $data['mahasiswa']['NIM']; ?></h6>
    <p class="card-text"><?= $data['mahasiswa']['Jurusan']; ?></p>
    <a href="<?= BASEURL; ?>/mahasiswa" class="card-link">Kembali</a>
  </div>
</div>
</div>