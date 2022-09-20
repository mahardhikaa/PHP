<div class="container">

<?php Flasher::flash() ?>

<button type="button" class="btn btn-primary mt-3 tambahData" data-bs-toggle="modal" data-bs-target="#tambahData">Tambah data Mahasiswa</button>
<h3 class="mt-3">Daftar Mahasiswa</h3>
<table class="table table-success table-striped">
    <thead>
        <th>
            <td>Nama</td>
            <td>NIM</td>
            <td>Jurusan</td>
            <td>Aksi</td>
        </th>
    </thead>
    <tbody>
    <?php $i=1 ?>
    <?php foreach($data['mahasiswa'] as $mhs) : ?>
        <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $mhs['Nama']?></td>
            <td><?= $mhs['NIM']?></td>
            <td><?= $mhs['Jurusan']?></td>
            <td><a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-decoration-none rounded-pill text-bg-primary">Detail</a>
                <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="badge text-decoration-none rounded-pill text-bg-success ubahData" data-bs-toggle="modal" data-bs-target="#tambahData">Ubah</a>
                <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class="badge text-decoration-none rounded-pill text-bg-danger" onclick="return confirm('hapus data?')">Hapus</a></td>
            <?php $i++ ?>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
        <div class="modal-body">
          <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="Nama" name="Nama">
          </div>
          <div class="mb-3">
            <label for="NIM" class="form-label">NIM</label>
            <input type="number" class="form-control" id="NIM" name="NIM">
          </div>
          <div class="mb-3">
            <label for="Jurusan" class="form-label">Jurusan</label>
            <input type="text" class="form-control" id="Jurusan" name="Jurusan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>