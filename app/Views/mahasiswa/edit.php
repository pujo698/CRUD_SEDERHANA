<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<h3>Edit Mahasiswa</h3>
<form action="/mahasiswa/update/<?= $mhs['id'] ?>" method="post">
  <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" value="<?= $mhs['nama'] ?>" required>
  </div>
  <div class="form-group">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" value="<?= $mhs['nim'] ?>" required>
  </div>
  <div class="form-group">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="<?= $mhs['jurusan'] ?>" required>
  </div>
  <div class="form-group">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" required>
      <option <?= $mhs['jenis_kelamin'] === 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
      <option <?= $mhs['jenis_kelamin'] === 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" value="<?= $mhs['alamat'] ?>" required>
  </div>
  <button type="submit" class="btn btn-success">Update</button>
</form>

<?= $this->endSection() ?>
