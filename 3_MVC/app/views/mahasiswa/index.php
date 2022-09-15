<div class="container">
<h3>Daftar Mahasiswa</h3>
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
            <td><a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-decoration-none rounded-pill text-bg-primary">Detail</a></td>
            <?php $i++ ?>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</div>