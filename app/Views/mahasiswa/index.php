<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<!-- BANNER TANPA TEKS -->
<div class="banner-wrapper">
  <img src="<?= base_url('images/imphen.jpg') ?>" alt="Banner" class="banner-image">
</div>

<!-- KONTEN DASHBOARD -->
<div class="container mt-4">
  <div class="row text-center mb-4">
    <div class="col-md-4">
      <div class="small-box bg-danger">
        <div class="inner"><h3><?= $laki ?></h3><p>Laki-laki</p></div>
        <div class="icon"><i class="fas fa-male"></i></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="small-box bg-success">
        <div class="inner"><h3><?= $jumlah ?></h3><p>Jumlah Mahasiswa</p></div>
        <div class="icon"><i class="fas fa-users"></i></div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="small-box bg-primary">
        <div class="inner"><h3><?= $perempuan ?></h3><p>Perempuan</p></div>
        <div class="icon"><i class="fas fa-female"></i></div>
      </div>
    </div>
  </div>

  <a href="/mahasiswa/create" class="btn btn-success mb-3"><i class="fas fa-plus"></i> Tambah Mahasiswa</a>

  <table class="table table-bordered table-striped">
    <thead class="thead-dark">
      <tr>
        <th>Nama</th><th>NIM</th><th>Jurusan</th><th>Jenis Kelamin</th><th>Alamat</th><th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $m): ?>
      <tr>
        <td><?= esc($m['nama']) ?></td>
        <td><?= esc($m['nim']) ?></td>
        <td><?= esc($m['jurusan']) ?></td>
        <td><?= esc($m['jenis_kelamin']) ?></td>
        <td><?= esc($m['alamat']) ?></td>
        <td>
          <a href="/mahasiswa/edit/<?= $m['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
          <a href="/mahasiswa/delete/<?= $m['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin?')"><i class="fas fa-trash"></i></a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>
